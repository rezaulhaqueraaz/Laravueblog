@extends('layouts.app')
@section('title','Category Page')
@push('css')
    <style>
        .category-name{
            padding-top: 5%;
        }
        .laracard-cate-name {
            background-color: red;
            padding: 2px 10px;
            font-size: 22px;
            font-weight: bold;
            color: rgb(255, 255, 255);
            border-radius: 3px;
            text-transform: uppercase;
        }
        .content{
            margin-top: 3%;
        }
    </style>
@endpush
@push('topJs')
@endpush
@section('content')
    <div class="container">
        <div class="category-name text-center">
            <h3><a class="laracard-cate-name" href="">{{$cateBlog->name}}</a></h3>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-xl-9">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            @foreach($cateBlog->posts as  $key=>$posts)
                                @if($key%2!=0)

                                    <div class="laracard">
                                        <div class="laracard-top">
                                            <ul>
                                                <li><a href="" class="text-dark">May 13,2020</a></li>
                                            </ul>
                                        </div>
                                        <a href="{{route('frontend.single',$posts->slug)}}">
                                            <div class="laracard-title text-left">
                                                <h5>{{$posts->title}}</h5>
                                            </div>
                                        </a>
                                        <div class="laracard-img">
                                            <img src="{{imgPathSmall($posts->image)}}" alt="">
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
                                        <div class="laracard-footer">
                                            <div class="likecom">
                                                <ul>
                                                    <li><a href=""><i class="far fa-heart text-danger"></i><span>16</span></a></li>
                                                    <li><a href=""> <i class="far fa-comments text-dark"></i><span>42</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="wholike">
                                                <ul>
                                                    <li class="pone"><a href=""><img src="{{asset('frontend/assets/img/p2.jpg')}}" alt=""></a></li>
                                                    <li class="ptwho"><a href=""><img src="{{asset('frontend/assets/img/p1.jpg')}}" alt=""></a></li>
                                                    <li class="pthree"><a href=""><img src="{{asset('frontend/assets/img/p3.jpg')}}" alt=""></a></li>
                                                </ul>
                                            </div>
                                            <div class="likemore">
                                                <h5>+20 More</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            @foreach($cateBlog->posts as  $key=>$posts)
                                @if($key%2==0)
                                    <div class="laracard">
                                        <div class="laracard-top">
                                            <ul>
                                                <li><a href="" class="text-dark">May 13,2020</a></li>
                                            </ul>
                                        </div>
                                        <a href="{{route('frontend.single',$posts->slug)}}">
                                            <div class="laracard-title text-left">
                                                <h5>{{$posts->title}}</h5>
                                            </div>
                                        </a>
                                        <div class="laracard-img">
                                            <img src="{{imgPathSmall($posts->image)}}" alt="">
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

                                        <div class="laracard-footer">
                                            <div class="likecom">
                                                <ul>
                                                    <li style="cursor: pointer">
                                                        <i class="far fa-heart text-danger"></i><span>16</span>
                                                    </li>
                                                    <li><a href=""> <i class="far fa-comments text-dark"></i><span>42</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="wholike">
                                                <ul>
                                                    <li class="pone"><a href=""><img src="{{asset('frontend/assets/img/p2.jpg')}}" alt=""></a></li>
                                                    <li class="ptwho"><a href=""><img src="{{asset('frontend/assets/img/p1.jpg')}}" alt=""></a></li>
                                                    <li class="pthree"><a href=""><img src="{{asset('frontend/assets/img/p3.jpg')}}" alt=""></a></li>
                                                </ul>
                                            </div>
                                            <div class="likemore">
                                                <h5>+20 More</h5>
                                            </div>
                                        </div>
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
    <script src="js/like.js"></script>
@endpush
