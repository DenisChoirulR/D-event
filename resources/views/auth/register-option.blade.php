@extends('layouts.auth.auth-design')

@section('content')

<div class="container-login100" style="background-image: url('assets/images/forest-dark-red.jpg');">
	<div class="row">
			<div class="col-md-4 col-xs-1"></div>
		<div class="col-md-2 col-xs-3 col-sm-3" style="margin-bottom:50px;">
			<div style="background-color:#FFFFFF; border-radius:20px;padding:20px;">
			<center>
			    <a href="/register?type=guest" style="text-decoration:none;">
				<img src="{{ asset('images-register/guest.png') }}" width="50%;">
			        <p><strong>Guest</strong></p>
			    </a>
			</center>
			</div>
		</div>

		<div class="col-md-2 col-xs-3 col-sm-3">
			<div style="background-color:#FFFFFF; border-radius:20px;padding:20px;">
			<center>
			    <a href="/register?type=organization" style="text-decoration:none;">
				<img src="{{ asset('images-register/company.png') }}" width="50%;">
			        <p><strong>Organization</strong></p>
			    </a>
			</center>
			</div>
		</div>
		<div class="col-md-4 col-xs-1"></div>
	</div>
	</div>
@endsection