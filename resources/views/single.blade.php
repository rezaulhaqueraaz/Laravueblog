@extends('layouts.app')
@section('title','HomePage')
@push('topcss')
@endpush
@push('css')
@endpush
@push('topjs')
@endpush
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-xl-9">
                    <div class="row">
                        <div class="col-11">
                            <div class="laracard">
                                <div class="laracard-top">
                                    <ul>
                                        @foreach($post->categories as $categories)
                                            <li><a class="laracard-cate" href="{{route('category.single',$categories->id)}}">{{$categories->name}}</a></li>
                                        @endforeach
                                        <li><a href="" class="text-dark">- May 13,2020</a></li>
                                    </ul>
                                </div>
                                <div class="laracard-title">
                                    <h5>{{$post->title}}</h5>
                                </div>
                                <div class="laracard-img">
                                    <img src="{{fullImage($post->image)}}" alt="">
                                </div>
                                <div class="single-content">
                                    {!! $post->content !!}
                                </div>
                                <div class="laracard-footer">
                                    <div class="likecom">
                                        <ul>
                                            <li><a href=""><i class="fas fa-heart text-danger"></i><span>16</span></a></li>
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
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xl-3">
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
