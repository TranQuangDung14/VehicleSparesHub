<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('Admin/') }}/images/logos/favicon.png" />

    {{-- <link rel="stylesheet" href="{{asset('public/backEnd/')}}/vendors/css/jquery-ui.css" /> --}}
    <link rel="stylesheet" href="{{ asset('Admin/') }}/css/styles.min.css" />
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    {{-- ckeditor 5 --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script> --}}
    <style>
        .pagination a {
            color: #007BFF; /* Màu sắc liên kết */
            font-size: 16px; /* Kích thước font */
        }

        .pagination a:hover {
            background-color: #007BFF; /* Màu sắc nền khi hover */
            color: #fff; /* Màu sắc chữ khi hover */
        }
    </style>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">
 {{--  sidebar --}}
    <aside class="left-sidebar">
        @include('Admin.partial.sidebar')
    </aside>
<div class="body-wrapper">
    {{-- header --}}
    <header class="app-header">
        @include('Admin.partial.header')
    </header>


    {{-- content --}}
    {{-- <main> --}}
        @yield('content')
    {{-- </main> --}}
{{-- </div> --}}
</div>
    {{-- footer --}}
    
    <footer>
        @include('Admin.partial.footer')
    </footer>
    {{-- style js  --}}
    <script src="{{ asset('Admin/') }}/js/main.js"></script>

    <script src="{{ asset('Admin/') }}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('Admin/') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Admin/') }}/js/sidebarmenu.js"></script>
    <script src="{{ asset('Admin/') }}/js/app.min.js"></script>
    <script src="{{ asset('Admin/') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('Admin/') }}/libs/simplebar/dist/simplebar.js"></script>
    <script src="{{ asset('Admin/') }}/js/dashboard.js"></script>

    {{-- @stack('script') --}}
</body>

</html>
