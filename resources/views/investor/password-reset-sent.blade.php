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
				<!--begin::Logo-->
				<!-- <img alt="Logo" src="{{ asset('assets/media/logos/emerge-logo.png') }}" class="h-40px" /> -->
				<!--end::Logo-->
			</div>
			<div class="mb-10 text-left">
				<!--begin::Link-->
				<div class="text-dark fw-bold fs-4">Thanks, check your email for <br>instructions to reset your password
				<!--end::Link-->
				<!--begin::Link-->
				<div class="text-gray-400 fw-bold fs-4">If you haven't received an email in 5 minutes, check your <br>spam or <a href="{{ route('investor.password-reset-request') }}">resend</a>
				<!--end::Link-->
			</div>
			<!--end::Heading-->
			<br>
			<br>
			<br>
			<!--begin::Input group-->
			<!--end::Input group-->
			<!--begin::Actions-->
			<!--end::Actions-->
		</form>
		<!--end::Form-->
		<div class="mb-10 text-center">
		<!--begin::Login-->
		<!--end::Login-->
	</div>
		
	</div>
	<!--end::Wrapper-->
</div>
<!--end::Content-->
<!--begin::Footer-->
<!--end::Footer-->
@endsection