@extends('landing-page.template')
@section('main')
<!--page title section-->
<section class="inner_cover" data-image-src="front/img/bg/inner_cover.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                        The Speakers
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="#">Home</a>  |  </li>
                <li><a href="#">About us</a> |  </li>
                <li><span>Speakers</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->

<!--about section -->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                About Our Speakers
            </h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing eli. Integer iaculis in lacus a sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <p>
                    In rhoncus massa nec  sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod quis. Maecenas ornare, ex in malesuada tempus.
                </p>
            </div>
        </div>
        <div class="row justify-content-center mt50">
            <div class="col-12 col-md-6">
                <div class="progress_container">

                    <div class="single_progressbar">
                        <div class="progress_text">
                            <span>Development</span>
                            <span class="progress_num" style="left:80%;">80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="80" aria-valuenow="80" style="width: 80%;"></div>
                        </div>
                    </div>

                    <div class="single_progressbar">
                        <div class="progress_text">
                            <span>Design</span>
                            <span class="progress_num" style="left:90%;">90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="90" aria-valuenow="90" style="width: 90%;"></div>
                        </div>
                    </div>

                    <div class="single_progressbar">
                        <div class="progress_text">
                            <span>SEO</span>
                            <span class="progress_num" style="left:75%;">75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-transitiongoal="75" aria-valuenow="75" style="width: 75%;"></div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row justify-content-center mt30">
                    <div class="col-12 col-md-4">
                        <div class="counter_box">
                           <span>+</span><span class="counter">1000</span>
                            <h5>Happy Audience</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="counter_box">
                            <span class="counter">14</span><span>K</span>
                            <h5>Followers on FB</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="counter_box">
                            <span class="counter">732</span>
                            <h5>Finished Projects</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about section end -->

<!--speaker section-->
<section class="pb100">
    <div class="row justify-content-center no-gutters">
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="front/img/speakers/s1.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Patricia Stone</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="front/img/speakers/s2.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">James Oliver</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="front/img/speakers/s3.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Carla Banks</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                 <div class="speaker_img">
                    <img src="front/img/speakers/s4.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">William Smith</h5>
                        <p class="position">CEO Company</p>
                    </div>
                 </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                 <div class="speaker_img">
                <img src="front/img/speakers/s5.png" alt="speaker name">
                <div class="info_box">
                    <h5 class="name">Jessica Black</h5>
                    <p class="position">CEO Company</p>
                </div>
            </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                <img src="front/img/speakers/s6.png" alt="speaker name">
                <div class="info_box">
                    <h5 class="name">Patricia Stone</h5>
                    <p class="position">CEO Company</p>
                </div>
            </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                <img src="front/img/speakers/s7.png" alt="speaker name">
                <div class="info_box">
                    <h5 class="name">Duncan Stan</h5>
                    <p class="position">CEO Company</p>
                </div>
            </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                <img src="front/img/speakers/s8.png" alt="speaker name">
                <div class="info_box">
                    <h5 class="name">Patricia Stone</h5>
                    <p class="position">CEO Company</p>
                </div>
            </div>
                <div class="speaker_social">
                    <p>
                        Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul>
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--speaker section end -->


<!--event countdown-->
<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center">Counter until the big event</h4>
                <div class="countdown"></div>
            </div>
        </div>
    </div>
</section>
<!--evernt countdown end-->

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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in aazzzCurabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
            </div>
            <div class="col-md-3 text-md-right text-center">
                <a href="#" class="btn btn-primary btn-rounded mt30">buy now</a>
            </div>
        </div>
    </div>
</section>
<!--get tickets section end-->
@endsection