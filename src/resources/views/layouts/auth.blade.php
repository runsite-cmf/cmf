@extends('runsite::layouts.resources')
@section('body-class', '')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 hidden-xs hidden-sm auth-image"></div>
		<div class="col-md-9">
			<div class="col-sm-4 col-sm-push-4 auth-body">
				<div class="auth-box">
					<h1 class="h2"><a href="{{ route('login') }}">{{ config('app.name') }}</a></h1>
					@yield('app')
				</div>
			</div>
		</div>
	</div>
</div>
{{-- <div class="login-box">
	<div class="login-logo">
		<a href="{{ route('login') }}">{{ config('app.name') }}</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		
		@yield('app')
	</div>
	<!-- /.login-box-body -->
</div> --}}

@endsection