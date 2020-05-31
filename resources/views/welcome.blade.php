@extends('layouts.app')
@section('title','HomePage')
@push('css')
@endpush
@push('topJs')
@endpush
@section('content')
    @include('layouts.parts.slider')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-xl-9">
                        <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            @foreach($blog as  $key=>$posts)
                                @if($key%2!=0)

                                    <div class="laracard">
                                        <div class="laracard-top">
                                            <ul>
                                                @foreach($posts->categories as $categories)
                                                    <li><a class="laracard-cate" href="{{route('category.single',$categories->id)}}">{{$categories->name}}</a></li>
                                                @endforeach
                                                <li><a href="" class="text-dark">- May 13,2020</a></li>
                                            </ul>
                                        </div>
                                        <a href="{{route('frontend.single',$posts->slug)}}">
                                            <div class="laracard-title text-left">
                                                <h5>{{$posts->title}}</h5>
                                            </div>
                                        </a>
                                        <div class="laracard-img">
                                            <img src="{{$posts->image}}" alt="">
                                            <div class="writer-info-area">
                                                <div class="writer-img">
                                                    <img src="{{asset($posts->user->images)}}" alt="">
                                                </div>
                                                <div class="writer-name">
                                                    <h5 class="text-light">{{$posts->user->name}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="laracard-content">
                                            <p>{!! substr($posts->content,0,270) !!}</p>
                                        </div>
                                        <like-component id="{{$posts->id}}"></like-component>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            @foreach($blog as  $key=>$posts)
                                @if($key%2==0)
                                    <div class="laracard">
                                        <div class="laracard-top">
                                            <ul>
                                                @foreach($posts->categories as $categories)
                                                    <li><a class="laracard-cate" href="{{route('category.single',$categories->id)}}">{{$categories->name}}</a></li>
                                                @endforeach
                                                <li><a href="" class="text-dark">- May 13,2020</a></li>
                                            </ul>
                                        </div>
                                        <a href="{{route('frontend.single',$posts->slug)}}">
                                            <div class="laracard-title text-left">
                                                <h5>{{$posts->title}}</h5>
                                            </div>
                                        </a>
                                            <div class="laracard-img">
                                                <img src="{{$posts->image}}" alt="">
                                                <div class="writer-info-area">
                                                    <div class="writer-img">
                                                        <img src="{{asset($posts->user->images)}}" alt="">
                                                    </div>
                                                    <div class="writer-name">
                                                        <h5 class="text-light">{{$posts->user->name}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="laracard-content">
                                                <p>{!! substr($posts->content,0,270) !!}</p>
                                            </div>

                                        <like-component id="{{$posts->id}}"></like-component>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        </div>
                    </div>
                <div class="col-lg-3 col-md-12 col-xl-3" >
                    <div class="row">
                        @include('layouts.parts.rightsidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
