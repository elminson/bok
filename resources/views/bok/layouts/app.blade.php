<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', app_name())">
        <meta name="author" content="@yield('meta_author', app_name())">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('/css/frontend.css')) }}

        @stack('after-styles')
        @include('bok.partials.header-files')
    </head>

    <body>

    <!-- Top Bar Start -->
    <div class="topbar">
        @include('bok.partials.nav')
    </div>

    @include('bok.partials.topbar')

    <div class="page-wrapper">
        <div class="page-wrapper-inner">

        @include('bok.partials.left-sidenav')

        <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    @include('includes.partials.messages')
                    @yield('content')

                </div><!-- container -->

                @include('bok.partials.footer')
            </div>
            <!-- end page content -->
        </div>
    </div>
    <!-- end page-wrapper -->

    @include('bok.partials.js-footer-files')
    </body>
    </html>