@extends('layouts.auth.auth-design')

@section('content')
<div class="container-login100" style="background-image: url('assets/images/forest-dark-red.jpg');">
	<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
		<form method="POST" class="login100-form validate-form" action="{{ route('register') }}" enctype="multipart/form-data">
			@csrf

			<span class="login100-form-title p-b-37">
				Register
			</span> 

			<input id="type" type="hidden" class="form-control @error('name') is-invalid @enderror" name="type" value="{{ $_GET['type'] }}" required>

			@if($_GET['type'] == "guest")
			<div class="wrap-input100 validate-input m-b-20" data-validate="Enter name">
				<input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

	        @error('name')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-20" data-validate="gender">
				<select class="form-control @error('gender') is-invalid @enderror" style="width:100%;border-radius:10px;font-weight:bold;" type="text" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
		        	<option value="">- select your gender -</option>
		          	<option value="Male">Male</option>
		          	<option value="Female">Female</option>
		        </select>

	        @error('gender')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-20" data-validate="age">
				<input class="input100 @error('age') is-invalid @enderror" type="text" name="age" placeholder="Age" value="{{ old('age') }}" required autocomplete="age" autofocus>

	        @error('age')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-20" data-validate="phone_number">
				<input class="input100 @error('phone_number') is-invalid @enderror" type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

	        @error('phone_number')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email address">
				<input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="e-mail" value="{{ old('email') }}" required autocomplete="email">

	          @error('email')
	              <span class="invalid-feedback" role="alert">
	                  <strong>{{ $message }}</strong>
	              </span>
	          @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
				<input id="password" class="input100" type="password" name="password" placeholder="password" required autocomplete="new-password">

	        @error('password')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-20" data-validate = "Enter password">
				<input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="confirmation password">
				<span class="focus-input100"></span>
			</div>

			@elseif($_GET['type'] == "organization")

			<div class="wrap-input100 validate-input m-b-20" data-validate="Enter name">
				<input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

	        @error('name')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 m-b-20">
				<div class="col-md-12">
					<input type="file" name="logo" style="padding:10px;color:#000; font-style:italic;" placeholder="Upload Your Logo Here">
					<!-- <a href="#" style="padding:10px;color:#000; font-style:italic;">Upload Your Logo Here</a> -->
					@error('logo')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
			</div>

			<div class="wrap-input100 validate-input m-b-20" data-validate="Enter description">
				<input id="description" type="text" class="input100 @error('description') is-invalid @enderror" placeholder="description" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
	        @error('description')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email address">
				<input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="e-mail" value="{{ old('email') }}" required autocomplete="email">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
				<input id="password" class="input100" type="password" name="password" placeholder="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-20" data-validate = "Enter password">
				<input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="confirmation password">
				<span class="focus-input100"></span>
			</div>

		@elseif($_GET['type'] == "admin")
			<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email address">
				<input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="e-mail" value="{{ old('email') }}" required autocomplete="email">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
				<input id="password" class="input100" type="password" name="password" placeholder="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input m-b-20" data-validate = "Enter password">
				<input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="confirmation password">
				<span class="focus-input100"></span>
			</div>

		@endif



			<div class="container-login100-form-btn">
				<button class="login100-form-btn" type="submit">
					Register
				</button>
			</div>
		</form>

@endsection
