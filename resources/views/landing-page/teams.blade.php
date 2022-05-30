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
                        Our Teams
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="#">Home</a>   |  </li>
                <li><span>Teams</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


<!--get tickets section -->
<section class="bg-img pt100 pb100" style="background-image: url('front/img/bg/tickets.png');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            @foreach($team as $t)
            <div class="col-md-3 text-md-left text-center color-light" style="margin-top: 20px;">
                <img src="storage/logo/{{ $t->logo }}" alt="speaker name">
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--get tickets section end-->
@endsection