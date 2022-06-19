@extends('layouts.investor-auth')
@section('title', $title)
@section('content')
@push('head-script')

@endpush
@push('foot-script')
<script src="{{ asset('assets/js/custom/authentication/sign-up/general.js') }}"></script>
@endpush
<!--begin::Content-->
<div class="d-flex flex-center flex-column flex-column-fluid">
	
	<!--begin::Wrapper-->
	<div class="w-lg-600px p-10 p-lg-15 mx-auto">
		<!--begin::Form-->
		<form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('auth.login') }}">
			<!--begin::Heading-->
			<div class="mb-10 text-left">
				<!--begin::Logo-->
				<img alt="Logo" src="{{ asset('assets/media/logos/emerge-logo.png') }}" class="h-40px" />
				<!--end::Logo-->
			</div>
			<div class="mb-10 text-left">
				<!--begin::Link-->
				<div class="text-dark fw-bold fs-4">Hello, Investor
				<!--end::Link-->
				<!--begin::Link-->
				<div class="text-gray-400 fw-bold fs-4">Login to continue
				<!--end::Link-->
			</div>
			<!--end::Heading-->
			<br>
			@csrf
			<!--begin::Input group-->
			<div class="fv-row mb-7">
				<label class="form-label fw-bolder text-dark fs-6">Email</label>
				<input class="form-control form-control-lg form-control-solid" type="email" placeholder="user@email.com" name="email" value="{{ old('email') }}" autocomplete="off" />
				@error('email')
				<div class="fv-plugins-message-container invalid-feedback">
					<div data-field="password" data-validator="notEmpty">
						{{ $message }}
					</div>
				</div>
				@enderror
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="mb-5 fv-row" data-kt-password-meter="true">
				<!--begin::Wrapper-->
				<div class="mb-1">
					<!--begin::Label-->
					<label class="form-label fw-bolder text-dark fs-6">Password</label>
					<!--end::Label-->
					<!--begin::Input wrapper-->
					<div class="position-relative mb-3">
						<input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" autocomplete="off" />
						<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
							<i class="bi bi-eye-slash fs-2"></i>
							<i class="bi bi-eye fs-2 d-none"></i>
						</span>
					</div>
					<!--end::Input wrapper-->
					
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Input group=-->
			<!--begin::Actions-->
			<div class="text-center">
				<!--begin::Wrapper-->
				<div class="d-flex flex-stack mb-5">
					<!--begin::Label-->
					<label class="form-check form-check-custom form-check-solid form-check-inline">
						<input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/>
						<span class="form-check-label fw-bold text-gray-700">Remember Me</span>
					</label>
					<!--end::Label-->
					<!--begin::Link-->
					<a href="{{ route('investor.password-reset-request') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
					<!--end::Link-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Submit button-->
				<button type="submit" class="btn btn-lg btn-danger w-100 mb-5">
					<span class="indicator-label">Login</span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
				<!--end::Submit button-->
			</div>
			<!--end::Actions-->
		</form>
		<!--end::Form-->
		
	</div>
	<!--end::Wrapper-->
</div>
<!--end::Content-->
<!--begin::Footer-->
<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
	<div class="mb-10 text-center">
		<!--begin::Login-->
		<div class="text-gray-400 fw-bold fs-4">Don't Have Account? <a href="{{ route('investor.register') }}" class="ms-1 link-danger">Sign Up Now</a>
		<!--end::Login-->
	</div>
</div>
<!--end::Footer-->
@endsection