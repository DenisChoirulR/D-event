@extends('layouts.admin-design')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
          	<div class="row">
            	<div class="col-md-6">
	            	<h4 class="card-title">Event List</h4>
	              <p class="card-description"> Here's All Your Event </p>
            	</div>
          	</div>
						<div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Event Name </th>
                    <th> Category </th>
                    <th> Start Date </th>
                    <th> End Date </th>
                    <th> Start Time </th>
                    <th> End Time </th>
                    <th> Venue </th>
                    <th> Status </th> 
                    <th> Contact Person </th>
                    <!-- <th> Address </th>
                    <th> Description </th> -->
                    <!-- <th> Type of Event </th> -->
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($event as $e)
                  <tr>
                    <td><a href="/event-show/{{ $e->id }}" style="color:#FFF;">{{ $e->event_name }}</a></td>
                    <td>{{ $e->category_name }}</td>
                    <td>{{ $e->start_date }}</td>
                    <td>{{ $e->end_date }}</td>
                    <td>{{ $e->start_time }}</td>
                    <td>{{ $e->end_time }}</td>
                    <td>{{ $e->place }}</td>
                    <td>{{ $e->status }}</td>
                    <th>{{ $e->contact_person }}</th>
                    <!-- <td>{{ $e->address }}</td>
                    <td>{{ $e->description }}</td> -->
                    <td>
                  
                      <a href="/admin-event-approve/{{ $e->id }}" type="submit" class="btn-warning btn-fw" style="padding:5px 15px;border-radius:20px;">Approve</a> 
                      <a href="/admin-event-reject/{{ $e->id }}" class="btn-danger btn-fw" style="padding:5px 15px;border-radius:20px;">Reject</a><a href="/admin-event-delete/{{ $e->id }}" class="btn-danger btn-fw" style="padding:5px 15px;border-radius:20px;"><i class="mdi mdi-delete"></i></a>
                      
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

@endsection