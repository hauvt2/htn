@extends('client.layouts.master')
@section('content')
  <!--================Blog Area =================-->
  <section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">


                    @foreach($data as $value)
                    
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="public/img/{{$value->images}}" alt="">
                            <a class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="{{Route('single-blog',$value->id)}}">
                                <h2>{{$value->title}}</h2>
                            </a>
                            <p>{{$value->summary}}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i>{{$value->name}}</a></li>
                                <li><a href="#"><i class="fa fa-eye"></i>{{$value->views}}</a></li>
                            </ul>
                        </div>
                    </article>

                    @endforeach                 

                    <nav class="blog-pagination justify-content-center d-flex">
                           {{$data->links()}}
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                            type="submit">Search</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        
                        <ul class="list cat-list">
                            @foreach($listcate as $cate)
                            <li>
                                <a href="#" class="d-flex">
                                    <p>{{$cate->name}}</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        @foreach($recentpost as $post)
                        <div class="media post_item">
                            <img src="public/img/{{$post->images}}" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>{{$post->title}}</h3>
                                </a>
                                <p>{{$post->created_at}}</p>
                            </div>
                        </div>
                        @endforeach
                    </aside>
                    
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                            type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
    <!--================Blog Area =================-->