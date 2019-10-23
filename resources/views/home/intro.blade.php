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
        @if ($images->count() == 0)
            <div class="item  hero-item" data-bg="img/01.jpg"></div>
        @else
            @foreach ($images as $image)
                <div class="item  hero-item" data-bg="{{asset($image->patch)}}"></div>
            @endforeach
        @endif
    </div>
</div>
<!-- Intro Section End-->