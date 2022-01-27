<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Energy Lumens</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">




        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->


        <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('js/select.dataTables.min.css')}}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">

        <link href="{{asset('css/theme.css')}}" rel="stylesheet" />



        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body class="antialiased">
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
                <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="#">
                        <img src="{{asset('assets/img/energy-lumens-logo-color.png')}}" width="160">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Home</a></li>
                            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#about_us">About us</a></li>
                            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#services">Services</a></li>
                            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#products">Products</a></li>
                            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#testimonial">Testimonial</a></li>
                            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#faq">FAQ</a></li>
                            <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#contact">Contact us</a></li>
                        </ul>
                        @if (Route::has('login'))
                        <div class="ps-lg-5">
                            @auth
                                <a href="{{ url('/products') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Products List</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-md btn-primary rounded-pill order-0">Log in</a>

                               {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-dm btn-primary rounded-pill order-0">Register</a>
                                @endif--}}
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </nav>
            <section class="py-0" id="home">
                <div class="bg-holder" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
                </div>
                <!--/.bg-holder-->

                <div class="container position-relative">
                    <div class="row align-items-center py-8">
                        <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end"><img class="img-fluid" src="assets/img/landing.png" width="650" alt="" /></div>
                        <div class="col-md-7 col-lg-6 text-center text-md-start"><span class="badge bg-light rounded-pill text-dark align-items-center d-flex flex-row-reverse justify-content-end mx-auto mx-md-0 ps-0 w-75 w-sm-50 w-md-75 w-xl-50 mb-3">Save - Energy Money & Planet<img class="img-fluid float-start me-3" src="assets/img/illustrations/arrow-right.png" alt=""/></span>
                            <h1 class="mb-4 display-3 fw-bold lh-sm">Your Lighting Partner</h1>
                           <a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Explore</a><a class="btn btn-link ps-md-4" href="#" role="button"> Watch demo video</a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-7">

                <div class="container">
                    <div class="row">
                        <div class="col-12 mx-auto align-items-center text-center">
                            <p class="mb-4">Trusted by companies like</p>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center justify-content-lg-around">
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-1.png" alt="" /></div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-2.png" alt="" /></div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-3.png" alt="" /></div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-4.png" alt="" /></div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-2 px-md-0 mb-5 mb-lg-0 text-center"><img src="assets/img/gallery/company-1.png" alt="" /></div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


            <section class="py-5" id="about_us">
                <div class="container-lg">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-lg-6 order-md-0 text-center text-md-start"><img class="img-fluid" src="assets/img/about-us.png" width="550" alt="" /></div>
                        <div class="col-md-7 col-lg-6 px-sm-5 px-md-0">
                            <h6 class="fw-bold fs-4 display-3 lh-sm">About Us</h6>
                            <p class="my-4">Energy Lumens delivers leading class performance and reliability.</p>
                            <div class="d-flex align-items-center mb-5">
                                <div><img class="img-fluid" src="assets/img/illustrations/fast-performance.png" width="90" alt="" /></div>
                                <div class="px-4">
                                    <h5 class="fw-bold text-danger">Product Credibility</h5>
                                    <p class="m-w-500">
                                        We offer the most maintenance friendly solution on the market, allowing much easier access and inspection, and significantly reducing overall resources and expenditure.
                                        All Energy Lumens products are designed and manufactured in the INDIA to the highest standards. We’re so confident that all of our products come with a 3 year warranty. We are committed to Technology.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <div><img class="img-fluid" src="assets/img/illustrations/prototype.png" width="90" alt="" /></div>
                                <div class="px-4">
                                    <h5 class="fw-bold text-primary">Product Quality</h5>
                                    <p class="m-w-500">
                                        All Energy Lumens products combine cutting edge technologies with the highest levels of quality to deliver outstanding performance and reliability. Our philosophy is INNOVATION + ILLUMINATION and we will always look to lead lighting trends in the market.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <div><img class="img-fluid" src="assets/img/illustrations/vector.png" width="90" alt="" /></div>
                                <div class="px-4">
                                    <h5 class="fw-bold text-success">Our Thoughts</h5>
                                    <p class="m-w-500">
                                        We are proud to say that we are manufacturing in India under “MAKE IN INDIA” initiative and providing LED lighting solution to the world. We understand the needs of our customers and design and manufacture our products for their satisfaction. We continue to cherish this ultimate passion for LED lighting innovations.

                                        We have members in our team who are skilled and have decades of experience in the lighting industry.

                                        We're so confident in the quality and performance of our products that they all come with a 5-year warranty.


                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-5">

                <div class="container">
                    <div class="row align-items-center mb-6">
                        <div class="col-md-5 col-lg-4 offset-lg-1">
                            <h1 class="fw-bold lh-base">ENERGY LUMENS WARRANTY STATEMENT</h1>
                        </div>
                        <div class="col-md-6 col-lg-5 offset-lg-1 border-start py-5 ps-5">
                            <p class="mb-0">The Energy Lumens warranty protects Energy Lumens LED products against defects for a period of 3 years.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
                            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/automatic.png" width="90" alt="" /></div>
                            <h5 class="fw-bold text-danger"></h5>
                            <p class="mt-2 mb-0">The Energy Lumens warranty covers defects in component or workmanship.</p>
                        </div>
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
                            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/network.png" width="90" alt="" /></div>
                            <h5 class="fw-bold text-primary"></h5>
                            <p class="mt-2 mb-0">Full technical support is provided, including field-based support.</p>
                        </div>
                        <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
                            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/rewards.png" width="90" alt="" /></div>
                            <h5 class="fw-bold text-success"></h5>
                            <p class="mt-2 mb-0">Replacement parts or product may be new or refurbished and will meet or exceed the specification of the original parts or products..</p>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->





            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-6">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4" src="assets/img/illustrations/call-to-action.png" width="550" alt="" /></div>
                        <div class="col-md-6 text-center text-md-start offset-md-1">
                            <h6 class="fw-bold fs-4 display-3 lh-sm">Designed &amp; built by<br />the Energy Lumens </h6>
                            <p class="my-4 pe-xl-5"> </p><a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Learn more</a>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->




            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-6" id="services">

                <div class="container">
                    <div class="row justify-content-center mb-6">
                        <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                            <h6 class="fw-bold fs-4 display-3 lh-sm">Our services </h6>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-6">
                            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/app.png" width="90" alt="" />
                                <h5 class="fw-bold">Commercial Lighting</h5>
                                <p class="mb-md-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn btn-link ps-md-4" href="#" role="button"> Product Details</a>
                            </div>
                        </div>
                      {{--  <div class="col-md-4 mb-6">
                            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/time-award.png" width="90" alt="" />
                                <h5 class="fw-bold">Retail & Hospital Lighting</h5>
                                <p class="mb-md-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>--}}
                        <div class="col-md-4 mb-6">
                            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/cloud.png" width="90" alt="" />
                                <h5 class="fw-bold">Industrial Lighting</h5>
                                <p class="mb-md-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn btn-link ps-md-4" href="#" role="button"> Product Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-6">
                            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/customization.png" width="90" alt="" />
                                <h5 class="fw-bold">Outdoor Lighting</h5>
                                <p class="mb-md-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn btn-link ps-md-4" href="#" role="button"> Product Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-6">
                            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/ux.png" width="90" alt="" />
                                <h5 class="fw-bold">Retail & Hospital Lighting</h5>
                                <p class="mb-md-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a class="btn btn-link ps-md-4" href="#" role="button"> Product Details</a>
                            </div>
                        </div>
                        {{--<div class="col-md-4 mb-6">
                            <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/support.png" width="90" alt="" />
                                <h5 class="fw-bold">Customer Support</h5>
                                <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                            </div>
                        </div>--}}
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->




            <!-- ============================================-->
            <!-- <section> begin ============================-->
           {{-- <section class="py-6">

                <div class="container">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-5 order-md-1 text-center text-md-start"><img class="img-fluid mb-4" src="assets/img/illustrations/ultimate-feature.png" alt="" /></div>
                            <div class="col-md-6 text-center text-md-start">
                                <h6 class="fw-bold fs-4 display-3 lh-sm">Ultimate features<br />that we built</h6>
                                <p class="my-4 pe-xl-5"> The rise of mobile devices transforms the way we consume information entirely.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" /></div>
                                            <h5 class="fw-bold text-undefined">App Development</h5>
                                            <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/ux.png" width="90" alt="" /></div>
                                            <h5 class="fw-bold text-undefined">UX Planning</h5>
                                            <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/cloud.png" width="90" alt="" /></div>
                                            <h5 class="fw-bold text-undefined">Cloud Storage</h5>
                                            <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/support.png" width="90" alt="" /></div>
                                            <h5 class="fw-bold text-undefined">Customer support</h5>
                                            <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                        </div>
                                    </div>
                                </div><a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">See all</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>--}}
            <!-- <section> close ============================-->
            <!-- ============================================-->




            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-8" id="products">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xxl-5 text-center mb-3">
                            <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">Get awesome Products, without extra charges</h6>
                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card position-relative">
                                <div class="card-body">
                                    <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                                       <div class="card">
                                                           <img class="card-img-top" src="{{asset('assets/img/high-bay-light.png')}}" width="100" alt="Led light">
                                                           <div class="card-body">
                                                               <h5 class="card-title">Circular bay Light - 90</h5>
                                                               <p class="card-text">Ascetically designed robust LED high bay equipped with specially designed heat sink and reliable integrated energy efficient driver to meet the different requiment  across industrial application.</p>
                                                               <p class="card-text"><small class="text-muted">Model Number</small></p>
                                                           </div>
                                                       </div>
                                                   </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                                        <div class="card">
                                                            <img class="card-img-top" src="{{asset('assets/img/high-bay-light.png')}}" width="100" alt="Led light">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Circular bay Light - 90</h5>
                                                                <p class="card-text">Ascetically designed robust LED high bay equipped with specially designed heat sink and reliable integrated energy efficient driver to meet the different requiment  across industrial application.</p>
                                                                <p class="card-text"><small class="text-muted">Model Number</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                                        <div class="card">
                                                            <img class="card-img-top" src="{{asset('assets/img/down-light-adjustable-15w.jpeg')}}" width="100" alt="Led light">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Circular bay Light - 90</h5>
                                                                <p class="card-text">Ascetically designed robust LED high bay equipped with specially designed heat sink and reliable integrated energy efficient driver to meet the different requiment  across industrial application.</p>
                                                                <p class="card-text"><small class="text-muted">Model Number</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">
                                                    @foreach($products as $product)
                                                        <div class="col-sm-12 col-md-6 col-lg-4">
                                                            <div class="card">
                                                                <img class="card-img-top" src="{{ asset('/image/'.$product->image) }}" width="100" alt="Led light">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{$product-> name}}</h5>
                                                                    <p class="card-text">
                                                                        @foreach(config('constants.categories') as $key => $value)
                                                                            @if($key == $product->category)
                                                                                {{$value}}
                                                                            @endif
                                                                        @endforeach
                                                                    </p>
                                                                    <p class="card-text"><small class="text-muted">{{ $product->code }}</small></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


            <section class="py-8" id="testimonial">
                <div class="container-lg">
                    <div class="row flex-center">
                        <div class="col-sm-10 col-md-5 col-lg-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4" src="assets/img/illustrations/testimonial.png" alt="" /></div>
                        <div class="col-sm-10 col-md-6 col-lg-6 text-center text-md-start offset-md-1">
                            <h6 class="fw-bold fs-4 display-3 lh-sm"> Meet Client Satisfaction <br />by using product</h6>
                            <p class="my-4 pe-xl-5"> The rise of mobile devices transforms the way we consume.Elevant channels such as Facebook.</p>
                            <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <div class="row h-100">
                                            <div class="col-12">
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <h5 class="my-4 fw-bold lh-sm">User friendly &amp; Customizable</h5>
                                                <p class="mb-0 text-center text-md-start">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                            </div>
                                            <div class="col-xl-6 pt-4 d-flex d-sm-block flex-center">
                                                <div class="d-flex align-items-md-center"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user.png" width="100" alt="" />
                                                    <div class="w-lg-50 my-3">
                                                        <h5 class="mb-0 fw-bold">Zoltan Nemeth</h5>
                                                        <p class="fw-normal mb-0">CEO of Pixer Lab</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <div class="row h-100">
                                            <div class="col-12">
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <h5 class="my-4 fw-bold lh-sm">User friendly &amp; Customizable</h5>
                                                <p class="mb-0 text-center text-md-start">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                            </div>
                                            <div class="col-xl-6 pt-4 d-flex d-sm-block flex-center">
                                                <div class="d-flex align-items-md-center"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user-1.png" width="100" alt="" />
                                                    <div class="w-lg-50 my-3">
                                                        <h5 class="mb-0 fw-bold">Jhon Doe</h5>
                                                        <p class="fw-normal mb-0">Web Developer</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row h-100">
                                            <div class="col-12">
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFCC00" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                                <h5 class="my-4 fw-bold lh-sm">User friendly &amp; Customizable</h5>
                                                <p class="mb-0 text-center text-md-start">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                            </div>
                                            <div class="col-xl-6 pt-4 d-flex d-sm-block flex-center">
                                                <div class="d-flex align-items-md-center"><img class="img-fluid me-4 me-md-3 me-lg-4" src="assets/img/gallery/user-2.png" width="100" alt="" />
                                                    <div class="w-lg-50 my-3">
                                                        <h5 class="mb-0 fw-bold">Viezh Robert</h5>
                                                        <p class="fw-normal mb-0">UI/UX Designer</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative mt-sm-n5"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-8" id="faq">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 text-center mb-3">
                            <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">Frequently asked questions</h6>
                            <p class="mb-5">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                    <div class="row flex-center">
                        <div class="col-lg-9">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item mb-2">
                                    <h2 class="accordion-header" id="heading1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><span class="mb-0 fw-bold text-start fs-1 text-1000">How to contact with riders emergency?</span></button>
                                    </h2>
                                    <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-100">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-2">
                                    <h2 class="accordion-header" id="heading2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2"><span class="mb-0 fw-bold text-start fs-1 text-1000">App installation failed, how to update system information?</span></button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-100">You can issue either partial or full refunds. There are no fees to refund a charge, but the fees from the original charge are not returned.</div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-2">
                                    <h2 class="accordion-header" id="heading3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3"><span class="mb-0 fw-bold text-start fs-1 text-1000">Website reponse taking time, how to improve?</span></button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-100">Disputed payments (also known as chargebacks) incur a $15.00 fee. If the customer’s bank resolves the dispute in your favor, the fee is fully refunded.</div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-2">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4"><span class="mb-0 fw-bold text-start fs-1 text-1000">New update fixed all bug and issues</span></button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-100">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-2">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5"><span class="mb-0 fw-bold text-start fs-1 text-1000">How to contact with riders emergency?</span></button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-100">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


            {{--contact form start--}}
            <section class="py-5" id="contact" style="background: #F5F7FF;">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 text-center">
                        <h6 class="fw-bold fs-4 display-3 lh-sm">Enquiry Form</h6>
                        <p class="mb-5"></p>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12 col-md-8 col-lg-6 grid-margin stretch-card">
                        <div class="card" style="border: none !important; border-radius: 20px;">
                            <div class="card-body">
                                <form class="forms-sample enquiry-form p-3" id="enquiry_form">
                                    <div class="alert alert-danger display-error" style="display: none;">
                                    </div>
                                    <div class="alert alert-success display-success" style="display: none">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                    </div>
                                    {{--<div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                            <span class="input-group-append">
                                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>--}}
                                    <div class="form-group">
                                        <label for="exampleInputCity1">Mobile Number</label>
                                        <input type="number" class="form-control" name="mobile" id="phone" placeholder="Mobile" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                                    </div>
                                    <div class="d-inline-flex align-items-center justify-content-center w-100 text-center">
                                        <button type="submit" class="btn btn-md btn-primary rounded-pill mb-3 mr-3 enquiry-submit">Submit</button>
                                        <button class="btn btn-md btn-light rounded-pill mb-3">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-6 order-md-1 text-center text-md-start z-index-2 cta-image">
                        <div class="d-inline-flex align-items-center justify-content-center w-100">
                            <img class="img-fluid mb-4 mb-md-0" src="assets/img/illustrations/cta.png" width="850" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            {{--contact form end--}}



            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="py-8 bg-1000">

                <div class="container">
                    <div class="row flex-center">
                        <div class="col-auto mb-5">
                            <a class="pe-2 d-flex align-items-center text-decoration-none fw-bold fs-3" href="#">
                                <img src="{{asset('assets/img/energy-lumens-logo-white.png')}}" width="160">
                            </a>
                        </div>
                    </div>
                    <div class="row flex-center">
                        <div class="col-auto mb-5">
                            <ul class="list-unstyled list-inline mb-0">
                                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#home">Home</a></li>
                                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#about_us">About us</a></li>
                                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#services">Services</a></li>
                                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#products">Products</a></li>
                                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#testimonial">Testimonial</a></li>
                                <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#faq">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row flex-center">
                        <div class="col-auto mb-5">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                                        <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                        </svg></a></li>
                                <li class="list-inline-item me-3"><a href="#!">
                                        <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                        </svg></a></li>
                                <li class="list-inline-item me-3"><a href="#!">
                                        <svg class="bi bi-hash" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 16 16">
                                            <path d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z"></path>
                                        </svg></a></li>
                                <li class="list-inline-item me-3"><a href="#!">
                                        <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row flex-center">
                        <div class="col-auto">
                            <p class="mb-0 fs--1 text-700">&copy; This template is made with&nbsp;
                                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16">
                                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                                </svg>&nbsp;by&nbsp;<a class="text-700" href="https://themewagon.com/" target="_blank">Bharathi kannan </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->


        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/is.min.js')}}"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{asset('js/theme.js')}}"></script>



        {{--<script src="{{asset('js/dataTables.select.min.js')}}"></script>--}}


        <!-- plugins:js -->
        <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('js/dataTables.select.min.js')}}"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{asset('js/off-canvas.js')}}"></script>
        <script src="{{asset('js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('js/template.js')}}"></script>
        <script src="{{asset('js/settings.js')}}"></script>
        <script src="{{asset('js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{asset('js/dashboard.js')}}"></script>
        <script src="{{asset('js/Chart.roundedBarCharts.js')}}"></script>


        <script type="text/javascript">

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(".enquiry-submit").click(function(e){

                e.preventDefault();

                var name = $("input[name=name]").val();
                var email = $("input[name=email]").val();
                var mobile_no = $("input[name=mobile]").val();
                var message = $("textarea[name=message]").val();

                if(validateCheck() == true)
                {
                    $.ajax({
                        type:'POST',
                        url:"/store-enquiry",
                        data:{name:name, email:email, mobile_no:mobile_no, message:message},
                        success:function(data){
                                $(".display-success").html("<ul>"+ data.success +"</ul>");
                                $(".display-success").css("display","block");
                                formReset();
                        },
                        error: function(data){
                            $(".display-success").css("display","none");
                            $('.display-error').text('');
                            var errors = data.responseJSON.errors;
                            for(var i in errors){
                                $('.display-error').append(errors[i][0]);
                                console.log(errors[i][0])
                            }
                            $(".display-error").css("display","block");
                        }
                    });
                }



            });



            function validateCheck() {

                var name = $("#name").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var message = $("#message").val();
                var regex = /1?[\s-]?\(?(\d{3})\)?[\s-]?\d{3}[\s-]?\d{4}/;
                if(name == ''){
                    $(".display-error").text("Name is required");
                    $(".display-error").css("display","block");
                    $(".form-control").removeClass('error');
                    $("#name").addClass('error');
                    timeOut();
                    return false;
                }
                else if(email == ''){
                    $(".display-error").text("Email is required");
                    $(".display-error").css("display","block");
                    $(".form-control").removeClass('error');
                    $("#email").addClass('error');
                    timeOut();
                    return false;
                }
                else if(!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)){
                    $(".display-error").text("Email Format is error");
                    $(".display-error").css("display","block");
                    $(".form-control").removeClass('error');
                    $("#email").addClass('error');
                    return false;
                }
                else if(phone == ''){
                    $(".display-error").text("Phone is required");
                    $(".display-error").css("display","block");
                    $(".form-control").removeClass('error');
                    $("#phone").addClass('error');
                    timeOut();
                    return false;
                }
                else if(!phone.match(regex)){
                    $(".display-error").text("Phone number format mismatch");
                    $(".display-error").css("display","block");
                    $(".form-control").removeClass('error');
                    $("#phone").addClass('error');
                    timeOut();
                    return false;
                }
                else if(message == ''){
                    $(".display-error").text("Message is required");
                    $(".display-error").css("display","block");
                    $(".form-control").removeClass('error');
                    $("#message").addClass('error');
                    timeOut();
                    return false;
                }
                else{
                    timeOut();
                    return true;
                }

            }

            function timeOut() {
                setTimeout(function() {
                    $(".form-control").removeClass('error');
                    $(".display-error").css("display","none");
                    $(".display-success").css("display","none");
                }, 3000);
            }
            function formReset() {
                $("#name").val('')
                $("#email").val('');
                $("#phone").val('');
                $("#message").val('');
                timeOut();
            }

        </script>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
    </body>
</html>
