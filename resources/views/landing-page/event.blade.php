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
                       Events
                    </h3>
                </div>
            </div>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>  |   </li>
                <li><span>Events</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->

<!--events section -->
<section class="pb100">
    <div class="row justify-content-center no-gutters">
        @foreach($event as $key => $e)
        <div class="col-md-3 col-sm-6">
            <div class="speaker_box" style="padding:20px;">
            <a href="/detail-event/{{ $e->event_id }}" style="text-decoration:none;">
                <div class="speaker_img">
                    <img src="storage/event/{{ $e->image }}" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">{{ $e->event_name }}</h5>
                        <p class="position">{{ $e->name }}</p>
                    </div>
                </div>
                <div class="speaker_social" style="border:1px solid #787879;">
                    <!-- <center>
                        <h5 class="name">Event 1</h5>
                    </center> -->
                    <ul>
                        <li><i class="ion-ios-calendar-outline"></i><span style="margin-left:15px;">
                            {{ date("j F Y",strtotime($e->start_date)) }}
                            @if($e->start_date != $e->end_date) - {{ date("j F Y",strtotime($e->end_date)) }}@endif
                        </span></li><br><br>
                        <li><i class="ion-ios-clock-outline"></i><span style="margin-left:15px;">
                            {{ date("g:i a",strtotime($e->start_time)) }} - {{ date("g:i a",strtotime($e->end_time)) }} 
                        </span></li><br><br>
                        <li><i class="ion-ios-location-outline"><span style="margin-left:15px;">{{ $e->address }}</span></i></li>
                    </ul>
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</section>
<!--event section end -->



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
                <a href="#" class="btn btn-primary btn-rounded mt30">buy now</a>
            </div>
        </div>
    </div>
</section>
<!--get tickets section end-->
@endsection
