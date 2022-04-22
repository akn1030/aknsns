<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //
    public function index(){
      $posts = Post::get();//postテーブルから情報を持ってくる
        return view('posts.index',['posts' => $posts]);
    }

    public function create(Request $request){
      $data = $request->input();
       Post::create([
          'user_id' => Auth::id(),
          'post' => $data['post'],
      ]);
      return redirect('/top');
    }

    public function delete($data)
    {
      \DB::table('posts')
          ->where('id',$data)
          ->delete();

      return redirect('/top');
    }

    public function update(Request $request)
    {
      $id = $request->input('id');
      $up_post = $request->input('post');
        \DB::table('posts')
            ->where('id', $id)
            ->update(['post' => $up_post]);

        return redirect('/top');
    }

}
