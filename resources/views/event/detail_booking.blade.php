@extends('layouts.admin-design')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
				  <div class="card-body">
						<div class="row">
								<!-- <div class="col-md-6">
									<img src="{{ asset('storage/picture.png') }}" style="margin-bottom:30px;">
								</div> -->
								<!-- <div class="col-md-12">
									<h4 style="text-align:center;">Description Of Event</h4>
								</div> -->

							<!-- Table detail Event -->
							<div class="table-responsive">
	              <table class="table table-bordered">
	                <tbody>
	                  <tr>
	                    <td> Name </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ $booking[0]->name }} </a></td>
	                    <td> E-mail </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ $booking[0]->email }} </a></td>
	                  </tr>
	                  <tr>
	                    <td> Order Date </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ date("j F Y",strtotime($booking[0]->created_at)) }} </a></td>
	                    <td> Confirmation Date </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ isset($b->uploaded_at) ? date("j F Y",strtotime($booking[0]->uploaded_at)) : '-' }} </a></td>
	                  </tr>
	                </tbody>
	              </table>
	            </div>


	            <div class="table-responsive" style="margin-top:50px;">
	            <h4 class="card-title">Customer List</h4>
	            <p class="card-description">Here's Your Customer</p>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Ticket Category </th>
                    <th> Qty Order </th>
                    <th> Price </th>
                    <th> Sub Total </th>
                  </tr>
                </thead>
                <tbody>
                  @php 
	            	$total = 0; 
	              @endphp
                  @foreach($booking as $key => $b)
	            	@php 
	            		$total = $total + ($b->qty * $b->price); 
	            	@endphp
	            		
                  <tr>
                    <td>{{ $b->category }}</td>
                    <td>{{ $b->qty }}</td>
                    <td>{{ $b->price }}</td>
                    <td>{{ $b->qty * $b->price }}</td>
                  </tr>
                  @endforeach
                  <tr>
                    <td colspan="3" align="right">Total Order</td>
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

@endsection