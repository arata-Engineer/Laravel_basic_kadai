<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // バリデーションする
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        // 新規ポストを作成しデータベースに保存
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
    
        // 投稿一覧ページにリダイレクト
        return redirect('/posts');
    }
    

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

}

