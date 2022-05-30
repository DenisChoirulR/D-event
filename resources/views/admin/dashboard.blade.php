@extends('layouts.admin-design')
@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{ greeting() }}, Admin!!</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="card" style="border-color: #373a46;">
                  <div class="card-header" style="background-color: #373a46;"><center>User Summary</center></div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-6">
                      <div class="card" style="border-color: #373a46;">
                        <div class="card-header" style="background-color: #373a46;">Total Guest</div>
                        <div class="card-body" style="font-size: 50px;">
                          <center>{{ $total_guest }}</center>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="card" style="border-color: #373a46;">
                        <div class="card-header" style="background-color: #373a46;">Total Organization</div>
                        <div class="card-body" style="font-size: 50px;">
                          <center>{{ $total_organization }}</center>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card" style="border-color: #373a46;">
                  <div class="card-header" style="background-color: #373a46;"><center>Event Summary</center></div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-4">
                      <div class="card" style="border-color: #373a46;">
                        <div class="card-header" style="background-color: #373a46;">Total Event</div>
                        <div class="card-body" style="font-size: 50px;"><center>{{ $total_event }}</center></div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="card" style="border-color: #373a46;">
                        <div class="card-header" style="background-color: #373a46;">Total Approved Event</div>
                        <div class="card-body" style="font-size: 50px;"><center>{{ $approved_event }}</center></div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="card" style="border-color: #373a46;">
                        <div class="card-header" style="background-color: #373a46;">Total Rejected Event</div>
                        <div class="card-body" style="font-size: 50px;"><center>{{ $rejected_event }}</center></div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="row" style="margin-top: 20px;">
              <div class="col-md-6">
                <div class="card" style="border-color: #373a46;">
                  <div class="card-header" style="background-color: #373a46;"><center>Ticket Summary</center></div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-12" style="margin-bottom: 20px;">
                      <div class="card" style="border-color: #373a46;">
                        <div class="card-header" style="background-color: #373a46;">Total Ticket Booked</div>
                        <div class="card-body" style="font-size: 50px;"><center>{{ $total_ticket }}</center></div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div id="audience-map" class="vector-map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
      <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
    </div>
  </footer>
</div>
<!-- main-panel ends -->
@endsection
