<?php
namespace App\Handlers;

use App\Models\Tags;

class AddTagsHandler
{
    public function save($article, $tags)
    {
        // input tags
        $collection = explode(',', strtolower($tags));

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
    }
}