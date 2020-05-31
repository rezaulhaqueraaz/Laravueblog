@extends('layouts.app')
@section('title','HomePage')
@push('topcss')
@endpush
@push('css')
    <link href="{{asset('backend/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .login-area {
            padding: 6% 2%;
        }
        @media (max-width: 767px) {
            .login-area {
                padding: 20% 3%;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .login-area {
                padding: 20% 2%;
            }
        }
    </style>
@endpush
@push('topjs')
@endpush
@section('content')
    <div class="login-area">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 col-md-6">
                   <div class="card-box">
                       <div class="panel-body">
                           <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                               @csrf
                               <div class="form-group ">
                                   <div class="col-xs-12">
                                       <input class="form-control" type="email" name="email" value="{{ old('email') }}" autofocus required placeholder="Email">
                                   </div>
                               </div>

                               <div class="form-group">
                                   <div class="col-xs-12">
                                       <input class="form-control" type="password" name="password" required placeholder="Password">
                                   </div>
                               </div>

                               <div class="form-group ">
                                   <div class="col-xs-12">
                                       <div class="checkbox checkbox-primary">
                                           <input id="checkbox-signup" type="checkbox">
                                           <label for="checkbox-signup"> Remember me </label>
                                       </div>

                                   </div>
                               </div>

                               <div class="form-group text-center m-t-40">
                                   <div class="col-xs-12">
                                       <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                                           Log In
                                       </button>
                                   </div>
                               </div>

                               <div class="form-group m-t-20 m-b-0">
                                   <div class="col-sm-12">
                                       @if (Route::has('password.request'))
                                           <a href="{{ route('password.request') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i>{{'I forgot my password'}}</a>
                                       @endif
                                   </div>
                               </div>
                           </form>

                       </div>
                   </div>
               </div>
               <div class="col-lg-6 col-sm-12 col-md-6">
                   <div class=" card-box">
                       <div class="panel-body">
                           <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                               @csrf
                               <div class="form-group ">
                                   <div class="col-xs-12">
                                       <input  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus type="text"  placeholder="Name">
                                       @if ($errors->has('name'))
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                       @endif
                                   </div>
                               </div>

                               <div class="form-group ">
                                   <div class="col-xs-12">
                                       <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required type="text"  placeholder="Email">
                                       @if ($errors->has('email'))
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                       @endif
                                   </div>
                               </div>

                               <div class="form-group">
                                   <div class="col-xs-12">
                                       <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                       @if ($errors->has('password'))
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                       @endif
                                   </div>
                               </div>

                               <div class="form-group">
                                   <div class="col-xs-12">
                                       <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="col-xs-12">
                                       <div class="checkbox checkbox-primary">
                                           <input id="checkbox-register" type="checkbox" checked="checked">
                                           <label for="checkbox-register">I accept <a href="#">Terms and Conditions</a></label>
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group text-center m-t-40">
                                   <div class="col-xs-12">
                                       <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                                           Register
                                       </button>
                                   </div>
                               </div>
                           </form>

                       </div>
                   </div>
               </div>
           </div>
       </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="form-group m-b-0 text-center">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-facebook waves-effect waves-light m-t-20">
                            <i class="fa fa-facebook m-r-5"></i> Facebook
                        </button>

                        <button type="button" class="btn btn-twitter waves-effect waves-light m-t-20">
                            <i class="fa fa-twitter m-r-5"></i> Twitter
                        </button>

                        <button type="button" class="btn btn-googleplus waves-effect waves-light m-t-20">
                            <i class="fa fa-google-plus m-r-5"></i> Google+
                        </button>
                    </div>
                </div>
                <p>
                    Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                </p>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush


