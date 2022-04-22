<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }

    public function search(){
        $list = \DB::table('users')->get();//usersテーブルから持ってくる
        return view('users.search',['list' => $list]);
        //'users.search':'usersフォルダ.blade'　['list' => $list]:'blade内の変数'=>$変数
        $keyword = $request->input('keyword');
    }

    public function result(Request $request){
        $keyword = $request->input('keyword');//inputメソッドでkeywordをリクエスト
        $list = \DB::table('users')
              ->where('username','LIKE',"%{$keyword}%")->get();

            return view('users.search',['list'=> $list]);
    }
}
