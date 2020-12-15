<?php

namespace App\Http\Controllers;

use JD\Cloudder\Facades\Cloudder;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){
        $items = Post::all();
        return view('post.index',['items' => $items]);
    }

    public function add(Request $request){
        return view('post/add');
    }

    public function create(Request $request){
        //バリテーション
        $request -> validate([
            'product_name' => 'required',
            'price' => 'required',
            'store' =>'required',
            'text' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10240',
        ],
        [
            'product_name.required' => '商品名を入力してください',
            'price.required' => '価格を入力してください',
            'store.required' => '店名を入力してください',
            'text.required' => '感想を入力してください',
            'image.required' => '商品の画像を記載してください',
        ]);

        //投稿のインスタンス
        $post = new Post;
        $post->product_name = $request->product_name;
        $post->price = $request->price;
        $post->store = $request->store;
        $post->text = $request->text;
        $post->user_id = auth()->user()->id;//ログインユーザーと投稿の紐付け

        if ($image = $request->file('image')) {
            $image_path = $image->getRealPath();
            Cloudder::upload($image_path, null);
            //直前にアップロードされた画像のpublicIdを取得する
            $publicId = Cloudder::getPublicId();
            $logoUrl = Cloudder::secureShow($publicId, [
                'width'     => 250,
                'height'    => 200
            ]);
            $post->image_path = $logoUrl;
            $post->public_id  = $publicId;
        }

        $post->save();

        return redirect('/post');
    }

    public function edit(Request $request){
        $post = Post::find($request->id);
        return view('post.edit',['form' => $post]);
    }

    public function update(Request $request){
        $post = Post::find($request->id);
        $post->product_name = $request->product_name;
        $post->price = $request->price;
        $post->store = $request->store;
        $post->text = $request->text;

        if ($image = $request->file('image')) {
            $image_path = $image->getRealPath();
            Cloudder::upload($image_path, null);
            //直前にアップロードされた画像のpublicIdを取得する
            $publicId = Cloudder::getPublicId();
            $logoUrl = Cloudder::secureShow($publicId, [
                'width'     => 250,
                'height'    => 200
            ]);
            $post->image_path = $logoUrl;
            $post->public_id  = $publicId;
        }

        $post->save();

        return redirect('/post');
    }

    public function delete(Request $request){
        Post::find($request->id)->delete();
        return redirect('/post');
    }

    //ログアウト
    public function logout(){
        auth()->logout();
        return redirect('/hello');
    }
}
