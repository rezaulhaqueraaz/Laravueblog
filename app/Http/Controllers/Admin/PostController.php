<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
  public function index(){
      $category=Category::all();
      $tag=Tag::all();
      return view('admin.post.post',compact('category','tag'));
  }
  public function store(Request $request){
      $image = $request->file('file');
      $user =User::find(Auth::user()->id);
      if (isset($image))
      {
          $imagename = Auth::user()->name.'_'.uniqid().Auth::user()->id.'.'.$image->getClientOriginalExtension();
          $smallImage= 'imageGallery/img500/'.$imagename;
          $thumbnail= 'imageGallery/thumbnail/'.$imagename;
          //  check category dir is exists
          if (!File::exists("imageGallery/post")) {
              File::makeDirectory("imageGallery/post",0777,true);
          }
          if (!File::exists("imageGallery/img500")) {
              File::makeDirectory("imageGallery/img500",0777,true);
          }
          $destinationPath = 'imageGallery/post/';
          $image->move($destinationPath, $imagename);

          //width 500/ small size area
          $img = Image::make($destinationPath.$imagename);
          $img->resize(400, null, function ($constraint) {
              $constraint->aspectRatio();
          });
          $img->save($smallImage,90);

          //thumbnail size area
          $img = Image::make($destinationPath.$imagename);
          $img->resize(100, null, function ($constraint) {
              $constraint->aspectRatio();
          });
          $img->save($thumbnail,60);


          $slug = make_slug($request->title);
          $findSlug=Post::where('slug',$slug)->first();
          if ($findSlug=null){
              $newSlug= $slug;
          }else{
              $newSlug='new_'.$slug;
          }
          $post=new Post();
          $post->title=$request->title;
          $post->slug=$newSlug;
          $post->content=$request->description;
          $post->content_excerpt=$request->excerpt;
          $post->position=$request->position;
          $post->image=$imagename;
          if (isset($request->status)){
              $post->status=true;
          }else{
              $post->status=false;
          }
          $post->is_approved=true;
          $post->user_id=Auth::user()->id;
          $post->save();
          $post->categories()->attach($request->category);
          $post->tags()->attach($request->tag);
          return redirect()->back();
      }

  }

  public function table(){
      $postall=Post::orderBy('id', 'desc')->get();
      return view('admin.post.table',compact('postall'));
  }

  public function edit($id){
      $tag=Tag::all();
      $post=Post::find($id);
      $category=Category::all();
      return view('admin.post.edit',compact('category','post','tag'));
  }

  public function view($id){
      $post=Post::find($id);
      return view('admin.post.view',compact('post'));
  }

  public function update(Request $request,$id){
      $image = $request->file('file');
      $post=Post::find($id);
      if (isset($image))
      {
          $imagename = Auth::user()->name.'_'.uniqid().Auth::user()->id.'.'.$image->getClientOriginalExtension();
          $smallImage= 'imageGallery/img500/'.$imagename;
          $thumbnail= 'imageGallery/thumbnail/'.$imagename;
          //  check category dir is exists
          if (!File::exists("imageGallery/post")) {
              File::makeDirectory("imageGallery/post",0777,true);
          }
          if (!File::exists("imageGallery/img500")) {
              File::makeDirectory("imageGallery/img500",0777,true);
          }
          if (!File::exists("imageGallery/thumbnail")) {
              File::makeDirectory("imageGallery/thumbnail",0777,true);
          }
          // delete old image
          if (File::exists('imageGallery/post/'.$post->image))
          {
              File::delete('imageGallery/post/'.$post->image);
              File::delete('imageGallery/img500/'.$post->image);
          }

          $destinationPath = 'imageGallery/post/';
          $image->move($destinationPath, $imagename);

         //width 500/ small size area
          $img = Image::make($destinationPath.$imagename);
          $img->resize(400, null, function ($constraint) {
              $constraint->aspectRatio();
          });
          $img->save($smallImage,90);

          //thumbnail size area
          $img = Image::make($destinationPath.$imagename);
          $img->resize(100, null, function ($constraint) {
              $constraint->aspectRatio();
          });
          $img->save($thumbnail,60);

      }else {
          $imagename = $post->image;
      }
      function make_slug($string) {
          return preg_replace('/\s+/u', '-', trim($string));
      }

      $slug = make_slug($request->title);
      $findSlug=Post::where('slug',$slug)->first();
      if ($findSlug=null){
          $newSlug= $slug;
      }else{
          $newSlug='new_'.$slug;
      }

      $post=Post::find($id);
      $post->title=$request->title;
      $post->slug=$newSlug;
      $post->position=$request->position;
      $post->content_excerpt=$request->excerpt;
      $post->content=$request->description;
      if (isset($request->status)){
          $post->status=true;
      }else{
          $post->status=false;
      }
      if (isset($request->approved)){
          $post->is_approved=true;
      }else{
          $post->is_approved=false;
      }
      $post->image=$imagename;
      $post->save();
      $post->categories()->sync($request->category);
      $post->tags()->sync($request->tag);
      return redirect()->back();
  }

  public function delete($id){
      $delete=Post::where("id",$id)->delete();
      return redirect()->back();
  }
}
