@extends('index')
@section('content')
    <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                @foreach ($show_news as $show_news)
                    <div class="left-side">
                        <div class="masonry-box post-media">
                            <img width="448px" height="448px" src="{{URL::to('uploads/'.$show_news->image)}}" alt="" class="img-fluid">
                            <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href=""
                                                title="">new</a></span>
                                        <h4><a href="garden-single.html" title="">{{$show_news->name}}</a></h4>
                                        <small><a href="garden-single.html" title="">5/10/2023</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->
                @endforeach
            </div><!-- end masonry -->
        </div>
    </section>

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-list clearfix">
                            @foreach ($show_news_blog as $blog)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="garden-single.html" title="">
                                                <img width="300px" height="300px" src="{{URL::to('uploads/'.$show_news->image)}}" alt=""
                                                    class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua"><a href="garden-category.html" title="">Hot</a></span>
                                        <h4><a href="garden-single.html" title="">{{$blog->name}}</a></h4>
                                        <p>{{$blog->des}}</p>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                            @endforeach

                        </div><!-- end blog-list -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Search</h2>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="garden-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="{{ asset('frontend/upload/garden_sq_09.jpg') }}" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="garden-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="{{ asset('frontend/upload/garden_sq_06.jpg') }}" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                            <small>11 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="garden-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="{{ asset('frontend/upload/garden_sq_02.jpg') }}" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                            <small>07 Jan, 2016</small>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
