<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="{{asset($project->patch)}}" alt="" height="271px" width="362px">
                        </div>
                        <div class="card-text" style="min-height: 285px;">
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