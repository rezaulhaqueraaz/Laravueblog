<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function Dashboard(){
       return view('admin.Dashboard');
   }


   public function category(){
       return view('admin.Category');
   }
   public function categoryadd(Request $request){
      $name=$request->name;
       $category=new Category();
       $category->name=$name;
       $category->save();
       if ($category){
           return response()->json(['Success'=>$name.'Add Successfully']);
       }else{
           return response()->json(['Error'=>$name.'  Not Add Successfully!, Try Again']);
       }
   }
   public function categoryget(){
       $Category= Category::orderBy('id', 'desc')->get();
       return response()->json(['Categoryget'=>$Category]);
   }
   public function Catdelete($id){
       $delete=Category::where("id",$id)->delete();
       return response()->json(['SuccessDelete'=>'Data Deleted Successfully']);
   }
   public function user(){
       $user=User::all();
       $role=Role::all();
       return view('admin.User',compact('user','role'));
   }

}
