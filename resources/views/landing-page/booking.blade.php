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
        <div class="row">
            <div class="col-12 col-md-12" style="margin-top: -70px">
                <div class="blog_card">
                    <div class="blog_box_data">
                        <div class="col-md-12 ticket" style="background-color:#000;color:#FFF;padding:10px;">
                            <div style="border:1px dashed #FFFFFF;padding:20px;">
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
                                      @php $total = 0; @endphp
                                      @foreach($booking_detail as $b)
                                      <tr>
                                        <td>{{ $b->category }}</td>
                                        <td>{{ $b->price }}</td>
                                        <td>{{ $b->qty }}</td>
                                        <td>{{ $b->price * $b->qty }}</td>
                                      </tr>
                                      @php $total = $total + ($b->price * $b->qty); @endphp
                                      @endforeach
                                      <tr>
                                        <td colspan="3" align="right"><b>Total : </b></td>
                                        <td>{{ $total }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12" style="margin-top: -70px">
                <div class="blog_card">
                    <div class="blog_box_data">
                        <div class="col-md-12 ticket" style="background-color:#000;color:#FFF;padding:10px;">
                            <div style="border:1px dashed #FFFFFF;padding:20px;">
                                @if($booking->status == 'uploaded')
                                    <center><h2 style="color: white;">You have completed the order, wait for the admin to approve your order</h2></center>
                                @elseif($booking->status == 'accepted')
                                    <center><h2 style="color: white;">You have completed the order, Klik <a href="/ticket-print/{{ $event->id }}">here</a> to print the ticket!!</h2></center>
                                @else
                                    @if($booking->status == 'rejected')
                                        <center><h2 style="color: white;">Your payment confirmation has  been rejected, please upload again!</h2></center>
                                    @endif
                                    <center><h2 style="color: white;">{{ $event->account_number }}</h2></center>
                                    <form class="forms-sample" action="/upload" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $booking->id }}" name="booking_id">
                                        <input type="file" name="proof_of_payment" class="form-control" id="exampleInputName1" placeholder="Image">
                                        <button type="submit" class="btn-inverse-success for inverse buttons" style="padding:5px 25px;"> Submit </button>
                                        <!-- <input type="submit" > -->
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--event section end -->
<script type="text/javascript">
    function SubTotalCount() {
        let qty_input = document.getElementsByClassName("qty-input");
        var qty = document.getElementsByClassName('qty');
        var price = document.getElementsByClassName('price');
        var sub_total = document.getElementsByClassName('sub-total');
        var total = document.getElementById('total');
        for(var i = 0; i < qty_input.length; i++)
        {
            qty[i].textContent = qty_input[i].value;
            sub_total[i].textContent = qty_input[i].value * price[i].textContent;
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
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
@endsection
