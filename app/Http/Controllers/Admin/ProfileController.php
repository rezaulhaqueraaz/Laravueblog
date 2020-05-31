<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use File;
use App\User;
use Illuminate\Http\Request;
Use Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('admin.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = $request->file('image');
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
        $user=User::find($id);
        $user->name=$request->name;
        $user->contact=$request->contact;
        $user->about=$request->about;
        $user->images=$imagename;
        $user->email=$request->email;
        $user->save();
        toast('Successfully Edit','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
