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
            <form class="forms-sample">
            	<div class="row">
            		<div class="col-md-6">
	            		<div class="form-group">
		                <label for="exampleInputName1">Name</label>
		                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
		              </div>
		              
		              <div class="form-group">
		                <label for="exampleInputName1">Capacity</label>
		                <input type="number" class="form-control" id="exampleInputName1" placeholder="Capacity">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">Start Date</label>
		                <input type="text" class="form-control" id="exampleInputName1" placeholder="Start Date">
		              </div>
		              
		              <div class="form-group">
		                <label for="exampleInputName1">StartTime</label>
		                <input type="text" class="form-control" id="exampleInputName1" placeholder="Start Time">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">The Venue</label>
		                <input type="text" class="form-control" id="exampleInputName1" placeholder="The Venue">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">Description</label>
		                <textarea class="form-control" id="exampleInputName1" placeholder="Description"></textarea>
		              </div>	
	            	</div>	
            	
	            	<div class="col-md-6">
            			<div class="form-group">
		                <label>Category</label>
		                <select class="form-control" style="width:100%">
		                  <option value="AL">Alabama</option>
		                  <option value="WY">Wyoming</option>
		                  <option value="AM">America</option>
		                  <option value="CA">Canada</option>
		                  <option value="RU">Russia</option>
		                </select>
		              </div>
	              	<div class="form-group">
		                <label for="exampleInputName1">Type of Event</label>
		                <input type="text" class="form-control" id="exampleInputName1" placeholder="Type of Event">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">End Date</label>
		                <input type="text" class="form-control" id="exampleInputName1" placeholder="End Date">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">End Time</label>
		                <input type="text" class="form-control" id="exampleInputName1" placeholder="End Time">
		              </div>
		              <div class="form-group">
		                <label for="exampleInputName1">Venue's Address</label>
		                <textarea class="form-control" id="exampleInputName1" placeholder="Description"></textarea>
		              </div>
		              <div class="form-group">
		              	<label for="exampleInputName1">Image / Advertise of The Event</label><br>
			            <button type="button" class="btn btn-outline-primary">
	                       <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                       </div>
		              <div class="form-group">
		                <button type="submit" class="btn-inverse-success for inverse buttons" style="margin-top:25px; float:right; padding:5px 25px;"> Submit </button>
		              	<a href="/event-list" class="btn-inverse-danger for inverse buttons" style="margin-top:25px; margin-right:50px; float:right; padding:5px 25px;"> Batal </a>
		              </div>
			          </div>

		          </div>
            </form>

		</div>
	</div>
</body>

@endsection