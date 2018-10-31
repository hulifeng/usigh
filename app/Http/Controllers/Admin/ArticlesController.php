<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\AddTagsHandler;
use App\Handlers\ImageUploaderHandler;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tags;
use Faker\Provider\Image;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tag;

class ArticlesController extends Controller
{
    // 文章列表
    public function index()
    {
        $articles = Article::where('is_del', 0)->paginate();

        return view('admins.articles.index', compact('articles'));
    }

    // 创建文章
    public function create()
    {
        $article = new Article();
        $category = Category::all();
        $adminId = Auth::guard('admin')->user()->id;
        $tag_name = '';
        return view('admins.articles.create', compact('article', 'category', 'adminId', 'tag_name'));
    }

    // 文章回收站
    public function recycle()
    {
        $articles = Article::where("is_del", "1")->paginate();
        return view('admins.articles.recycle', compact('articles'));
    }

    // 发布文章
    public function store(Request $request, ImageUploaderHandler $uploader, AddTagsHandler $tagsHandler)
    {
        // 验证
        $this->validate($request, [
            'title' => 'required|min:6|max:20',
            'test-editormd-markdown-doc' => 'required',
        ]);

        // 逻辑
        $input = $request->only(['title', 'category_id', 'is_original', 'user_id']);

        $input['content'] = htmlspecialchars($request->input('test-editormd-markdown-doc'));

        $input['html'] = htmlspecialchars($request->input('test-editormd-html-code'));

        // 如果有图片上传
        if ($request->input('finalImg')) {
            $result = $uploader->upload($request->input('finalImg'), $request->input('user_id'));
            $input['cover'] = $result['path'];
        }

        $article = Article::create($input);

        $tagsHandler->save($article, $request->input('tags'));

        return redirect()->route('admins.articles.index');
    }

    // 编辑文章
    public function edit(Article $article)
    {
        $tag_name = '';
        foreach ($article->tags as $k => $v) {
            if ($k + 1 == count($article->tags)) {
                $tag_name .= Tags::find($v->pivot->tags_id)->name;
            } else {
                $tag_name .= Tags::find($v->pivot->tags_id)->name . ',';
            }
        }

        $category = Category::all();

        $adminId = Auth::guard('admin')->user()->id;

        return view('admins.articles.create', compact('article', 'category', 'adminId', 'tag_name'));
    }

    // 修改文章
    public function update(Article $article, Request $request, ImageUploaderHandler $uploader)
    {
        // 验证
//        $this->validate($request, [
//            'title' => 'required|min:6',
//            'test-editormd-markdown-doc' => 'required',
//        ]);

        // 逻辑
        $input = $request->only(['title', 'category_id', 'is_original', 'user_id']);

        $input['content'] = htmlspecialchars($request->input('test-editormd-markdown-doc'));

        $input['html'] = htmlspecialchars($request->input('test-editormd-html-code'));

        // 如果有图片上传
        if ($request->input('finalImg')) {
            $result = $uploader->upload($request->input('finalImg'), $request->input('user_id'));
            $input['cover'] = $result['path'];
        }

//        dd($input);

        Article::where(['id' => $article->id] )->update($input);

        // input tags
        $collection = explode(',', strtolower($request->input('tags')));

        $allTags = [];

        // 转化成小写
        foreach (Tags::pluck('name')->all() as $val) {
            $allTags[] = strtolower($val);
        }

        if (sizeof($allTags)) {
            // 与传递过来的值做差集
            $diff = collect($collection)->diff($allTags);
            if (sizeof($diff)) {
                // 生成需要的数据
                foreach ($diff as $v) {
                    $tags[] = ['name' => $v];
                }
                if (sizeof($tags)) {
                    foreach ($tags as $val) {
                        $result = Tags::create($val);
                        $article->tags()->attach($result->id);
                    }
                }
            } else {
                // 说明全是重复的值
                foreach ($collection as $v) {
                    $repeatTags[] = ['name' => $v];
                }
                if (sizeof($repeatTags)) {
                    foreach ($repeatTags as $val) {
                        $result = Tags::firstOrCreate($val);
                        if (!$result->wasRecentlyCreated) {
                            $article->tags()->attach($result->toArray()['id']);
                        }
                    }
                }
            }
        } else {
            // 说明之前没有标签第一次创建
            foreach ($collection as $v) {
                $newTags[] = ['name' => $v];
            }
            if (sizeof($newTags)) {
                foreach ($newTags as $val) {
                    $result = Tags::create($val);
                    $article->tags()->attach($result->id);
                }
            }
        }

        return redirect()->route('admins.articles.index');
    }

    // 删除文章
    public function delete(Article $article)
    {
        $article->where(['id' => $article->id])->update(['is_del' => 1]);

        return redirect()->back();
    }
}
