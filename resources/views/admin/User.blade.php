@extends('layouts.backend.app')
@section('title','User')
@push('topcss')
@endpush
@push('css')

@endpush
@push('topjs')
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="m-b-30">
                    <button id="addToTable" data-toggle="modal" data-target="#UserModalAdd" class="btn btn-default waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
        <!-- sample modal content -->
        <div id="UserModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">User Add</h4>
                    </div>
                    <form class="form-horizontal" action="{{route('admin.user.add')}}" method="post" enctype="multipart/form-data" >
                        @method('post')
                        @csrf
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Picture</label>
                                <div class="col-md-10">
                                    <input type="file" id="imgInp" name="file" class="filestyle" data-buttonname="btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Full Name</label>
                                <div class="col-md-10">
                                    <input type="text" name="fullName" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="example-email">Email</label>
                                <div class="col-md-10">
                                    <input type="email" id="example-email" name="email" class="form-control" placeholder="User Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Define Role</label>
                                <div class="col-sm-10">
                                    <select name="definerole" class="form-control">
                                        @foreach($role as $roles)
                                            <option value="{{$roles->id}}" >{{$roles->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Is Active</label>
                            <div class="col-sm-10">
                                <select name="active" class="form-control">
                                        <option value="0">In Active</option>
                                        <option value="1">Active</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Mobile</label>
                                <div class="col-md-10">
                                    <input type="text" name="contact" class="form-control" placeholder="Contact Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Password</label>
                                <div class="col-md-10">
                                    <input type="password" name="password" class="form-control" value="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">About User</label>
                                <div class="col-md-10">
                                    <textarea name="about" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                    </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        @foreach($user as $users)
            @if(Auth::user()->id !=$users->id)
                <div class="col-md-3">
                    <div class="card-box p-b-0">
                        <div class="col-xs-12 text-right">
                            <span class="badge badge-danger text-right" style="cursor:pointer;"><i class="fa fa-trash"></i></span>
                            <a href="#"  data-toggle="modal" data-target="#{{$users->id}}"><span class="badge badge-primary text-right" style="cursor:pointer;"><i class="fa fa-edit"></i></span></a>
                        </div>
                        <a href="javascript:;" class="center-block text-center text-dark">
                            <img src="{{asset($users->images)}}" class="thumb-lg img-thumbnail img-circle" alt="">
                            <div class="h5 m-b-0"><strong>{{$users->name.'('.$users->role->name.')'}}</strong></div>
                        </a>
                        <div class="col-xs-12 text-center">
                            @if($users->activity==1)
                                <span class="badge badge-primary">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif

                            @if($users->email_verified_at!=null)
                                <span class="badge badge-primary">Email Verified</span>
                            @else
                                <span class="badge badge-danger">Email Not Verified</span>
                            @endif
                        </div>
                        <div class="bg-custom pull-in-card p-20 widget-box-two m-b-0 m-t-30 list-inline text-center row">
                            <div class="col-xs-6">
                                <h4 class="text-white m-0 font-600">{{$users->posts->count()}}</h4>
                                <p class="text-white m-b-0">Total Post</p>
                            </div>
                            <div class="col-xs-6">
                                <h4 class="text-white m-0 font-600">834</h4>
                                <p class="text-white m-b-0">Following</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="{{$users->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">User Add</h4>
                            </div>
                            <form class="form-horizontal" action="{{route('admin.user.update',$users->id)}}" method="post" enctype="multipart/form-data" >
                                @method('POST')
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Picture</label>
                                        <div class="col-md-10">
                                            <input type="file" id="imgInp" name="file" class="filestyle" data-buttonname="btn-primary">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Full Name</label>
                                        <div class="col-md-10">
                                            <input type="text" name="fullName" value="{{$users->name}}" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" id="example-email" value="{{$users->email}}" name="email" class="form-control" placeholder="User Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Define Role</label>
                                        <div class="col-sm-10">
                                            <select name="definerole" class="form-control">
                                                @foreach($role as $roles)
                                                    <option value="{{$roles->id}}" @if($roles->id==$users->role->id) {{'selected'}}@else @endif >{{$roles->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Is Active</label>
                                        <div class="col-sm-10">
                                            <select name="active" class="form-control">
                                                <option value="0" @if($users->activity==0) {{'selected'}}@else @endif >In Active</option>
                                                <option value="1" @if($users->activity==1) {{'selected'}}@else @endif>Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Mobile</label>
                                        <div class="col-md-10">
                                            <input type="text" name="contact" value="{{$users->contact}}" class="form-control" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">About User</label>
                                        <div class="col-md-10">
                                            <textarea name="about" class="form-control" rows="5">{{$users->about}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" name="password" class="form-control" value="password">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            @endif
       @endforeach
    </div>
@endsection
@push('js')
@endpush
