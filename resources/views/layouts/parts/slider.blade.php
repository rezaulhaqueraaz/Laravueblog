<!-- slider start -->
<div class="slider">
    <div class="col-lg-12">
        <div class="row">
            <div class="container-fluid">
                <div class="owl-carousel">

                    @foreach($slider as $sliders)
                    <div class="slider" style="background-image: url('{{fullImage($sliders->image)}}');">
                        <div class="slider-category">
                            <ul>
                                <li><a href="" class="text-danger"><i class="fas fa-caret-right"></i></a></li>
                                <li><a href="" class="text-light">Latest Post</a></li>
                            </ul>
                        </div>
                        <div class="slider-title">
                            <h3>"{{$sliders->title}}"</h3>
                            <div class="slider-button">
                                <a href="{{route('frontend.single',$sliders->slug)}}">Keep Reading</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider end -->
