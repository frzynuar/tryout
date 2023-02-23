@extends('layouts.auth')

@section('page_content')
<div class="d-flex flex-stack py-2">
	<div class="me-2"></div>
    @if (Route::has('auth.register'))
	<div class="m-0">
		<span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-in-head-desc">Not a Member yet?</span>
		<a href="{{ route('auth.register') }}" class="link-primary fw-bold fs-5" data-kt-translate="sign-in-head-link">Sign Up</a>
	</div>
    @endif
</div>
<div class="py-20">
	@if(session('error'))
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			{{session('error')}}                                     
		</div>
    @endif
	<form class="form w-100" novalidate="novalidate" id="login-form" data-kt-redirect-url="{{ route('proses_login') }}" action="{{ route('proses_login') }}" method="POST">
	@csrf
		<div class="card-body">
			<div class="text-start mb-10">
				<h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
				<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Get unlimited access</div>
			</div>
			<div class="fv-row mb-8">
				<input type="text" required placeholder="Username" id="username" name="username" autocomplete="off" data-kt-translate="sign-in-input-email" class="form-control form-control-lg form-control-solid" value="{{ old('login') }}" />
                @if ($errors->has('login'))
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="username" data-validator="notEmpty">{{ $errors->first('login') }}</div>
                </div>
                @endif
			</div>
			<div class="fv-row mb-7">
				<input type="password" required id="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-in-input-password" class="form-control form-control-lg form-control-solid" value="{{ old('password') }}" />
                @if ($errors->has('password'))
                <div class="fv-plugins-message-container invalid-feedback">
                    <div data-field="password" data-validator="notEmpty">{{ $errors->first('password') }}</div>
                </div>
                @endif
			</div>
			<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
				<div></div>
				<a href="" class="link-primary" data-kt-translate="sign-in-forgot-password">Forgot Password?</a>
			</div>
			<div class="d-flex flex-stack">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<button id="" class="btn btn-primary me-2 flex-shrink-0" type="submit">
					<span class="indicator-label" data-kt-translate="sign-in-submit">Sign In</span>
					<span class="indicator-progress">
					<span data-kt-translate="general-progress">Please wait...</span>
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
					</span>
				</button>
			</div>
		</div>
	</form>
</div>
<div class="m-0"></div>
@endsection

@push('page_js')
<script type="text/javascript" src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom/authentication/sign-in/i18n.js') }}"></script>
@endpush