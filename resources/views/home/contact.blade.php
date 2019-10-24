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
                <form class="form-class" id="con_form" method="POST" action="/form">
                    @csrf
                    <div class="row">
                        @if ($errors->has('name'))
                            <div class=" row alert alert-danger">
                                <span style="margin-left: 10px;">{{$errors->first('name')}}<span/>
                            </div>
                        @endif
                        @if ($errors->has('email'))
                            <div class=" row alert alert-danger">
                                <span style="margin-left: 10px;">{{$errors->first('email')}}<span/>
                            </div>
                        @endif
                        @if ($errors->has('subject'))
                            <div class=" row alert alert-danger">
                                <span style="margin-left: 10px;">{{$errors->first('subject')}}<span/>
                            </div>
                        @endif
                        @if ($errors->has('message'))
                            <div class=" row alert alert-danger">
                                <span style="margin-left: 10px;">{{$errors->first('message')}}<span/>
                            </div>
                        @endif
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