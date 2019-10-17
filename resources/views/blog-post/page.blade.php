<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="{{$article->article_photo}}" alt="">
                        <div class="post-date">
                            <h2>{{$article->created_at->day}}</h2>
                            <h3>{{$article->created_at->shortMonthName}} {{$article->created_at->year}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->article_title}}</h2>
                        <div class="post-meta">
                            <a href="">{{$user[0]->name}}</a>
                            <a href="">{{$categorieArticle[0]->category}}, 
                                @foreach ($article->tags()->get() as $tag)
                                    {{$tag->tag}} 
                                @endforeach</a>
                            <a href="">{{$comments->count()}} Comments</a>
                        </div>
                        <p>{{$article->article_content}}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="{{$user[0]->photo_path}}" alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{$user[0]->name}}, <span>Author</span></h2>
                            <p>{{$user[0]->description}}</p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments ({{$comments->count()}})</h2>
                        <ul class="comment-list">
                            @foreach ($comments as $comment)
                                <li>
                                    <div class="avatar">
                                        <img src="{{$comment->photo_path}}" alt="">
                                    </div>
                                    <div class="commetn-text">
                                        <h3>{{$comment->user_name}} | {{$comment->created_at->day}} {{$comment->created_at->shortMonthName}}, {{$comment->created_at->year}} | Reply</h3>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </li>   
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class" method="POST" action="/blog-post/{{$article->id}}/comment">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="site-btn" type="submit">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        @csrf
                        <input type="text" placeholder="Search">
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
                        <li><img src="/img/instagram/1.jpg" alt=""></li>
                        <li><img src="/img/instagram/2.jpg" alt=""></li>
                        <li><img src="/img/instagram/3.jpg" alt=""></li>
                        <li><img src="/img/instagram/4.jpg" alt=""></li>
                        <li><img src="/img/instagram/5.jpg" alt=""></li>
                        <li><img src="/img/instagram/6.jpg" alt=""></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $item)
                            <li><a href="">{{$item->tag}}</a></li>
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
                        <a href=""><img src="/img/add.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->