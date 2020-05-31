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
                <div class="col-lg-8 col-md-8">
                    <div class="card-box">
                        <div class="panel-body">
                            <form class="form-horizontal m-t-20" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input id="password" placeholder="New Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-12">
                                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush

