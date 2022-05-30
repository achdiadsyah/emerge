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
				<div class="text-dark fw-bold fs-4">You've successfully changed your password
				<!--end::Link-->
				<!--begin::Link-->
				<!--end::Link-->
			</div>
			<br>
			<!--end::Heading-->
			<!--begin::Actions-->
			<div class="text-center">
				<button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary w-100 mb-5">
					<span class="indicator-label">Back to Login Page</span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
			</div>
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