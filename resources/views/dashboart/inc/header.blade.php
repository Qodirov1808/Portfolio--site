<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('')}}dashboart/assets/plugins/global/plugins.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}dashboart/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}dashboart/assets/css/style.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('')}}dashboart/assets/css/themes/layout/header/base/light.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}dashboart/assets/css/themes/layout/header/menu/light.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}dashboart/assets/css/themes/layout/brand/dark.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}dashboart/assets/css/themes/layout/aside/dark.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('')}}dashboart/assets/media/logos/favicon.ico" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		<link href="{{asset('')}}dashboart/assets/css/app.css" rel="stylesheet"  />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			{{-- @php
				$image = App\Models\Setting::orderBy('created_at', 'desc')->first();
				$logo = $image->logo;				
			@endphp --}}
			<a href="index.html">
				<img alt="Logo" src=" /dashboart/assets/media/logos/logo-light.png" />
			</a>
			{{-- --}}
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Aside Mobile Toggle-->
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
				<!--end::Aside Mobile Toggle-->
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--begin::Wrapper-->
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper" style="background: #e7e9f1;">
		<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
			<!--begin::Brand-->
			<div class="brand flex-column-auto" id="kt_brand">
				<!--begin::Logo-->
				<a href="" class="brand-logo">
					<img alt="Logo" src="/temples/images/software/logo.png" />
				</a>
				<!--end::Logo-->
				<!--begin::Toggle-->
				<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
					<span class="svg-icon svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
								<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Toolbar-->
			</div>
			<!--end::Brand-->
			<!--begin::Aside Menu-->
			<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
				<!--begin::Menu Container-->
				   <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"          data-menu-dropdown-timeout="500">
					<!--begin::Menu Nav-->
					<ul class="menu-nav">  
						<li class="menu-section mb-4">
							<img class="mb-1" src="/dashboart/assets/media/svg/avatars/001-boy.svg" alt="">
							<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
						</li> 
						<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
							<a href="{{route('index')}}" class="menu-link menu-toggle">
								<span class="svg-icon menu-icon">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
									<i class="flaticon2-architecture-and-city"></i>
									<!--end::Svg Icon-->
								</span>
								<span class="menu-text">Home</span>
							</a>
					</li>              
						<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{route('menu.index')}}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
										<i class="flaticon-grid-menu"></i>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">Menu</span>
								</a>
						</li>               
						<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
							<a href="{{route('section.index')}}" class="menu-link menu-toggle">
								<span class="svg-icon menu-icon">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
									<i class="flaticon-signs-1"></i>
									
									<!--end::Svg Icon-->
								</span>
								<span class="menu-text">Section</span>
							</a>
					</li>           
					<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
						<a href="{{ route('item.index') }}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
								<i class="flaticon-list-3"></i>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-text">Items</span>
						</a>
				 </li> 
				 <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
					<a href="{{ route('text.index') }}" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
							<i class="flaticon-list-2"></i>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">List</span>
					</a>
			    </li>
				<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
					<a href="{{ route('setting.index') }}" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
							<i class="flaticon-cogwheel-2"></i>
							
							
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Settings</span>
					</a>
			    </li>
				<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
						<a style="text-decoration: none" class="menu-link menu-toggle" href="{{ route('logout') }}"
						onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
							<i class="ki
						ki-bold-long-arrow-back"></i>	
							<!--end::Svg Icon-->
						</span>
										
						<span class="menu-text">Logaut</span>
					     </a>
					 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						 @csrf
					 </form>
			    </li>           
					</ul>          
				</div>        
			 </div>  
		   </div>
				<div id="kt_header" class="header header-fixed" >
								<!--begin::Container-->
								<div class="container-fluid d-flex align-items-stretch justify-content-between">
									<div class="topbar">									
									</div>
									<div class="m-5 d-flex align-items-center justify-content-center">
										<div class="topbar-item">
											<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
												{{-- <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span> --}}
												<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ Auth::user()->name }}</span>
												<span class="symbol symbol-35 symbol-light-success">
													@php
														
													@endphp
													<span class="symbol-label font-size-h5 font-weight-bold"><a href="{{ route('user',Auth::user()->id) }}"><i class="flaticon2-user-1"></i></a></span>
												</span>
											</div>
										</div>                                      
									</div>								
								</div>								
								<!--end::Container-->
							</div>
							<div style="height: 40px" class="carousel-item active d-flex flex-column align-items-center">
								<a href="" class="brand-logo">
									<img style=" padding-bottom:15px; margin-top:-50px;  " width="400px" height="100px" alt="Logo" src="/temples/images/software/logo.png" />
								</a>
							</div>							