<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{{$sectionIntel->service_title_left}} <span>{{$sectionIntel->service_span}}</span> {{$sectionIntel->service_title_right}}</h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($services as $service)
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$service->service_icon}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$service->service_title}}</h2>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$services->links()}}
        <div class="text-center">
            <a href="/services" class="site-btn">{{$sectionIntel->button_text}}</a>
        </div>
    </div>
</div>
<!-- services section end -->