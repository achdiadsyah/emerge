<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Investor - Dashboard</title>
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
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/investor-custom.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header align-items-stretch bg-white" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-center" style="max-width: 100%;">
							<!--begin::Heaeder menu toggle-->
							<div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Heaeder menu toggle-->
							<!--begin::Header Logo-->
							<div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
								<a href="{{ route('investor.dashboard') }}">
									<img alt="Logo" src="{{ asset('assets/media/logos/emerge-logo.png') }}" class="logo-default h-25px" />
									<img alt="Logo" src="{{ asset('assets/media/logos/emerge-logo.png') }}" class="logo-sticky h-25px" />
								</a>
							</div>
							<!--end::Header Logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										<!--begin::Menu-->
										<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
											<div data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
												<a href="{{ route('investor.dashboard') }}" class="menu-link py-3">
													<span class="menu-title text-black">Home</span>
													<span class="menu-arrow d-lg-none"></span>
												</a>
											</div>
											<div data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
												<a href="#" class="menu-link py-3">
													<span class="menu-title text-black">Investor List</span>
													<span class="menu-arrow d-lg-none"></span>
												</a>
											</div>
											<div data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
												<a href="#" class="menu-link py-3">
													<span class="menu-title text-black">Your Activities</span>
													<span class="menu-arrow d-lg-none"></span>
												</a>
											</div>
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								<div class="topbar d-flex align-items-stretch flex-shrink-0">
									<!--begin::Theme mode-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Theme mode docs-->
										<div class="menu-link py-3">
											<span class="menu-title text-black">Hi, </span><span class="menu-title fw-bolder text-dark">Max</span>
											<span class="menu-arrow d-lg-none"></span>
										</div>
										<!--end::Theme mode docs-->
									</div>
									<!--end::Theme mode-->
									<!--begin::User-->
									<div class="d-flex align-items-center me-n3 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
										<!--begin::Menu wrapper-->
										<div class="btn btn-icon btn-active-light-primary btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<img class="h-30px w-30px rounded" src="https://ui-avatars.com/api/?name=Max Smith" alt="" />
										</div>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="https://ui-avatars.com/api/?name=Max Smith" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bolder d-flex align-items-center fs-5">Max Smith</div>
														<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="#" class="menu-link px-5">My Profile</a>
											</div>
											<!--end::Menu item-->
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="{{ route('investor.login') }}" class="menu-link px-5">Sign Out</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::User -->
									<!--begin::Aside mobile toggle-->
									<!--end::Aside mobile toggle-->
								</div>
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Toolbar-->
					<div class="toolbar py-5 py-lg-10" style="background-size: cover; background-image: url({{ asset('assets/media/patterns/investor-dashboard-header.png') }})" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container"  class="container-xxl py-6 d-flex flex-stack flex-wrap">
						<div class="card-body">
						<div class="text-white fw-bolder fs-2 mt-0">INVEST IN ROLLING FUNDS</div>
						<br>
						<div class="fw-bold text-white">From equity crowdfunds to IPOs and wholesale offers, we have extraordinary opportunities for all</div>
						<div class="fw-bold text-white">types of investors. As long as you’re 18 or over, you’ve got options.</div>
						<br>
						<!--begin::Compact form-->
						<div class="d-flex align-items-center">
						<!--begin::Input group-->
						<div class="position-relative w-md-400px me-md-2">
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<input type="text" class="form-control form-control ps-10" name="search" value="" placeholder="Search Startup Name, Sector or Location" />
						</div>
						<!--end::Input group-->
						<!--begin:Action-->
						<div class="d-flex align-items-center">
							<button type="submit" class="btn btn-primary me-5">Search</button>
						</div>
						<!--end:Action-->
					</div>
					<!--end::Compact form-->
					</div>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Container-->
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Toolbar-->
							<div class="d-flex flex-wrap flex-stack my-5">
								<!--begin::Heading-->
								<h2 class="fs-2 fw-bold my-2">Projects
								<span class="fs-6 text-gray-400 ms-1">by Status</span></h2>
								<!--end::Heading-->
								<!--begin::Controls-->
								<div class="d-flex flex-wrap my-1">
									<!--begin::Tab nav-->
									<ul class="nav nav-pills me-6 mb-2 mb-sm-0">
										<li class="nav-item m-0">
											<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_project_users_card_pane">
												<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
															<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
															<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
										</li>
										<li class="nav-item m-0">
											<a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_users_table_pane">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
														<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
										</li>
									</ul>
									<!--end::Tab nav-->
									<!--begin::Select wrapper-->
									<div class="m-0">
										<!--begin::Select-->
										<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body fw-bolder w-125px">
											<option value="Active" selected="selected">Active</option>
											<option value="Approved">In Progress</option>
											<option value="Declined">To Do</option>
											<option value="In Progress">Completed</option>
										</select>
										<!--end::Select-->
									</div>
									<!--end::Select wrapper-->
								</div>
								<!--end::Controls-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Row-->
							<div class="row g-6 g-xl-9">
								<!--begin::Col-->
								<div class="col-md-6 col-xl-4">
									<!--begin::Card-->
									<div class="card border-hover-primary">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-9">
											<!--begin::Card Title-->
											<div class="card-title m-0">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px w-50px bg-light">
													<img src="{{ asset('assets/media/svg/brand-logos/plurk.svg') }}" alt="image" class="p-3" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Car Title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">Progressing</span>
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end:: Card header-->
										<!--begin:: Card body-->
										<div class="card-body">
											<!--begin::Name-->
											<div class="fs-3 fw-bolder text-dark">Fitnes App</div>
											<!--end::Name-->
											<!--begin::Description-->
											<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
											<!--end::Description-->
											<!--begin::Info-->
											<div class="d-flex flex-wrap justify-content-between mb-4">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$340,000</div>
													<div class="fw-bold text-gray-400">Valuation</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$1.000.000</div>
													<div class="fw-bold text-gray-400">Fundraising</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">112</div>
													<div class="fw-bold text-gray-400">Votes</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Footer-->
											<div class="d-flex justify-content-between mt-auto bd-highlight">
												<!--begin::Actions-->
												<a href="#" class="btn btn-sm btn-outline btn-outline-danger btn-active-light-danger w-50 me-3 fs-5 p-3"><i class="bi bi-play-circle-fill text-danger me-2" style="font-size: 1.3em;"></i> Play Teaser</a> 
												<a href="#" class="btn btn-sm btn-danger w-50 fs-5 p-3"><i class="fas la-vote-yea me-2" style="font-size: 1.3em;"></i> Invest Startup</a>
												<!--end::Actions-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end:: Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xl-4">
									<!--begin::Card-->
									<div class="card border-hover-primary">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-9">
											<!--begin::Card Title-->
											<div class="card-title m-0">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px w-50px bg-light">
													<img src="{{ asset('assets/media/svg/brand-logos/disqus.svg') }}" alt="image" class="p-3" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Car Title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
											<span class="badge badge-light fw-bolder me-auto px-4 py-3">Pipeline</span>											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end:: Card header-->
										<!--begin:: Card body-->
										<div class="card-body">
											<!--begin::Name-->
											<div class="fs-3 fw-bolder text-dark">Leaf CRM</div>
											<!--end::Name-->
											<!--begin::Description-->
											<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR fficiency</p>
											<!--end::Description-->
											<!--begin::Info-->
											<div class="d-flex flex-wrap justify-content-between mb-4">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$340,000</div>
													<div class="fw-bold text-gray-400">Valuation</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$1.000.000</div>
													<div class="fw-bold text-gray-400">Fundraising</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">112</div>
													<div class="fw-bold text-gray-400">Votes</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Footer-->
											<div class="d-flex justify-content-between mt-auto bd-highlight">
												<!--begin::Actions-->
												<a href="#" class="btn btn-sm btn-outline btn-outline-danger btn-active-light-danger w-50 me-3 fs-5 p-3"><i class="bi bi-play-circle-fill text-danger me-2" style="font-size: 1.3em;"></i> Play Teaser</a> 
												<a href="#" class="btn btn-sm btn-secondary w-50 fs-5 p-3"><i class="bi bi-check-all me-2" style="font-size: 1.3em;"></i> Voted!</a>
												<!--end::Actions-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end:: Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xl-4">
									<!--begin::Card-->
									<div class="card border-hover-primary">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-9">
											<!--begin::Card Title-->
											<div class="card-title m-0">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px w-50px bg-light">
													<img src="{{ asset('assets/media/svg/brand-logos/figma-1.svg') }}" alt="image" class="p-3" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Car Title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
											    <span class="badge badge-light-success fw-bolder me-auto px-4 py-3">Completed</span>
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end:: Card header-->
										<!--begin:: Card body-->
										<div class="card-body">
											<!--begin::Name-->
											<div class="fs-3 fw-bolder text-dark">MyTV App</div>
											<!--end::Name-->
											<!--begin::Description-->
											<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR fficiency</p>
											<!--end::Description-->
											<!--begin::Info-->
											<div class="d-flex flex-wrap justify-content-between mb-4">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$340,000</div>
													<div class="fw-bold text-gray-400">Valuation</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$1.000.000</div>
													<div class="fw-bold text-gray-400">Fundraising</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">112</div>
													<div class="fw-bold text-gray-400">Votes</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Footer-->
											<div class="d-flex justify-content-between mt-auto bd-highlight">
												<!--begin::Actions-->
												<a href="#" class="btn btn-sm btn-outline btn-outline-danger btn-active-light-danger w-50 me-3 fs-5 p-3"><i class="bi bi-play-circle-fill text-danger me-2" style="font-size: 1.3em;"></i> Play Teaser</a> 
												<!--end::Actions-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end:: Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xl-4">
									<!--begin::Card-->
									<div class="card border-hover-primary">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-9">
											<!--begin::Card Title-->
											<div class="card-title m-0">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px w-50px bg-light">
													<img src="{{ asset('assets/media/svg/brand-logos/plurk.svg') }}" alt="image" class="p-3" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Car Title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">Progressing</span>
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end:: Card header-->
										<!--begin:: Card body-->
										<div class="card-body">
											<!--begin::Name-->
											<div class="fs-3 fw-bolder text-dark">Fitnes App</div>
											<!--end::Name-->
											<!--begin::Description-->
											<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
											<!--end::Description-->
											<!--begin::Info-->
											<div class="d-flex flex-wrap justify-content-between mb-4">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$340,000</div>
													<div class="fw-bold text-gray-400">Valuation</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$1.000.000</div>
													<div class="fw-bold text-gray-400">Fundraising</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">112</div>
													<div class="fw-bold text-gray-400">Votes</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Footer-->
											<div class="d-flex justify-content-between mt-auto bd-highlight">
												<!--begin::Actions-->
												<a href="#" class="btn btn-sm btn-outline btn-outline-danger btn-active-light-danger w-50 me-3 fs-5 p-3"><i class="bi bi-play-circle-fill text-danger me-2" style="font-size: 1.3em;"></i> Play Teaser</a> 
												<a href="#" class="btn btn-sm btn-danger w-50 fs-5 p-3"><i class="fas la-vote-yea me-2" style="font-size: 1.3em;"></i> Invest Startup</a>
												<!--end::Actions-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end:: Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xl-4">
									<!--begin::Card-->
									<div class="card border-hover-primary">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-9">
											<!--begin::Card Title-->
											<div class="card-title m-0">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px w-50px bg-light">
													<img src="{{ asset('assets/media/svg/brand-logos/disqus.svg') }}" alt="image" class="p-3" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Car Title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
											<span class="badge badge-light fw-bolder me-auto px-4 py-3">Pipeline</span>											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end:: Card header-->
										<!--begin:: Card body-->
										<div class="card-body">
											<!--begin::Name-->
											<div class="fs-3 fw-bolder text-dark">Leaf CRM</div>
											<!--end::Name-->
											<!--begin::Description-->
											<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR fficiency</p>
											<!--end::Description-->
											<!--begin::Info-->
											<div class="d-flex flex-wrap justify-content-between mb-4">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$340,000</div>
													<div class="fw-bold text-gray-400">Valuation</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$1.000.000</div>
													<div class="fw-bold text-gray-400">Fundraising</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">112</div>
													<div class="fw-bold text-gray-400">Votes</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Footer-->
											<div class="d-flex justify-content-between mt-auto bd-highlight">
												<!--begin::Actions-->
												<a href="#" class="btn btn-sm btn-outline btn-outline-danger btn-active-light-danger w-50 me-3 fs-5 p-3"><i class="bi bi-play-circle-fill text-danger me-2" style="font-size: 1.3em;"></i> Play Teaser</a> 
												<a href="#" class="btn btn-sm btn-secondary w-50 fs-5 p-3"><i class="bi bi-check-all me-2" style="font-size: 1.3em;"></i> Voted!</a>
												<!--end::Actions-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end:: Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-xl-4">
									<!--begin::Card-->
									<div class="card border-hover-primary">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-9">
											<!--begin::Card Title-->
											<div class="card-title m-0">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px w-50px bg-light">
													<img src="{{ asset('assets/media/svg/brand-logos/figma-1.svg') }}" alt="image" class="p-3" />
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Car Title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
											    <span class="badge badge-light-success fw-bolder me-auto px-4 py-3">Completed</span>
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end:: Card header-->
										<!--begin:: Card body-->
										<div class="card-body">
											<!--begin::Name-->
											<div class="fs-3 fw-bolder text-dark">MyTV App</div>
											<!--end::Name-->
											<!--begin::Description-->
											<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">CRM App application to HR fficiency</p>
											<!--end::Description-->
											<!--begin::Info-->
											<div class="d-flex flex-wrap justify-content-between mb-4">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$340,000</div>
													<div class="fw-bold text-gray-400">Valuation</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">$1.000.000</div>
													<div class="fw-bold text-gray-400">Fundraising</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
													<div class="fs-6 fw-bolder text-gray-700">112</div>
													<div class="fw-bold text-gray-400">Votes</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
											<!--begin::Footer-->
											<div class="d-flex justify-content-between mt-auto bd-highlight">
												<!--begin::Actions-->
												<a href="#" class="btn btn-sm btn-outline btn-outline-danger btn-active-light-danger w-50 me-3 fs-5 p-3"><i class="bi bi-play-circle-fill text-danger me-2" style="font-size: 1.3em;"></i> Play Teaser</a> 
												<!--end::Actions-->
											</div>
											<!--end::Footer-->
										</div>
										<!--end:: Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Pagination-->
							<div class="d-flex flex-stack flex-wrap pt-10">
								<div class="fs-6 fw-bold text-gray-700">Showing 1 to 10 of 50 entries</div>
								<!--begin::Pages-->
								<ul class="pagination">
									<li class="page-item previous">
										<a href="#" class="page-link">
											<i class="previous"></i>
										</a>
									</li>
									<li class="page-item active">
										<a href="#" class="page-link">1</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">2</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">3</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">4</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">5</a>
									</li>
									<li class="page-item">
										<a href="#" class="page-link">6</a>
									</li>
									<li class="page-item next">
										<a href="#" class="page-link">
											<i class="next"></i>
										</a>
									</li>
								</ul>
								<!--end::Pages-->
							</div>
							<!--end::Pagination-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
					<!--begin::Footer-->
					
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<!--end::Drawers-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->

		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>