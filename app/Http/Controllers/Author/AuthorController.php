<?php

namespace App\Http\Controllers\Author;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use File;
Use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function index()
    {
        return view('author.dashboard');
    }
    public function post(){
        $category=Category::all();
        $tag=Tag::all();
        return view('author.post',compact('category','tag'));
    }
    public function store(Request $request){
        $image = $request->file('file');
        $user =User::find(Auth::user()->id);
        if (isset($image))
        {
            $imagename = 'storage/post/'.uniqid().Auth::user()->id.'.'.$image->getClientOriginalExtension();
            //  check category dir is exists
            if (!File::exists("storage/post")) {
                File::makeDirectory("storage/post",0777,true);
            }
            $destinationPath = 'storage/post';
            $image->move($destinationPath, $imagename);
            function make_slug($string) {
                return preg_replace('/\s+/u', '-', trim($string));
            }

            $slug = uniqid().make_slug($request->title);
            $post=new Post();
            $post->title=$request->title;
            $post->content=$request->description;
            $post->position=$request->position;
            $post->image=$imagename;
            $post->slug=$slug;
            $post->user_id=Auth::user()->id;
            $post->save();
            $post->categories()->attach($request->category);
            $post->tags()->attach($request->tag);
            toast('You Successfully Add','success');
            return redirect()->back();
        }
    }
    public function edit($id){
        $post=Post::find($id);
        $category=Category::all();
        $tag=Tag::all();
        return view('author.edit',compact('post','category','tag'));
    }
    public function all(){
        return view('author.allpost');
    }
    public function update(Request $request,$id){
        $image = $request->file('file');
        $post=Post::find($id);
        if (isset($image))
        {
            $imagename = 'storage/post/'.uniqid().Auth::user()->id.'.'.$image->getClientOriginalExtension();
            //  check category dir is exists
            if (!File::exists("storage/post")) {
                File::makeDirectory("storage/post",0777,true);
            }
            // delete old image
            if (File::exists($post->image))
            {
                File::delete($post->image);
            }
            $destinationPath = 'storage/post';
            $image->move($destinationPath, $imagename);
        }else {
            $imagename = $post->image;
        }
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }

        $slug = uniqid().make_slug($request->title);
        $post=Post::find($id);
        $post->title=$request->title;
        $post->slug=$slug;
        $post->position=$request->position;
        $post->content=$request->description;
        $post->image=$imagename;
        if (isset($request->status)){
            $post->status=true;
        }else{
            $post->status=false;
        }
        $post->save();
        $post->categories()->sync($request->category);
        $post->tags()->sync($request->tag);
        toast('You Successfully Edit','success');
        return redirect()->back();
    }
    public function PostDelete($id){
        $delete=Post::where("id",$id)->delete();
        return redirect()->back();
    }


}
