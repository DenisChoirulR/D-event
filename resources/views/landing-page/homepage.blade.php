@extends('landing-page.template')
@section('main')
<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme" style="margin-bottom:40px;">
        <div class="cover_item" style="background: url('front/img/bg/slider.png');">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Get ready for
                            </h2>
                            <strong class="cover-xl-text">events</strong>
                            <p class="cover-date">
                                Extraordinary and Special Event in The World
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- <div class="cover_item" style="background: url('front/img/bg/slider.png');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-left">
                            <h2 class="cover-title">
                                Prepare yourself for the
                            </h2>
                            <strong class="cover-xl-text">conference</strong>
                            <p class="cover-date">
                                12-14 February 2018  - Los Angeles, CA.
                            </p>
                            <a href="#" class=" btn btn-primary btn-rounded" >
                                Buy Tickets Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('front/img/bg/slider.png');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Prepare yourself for the
                            </h2>
                            <strong class="cover-xl-text">conference</strong>
                            <p class="cover-date">
                                12-14 February 2018  - Los Angeles, CA.
                            </p>
                            <a href="#" class=" btn btn-primary btn-rounded" >
                                Buy Tickets Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <center>
        <div class="row justify-content-center">
            <div class="section_title col-12 col-md-5">
                <h3 class="title">Will Be Closing Soon</h3>
            </div>
        </div>
    </center>
    <div class="row justify-content-center">
        @foreach($event as $key => $e)
            <div class="col-12 col-md-5">
                <div class="blog_card">
                    <img src="storage/event/{{ $e->image }}" alt="blog News ">
                    <div class="blog_box_data">
                    <center>
                        <p class="blog_word">
                            {{ $e->event_description }}
                        </p>
                        <a href="/detail-event/{{ $e->event_id }}" class=" btn btn-primary btn-rounded" >
                            Buy Tickets Now
                        </a>
                    </center>
                    </div>
                </div>
            </div>
        @endforeach
            <!-- <div class="col-12 col-md-5">
                <div class="blog_card">
                    <img src="{{ asset('images-event/event1.jpg') }}" alt="blog News ">
                    <div class="blog_box_data">
                    <center>
                        <p class="blog_word">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in lacus a sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                        </p>
                        <a href="#" class=" btn btn-primary btn-rounded" >
                            Buy Tickets Now
                        </a>
                    </center>
                    </div>
                </div>
            </div> -->
        </div>
</section>
<!--brands section
<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                our partners
            </h3>
        </div>
        <div class="brand_carousel owl-carousel">
            <div class="brand_item text-center">
                <img src="front/img/brands/b1.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="front/img/brands/b2.png" alt="brand">
            </div>

            <div class="brand_item text-center">
                <img src="front/img/brands/b3.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="front/img/brands/b4.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="front/img/brands/b5.png" alt="brand">
            </div>
        </div>
    </div>
</section>
brands section end -->

<!--get tickets section -->
<section class="bg-img pt100 pb100" style="background-image: url('front/img/bg/tickets.png');">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">
                GEt your tikets
            </h3>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9 text-md-left text-center color-light">
                Provides a variety of events ranging from music, seminars, sports, exhibitions and much more. What are you waiting for? C'mon get your tickets!
            </div>
            <div class="col-md-3 text-md-right text-center">
                <a href="/event" class="btn btn-primary btn-rounded mt30">buy now</a>
            </div>
        </div>
    </div>
</section>
<!--get tickets section end-->
@endsection
