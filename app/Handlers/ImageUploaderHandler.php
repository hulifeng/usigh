<?php
namespace App\Handlers;

class ImageUploaderHandler
{
    // 只允许以下后缀上传
    protected $allowExt = ["jpg", "jpeg", "gif", "png", "bmp", "webp"];

    public function save($file, $folder, $filePrefix, $type = null)
    {
        // 获取文件的后缀名，因图片从剪贴板里黏贴时后缀名为空，所以此处确保后缀一直存在
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'png';

        // 如果上传的不是规定类型的后缀，终止操作
        if (!in_array($extension, $this->allowExt)) {
            return false;
        }

        // 文件路径规则 uploads/images/avatars/201810/12/
        $folderName = "uploads/images/$folder/" . date("Ym/d", time());

        // 文件具体存储的物理路径，`public_path()` 获取的是 `public` 文件夹的物理路径。
        $uploadPath = public_path() . '/' . $folderName;

        // 拼接文件名，增加前缀，增强辨析度
        // 值如：1_1493521050_7BVc9v9ujP.png
        $filename = $filePrefix . '_' . time() . '_' . str_random(10) . '.' . $extension;

        // 将图片移动到我们的目标路径中
        $file->move($uploadPath, $filename);

        if ($type) {
            return [
                'path' => config('app.url'). "/$folderName/$filename"
            ];
        } else {
            return response()->json([
                'message' => '上传成功',
                'success' => 1,
                'url'     => config('app.url') . "/$folder/$filename"
            ]);
        }
    }

    public function upload($file, $adminId)
    {
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $file, $result)) {
            $type = $result[2];
            // 文件路径规则 uploads/images/avatars/201810/12/
            $filePath = "uploads/images/cover/" . date("Ym/d", time());
            if (!file_exists($filePath)) {
                $this->mkdir_rewrite($filePath, 0777);
            }
            $newFile = $filePath . '/' .$adminId . '_' . time() . '_' . str_random(10) . '.' . $type;
            if (file_put_contents($newFile, base64_decode(str_replace($result[1], '', $file)))) {
                return [
                    'path' => config('app.url'). "/$newFile"
                ];
            } else {
                return false;
            }
        }
    }

    public function mkdir_rewrite($path)
    {
        if (!is_dir($path)) {
            $this->mkdir_rewrite(dirname($path));
            if (!mkdir($path, 0777)) {
                return false;
            }
        }
        return true;
    }
}