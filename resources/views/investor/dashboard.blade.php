@extends('layouts.investor-master')
@section('title', $title)
@section('content')
@push('head-script')
<!--begin::Page Vendor Stylesheets(used by this page)-->
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
@endpush
@push('foot-script')
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
@endpush

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
@endsection