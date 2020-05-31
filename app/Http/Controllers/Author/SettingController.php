<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\User;
Use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index(){
        return view('author.setting.settings');
    }
    public function passwordchange(Request $request){
        if (!empty($request->password)){
            if ($request->password==$request->confirmpassword){
                $user=User::find(Auth::user()->id);
                $user->password=Hash::make($request->password);
                $user->save();
                toast('Your New Password Change Successfully','success');
                return redirect()->back();
            }else{
                toast('Password Not Match','warning');
                return redirect()->back();
            }
        }else{
            toast('Your Input filed is empty','error');
            return redirect()->back();
        }
    }
}
