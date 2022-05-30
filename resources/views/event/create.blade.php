@extends('layouts.admin-design')

@section('content')

<body>
	<div class="main-panel">
		<div class="content-wrapper">
			<div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Event Create</h4>
            <p class="card-description"> Okay, Let's Start an Extraordinary Event ! </p>
            <form class="forms-sample" action="/event-store" method="post" enctype="multipart/form-data">
            	{{ csrf_field() }}
            	<div class="row">
            		<div class="col-md-6">
	            		<div class="form-group">
		                <label for="exampleInputName1">Name</label>
		                <input type="text" name="event_name" class="form-control" id="exampleInputName1" placeholder="Event Name">
		              </div>
		              
		              
		              <div class="form-group">
		                <label for="exampleInputName1">Start Date</label>
		                <input type="date" name="start_date" class="form-control" id="exampleInputName1" placeholder="Start Date">
		              </div>
		              
		              <div class="form-group">
		                <label for="exampleInputName1">Start Time</label>
		                <input type="time" name="start_time" class="form-control" id="exampleInputName1" placeholder="Start Time">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">The Venue</label>
		                <input type="text" name="place" class="form-control" id="exampleInputName1" placeholder="The Venue">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">Description</label>
		                <textarea class="form-control" name="event_description" id="exampleInputName1" placeholder="Description"></textarea>
		              </div>
	            	</div>	
            	
	            	<div class="col-md-6">
            			<div class="form-group">
		                <label>Category</label>
		                <select name="category_id" class="form-control" style="width:100%">
		                	<option value="">--Select Category--</option>
		                	@foreach($category as $c)
			                  	<option value="{{ $c->id }}">{{ $c->category_name }}</option>
			                @endforeach	
		                </select>
		              </div>
	              	<!-- <div class="form-group">
		                <label for="exampleInputName1">Type of Event</label>
		                <input type="text" name="type" class="form-control" id="exampleInputName1" placeholder="Type of Event">
		              </div> -->
		              <div class="form-group">
		                <label for="exampleInputName1">End Date</label>
		                <input type="date" name="end_date" class="form-control" id="exampleInputName1" placeholder="End Date">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">End Time</label>
		                <input type="time" name="end_time" class="form-control" id="exampleInputName1" placeholder="End Time">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">Venue's Address</label>
		                <!-- <input type="text" name="address" class="form-control" id="exampleInputName1" placeholder="Address"> -->
		                <textarea class="form-control" name="address" id="exampleInputName1" placeholder="Address"></textarea>
		              </div>
		              <div class="form-group">
		              	<label for="exampleInputName1">Image / Advertise of The Event</label><br>
			            <!-- <button type="button" class="btn btn-outline-primary">
	                       <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button> -->
	                  <input type="file" name="image" class="form-control" id="exampleInputName1" placeholder="Image">
                  	  </div>
			        </div>
			        <div class="col-md-6">
            			<div class="form-group">
			                <label>Account Number/Nomer Rekening</label>
			                <input type="text" name="account_number" class="form-control" id="exampleInputName1" placeholder="Account Number">
		              	</div>
		          	</div>
		          	<div class="col-md-6">
            			<div class="form-group">
			                <label>Contact Person</label>
			                <input type="text" name="contact_person" class="form-control" id="exampleInputName1" placeholder="Contact Person">
		              	</div>
		          	</div>
		          </div>

            	<h4 class="card-title" style="margin-top: 40px;">Ticket</h4>
            	<p class="card-description"> Yeay... Just one step away and your event was successfully created.! </p>
		          <div class="row">		          	
            		<div class="col-md-4" id="category_form">
	            		<div class="form-group">
		                <label for="exampleInputName1">Category</label>
		                <input type="text" name="category[]" class="form-control" id="exampleInputName1" placeholder="Category">
		              </div>
		            </div>
		            <div class="col-md-4" id="capacity_form">
		            	<div class="form-group">
		                <label for="exampleInputName1">Capacity</label>
		                <input type="number" name="capacity[]" class="form-control" id="exampleInputName1" placeholder="Capacity">
		              </div>
		            </div>
		            <div class="col-md-4" id="price_form">
	            		<div class="form-group">
		                <label for="exampleInputName1">Price</label>
		                <input type="text" name="price[]" class="form-control" id="exampleInputName1" placeholder="Price">
		              </div>
		            </div>
	            </div>

	            <div class="col-md-12">
	            	<a href="JavaScript:Void(0);" id="add_ticket" onclick="add_ticket()"> <i class="fa fa-plus"></i> </a>
	            </div>
	            <div class="col-md-12">
	              <div class="form-group">
	                <button type="submit" class="btn-inverse-success for inverse buttons" style="margin-top:25px; float:right; padding:5px 25px;"> Submit </button>
	              	<a href="/event-list" class="btn-inverse-danger for inverse buttons" style="margin-top:25px; margin-right:50px; float:right; padding:7px 25px;"> Batal </a>
	              </div>
	            </div>
            </form>

		</div>
	</div>
</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
	let btn = document.getElementById('add_ticket');
	function add_ticket() {
    	$("#category_form").append(`
    		<div class="form-group">
          <input type="text" name="category[]" class="form-control" id="exampleInputName1" placeholder="Category">
        </div>`);

    	$("#capacity_form").append(`
    		<div class="form-group">
          <input type="number" name="capacity[]" class="form-control" id="exampleInputName1" placeholder="Capacity">
        </div>`);

    	$("#price_form").append(`
    		<div class="form-group">
          <input type="text" name="price[]" class="form-control" id="exampleInputName1" placeholder="Price">
        </div>`);
	}
</script>
@endsection