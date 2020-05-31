<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userAdd(Request $request){
        $image = $request->file('file');
        $imagename = 'storage/profile/admin/'.uniqid().Auth::user()->id.'.'.$image->getClientOriginalExtension();
        //  check category dir is exists
        if (!File::exists("storage/profile/admin")) {
            File::makeDirectory("storage/profile/admin",0777,true);
        }
        $destinationPath = 'storage/profile/admin';
        $image->move($destinationPath, $imagename);
        $user=new User();
        $user->name=$request->fullName;
        $user->email=$request->email;
        $user->images=$imagename;
        $user->about=$request->about;
        $user->activity=$request->active;
        $user->role_id=$request->definerole;
        $user->contact=$request->contact;
        $user->password=Hash::make($request->password);
        $user->save();
        toast('Successfully Edit','success');
        return redirect()->back();
    }
    public function update(Request $request,$id){
        $image = $request->file('file');
        $user=User::find($id);
        if (isset($image))
        {
            $imagename = 'storage/profile/admin/'.uniqid().$user->id.'.'.$image->getClientOriginalExtension();
            //  check category dir is exists
            if (!File::exists("storage/profile/admin")) {
                File::makeDirectory("storage/profile/admin",0777,true);
            }
            // delete old image
            if (File::exists($user->images))
            {
                File::delete($user->images);
            }
            $destinationPath = 'storage/profile/admin';
            $image->move($destinationPath, $imagename);
        }else {
            $imagename = $user->images;
        }
        $user->name=$request->fullName;
        $user->contact=$request->contact;
        $user->about=$request->about;
        $user->activity=$request->active;
        $user->role_id=$request->definerole;
        $user->images=$imagename;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        toast('Successfully Updated','success');
        return redirect()->back();
    }
}
