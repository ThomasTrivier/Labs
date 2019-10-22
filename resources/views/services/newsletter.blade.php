<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 id="news">Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" action="/newsletter/subscribe" method="POST">
                    @csrf
                    @if ($errors->has('email'))
                        <div class=" row alert alert-danger">
                            <span style="margin-left: 10px;">Email Valid Required<span/>
                        </div>
                     @endif
                    <input type="text" name="email" placeholder="Your e-mail here">
                    <button class="site-btn btn-2" type="submit">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->