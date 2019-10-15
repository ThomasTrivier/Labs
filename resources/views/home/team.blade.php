<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$sectionIntel->team_title_left}} <span>{{$sectionIntel->team_span}}</span> {{$sectionIntel->team_title_right}}</h2>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset($member1[0]->patch)}}" alt="">
                    <h2>{{$member1[0]->member_name}}</h2>
                    <h3>{{$member1[0]->member_function}}</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset($leader[0]->patch)}}" alt="">
                    <h2>{{$leader[0]->member_name}}</h2>
                    <h3>{{$leader[0]->member_function}}</h3>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset($member2[0]->patch)}}" alt="">
                    <h2>{{$member2[0]->member_name}}</h2>
                    <h3>{{$member2[0]->member_function}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->