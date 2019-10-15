<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{asset($logo->patch)}}" alt="">
            <p>Get your freebie template now!</p>
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($images as $image)
            <div class="item  hero-item" data-bg="{{asset($image->patch)}}"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section End-->