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
                <h4 class="card-title">Organization List</h4>
                <p class="card-description"> Here's All Your Partner </p>
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
                    
                    <th> Total Event </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($organization as $o)
                  <tr>
                    <td><a href="#" style="color:#FFF;">{{ $o->name }}</a></td>
                    <td>{{ $o->email }}</td>
                    
                    <td>{{ $o->event->count() }}</td>
                    <td>
                     <!--  <a href="/event-edit" type="submit" class="btn-warning btn-fw" style="padding:5px 15px;border-radius:20px;"><i class="mdi mdi-tooltip-edit"></i></a>  -->
                      <a href="/admin-organization-delete/{{ $o->id }}" class="btn-danger btn-fw" style="padding:5px 15px;border-radius:20px;"><i class="mdi mdi-delete"></i></a>
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