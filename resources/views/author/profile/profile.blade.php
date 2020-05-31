@extends('layouts.author.app')
@section('title','Profile')
@push('css')
    <style>
        .profile-img{
            width: 130px;
            height: 137px;
            overflow: hidden;
            margin-left: 24%;
        }
        .profile-img img{
            width: 100%;
            height: 137px;
        }

    </style>
@endpush
@push('topjs')
@endpush
@section('content')
    @include('layouts.author.parts.topbar')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="profile-detail card-box">
                    <div>
                        <img src="@if(!empty(Auth::user()->images)){{asset(Auth::user()->images)}} @else{{asset('backend/assets/images/users/avatar-1.jpg')}}@endif" class="img-circle" alt="profile-image">

                        <ul class="list-inline status-list m-t-20">
                            <li>
                                <h3 class="text-primary m-b-5">456</h3>
                                <p class="text-muted">Followings</p>
                            </li>

                            <li>
                                <h3 class="text-success m-b-5">5864</h3>
                                <p class="text-muted">Followers</p>
                            </li>
                        </ul>

                        <button type="button" class="btn btn-pink btn-custom btn-rounded waves-effect waves-light">Follow</button>

                        <hr>
                        <h4 class="text-uppercase font-600">About Me</h4>
                        <p class="text-muted font-13 m-b-30">
                            {{Auth::User()->about}}
                        </p>

                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{Auth::User()->name}}</span></p>

                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{Auth::User()->contact}}</span></p>

                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{Auth::User()->email}}</span></p>

                        </div>


                        <div class="button-list m-t-20">
                            <button type="button" class="btn btn-facebook waves-effect waves-light">
                                <i class="fa fa-facebook"></i>
                            </button>

                            <button type="button" class="btn btn-twitter waves-effect waves-light">
                                <i class="fa fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                <i class="fa fa-linkedin"></i>
                            </button>

                            <button type="button" class="btn btn-dribbble waves-effect waves-light">
                                <i class="fa fa-dribbble"></i>
                            </button>
                            <br>
                            <a href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>&nbsp;
                        </div>
                    </div>

                </div>

                <div class="card-box">
                    <h4 class="m-t-0 m-b-20 header-title"><b>Friends <span class="text-muted">(154)</span></b></h4>

                    <div class="friend-list">
                        <a href="#">
                            <img src="assets/images/users/avatar-1.jpg" class="img-circle thumb-md" alt="friend">
                        </a>

                        <a href="#">
                            <img src="assets/images/users/avatar-2.jpg" class="img-circle thumb-md" alt="friend">
                        </a>

                        <a href="#">
                            <img src="assets/images/users/avatar-3.jpg" class="img-circle thumb-md" alt="friend">
                        </a>

                        <a href="#">
                            <img src="assets/images/users/avatar-4.jpg" class="img-circle thumb-md" alt="friend">
                        </a>

                        <a href="#">
                            <img src="assets/images/users/avatar-5.jpg" class="img-circle thumb-md" alt="friend">
                        </a>

                        <a href="#">
                            <img src="assets/images/users/avatar-6.jpg" class="img-circle thumb-md" alt="friend">
                        </a>

                        <a href="#">
                            <img src="assets/images/users/avatar-7.jpg" class="img-circle thumb-md" alt="friend">
                        </a>

                        <a href="#" class="text-center">
                            <span class="extra-number">+89</span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-lg-9 col-md-8">
                <form method="post" class="well">
                                    <span class="input-icon icon-right">
                                        <textarea rows="2" class="form-control"
                                                  placeholder="Post a new message"></textarea>
                                    </span>
                    <div class="p-t-10 pull-right">
                        <a class="btn btn-sm btn-primary waves-effect waves-light">Send</a>
                    </div>
                    <ul class="nav nav-pills profile-pills m-t-10">
                        <li>
                            <a href="#"><i class="fa fa-user"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-location-arrow"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class=" fa fa-camera"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-smile-o"></i></a>
                        </li>
                    </ul>

                </form>
                <div class="card-box">
                    <div class="comment">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="comment-avatar">
                        <div class="comment-body">
                            <div class="comment-text">
                                <div class="comment-header">
                                    <a href="#" title="">Adam Jansen</a><span>about 2 minuts ago</span>
                                </div>
                                Story based around the idea of time lapse, animation to post soon!

                                <div class="m-t-15">
                                    <a href="">
                                        <img src="assets/images/small/img1.jpg" class="thumb-md">
                                    </a>
                                    <a href="">
                                        <img src="assets/images/small/img2.jpg" class="thumb-md">
                                    </a>
                                    <a href="">
                                        <img src="assets/images/small/img3.jpg" class="thumb-md">
                                    </a>
                                </div>
                            </div>

                            <div class="comment-footer">
                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                <a href="#">Reply</a>
                            </div>
                        </div>

                        <div class="comment">
                            <img src="assets/images/users/avatar-2.jpg" alt="" class="comment-avatar">
                            <div class="comment-body">
                                <div class="comment-text">
                                    <div class="comment-header">
                                        <a href="#" title="">John Smith</a><span>about 1 hour ago</span>
                                    </div>
                                    Wow impressive!
                                </div>
                                <div class="comment-footer">
                                    <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                        </div>

                        <div class="comment">
                            <img src="assets/images/users/avatar-3.jpg" alt=""
                                 class="comment-avatar">
                            <div class="comment-body">
                                <div class="comment-text">
                                    <div class="comment-header">
                                        <a href="#" title="">Matt
                                            Cheuvront</a><span>about 2 hours ago</span>
                                    </div>
                                    Wow, that is really nice.
                                </div>
                                <div class="comment-footer">
                                    <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                    <a href="#">Reply</a>
                                </div>
                            </div>

                            <div class="comment">
                                <img src="assets/images/users/avatar-4.jpg" alt=""
                                     class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-text">
                                        <div class="comment-header">
                                            <a href="#" title="">Stephanie
                                                Walter</a><span>3 hours ago</span>
                                        </div>
                                        Nice work, makes me think of The Money Pit.
                                    </div>
                                    <div class="comment-footer">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                        <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="comment-avatar">
                        <div class="comment-body">
                            <div class="comment-text">
                                <div class="comment-header">
                                    <a href="#" title="">Kim Ryder</a><span>about 4 hours ago</span>
                                </div>
                                i'm in the middle of a timelapse animation myself! (Very different
                                though.) Awesome stuff.
                            </div>
                            <div class="comment-footer">
                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <img src="assets/images/users/avatar-7.jpg" alt="" class="comment-avatar">
                        <div class="comment-body">
                            <div class="comment-text">
                                <div class="comment-header">
                                    <a href="#" title="">Nicolai Larson</a><span>10 hours ago</span>
                                </div>
                                the parallax is a little odd but O.o that house build is awesome!!
                            </div>
                            <div class="comment-footer">
                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="comment-avatar">
                        <div class="comment-body">
                            <div class="comment-text">
                                <div class="comment-header">
                                    <a href="#" title="">Adam Jansen</a><span>about 2 minuts ago</span>
                                </div>
                                Story based around the idea of time lapse, animation to post soon!

                                <div class="m-t-15">
                                    <a href="">
                                        <img src="assets/images/small/img1.jpg" class="thumb-md">
                                    </a>
                                    <a href="">
                                        <img src="assets/images/small/img2.jpg" class="thumb-md">
                                    </a>
                                    <a href="">
                                        <img src="assets/images/small/img3.jpg" class="thumb-md">
                                    </a>
                                </div>
                            </div>

                            <div class="comment-footer">
                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                <a href="#">Reply</a>
                            </div>
                        </div>

                        <div class="comment">
                            <img src="assets/images/users/avatar-2.jpg" alt="" class="comment-avatar">
                            <div class="comment-body">
                                <div class="comment-text">
                                    <div class="comment-header">
                                        <a href="#" title="">John Smith</a><span>about 1 hour ago</span>
                                    </div>
                                    Wow impressive!
                                </div>
                                <div class="comment-footer">
                                    <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                                    <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                    <a href="#">Reply</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="m-t-30 text-center">
                        <a href="" class="btn btn-default waves-effect waves-light btn-sm">Load More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    All Modal Area Start--}}
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="overflow: hidden">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('author.profile.update',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->name}}" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mobile</label>
                            <input type="text" name="contact" class="form-control" value="{{Auth::user()->contact}}" id="exampleInputPassword1" placeholder="Contact Number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">About</label>
                            <textarea name="about" class="form-control">{{Auth::user()->about}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Social Media</label>
                            <input type="text" class="form-control" value="" id="exampleInputPassword1" placeholder="Facebook">
                            <input type="text" class="form-control" value="" id="exampleInputPassword1" placeholder="Instragram">
                            <input type="text" class="form-control" value="" id="exampleInputPassword1" placeholder="Twitter">
                            <input type="text" class="form-control" value="" id="exampleInputPassword1" placeholder="LinkedIn">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center profile-img">
                            <img src="@if(!empty(Auth::user()->images)){{asset(Auth::user()->images)}} @else{{asset('backend/assets/images/small/img4.jpg')}}@endif" id="blah" class="img-circle" alt="">
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" id="imgInp" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
