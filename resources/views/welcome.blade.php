<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Responsive Onepage HTML Template | Multi</title>
    <!-- core CSS -->
    <link href="{{asset('site/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('site/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('site/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('site/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('site/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('site/images/ico/apple-touch-icon-57-precomposed.png')}}">

    <!-- Add this in your HTML head -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/isotope/3.0.6/isotope.pkgd.min.js"></script>

</head>
<!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{asset('site/images/logo.png')}}" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#features">Features</a></li>
                        <li class="scroll"><a href="#services">Services</a></li>
                        <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                        <li class="scroll"><a href="#about">About</a></li>
                        <li class="scroll"><a href="#meet-team">Team</a></li>
                        <li class="scroll"><a href="#pricing">Pricing</a></li>
                        <li class="scroll"><a href="#blog">Blog</a></li>
                        <li class="scroll"><a href="#get-in-touch">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
        @foreach ($bannerSlides as $oneSlide)
            @php
                $slidePhoto = asset("site/images/slider/" . $oneSlide->photo);
            @endphp
            <div class="item" style="background-image: url('{{ $slidePhoto }}');">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>{{ $oneSlide->title }}</h2>
                                    <p>{{ $oneSlide->details }}</p>
                                    <a class="btn btn-primary btn-lg" href="{{ $oneSlide->link }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

            <!-- /.item-->
            <!-- <div class="item" style="background-image: url({{asset('site/images/slider/bg2.jpg')}});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Beautifully designed <span>free</span> one page template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna incididunt ut labore aliqua. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--/.item -->
        </div>
        <!--/.owl-carousel-->
    </section>
    <!--/#main-slider-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Premium quality free onepage template</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#">Download Now!</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#cta-->

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Awesome Features</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/main-feature.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">UX design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">UI design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Free Download</a></p>
                <img class="img-responsive wow fadeIn" src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">UX design</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">UI design</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-pie-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">SEO Services</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">iOS App</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-language"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Android App</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bullseye"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Win App</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->
    <section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Our Works</h2>
            <p class="text-center wow fadeInDown">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                <br> et dolore magna aliqua. Ut enim ad minim veniam
            </p>
        </div>

        <div class="text-center">
            <ul class="portfolio-filter">
                <li><a class="active" href="#" data-filter="*">All Works</a></li>
                
                @foreach ($categories as $oneCategory)
                    <li><a href="#" data-filter=".{{ $oneCategory->id }}">
                        {{ $oneCategory->name }}
                    </a></li>
                @endforeach
            </ul>
        </div>


        <div class="portfolio-items">
            @foreach ($products as $product)
                @php
                    $projectPhoto = asset("storage/" . $product->photo);
                    $productCategory = $product->category ? strtolower($product->category->name) : 'uncategorized';
                @endphp
                <div class="portfolio-item {{ $productCategory }}">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ $projectPhoto }}" alt="{{ $product->name }}">
                        <div class="portfolio-info">
                            <h3>{{ $product->name }}</h3>
                            <p>{{ $product->description }}</p>
                            <a class="preview" href="{{ $projectPhoto }}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>





                
                <!--/.portfolio-item-->

                {{-- <div class="portfolio-item corporate portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/02.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 2</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/03.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 3</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 4</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 7</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div> --}}
                <!--/.portfolio-item-->
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#portfolio-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Video Intro</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="//player.vimeo.com/video/58093852?title=0&amp;byline=0&amp;portrait=0&amp;color=e79b39" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Multi Capability</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Ipsum is simply dummy</li>
                                <li><i class="fa fa-check-square"></i> When an unknown</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> The printing and typesetting</li>
                                <li><i class="fa fa-check-square"></i> Lorem Ipsum has been</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="#">Learn More</a>

                </div>
            </div>
        </div>
    </section>
    <!--/#about-->

     <section id="work-process">
      <!--  <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Process</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-coffee fa-2x"></i>
                        </div>
                        <h3>MEET</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        <h3>PLAN</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-image fa-2x"></i>
                        </div>
                        <h3>DESIGN</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>4</span>
                            <i class="fa fa-heart fa-2x"></i>
                        </div>
                        <h3>DEVELOP</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="icon-circle">
                            <span>5</span>
                            <i class="fa fa-shopping-cart fa-2x"></i>
                        </div>
                        <h3>TESTING</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="icon-circle">
                            <span>6</span>
                            <i class="fa fa-space-shuttle fa-2x"></i>
                        </div>
                        <h3>LAUNCH</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--/#work-process-->

    <div class="container">
    <div class="section-header">
        <h2 class="section-title text-center wow fadeInDown">Meet The Team</h2>
        <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
    </div>

    <div class="row">
        @foreach ($teamMembers as $member)
            <div class="col-sm-4 col-xs-6 team-column col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <div class="team-img">
                        <img class="img-responsive" src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}">
                    </div>
                    <div class="team-info">
                        <h3>{{ $member->name }}</h3>
                        <span>{{ $member->position }}</span>
                    </div>
                    <p>{{ $member->description }}</p>
                    <ul class="social-icons">
                        @if($member->facebook)
                            <li><a href="{{ $member->facebook }}"><i class="fa fa-facebook"></i></a></li>
                        @endif
                        @if($member->twitter)
                            <li><a href="{{ $member->twitter }}"><i class="fa fa-twitter"></i></a></li>
                        @endif
                        @if($member->google_plus)
                            <li><a href="{{ $member->google_plus }}"><i class="fa fa-google-plus"></i></a></li>
                        @endif
                        @if($member->linkedin)
                            <li><a href="{{ $member->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        @endforeach
    </div>


    <div class="divider"></div>

    </div>

</section>
    <!--/#meet-team-->

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Fun Facts</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="2305" data-duration="1000"></div>
                        <strong>CUPS OF COFFEE CONSUMED</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="1231" data-duration="1000"></div>
                        <strong>CLIENT WORKED WITH</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="3025" data-duration="1000"></div>
                        <strong>PROJECT COMPLETED</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="1199" data-duration="1000"></div>
                        <strong>QUESTIONS ANSWERED</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#animated-number-->

    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Pricing Table</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $39
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Starter
                                </div>
                            </li>
                            <li><strong>1</strong> DOMAIN</li>
                            <li><strong>100GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>10</strong> EMAIL ADDRESS</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $69
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Business
                                </div>
                            </li>
                            <li><strong>3</strong> DOMAIN</li>
                            <li><strong>300GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>30</strong> EMAIL ADDRESS</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class="plan-purchase"><a class="btn btn-default" href="#">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing featured">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $99
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Pro
                                </div>
                            </li>
                            <li><strong>5</strong> DOMAIN</li>
                            <li><strong>500GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>50</strong> EMAIL ADDRESS</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $199
                                    </span>
                                    <span class="duration">
                                        per month
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Ultra
                                </div>
                            </li>
                            <li><strong>10</strong> DOMAIN</li>
                            <li><strong>1000GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>100</strong> EMAIL ADDRESS</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#pricing-->

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#testimonial-->

    <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Latest Blogs</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="images/blog/01.jpg" alt="">
                                    <span class="post-format post-format-video"><i class="fa fa-film"></i></span>
                                </div>
                                <div class="entry-date">25 November 2014</div>
                                <h2 class="entry-title"><a href="#">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class="entry-content">
                                <p>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</p>
                                <a class="btn btn-primary" href="#">Read More</a>
                            </div>

                            <footer class="entry-meta">
                                <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Victor</a></span>
                                <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                            </footer>
                        </article>
                    </div>
                </div>
                <!--/.col-sm-6-->
                <div class="col-sm-6">
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="images/blog/02.jpg" alt="">
                                <span class="post-format post-format-gallery"><i class="fa fa-image"></i></span>
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date">01 December 2014</div>
                                    <h2 class="entry-title"><a href="#">BeReviews was a awesome envent in dhaka</a></h2>
                                </header>

                                <div class="entry-content">
                                    <p>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</p>
                                    <a class="btn btn-primary" href="#">Read More</a>
                                </div>

                                <footer class="entry-meta">
                                    <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Campbell</a></span>
                                    <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                    <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="200ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="images/blog/03.jpg" alt="">
                                <span class="post-format post-format-audio"><i class="fa fa-music"></i></span>
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date">03 November 2014</div>
                                    <h2 class="entry-title"><a href="#">Play list of old bangle  music and gajal</a></h2>
                                </header>

                                <div class="entry-content">
                                    <p>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</p>
                                    <a class="btn btn-primary" href="#">Read More</a>
                                </div>

                                <footer class="entry-meta">
                                    <span class="entry-author"><i class="fa fa-pencil"></i> <a href="#">Ruth</a></span>
                                    <span class="entry-category"><i class="fa fa-folder-o"></i> <a href="#">Tutorial</a></span>
                                    <span class="entry-comments"><i class="fa fa-comments-o"></i> <a href="#">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Get in Touch</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
    </section>
    <!--/#get-in-touch-->


    <section id="contact">
    <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
    <div class="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-8 col-sm-6 col-sm-offset-6">
                    <div class="contact-form">
                        <h3>Contact Info</h3>

                        <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                        <form id="main-contact-form01" name="contact-form" method="post" action="#">
                            @csrf
                            @method("POST")
                            <div class="form-group">
                                <input type="text" name="guestName" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="guestMessage" class="form-control" rows="8" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>

                        <!-- رسالة النجاح أو الخطأ -->
                        <div id="contact-form-message"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 Your Company. Designed by <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="{{asset('site/js/jquery.js')}}"></script>
    <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('site/js/mousescroll.js')}}"></script>
    <script src="{{asset('site/js/smoothscroll.js')}}"></script>
    <script src="{{asset('site/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('site/js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('site/js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('site/js/wow.min.js')}}"></script>
    <script src="{{asset('site/js/main.js')}}"></script>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // Make sure to include Isotope library in your project

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Isotope
    var $portfolioItems = document.querySelector('.portfolio-items');
    var iso = new Isotope($portfolioItems, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    // Get filter links
    var $filterLinks = document.querySelectorAll('.portfolio-filter a');
    $filterLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            // Remove active class from all links
            $filterLinks.forEach(function(link) {
                link.classList.remove('active');
            });
            // Add active class to clicked link
            this.classList.add('active');
            // Get filter value
            var filterValue = this.getAttribute('data-filter');
            // Filter items
            iso.arrange({ filter: filterValue });
        });
    });
});

    //---------------------------------------------------------------------------------
    $(document).ready(function () {
        $('#main-contact-form01').submit(function (event) {
            event.preventDefault();
            var formData = $(this).serialize();
            
            $.ajax({
                type: 'POST',
                url: '#',
                data: formData,
                success: function (response) {
                    $('#contact-form-message').html('<div class="alert alert-success">Message sent</div>');
                    $('#main-contact-form01')[0].reset(); // تفريغ الحقول في النموذج
                    setTimeout(function () {
                        $('#contact-form-message').fadeOut('slow'); // إخفاء رسالة النجاح بعد مرور فترة
                    }, 3000); // الفترة بالمللي ثانية، هنا 3000 تعني 3 ثواني
                },
                error: function (error) {
                    $('#contact-form-message').html('<div class="alert alert-danger">Try Again</div>');
                }
            });
        });
    });
</script>

</html>