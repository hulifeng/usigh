<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    // 栏目
    public function index()
    {
        // 查询被软删除的记录
        // $categories = Category::onlyTrashed()->paginate(5);

        // 默认查询，没有被删除的记录
        $categories = Category::paginate(5);

        return view('admins.category.index', compact('categories'));
    }

    // 添加栏目
    public function create()
    {
        return view('admins.category.create_and_edit', ['category' => new Category()]);
    }

    public function store(Request $request)
    {
        // 验证
        $this->validate($request, [
            'name' => 'required|max:4|unique:categories,name',
            'description' => 'required|min:4|max:12'
        ]);

        //逻辑
        Category::firstOrCreate($request->only(['name', 'description']));

        return redirect()->route('admins.category.index');
    }

    // 编辑栏目
    public function edit(Category $category)
    {
        return view('admins.category.create_and_edit', ['category' => $category]);
    }

    // 修改栏目
    public function update(Category $category, Request $request)
    {
        // 验证
        $this->validate($request, [
            'name' => 'required|max:4',
            'description' => 'required|min:4|max:12'
        ]);

        $category->updateOrCreate([
            'id' => $category->id
        ],
        [
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('admins.category.index');
    }

    // 删除栏目
    public function destory(Request $request)
    {
       $id = $request->id;
       Category::where('id', $id)->delete();

       return redirect()->back();
    }
}
