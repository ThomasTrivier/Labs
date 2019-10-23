<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                @foreach ($articles as $article)
                    <div class="post-item">
                        <div class="post-thumbnail">
                            <img src="{{asset($article->patch)}}" alt="" height="270px" width="755px">
                            <div class="post-date">
                                <h2>{{$article->created_at->day}}</h2>
                                <h3>{{$article->created_at->shortMonthName}} {{$article->created_at->year}}</h3>
                            </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{$article->article_title}}</h2>
                            <div class="post-meta">
                                @foreach ($categorieArticle as $categorie)
                                    @if ($article->categorie === $categorie->id)
                                        <a href="/blog-categorie/{{$categorie->id}}">
                                            {{$categorie->category}}
                                        </a>
                                    @endif
                                @endforeach
                                @if ($article->tags()->count() >= 1)   
                                    <a href="">
                                        @foreach ($article->tags()->get() as $tag)
                                            {{$tag->tag}} 
                                        @endforeach
                                    </a>
                                @endif
                                <a href="">{{$article->commentaires()->count()}} Comments</a>
                            </div>
                            <p>{{substr($article->article_content,0,320)}}...</p>
                            <a href="/blog-post/{{$article->id}}" class="read-more">Read More</a>
                        </div>
                    </div>
                @endforeach
                <!-- Pagination -->
                <div class="page-pagination">
                    {{$articles->links()}}
                </div>
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
                            <li><a href="/blog-categorie/{{$item->id}}">{{$item->category}}</a></li> 
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