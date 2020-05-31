@extends('layouts.app')
@section('title','verified email')
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
@push('topJs')
@endpush
@section('content')
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="panel-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form>
                        </div>
                        <div class="panel-footer">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
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

