<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($servicesTop as $random)
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$random->service_icon}}"></i>
                            </div>
                            <h2>{{$random->service_title}}</h2>
                            <p>{{$random->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About content -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{{$about->title_left}} <span>{{$about->span}}</span> {{$about->title_right}}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{$about->text_left}}</p>
                </div>
                <div class="col-md-6">
                    <p>{{$about->text_right}}</p>
                </div>
            </div>
            <div class="text-center mt60">
                <a href="" class="site-btn">{{$about->button_text}}</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{asset($about->patch)}}" alt="">
                        <a href="{{$about->video_url}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->