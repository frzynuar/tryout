<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>test</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />
        <meta name="token" content="{{ (Auth::user()) ? Auth::user()->createToken(env('APP_NAME'))->plainTextToken : '' }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="canonical" href="" />
		<link rel="shortcut icon" href="" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
        @stack('page_css')
	</head>
    @auth
    <body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    @else
    <body id="kt_body" class="app-blank app-blank">
    @endauth
    <script type="text/javascript">var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
    @auth
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <div id="kt_app_header" class="app-header">
                @include('layouts.header-container')
            </div>
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                @include('layouts.sidebar-container')
            </div>
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                @yield('page_content')
                @stack('page_view')
            </div>
            <div id="kt_app_footer" class="app-footer">
                <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                    <div class="text-dark order-2 order-md-1">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <a href="{{ url('') }}" class="d-block d-lg-none mx-auto py-20">
            <img alt="Logo" src="" class="theme-light-show h-25px" />
            <img alt="Logo" src="" class="theme-dark-show h-25px" />
            </a>
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    @yield('page_content')
                </div>
            </div>
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url({{ asset('assets/media/auth/bg11.png') }})"></div>
        </div>
    </div>
    @endauth
    <script type="text/javascript">var hostUrl = "{{ asset('assets') }}";</script>
    <script type="text/javascript" src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
			"X-CSRF-TOKEN" : $('meta[name="csrf-token"]').attr('content'),
            "Authorization": 'Bearer ' + $('meta[name="token"]').attr('content')
		}
    });
    </script>
    @stack('page_js')
</html>