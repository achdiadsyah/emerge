<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../">
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto  w-xl-600px bg-lighten shadow-sm" style="background-color: #FFFFFF">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y ps-10" style="background-image: url({{ asset('assets/media/patterns/investor-detail-bg.png') }}); background-position: bottom; background-repeat: no-repeat">
						<!--begin::Header-->
						<div class="d-flex flex-row-fluid flex-column flex-start ml-10 p-10 pt-lg-20 mb-10 mt-10 ms-8">
							<!--begin::Logo-->
							<div class="mb-10 text-left">
								<!--begin::Logo-->
								<img alt="Logo" src="{{ asset('assets/media/logos/emerge-logo.png') }}" class="h-40px" />
								<!--end::Logo-->
							</div>
							<!--end::Logo-->
							<!--begin::Nav-->
							<div class="stepper-nav mt-10">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">1</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Personal Details</h3>
										<div class="stepper-desc fw-bold">Setup Your Account Details</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">2</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Address Details</h3>
										<div class="stepper-desc fw-bold">Setup your address</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">3</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Investment Details</h3>
										<div class="stepper-desc fw-bold">Setup your investment plan</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">4</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Completed</h3>
										<div class="stepper-desc fw-bold">Review and Submit</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 4-->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Header-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10" style="background-color:#F5F6F8">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="my-auto pb-5" novalidate="novalidate" method="post" action="{{ route('investor.detail-update', '1') }}">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									@csrf
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bolder d-flex align-items-center text-dark">Personal Details</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-bolder fs-6">Tell us a few details about yourself.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-12">
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<label class="form-label fw-bolder text-dark fs-6 required">Name</label>
														<input class="form-control form-control-lg" type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" autocomplete="off" required/>
														@error('name')
														<div class="fv-plugins-message-container invalid-feedback">
															<div data-field="name" data-validator="notEmpty">
																{{ $message }}
															</div>
														</div>
														@enderror
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="form-label fw-bolder text-dark fs-6">Country</label>
														<!--end::Label-->
														<!--begin::Input-->
														<select name="country" class="form-select form-select-lg form-select" data-control="select2" data-placeholder="Pick Country" data-allow-clear="true" data-hide-search="true" required> 
															<option></option>
															<option value="1">S Corporation</option>
															<option value="1">C Corporation</option>
															<option value="2">Sole Proprietorship</option>
															<option value="3">Non-profit</option>
															<option value="4">Limited Liability</option>
															<option value="5">General Partnership</option>
														</select>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<label class="form-label fw-bolder text-dark fs-6">ID Card Number</label>
														<input class="form-control form-control-lg" type="text" placeholder="Input your ID Card Number" name="id_card_number" value="{{ old('id_card_number') }}" autocomplete="off" required/>
														@error('id_card_number')
														<div class="fv-plugins-message-container invalid-feedback">
															<div data-field="id_card_number" data-validator="notEmpty">
																{{ $message }}
															</div>
														</div>
														@enderror
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="form-label fw-bolder text-dark fs-6">Upload ID Card</label>
														<!--end::Label-->
														<!--begin::Dropzone-->
														<div class="dropzone bg-white" id="dz_upload_id_card">
															<!--begin::Message-->
															<div class="dz-message needsclick text-center">
																<!--begin::Info-->
																<p class="text-muted m-5">Drag & drop or <label class="text-danger">browse</label></p>
																
																<!--end::Info-->
															</div>
														</div>
														<!--end::Dropzone-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="form-label fw-bolder text-dark fs-6">Upload NPWP</label>
														<!--end::Label-->
														<!--begin::Dropzone-->
														<div class="dropzone bg-white" id="dz_upload_npwp">
															<!--begin::Message-->
															<div class="dz-message needsclick text-center">
																<!--begin::Info-->
																<p class="text-muted m-5">Drag & drop or <label class="text-danger">browse</label></p>
																
																<!--end::Info-->
															</div>
														</div>
														<!--end::Dropzone-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<label class="form-label fw-bolder text-dark fs-6">Passport Number</label>
														<input class="form-control form-control-lg" type="text" placeholder="Input your Passport Number" name="passport_number" value="{{ old('passport_number') }}" autocomplete="off" required/>
														@error('passport_number')
														<div class="fv-plugins-message-container invalid-feedback">
															<div data-field="passport_number" data-validator="notEmpty">
																{{ $message }}
															</div>
														</div>
														@enderror
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="form-label fw-bolder text-dark fs-6">Upload Passport</label>
														<!--end::Label-->
														<!--begin::Dropzone-->
														<div class="dropzone bg-white" id="dz_upload_passport">
															<!--begin::Message-->
															<div class="dz-message needsclick text-center">
																<!--begin::Info-->
																<p class="text-muted m-5">Drag & drop or <label class="text-danger">browse</label></p>
																
																<!--end::Info-->
															</div>
														</div>
														<!--end::Dropzone-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 1-->
								<!--begin::Actions-->
								<div class="text-center">
									<button type="submit" class="btn btn-lg btn-danger w-100 mb-5">
										<span class="indicator-label">Continue</span>
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
						<!--begin::Links-->
						<div class="d-flex flex-center fw-bold fs-6">
							<a href="https://keenthemes.com" class="text-muted text-hover-primary px-2" target="_blank">About</a>
							<a href="https://devs.keenthemes.com" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
							<a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Multi-steps-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/custom/utilities/modals/create-account.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<script>
			var dzIdCard = new Dropzone("#dz_upload_id_card", {
				url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
				paramName: "file", // The name that will be used to transfer the file
				maxFiles: 1,
				maxFilesize: 10, // MB
				addRemoveLinks: true,
				accept: function(file, done) {
					if (file.name == "wow.jpg") {
						done("Naha, you don't.");
					} else {
						done();
					}
				}
			});
			var dzNPWP = new Dropzone("#dz_upload_npwp", {
				url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
				paramName: "file", // The name that will be used to transfer the file
				maxFiles: 1,
				maxFilesize: 10, // MB
				addRemoveLinks: true,
				accept: function(file, done) {
					if (file.name == "wow.jpg") {
						done("Naha, you don't.");
					} else {
						done();
					}
				}
			});
			var dzPassport = new Dropzone("#dz_upload_passport", {
				url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
				paramName: "file", // The name that will be used to transfer the file
				maxFiles: 1,
				maxFilesize: 10, // MB
				addRemoveLinks: true,
				accept: function(file, done) {
					if (file.name == "wow.jpg") {
						done("Naha, you don't.");
					} else {
						done();
					}
				}
			});
		</script>
	</body>
	<!--end::Body-->
</html>