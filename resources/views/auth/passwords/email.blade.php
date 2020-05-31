@extends('layouts.app')
@section('title','Forget Password')
@push('css')
    <link href="{{asset('backend/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .login-area {
            padding: 6% 2%;
            justify-items: center;
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
                <div class="col-6">
                    <div class="card-box">
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input id="email" placeholder="Enter Your Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group text-center m-t-40">
                                    <div class="col-xs-12">
                                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                                            {{ __('Send Password Reset Link') }}
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
