@extends('layouts.backend.app')
@section('title','Dashboard')
@push('topcss')
@endpush
@push('css')
    <style>
        .post-image{
            width: 100%;
            overflow: hidden;
            padding:1% 22%;
        }
        .post-image img{
            width: 100%;
        }
        .post-content{
            padding: 0% 10%;
        }
    </style>
@endpush
@push('topjs')
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        <li><a href="{{route('admin.post.table')}}">All Post</a></li>
                        <li class="active">Post View</li>
                    </ol>
                    <h4 class="text-dark header-title m-t-0">Post View</h4>

                    <div class="row">
                           <div class="container">
                               <h3 class="text-center">{{$post->title}}</h3>
                               <div class="post-image">
                                   <img src="{{fullImage($post->image)}}" alt="">
                               </div>
                               <div class="post-content">
                                   <h4>Author: {{$post->user->name}}</h4>
                                   <p>
                                       {!! $post->content !!}
                                   </p>
                               </div>

                           </div>
                    </div>

                    <!-- end row -->

                </div>

            </div>



        </div>
    </div>
@endsection
@push('js')
@endpush
