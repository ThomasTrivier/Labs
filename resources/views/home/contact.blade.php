<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>{{$infos->title}}</h2>
                </div>
                <p>{{$infos->description}}</p>
                <h3 class="mt60">{{$infos->building_name}}</h3>
                <p class="con-item">{{$infos->adress_part_1}}<br>{{$infos->adress_part_2}}</p>
                <p class="con-item">{{$infos->tel}}</p>
                <p class="con-item">{{$infos->email}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                @if ($errors->any())
                    <div class=" row alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="margin-left: 10px;">{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form-class" id="con_form" method="POST" action="/form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" required name="name" value="{{old('name')}}" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" required name="email" value="{{old('email')}}" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" required name="subject" value="{{old('subject')}}" placeholder="Subject">
                            <textarea name="message" required placeholder="Message">{{old('message')}}</textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->