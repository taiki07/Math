<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Mathuser;
use App\Models\Category;
use App\Models\School;
use App\Models\Test;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class MathpostController extends Controller
{
    public function home(Post $post)
    {
        return view('main.home')->with(['posts' => $post->getPaginateByLimit(2)]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function detail(Post $post)
    {
        return view('main.detail')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function create()
    {
        return view('main.create');
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('main.edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
