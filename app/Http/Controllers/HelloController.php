<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
    //ログインページ
    public function top(Request $request){
        // $user = Auth::user();
        return view('hello.top');
    }

    public function getAuth(Request $request){
        return view('hello.auth');
    }

    //ログインページに遷移した時の処理
    public function postAuth(Request $request){
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email,'password' => $password])){
            $items = Post::all();
            return view('post.index',['items'=>$items]);
        }else{
            return view('hello.auth');
        }
    }
}
