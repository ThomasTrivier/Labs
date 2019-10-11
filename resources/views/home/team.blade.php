<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$sectionIntel->team_title_left}} <span>{{$sectionIntel->team_span}}</span> {{$sectionIntel->team_title_right}}</h2>
        </div>
        <div class="row">
            <!-- single member -->
            @foreach ($teams as $team)
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{$team->photo_path}}" alt="">
                        <h2>{{$team->member_name}}</h2>
                        <h3>{{$team->member_function}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section end-->