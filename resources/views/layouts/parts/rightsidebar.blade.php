<div class="right-sidebar">
    <div class="popular-post">
        <div class="popular-head-title">
            <h5>Popular Posts</h5>
        </div>
        @foreach($popular as $populars)
        <div class="popular-content">
            <div class="popular-post-img">
                <img src="{{thumbnail($populars->image)}}" alt="">
            </div>
            <div class="popular-post-title">
                <a href="{{route('frontend.single',$populars->slug)}}">
                 {{$populars->title}}
                </a>
                <p>2 days ago</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="clearfix"></div>
    <div class="popular-post">
        <div class="popular-head-title">
            <h5>Recent Posts</h5>
        </div>
        <div class="popular-content">
            <div class="recent-post-img">
                <img src="{{asset('frontend/assets/img/3.jpg')}}" alt="">
            </div>
            <div class="popular-post-title">
                Lorem ipsum, dolor sit amet consectetur.
                <p>2 days ago</p>
            </div>
        </div>
        <div class="popular-content">
            <div class="recent-post-img">
                <img src="{{asset('frontend/assets/img/2.jpg')}}" alt="">
            </div>
            <div class="popular-post-title">
                Lorem ipsum, dolor sit amet consectetur.
                <p>16 days ago</p>
            </div>
        </div>
        <div class="popular-content">
            <div class="recent-post-img">
                <img src="{{asset('frontend/assets/img/1.jpg')}}" alt="">
            </div>
            <div class="popular-post-title">
                Lorem ipsum, dolor sit amet consectetur.
                <p>5 days ago</p>
            </div>
        </div>
        <div class="popular-content">
            <div class="recent-post-img">
                <img src="{{asset('frontend/assets/img/1.jpg')}}" alt="">
            </div>
            <div class="popular-post-title">
                Lorem ipsum, dolor sit amet consectetur.
                <p>1 hour ago</p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="instragram-post">
        <div class="instragram-head-title">
            <h5>Instragram Gallery</h5>
        </div>
        <div class="instragram-content">
            <div class="instragram-post-img">
                <img src="{{asset('frontend/assets/img/3.jpg')}}" alt="">
            </div>
            <div class="instragram-post-img">
                <img src="{{asset('frontend/assets/img/4.jpg')}}" alt="">
            </div>
            <div class="instragram-post-img">
                <img src="{{asset('frontend/assets/img/1.jpg')}}" alt="">
            </div>
            <div class="instragram-post-img">
                <img src="{{asset('frontend/assets/img/2.jpg')}}" alt="">
            </div>
            <div class="instragram-post-img">
                <img src="{{asset('frontend/assets/img/6.jpeg')}}" alt="">
            </div>
            <div class="instragram-post-img">
                <img src="{{asset('frontend/assets/img/horse.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>
