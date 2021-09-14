<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Quickad">
    <meta name="keywords" content="Classified, ads, php script, ads cms, Responisve, Bootstrap, Html5, Css3, Blog, Classified, Ads, Simple, Clean ">
    <meta name="description" content="Premium Buy and Sell php script. The No.1 Classified script. Premium Support.">
    <meta property="og:image" content="storage/logo/classic-theme_logo.png"/>
    <meta name="twitter:image:src" content="storage/logo/classic-theme_logo.png"/>
    <link rel="shortcut icon" href="storage/logo/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/flags/flags.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/styleswitcher/styleswitcher.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/thenext-theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/thenext-theme/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/thenext-theme/css/color.css') }}">
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
</head>

<body data-role="page" class="ltr" id="page" data-ipapi="geo_ip_db" data-showlocationicon="1">
 
    <!-- Wrapper -->
    <div id="wrapper">
        @include('layout.partials.header')
    
        @yield('content')

        @include('layout.partials.footer')
    </div>     

</body>
</html>