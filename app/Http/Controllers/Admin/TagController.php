<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
   public function index(){
       return view('admin.tag');
   }
   public function store(Request $r){
       $name=$r->name;
       $tag=new Tag();
       $tag->name=$name;
       $tag->save();
       if ($tag){
           return response()->json(['Success'=>$name.' Add Successfully']);
       }else{
           return response()->json(['Error'=>$name.' Not Add Successfully!, Try Again']);
       }
   }
   public function get(){
       $tag= Tag::orderBy('id', 'desc')->get();
       return response()->json(['tag'=>$tag]);
   }
    public function delete($id){
        $delete=Tag::where("id",$id)->delete();
        return response()->json(['SuccessDelete'=>'Tag Deleted Successfully']);
    }
}
