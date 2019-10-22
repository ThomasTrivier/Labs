<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                @if (count($searchs) == 0)
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            <li class="list-group-item">Nothing Found...</li>
                        </ul>
                    </div>
                @endif
                <!-- Post item -->
                @foreach ($searchs as $search)
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="{{asset($search->patch)}}" alt="">
                            <div class="post-date">
                                <h2>{{$search->created_at->day}}</h2>
                                <h3>{{$search->created_at->shortMonthName}} {{$search->created_at->year}}</h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{$search->article_title}}</h2>
                            <div class="post-meta">
                                @foreach ($users as $user)
                                    @if ($search->author === $user->id)
                                        <a href="">{{$user->name}}</a>
                                    @endif
                                @endforeach
                                @foreach ($categorieArticle as $categorie)
                                    @if ($search->categorie === $categorie->id)
                                        <a href="">{{$categorie->category}}, 
                                        @foreach ($search->tags()->get() as $tag)
                                            {{$tag->tag}} 
                                        @endforeach</a>
                                    @endif
                                @endforeach
                                <a href="">{{$search->commentaires()->count()}} Comments</a>
                            </div>
                            <p>{{substr($search->article_content,0,320)}}...</p>
                            <a href="/blog-post/{{$search->id}}" class="read-more">Read More</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="/blog-search" class="search-form">
                        <input type="text" placeholder="Search" name="search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $item)
                            <li><a href="#">{{$item->category}}</a></li> 
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Instagram</h2>
                    <ul class="instagram">
                        <li><img src="img/instagram/1.jpg" alt=""></li>
                        <li><img src="img/instagram/2.jpg" alt=""></li>
                        <li><img src="img/instagram/3.jpg" alt=""></li>
                        <li><img src="img/instagram/4.jpg" alt=""></li>
                        <li><img src="img/instagram/5.jpg" alt=""></li>
                        <li><img src="img/instagram/6.jpg" alt=""></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $item)
                            <li><a href="/blog-tag/{{$item->id}}">{{$item->tag}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
                    </div>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Add</h2>
                    <div class="add">
                        <a href=""><img src="img/add.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->