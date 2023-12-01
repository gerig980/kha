@include('layouts.frontend.partials.header-assets')
  <body>
    @include('layouts.frontend.partials.header')

    <section class="about-us-2" style="background-image: url({{URL::asset('frontend/assets/aboutus/about-us-hero.png')}});
            background-repeat: no-repeat;
            background-size: cover;
            height: auto;">
        <div class="container-fluid about-us-hero">
            <div class="centered">
                <h1>{{__('about.about us')}}</h1>
                <p>{{__('about.about desc')}}</p>
            </div>
        </div>
    </section>
    <section class="about-us-mission">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="our-mision-text">
                        <h2>{{__('about.our mission')}}</h2>
                        <p>{{__('about.mission desc')}}</p>
                    </div>
                </div>
                <div class="col-lg-3 pe-0">
                    <img src="{{URL::asset('frontend/assets/aboutus/Group 235.png')}}" alt="" class="img-fluid w-100">
                </div>
                <div class="col-lg-3">
                    <img src="{{URL::asset('frontend/assets/aboutus/Group 235 (4).png')}}" alt="" class="img-fluid w-100 pb-4">
                    <img src="{{URL::asset('frontend/assets/aboutus/Group 235 (4).png')}}" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </section>

    
    <section class="about-leader">
        <div class="container">
            <div class="row">
                <div class="about-leader-text">
                      <h1>{{__('about.meet lead')}}</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
                </div>
            </div>
            <div class="leader-about">
            <div class="row ">
               
                    <div class=" col-6 col-md-3 col-sm-6 text-center">
                        <img src="{{URL::asset('frontend/assets/aboutus/Ellipse 16.png')}}" alt="">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem, ipsum.</p>
                        <h3>Ceo</h3>
                    </div>
                    <div class="col-6 col-md-3 col-sm-6 text-center leader">
                        <img src="{{URL::asset('frontend/assets/aboutus/Ellipse 16.png')}}" alt="">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem, ipsum.</p>
                        <h3>Ceo</h3>
                    </div>
                    <div class="col-6 col-md-3 col-sm-6 text-center leader">
                        <img src="{{URL::asset('frontend/assets/aboutus/Ellipse 16.png')}}" alt="">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem, ipsum.</p>
                        <h3>Ceo</h3>
                    </div>
                    <div class="col-6 col-md-3 col-sm-6 text-center leader">
                        <img src="{{URL::asset('frontend/assets/aboutus/Ellipse 16.png')}}" alt="">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem, ipsum.</p>
                        <h3>Ceo</h3>
                    </div>
            </div>
        </div>
         </div>
    </section>
    <section class="about-gallery">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="about-gallery-title">
                    <h1>{{__('about.gallery')}}</h1>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block  w-100" src="{{URL::asset('frontend/assets/aboutus/Rectangle 176.png')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('frontend/assets/aboutus/Rectangle 176.png')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('frontend/assets/aboutus/Rectangle 176.png')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                </a>
            </div>
        </div>
    </section>
    <!--<section class="professional-staff">-->
    <!--    <div class="container p-0">-->
    <!--        <div class="row">-->
    <!--            <div class="professional-staff-title">-->
    <!--                <h1>{{__('about.meet staff')}}</h1>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="professional-staff-images">-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-10">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-lg-4 pe-0">-->
    <!--                            <div class="professional-staff-image" style="height:100%">-->
    <!--                                <img src="{{URL::asset('frontend/assets/aboutus/staff/Rectangle 180 (1).png')}}" alt="" style="width:100%;">-->
    <!--                                <div class="top-left">-->
    <!--                                    <h4>Lorem Ipsum</h4>-->
    <!--                                    <p> Lorem Ipsum</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-2 pe-0">-->
    <!--                            <div class="professional-staff-image pb-3">-->
    <!--                                <img src="{{URL::asset('frontend/assets/aboutus/staff/Rectangle 180 (3).png')}}" alt="" style="width:100%;">-->
    <!--                                <div class="top-left">-->
    <!--                                    <h4>Lorem Ipsum</h4>-->
    <!--                                    <p> Lorem Ipsum</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="professional-staff-image ">-->
    <!--                                <img src="{{URL::asset('frontend/assets/aboutus/staff/Rectangle 180 (3).png')}}" alt="" style="width:100%;">-->
    <!--                                <div class="top-left">-->
    <!--                                    <h4>Lorem Ipsum</h4>-->
    <!--                                    <p> Lorem Ipsum</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-6 pe-0">-->
    <!--                            <div class="professional-staff-image">-->
    <!--                                <img src="{{URL::asset('frontend/assets/aboutus/staff/Rectangle 180 (4).png')}}" alt="" style="width:100%;">-->
    <!--                                <div class="top-left">-->
    <!--                                    <h4>Lorem Ipsum</h4>-->
    <!--                                    <p> Lorem Ipsum</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-lg-5 pe-0">-->
    <!--                            <div class="professional-staff-image pt-2">-->
    <!--                                <img src="{{URL::asset('frontend/assets/aboutus/staff/Rectangle 180 (6).png')}}" alt="" style="width:100%;">-->
    <!--                                <div class="top-left">-->
    <!--                                    <h4>Lorem Ipsum</h4>-->
    <!--                                    <p> Lorem Ipsum</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-2 pe-0">-->
    <!--                            <div class="professional-staff-image pt-2">-->
    <!--                                <img src="{{URL::asset('frontend/assets/aboutus/staff/Rectangle 180 (11).png')}}" alt="" style="width:100%;">-->
    <!--                                <div class="top-left">-->
    <!--                                    <h4>Lorem Ipsum</h4>-->
    <!--                                    <p> Lorem Ipsum</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="col-lg-5 pe-0">-->
    <!--                            <div class="professional-staff-image pt-2">-->
    <!--                                <img src="{{URL::asset('frontend/assets/aboutus/staff/Rectangle 180 (8).png')}}" alt="" style="width:100%;">-->
    <!--                                <div class="top-left">-->
    <!--                                    <h4>Lorem Ipsum</h4>-->
    <!--                                    <p> Lorem Ipsum</p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-2">-->
    <!--                    <div class="professional-staff-image">-->
    <!--                        <img src="{{URL::asset('frontend/assets/aboutus/staff/Rectangle 180 (5).png')}}" alt="" style="width:100%;">-->
    <!--                        <div class="top-left">-->
    <!--                            <h4>Lorem Ipsum</h4>-->
    <!--                            <p> Lorem Ipsum</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="professional-staff-image pt-2">-->
    <!--                        <img src="{{URL::asset('frontend/assets/aboutus/staff/Rectangle 180 (9).png')}}" alt="" style="width:100%;">-->
    <!--                        <div class="top-left">-->
    <!--                            <h4>Lorem Ipsum</h4>-->
    <!--                            <p> Lorem Ipsum</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        </div>-->
    <!--</section>-->
        <section class="about-leader">
        <div class="container">
            <div class="row">
                <div class="about-leader-text">
                      <h1>{{__('about.meet lead')}}</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
                </div>
            </div>
            <div class="leader-about">
            <div class="row ">
               
                    <div class=" col-6 col-md-3 col-sm-6 text-center">
                        <img src="{{URL::asset('frontend/assets/aboutus/Rectangle 180 (3).png')}}" alt="">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem, ipsum.</p>
                        <h3>Ceo</h3>
                    </div>
                    <div class="col-6 col-md-3 col-sm-6 text-center leader">
                        <img src="{{URL::asset('frontend/assets/aboutus/Rectangle 180 (3).png')}}" alt="">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem, ipsum.</p>
                        <h3>Ceo</h3>
                    </div>
                    <div class="col-6 col-md-3 col-sm-6 text-center leader">
                        <img src="{{URL::asset('frontend/assets/aboutus/Rectangle 180 (3).png')}}" alt="">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem, ipsum.</p>
                        <h3>Ceo</h3>
                    </div>
                    <div class="col-6 col-md-3 col-sm-6 text-center leader">
                        <img src="{{URL::asset('frontend/assets/aboutus/Rectangle 180 (3).png')}}" alt="">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem, ipsum.</p>
                        <h3>Ceo</h3>
                    </div>
            </div>
        </div>
         </div>
    </section>
    
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')

