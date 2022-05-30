@extends('landing-page.template')
@section('main')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!--page title section-->
<section class="inner_cover" data-image-src="front/img/bg/bg-img.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                        Event
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>   |  </li>
                <li><a href="/event">Event</a>   |  </li>
                <li><span>Detail Event</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


<!--events section -->
<section class="pt100 pb100">
    <div class="container">
        <div class="row">
            <!--blog section start -->
            <div class="col-12 col-md-6">
                <div class="blog_card">
                    <img src="{{ asset("storage/event/$event->image") }}" alt="speaker name">
                </div>
            </div>
            <!--blog section end-->

            <!--sidebar section -->
            <div class="col-12 col-md-4">
                <div class="sidebar">
                    <div class="widget widget_categories">
                        <h4 class="widget-title">
                            {{ $event->event_name }}
                        </h4>
                        <ul>
                            <li><i class="ion-ios-calendar-outline" style="color:#000;"></i><span style="margin-left:15px;">{{ date("j F Y",strtotime($event->start_date)) }}
                            @if($event->start_date != $event->end_date) - {{ date("j F Y",strtotime($event->end_date)) }}@endif</span></li>
                            <li><i class="ion-ios-clock-outline" style="color:#000;"></i><span style="margin-left:15px;">{{ date("g:i a",strtotime($event->start_time)) }} - {{ date("g:i a",strtotime($event->end_time)) }}</span></li>
                            <li><i class="ion-ios-location-outline" style="color:#000;"></i><span style="margin-left:15px;">{{ $event->place }}</span></li>
                        </ul>
                        <br>
                        <p class="blog_word">
                            {{ $event->event_description }}
                        </p>
                        
                    </div>
                </div>
            </div>
            <!--sidebar section end -->

        </div>

        @if ($message = Session::get('error'))
          <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
          </div>
        @endif

        @if($booking == null)
        <div class="row">
            @foreach($event->ticket as $key => $t)
            <div class="col-6 col-md-6">
                <div class="blog_card">
                    <div class="blog_box_data">
                        <div class="col-md-12 ticket" style="background-color:#000;color:#FFF;padding:10px;">
                            <div style="border:1px dashed #FFFFFF;padding:20px;">
                                <center><h4 style="color:#FFF !important;">{{ $t->category }} - {{ $t->ordered }}/{{ $t->capacity }} </h4></center>
                                <hr style="background-color:#FFFFFF;">
                                <!-- <p>Start Time - End Time<br>
                                    Berakhir pada Tanggal End Date</p> -->
                                <div class="row">
                                    <div class="col-3 col-md-3">
                                        <button type="button" class="btn btn-white btn-minus" data-type="minus" data-field="quant[1]">
                                            <p style="font-size:16px;">-</p>
                                        </button>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <!-- name="quant[1]" -->
                                        <input type="text" onchange="SubTotalCount()" name="qty{{ $event->id }}" class="form-control input-number qty-input" value="0" min="0" max="100" style="text-align:center;font-size:14px;">
                                    </div>
                                    <div class="col-3 col-md-3">
                                        <button type="button" class="btn btn-default btn-plus" data-type="plus" data-field="quant[1]">
                                          <p style="font-size:16px;">+</p>
                                        </button>
                                    </div>
                                </div>
                                    <!-- <button type="submit" class="btn btn-default btn-number">
                                      <p style="font-size:16px;">Order Now</p>
                                    </button> -->
                                

                            </div>
                            <!-- <a href="#" class="btn btn-primary btn-rounded mt30">buy tickets now</a> -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 col-md-12" style="margin-top: -90px">
                <div class="blog_card">
                    <div class="blog_box_data">
                        <div class="col-md-12 ticket" style="background-color:#000;color:#FFF;padding:10px;">
                            <div style="border:1px dashed #FFFFFF;padding:20px; padding-bottom: 80px">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th> <b>Category</b> </th>
                                            <th> <b>Price</b> </th>
                                            <th> <b>Quantity</b> </th>
                                            <th> <b>Sub Total</b> </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($event->ticket as $t)
                                          <tr>
                                            <td>{{ $t->category }}</td>
                                            <td class="price">{{ $t->price }}</td>
                                            <td class="qty">-</td>
                                            <td class="sub-total">-</td>
                                          </tr>
                                          @endforeach

                                          <tr>
                                            <td colspan="3" align="right"><b>Total : </b></td>
                                            <td id="total">-</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                    <form class="forms-sample" action="/booking-store" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $event->id }}" name="event_id">
                                        @foreach($event->ticket as $t)
                                        <input type="hidden" class="qty_value" name="qty{{ $t->id }}">
                                        @endforeach
                                        <button type="submit" class="btn-inverse-success for inverse buttons" style="margin-top:25px; float:right; padding:5px 25px;"> Order </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="blog_card">
                    <div class="blog_box_data">
                        <div class="col-md-12 ticket" style="background-color:#000;color:#FFF;padding:10px;">
                            <div style="border:1px dashed #FFFFFF;padding:20px;">
                                <center><h4 style="color:#FFF !important;">You have already ordered tickets.. Check out <a href="/booking/{{ $event->id }}">here</h4></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif

    </div>
</section>
<!--event section end -->
<script type="text/javascript">
    function SubTotalCount() {
        let qty_input = document.getElementsByClassName("qty-input");
        var qty = document.getElementsByClassName('qty');
        var qty_value = document.getElementsByClassName('qty_value');
        var price = document.getElementsByClassName('price');
        var sub_total = document.getElementsByClassName('sub-total');
        var total = document.getElementById('total');
        for(var i = 0; i < qty_input.length; i++)
        {
            qty[i].textContent = qty_input[i].value;
            sub_total[i].textContent = qty_input[i].value * price[i].textContent;
            qty_value[i].value = qty_input[i].value;
        }

        var t = 0;

        for(var i = 0; i < sub_total.length; i++)
        {
            t = t + parseInt(sub_total[i].textContent);    
        }

        total.textContent = 'Rp.' + t.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    }
</script>

<script type="text/javascript">
    var btn_plus = document.getElementsByClassName('btn-plus');
    var btn_minus = document.getElementsByClassName('btn-minus');
    var qty_input = document.getElementsByClassName('qty-input');

    for (i = 0; i < qty_input.length; i++) {
        (function(index){
            btn_plus[i].onclick = function(){
                var input = parseInt(qty_input[index].value) + 1;
                qty_input[index].value = input;
                SubTotalCount();
            }    
        })(i);

        (function(index){
            btn_minus[i].onclick = function(){
                var input = parseInt(qty_input[index].value) - 1;
                if (input >= 0) {
                    qty_input[index].value = input;
                }
                SubTotalCount();
            }    
        })(i);
    }


</script>
@endsection
