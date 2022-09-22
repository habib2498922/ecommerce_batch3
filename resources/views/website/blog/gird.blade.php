@extends('website.master')

@section('body')

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Blog Grid Sidebar</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                    <li><a href="{{route('home')}}">Blog</a></li>
                    <li>Blog Grid Sidebar</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="section blog-section blog-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-single-sidebar.html">
                                    <img src="{{asset('/')}}website/assets/images/blog/blog-1.jpg" alt="#">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a class="category" href="javascript:void(0)">eCommerce</a>
                                <h4>
                                    <a href="blog-single-sidebar.html">What information is needed for shipping?</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.</p>
                                <div class="button">
                                    <a href="javascript:void(0)" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-single-sidebar.html">
                                    <img src="{{asset('/')}}website/assets/images/blog/blog-2.jpg" alt="#">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a class="category" href="javascript:void(0)">Gaming</a>
                                <h4>
                                    <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.</p>
                                <div class="button">
                                    <a href="javascript:void(0)" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-single-sidebar.html">
                                    <img src="{{asset('/')}}website/assets/images/blog/blog-3.jpg" alt="#">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a class="category" href="javascript:void(0)">Electronic</a>
                                <h4>
                                    <a href="blog-single-sidebar.html">Electronics, instrumentation & control
                                        engineering
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.</p>
                                <div class="button">
                                    <a href="javascript:void(0)" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-single-sidebar.html">
                                    <img src="{{asset('/')}}website/assets/images/blog/blog-1.jpg" alt="#">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a class="category" href="javascript:void(0)">eCommerce</a>
                                <h4>
                                    <a href="blog-single-sidebar.html">What information is needed for shipping?</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.</p>
                                <div class="button">
                                    <a href="javascript:void(0)" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-single-sidebar.html">
                                    <img src="{{asset('/')}}website/assets/images/blog/blog-2.jpg" alt="#">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a class="category" href="javascript:void(0)">Gaming</a>
                                <h4>
                                    <a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.</p>
                                <div class="button">
                                    <a href="javascript:void(0)" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="blog-single-sidebar.html">
                                    <img src="{{asset('/')}}website/assets/images/blog/blog-3.jpg" alt="#">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a class="category" href="javascript:void(0)">Electronic</a>
                                <h4>
                                    <a href="blog-single-sidebar.html">Electronics, instrumentation & control
                                        engineering
                                    </a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt.</p>
                                <div class="button">
                                    <a href="javascript:void(0)" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="pagination left blog-grid-page">
                    <ul class="pagination-list">
                        <li><a href="javascript:void(0)">Prev</a></li>
                        <li class="active"><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)">Next</a></li>
                    </ul>
                </div>

            </div>
            <aside class="col-lg-4 col-md-12 col-12">
                <div class="sidebar blog-grid-page">

                    <div class="widget search-widget">
                        <h5 class="widget-title">Search This Site</h5>
                        <form action="#">
                            <input type="text" placeholder="Search Here...">
                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div>


                    <div class="widget popular-feeds">
                        <h5 class="widget-title">Featured Posts</h5>
                        <div class="popular-feed-loop">
                            <div class="single-popular-feed">
                                <div class="feed-desc">
                                    <a class="feed-img" href="blog-single-sidebar.html">
                                        <img src="{{asset('/')}}website/assets/images/blog/blog-sidebar-1.jpg" alt="#">
                                    </a>
                                    <h6 class="post-title"><a href="blog-single-sidebar.html">What information is
                                            needed for shipping?</a></h6>
                                    <span class="time"><i class="lni lni-calendar"></i> 05th Nov 2023</span>
                                </div>
                            </div>
                            <div class="single-popular-feed">
                                <div class="feed-desc">
                                    <a class="feed-img" href="blog-single-sidebar.html">
                                        <img src="{{asset('/')}}website/assets/images/blog/blog-sidebar-2.jpg" alt="#">
                                    </a>
                                    <h6 class="post-title"><a href="blog-single-sidebar.html">Interesting fact about
                                            gaming consoles</a></h6>
                                    <span class="time"><i class="lni lni-calendar"></i> 24th March 2023</span>
                                </div>
                            </div>
                            <div class="single-popular-feed">
                                <div class="feed-desc">
                                    <a class="feed-img" href="blog-single-sidebar.html">
                                        <img src="{{asset('/')}}website/assets/images/blog/blog-sidebar-3.jpg" alt="#">
                                    </a>
                                    <h6 class="post-title"><a href="blog-single-sidebar.html">Electronics,
                                            instrumentation & control engineering </a></h6>
                                    <span class="time"><i class="lni lni-calendar"></i> 30th Jan 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="widget categories-widget">
                        <h5 class="widget-title">Top Categories</h5>
                        <ul class="custom">
                            <li>
                                <a href="javascript:void(0)">Editor's Choice</a><span>(24)</span>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Electronics</a><span>(12)</span>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Industrial Design</a><span>(5)</span>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Secure Payments Online</a><span>(15)</span>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Online Shopping</a><span>(7)</span>
                            </li>
                        </ul>
                    </div>


                    <div class="widget popular-tag-widget">
                        <h5 class="widget-title">Popular Tags</h5>
                        <div class="tags">
                            <a href="javascript:void(0)">#electronics</a>
                            <a href="javascript:void(0)">#cpu</a>
                            <a href="javascript:void(0)">#gadgets</a>
                            <a href="javascript:void(0)">#wearables</a>
                            <a href="javascript:void(0)">#smartphones</a>
                        </div>
                    </div>

                </div>
            </aside>
        </div>
    </div>
</section>

@endsection
