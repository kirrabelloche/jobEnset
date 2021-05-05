@extends('layouts.front')

@section('content')

<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <img class="d-block w-100 h-100" src="img/couverture.jpg" alt="banner">
                <img class="d-block w-100 h-100" src="img/couverture1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100">
                    <div class="carousel-content container">
                        <div class="banner-inner mt-60">
                            <div class="text-center">
                                <h3 class="b-text">ENSET.StudJob</h3>
                                <p class="p-text"> Access  talents</p>
                                <div class="inline-search-area ml-auto mr-auto isa-3">
                                    <div class="search-boxs">
                                        <div class="search-col">
                                            <input type="text" name="search" class="form-control has-icon b-radius" placeholder="Job title or Keywords">
                                        </div>
                                        <div class="search-col">
                                            <select class="selectpicker search-fields" name="location">
                                                <option>Location</option>
                                                <option>New York</option>
                                                <option>Australian</option>
                                                <option>Canada</option>
                                                <option>London</option>
                                            </select>
                                        </div>
                                        <div class="find">
                                            <button class="btn button-theme btn-search btn-block b-radius">
                                                <i class="fa fa-search"></i><strong>Find Job</strong>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- Popular categories strat -->
<div class="popular-categories content-area-7 bg-grea">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Popular Categories</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="flaticon-money"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Accounting / Finance</h5>
                        <span>(2143)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="flaticon-student"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Education Training</h5>
                        <span>(2143)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="flaticon-shout"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Digital Marketing</h5>
                        <span>(2143)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="flaticon-tower"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Telecommunication</h5>
                        <span>(2143)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="flaticon-team"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Human Resource</h5>
                        <span>(2143)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="flaticon-sale"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Sales & Marketing</h5>
                        <span>(2143)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="flaticon-pencil"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Writing & Translations</h5>
                        <span>(2143)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="flaticon-doctor"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Health Care</h5>
                        <span>(2143)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="media categorie-box-2">
                    <a class="icon" href="#">
                        <i class="flaticon-car"></i>
                    </a>
                    <div class="media-body align-self-center">
                        <h5>Automotive Jobs</h5>
                        <span>(2143)</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Popular categories end -->

<!-- Counters strat -->
<div class="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-user"></i>
                    <h1 class="counter">1967</h1>
                    <p>Members</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-work"></i>
                    <h1 class="counter">667</h1>
                    <p>Jobs</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-portfolio"></i>
                    <h1 class="counter">475</h1>
                    <p>Resumes</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-branch"></i>
                    <h1 class="counter">475</h1>
                    <p>Companies</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Job section strat -->
