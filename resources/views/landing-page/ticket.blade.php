

<!--events section -->
<section class="pt100 pb100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="sidebar">
                    <div class="widget widget_categories">
                        <h4 class="widget-title">
                            Nama : {{ $guest->name }}<br>
                            Email: {{ $guest->email }}<br>
                            Code: {{ $booking->code }}
                        </h4>
                        <ul>
                            <li>{{ $event->event_name }}</li>
                            <li>{{ date("j F Y",strtotime($event->start_date)) }}
                            @if($event->start_date != $event->end_date) - {{ date("j F Y",strtotime($event->end_date)) }}@endif</li>
                            <li>{{ date("g:i a",strtotime($event->start_time)) }} - {{ date("g:i a",strtotime($event->end_time)) }}</li>
                            <li>{{ $event->place }}</li>
                        </ul>
                        <br>
                        
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
                                  <table class="table table-striped" border="1">
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

        </div>
    </div>
</section>
<script type="text/javascript">
    window.print();
</script>
<!--event section end -->

