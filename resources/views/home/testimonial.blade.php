<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{{$sectionIntel->testimonial_title}}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>{{$testimonial->comment}}</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{asset($testimonial->patch)}}" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>{{$testimonial->client_name}}</h2>
                                    <p>{{$testimonial->client_function}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->