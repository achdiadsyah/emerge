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
				<img alt="Logo" src="{{ asset('assets/media/logos/emerge-logo.png') }}" class="h-40px" />
				<!--end::Logo-->
			</div>
			<div class="mb-5 text-left">
				<!--begin::Link-->
				<div class="text-dark fw-bold fs-4">Welcome!
				<!--end::Link-->
				<!--begin::Link-->
				<div class="text-gray-400 fw-bold fs-4">Sign up and find a great Startup
				<!--end::Link-->
			</div>
			<!--end::Heading-->
			<!--begin::Input group-->
			<div class="fv-row mt-5 mb-7">
				<label class="form-label fw-bolder text-dark fs-6">Email</label>
				<input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="mb-10 fv-row" data-kt-password-meter="true">
				<!--begin::Wrapper-->
				<div class="mb-1">
					<!--begin::Label-->
					<label class="form-label fw-bolder text-dark fs-6">Password</label>
					<!--end::Label-->
					<!--begin::Input wrapper-->
					<div class="position-relative mb-3">
						<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
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
			<!--begin::Input group-->
			<div class="fv-row mb-5">
				<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
				<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm-password" autocomplete="off" />
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="fv-row mb-7">
				<label class="form-label fw-bolder text-dark fs-6">Referral Name (Optional)</label>
				<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="referral" autocomplete="off" />
			</div>
			<!--end::Input group-->
			<!--begin::Actions-->
			<div class="text-center">
				<button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-danger w-100 mb-5">
					<span class="indicator-label">Sign Up as Investor</span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
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
		<div class="text-gray-400 fw-bold fs-4">Have an Account? <a href="{{ route('investor.login') }}" class="ms-1 link-danger">Login Now</a>
		<!--end::Login-->
	</div>
</div>
<!--end::Footer-->
@endsection