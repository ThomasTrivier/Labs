<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="{{$project->photo_path}}" alt="">
                        </div>
                        <div class="card-text">
                            <h2>{{$project->title}}</h2>
                            <p>{{$project->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->