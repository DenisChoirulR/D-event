@extends('landing-page.template')
@section('main')
<!--page title section-->
<section class="inner_cover" data-image-src="front/img/bg/bg-img.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                        contact us
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>  | </li>
                <li><span>Contact</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->

<!--contact section -->
<section class="pt100 pb100">
    <div class="container">
        <img src="front/img/logo-dark.png" alt="evento">
        <div class="row justify-content-center mt100">
            <div class="col-md-12 col-12">
                <div class="contact_info">
                    <h5>
                        Evento is here for you
                    </h5>
                    <p>
                       <h3> If you have any complaint, please contact us!!! </h3>
                    </p>
                    <ul class="social_list">
                        <li>
                            <a href="#"><i class="ion-social-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>

                    <ul class="icon_list pt50">
                        <li>
                            <i class="ion-location"></i>
                            <span>
                                        Krajan, Taskombang, Manisrenggo, Klaten<br/>
                                        Jawa Tengah ,Indonesia
                            </span>
                        </li>
                        <li>
                            <i class="ion-ios-telephone"></i>
                            <span>
                                       081334326266
                                </span>
                        </li>
                        <li>
                            <i class="ion-email-unread"></i>
                            <span>
                                    evento@gmail.com
                                </span>
                        </li>

                        <li>
                            <i class="ion-planet"></i>
                            <span>
                                    www.evento.com
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="col-12 mt70"> -->
                <!--map 
                <div id="map" data-lon="24.036176" data-lat=" 57.039986" class="map"></div>
                map end-->
            <!--</div> -->
        </div>

    </div>
</section>
<!--contact section end -->

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