<div class="job-section content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title-2">
                    <h1>Recent Jobs</h1>
                    <a href="#" class="float-right baj">Browse All Jobs</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="job-item media">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="http://placehold.it/80x80" alt="logo">
                        </div>
                    </a>
                    <div class="media-body align-self-center">
                        <h4><a href="#">Social Media Expert</a></h4>
                        <div class="job-ad-item">
                            <ul>
                                <li><i class="flaticon-pin"></i> New York City</li>
                                <li><i class="flaticon-clock"></i> Full Time</li>
                                <li><i class="flaticon-discount"></i> $25,00 - $35,00</li>
                            </ul>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-item media">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="http://placehold.it/80x80" alt="logo">
                        </div>
                    </a>
                    <div class="media-body align-self-center">
                        <h4><a href="#">Technical Database Engineer</a></h4>
                        <div class="job-ad-item">
                            <ul>
                                <li><i class="flaticon-pin"></i> New York City</li>
                                <li><i class="flaticon-clock"></i> Full Time</li>
                                <li><i class="flaticon-discount"></i> $25,00 - $35,00</li>
                            </ul>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-item media">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="http://placehold.it/80x80" alt="logo">
                        </div>
                    </a>
                    <div class="media-body align-self-center">
                        <h4><a href="#">Digital Marketing Executive</a></h4>
                        <div class="job-ad-item">
                            <ul>
                                <li><i class="flaticon-pin"></i> New York City</li>
                                <li><i class="flaticon-clock"></i> Full Time</li>
                                <li><i class="flaticon-discount"></i> $25,00 - $35,00</li>
                            </ul>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-item media">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="http://placehold.it/80x80" alt="logo">
                        </div>
                    </a>
                    <div class="media-body align-self-center">
                        <h4><a href="#">Senior UI & UX Designer</a></h4>
                        <div class="job-ad-item">
                            <ul>
                                <li><i class="flaticon-pin"></i> New York City</li>
                                <li><i class="flaticon-clock"></i> Full Time</li>
                                <li><i class="flaticon-discount"></i> $25,00 - $35,00</li>
                            </ul>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="job-item media mb-0">
                    <a class="icon" href="#">
                        <div class="company-logo">
                            <img src="http://placehold.it/80x80" alt="logo">
                        </div>
                    </a>
                    <div class="media-body align-self-center">
                        <h4><a href="#">Web Designer</a></h4>
                        <div class="job-ad-item">
                            <ul>
                                <li><i class="flaticon-work"></i> Hotel</li>
                                <li><i class="flaticon-pin"></i> New York City</li>
                                <li><i class="flaticon-clock"></i> Full Time</li>
                                <li><i class="flaticon-discount"></i> $25,00 - $35,00</li>
                            </ul>
                        </div>
                        <div class="div-right">
                            <a href="#" class="apply-button">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job section end -->

<!-- Testimonial start -->
<div class="testimonial">
    <div class="container">
        <div class="main-title-3">
            <h1>Kind Words From Happy Candidates</h1>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="http://placehold.it/60x60" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Eliane Perei
                                </h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="http://placehold.it/60x60" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Maria Blank
                                </h5>
                                <h6>Office Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="http://placehold.it/60x60" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Karen Paran
                                </h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="http://placehold.it/60x60" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- Blog start -->
<div class="blog content-area bg-grea">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Latest Blog</h1>
        </div>
        <div class="container">
            <div class="slick-slider-area">
                <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    <div class="slick-slide-item">
                        <div class="blog-3">
                            <div class="blog-photo">
                                <img src="http://placehold.it/340x226" alt="blog" class="img-fluid">
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="blog-details.html">Negotiate A Job Offer & Close The Deal</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                <div class="footer">
                                    <div class="float-left">
                                        <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2019</p>
                                    </div>
                                    <div class="float-right">
                                        <a href="#">Read more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="blog-3">
                            <div class="blog-photo">
                                <img src="http://placehold.it/340x226" alt="blog" class="img-fluid">
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="blog-details.html">How To Get Out Of Stress At Work</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                <div class="footer">
                                    <div class="float-left">
                                        <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2019</p>
                                    </div>
                                    <div class="float-right">
                                        <a href="#">Read more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="blog-3">
                            <div class="blog-photo">
                                <img src="http://placehold.it/340x226" alt="blog" class="img-fluid">
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="blog-details.html">How You Can Give Someone A Second Chance</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                <div class="footer">
                                    <div class="float-left">
                                        <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2019</p>
                                    </div>
                                    <div class="float-right">
                                        <a href="#">Read more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="blog-3">
                            <div class="blog-photo">
                                <img src="http://placehold.it/340x226" alt="blog" class="img-fluid">
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="blog-details.html">How You Can Give Someone A Second Chance</a>
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                <div class="footer">
                                    <div class="float-left">
                                        <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2019</p>
                                    </div>
                                    <div class="float-right">
                                        <a href="#">Read more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Intro section -->

<div class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="intro-text">
                    <h3>Download on App Store</h3>
                    <p>Searching for jobs never been that easy.</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="app-download-button">
                    <a href="#" class="android-app"><i class="flaticon-google-play"></i>Windows Store</a>
                    <a href="#" class="apple-app"><i class="flaticon-apple"></i>Apple Store</a>
                    <a href="#" class="android-app"><i class="flaticon-app-1"></i>Google Play</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


