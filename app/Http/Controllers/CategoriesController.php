<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Link;


class CategoriesController extends Controller
{
    //
    public function show(Category $category, Request $request, Topic $topic, Link $link){
        // 读取分类 ID 关联的话题，并按每 20 条分页
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $topics = $topic->withOrder($request->order)
            ->where('category_id', $category->id)
            ->paginate(20);

        $links = $link->getAllCached();
        //传递参数的值到 模板中去
        return view('topics.index',compact('topics','category','links'));
    }
}
