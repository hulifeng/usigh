<?php

namespace App\Http\Controllers\Admin;

use App\Handlers\ImageUploaderHandler;
use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CarouselController extends Controller
{
    // 轮播列表
    public function index(Request $request)
    {
        $carousel = Carousel::all();

        return view('admins.carousel.index', compact('carousel'));
    }

    // 添加轮播
    public function create()
    {
        return view('admins.carousel.create_and_edit', ['carousel' =>  new Carousel()]);
    }

    // 提交
    public function store(Request $request, ImageUploaderHandler $uploader)
    {
        // 管理员 ID
        $admin = Auth::guard('admin')->user()->id;

        // 初始化路径
        $path = [];

        // 上传图片
        if ($request->uploads) {
            foreach ($request->uploads as $upload) {
                $path[] = $uploader->save($upload, 'carousel', $admin, 'carousel')['path'];
            }
        }

        // 保存数据
        $meta = $request->except(['uploads', '_token', '_method']);
        $meta['uploads'] = $path;
        $meta['carousel_shows'] = $request->hi_carousel_shows;
        $meta_json['carousel_meta'] = json_encode([$meta]);
        Carousel::create($meta_json);

        return redirect()->route('admins.carousel.index');
    }

    // 编辑轮播
    public function edit(Carousel $carousel)
    {
        return view('admins.carousel.create_and_edit', compact('carousel', 'carousel_meta'));
    }

    // 修改轮播
    public function update(Request $request, Carousel $carousel, ImageUploaderHandler $uploader)
    {
        // 管理员 ID
        $admin = Auth::guard('admin')->user()->id;

        // 初始化路径
        $path = [];

        // 上传图片
        if ($request->uploads) {
            foreach ($request->uploads as $upload) {
                $path[] = $uploader->save($upload, 'carousel', $admin, 'carousel')['path'];
            }
        }

        // 更改老的 uploads 数据
        if ($oldUploads = $request->old_uploads) {
            foreach ($oldUploads as $oldUpload) {
                array_push($path, $oldUpload);
            }
        }

        // 保存数据
        $meta = $request->except(['uploads', '_token', 'old_uploads', '_method', 'old_carousel_shows', 'carousel_shows']);
        $meta['uploads'] = $path;
        $meta['carousel_shows'] = $request->hi_carousel_shows;
        $meta_json['carousel_meta'] = json_encode([$meta]);

        $carousel->update($meta_json);

        return redirect()->route('admins.carousel.index');
    }
}
