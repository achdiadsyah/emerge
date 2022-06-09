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
		<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
			<!--begin::Heading-->
			<div class="mb-10 text-left">
				<!--begin::Link-->
				<div class="text-dark fw-bold fs-4">First, let's verify your email
				<!--end::Link-->
				<!--begin::Link-->
				<div class="text-gray-400 fw-bold fs-4">Check John.snow@gmail.com to verify your account and get started.
				<!--end::Link-->
			</div>
			<!--end::Heading-->
			<br>								
			<!--begin::Actions-->
			<div class="text-center">
				<!--begin::Submit button-->
				<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-danger w-100 mb-5">
					<span class="indicator-label">Resend Verification Email</span>
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
<!--end::Footer-->
@endsection