@extends('layouts.admin-design')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 100px;
  right: 100px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
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
	                    <td><a href="/event-show" style="color:#FFF;"> {{ $event->event_name }} </a></td>
	                    <td> Start Time </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ $event->start_time }} </a></td>
	                  </tr>
	                  <tr>
	                    <td> Category </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ $event->category_name }} </a></td>
	                    <td> End Time </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ $event->end_time }} </a></td>
	                  </tr>
	                  <tr>
	                    <td> Start Date </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ $event->start_date }} </a></td>
	                    <td> Venue's Address </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ $event->address }} </a></td>
	                  </tr>
	                  <tr>
	                    <td> End Date </td>
	                    <td><a href="/event-show" style="color:#FFF;"> {{ $event->end_date }} </a></td>
	                    <td> Venue </td>
                      <td><a href="/event-show" style="color:#FFF;"> {{ $event->place }} </a></td>
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
                    <th> Name </th>
                    <th> E-Mail </th>
                    <th> Order Date </th>
                    <th> Confirmation Date </th>
                    <th> Qty Order </th>
                    <th> Total Price </th>
                    <th> Payment Proof </th>
                    <th> Phone Number </th>
                    <th> Status </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($booking as $key => $b)
	            	@php 
	            		$qty_order = 0; 
	            		$total_price = 0;
	            	@endphp
	            	@foreach($b->detail as $d)
	                	@php
	                		$qty_order=$qty_order + $d->qty;
	                		$total_price = $total_price + ($d->qty * $d->price);
	                	@endphp
	            	@endforeach
                  <tr>
                    <td><a href="/booking-detail/{{ $b->id }}">{{ $b->name }}</a></td>
                    <td>{{ $b->email }}</td>
                    <td>{{ date("j F Y",strtotime($b->created_at)) }}</td>
                    <td>{{ isset($b->uploaded_at) ? date("j F Y",strtotime($b->uploaded_at)) : '-' }}</td>
                    <td>{{ $qty_order }}</td>
                    <td>{{ $total_price }}</td>
                    <td class="py-1">
                      <img id="myImg" src="/storage/payment/{{ $b->proof_of_payment }}" />
                    </td>
                    <td>{{ $b->phone_number }}</td>
                    <td>{{ $b->code }}</td>
                    <td>{{ $b->status }}</td>
                    <td>
                      <a href="/booking-accept/{{ $b->id }}" class="btn-info btn-fw" style="padding:5px 15px;border-radius:20px;margin-right:5px;">Accept</a> 
                      <a href="/booking-reject/{{ $b->id }}" class="btn-danger btn-fw" style="padding:5px 15px;border-radius:20px;">Reject</a>
                    </td>
                  </tr>
                  @endforeach
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

<div id="myModal" class="modal">
  <span class="close">x</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

@endsection