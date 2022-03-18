<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Bizning Uylar" name="author" />
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}">
    @include('layouts.simple.css')
    @yield('style')
    @trixassets
    @livewireStyles
    @stack('styles')
</head>
<body>
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <i class="uil-shutter-alt spin-icon"></i>
        </div>
    </div>
</div>

<div id="layout-wrapper">
    @include('layouts.simple.header')
    @include('layouts.simple.sidebar')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @if(session()->get('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        {{ isset($slot) ? $slot : ''}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.simple.footer')
    </div>
</div>
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">
            <h5 class="m-0 me-2">Выберите тему</h5>
            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>
        <hr class="mt-0" />
        <div class="p-4">
            <div class="mb-2">
                <img src="{{ asset('assets/images/layouts/layout-1.jpg') }}" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Дневной</label>
            </div>
            <div class="mb-2">
                <img src="{{ asset('assets/images/layouts/layout-2.jpg') }}" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" />
                <label class="form-check-label" for="dark-mode-switch">Ночной</label>
            </div>
        </div>
    </div>
</div>
<div class="rightbar-overlay"></div>
@include('layouts.simple.script')
@yield('scripts')
@livewireScripts

@stack('scripts')
</body>
</html>
