<?php

namespace App\Http\Controllers;

use App\Category;
use App\Likepost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $post=Post::all();
        $slider=Post::where('position','2')->latest()->limit(4)->get();
        $trending=Post::where('position','3')->latest()->get();
        $popular=Post::where('position', '=', '1')->where('status','=','1')->latest()->get();
        $blog=Post::where('position', '=', '4')->where('status','=','1')->where('is_approved','=','1')->latest()->limit(6)->get();
        return view('welcome',compact('blog','slider'));
    }
    public function blog(){
        $post=Post::all();
        return view('blog',compact('post'));
    }
    public function singleview($slug){

        $post=Post::where('slug',$slug)->first();
        if ($post!=null){
            return view('single',compact('post'));
        }else{
            return view('404');
        }

    }
    public function cateview($id){
      $cateBlog=Category::find($id);
        if ($cateBlog!=null){
            return view('category',compact('cateBlog'));
        }else{
            return view('404');
        }

    }
    public function likePost(Request $request){
        if (Auth::check()){
            $find=Likepost::where('user_id',Auth::user()->id)->where('post_id',$request->postId)->first();
            if ($find==''){
                $post=new Likepost();
                $post->post_id=$request->postId;
                $post->user_id=Auth::user()->id;
                $post->save();
                return response()->json(['Success'=>'you like it']);
            }else{
                $delete=Likepost::where('user_id',Auth::user()->id)->where('post_id',$request->postId)->delete();
                return response()->json(['dataDelete'=>'delete data']);
            }

        }else{
            return response()->json(['error'=>'Please Register for Like this post']);
        }

    }
    public function getlike(){
        $getdata=Likepost::where('user_id',Auth::user()->id)->get();
        return response()->json(['GetLikeData'=>$getdata]);
    }

}
