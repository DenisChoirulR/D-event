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
	            	<h4 class="card-title">Guest List</h4>
	              <p class="card-description"> Here's All Your Guest </p>
            	</div>
            	<!-- <div class="col-md-6" style="float:right;">
	            	<a href="/event-create" class="btn btn-secondary btn-fw" style="margin:0 0 20px 0; float:right;">Create New Event</a>
            	</div> -->
          	</div>
						<div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Gender </th>
                    <th> Age </th>
                    <th> Total Order </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($guest as $g)
                  <tr>
                    <td><a href="#" style="color:#FFF;">{{ $g->name }}</a></td>
                    <td>{{ $g->email }}</td>
                    <td>{{ $g->gender }}</td>
                    <td>{{ $g->age }}</td>
                    <td>{{ $g->booking }}</td>
                    <td>
                      <!-- <a href="/event-edit" type="submit" class="btn-warning btn-fw" style="padding:5px 15px;border-radius:20px;"><i class="mdi mdi-tooltip-edit"></i></a>  -->
                      <a href="/admin-guest-delete/{{ $g->id }}" class="btn-danger btn-fw" style="padding:5px 15px;border-radius:20px;"><i class="mdi mdi-delete"></i></a>
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