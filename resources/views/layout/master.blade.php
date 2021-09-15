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

    <style>
        :root{--theme-color-0_01: rgba(42,65,232,0.01);--theme-color-0_02: rgba(42,65,232,0.02);--theme-color-0_03: rgba(42,65,232,0.03);--theme-color-0_04: rgba(42,65,232,0.04);--theme-color-0_05: rgba(42,65,232,0.05);--theme-color-0_06: rgba(42,65,232,0.06);--theme-color-0_07: rgba(42,65,232,0.07);--theme-color-0_08: rgba(42,65,232,0.08);--theme-color-0_09: rgba(42,65,232,0.09);--theme-color-0_1: rgba(42,65,232,0.1);--theme-color-0_11: rgba(42,65,232,0.11);--theme-color-0_12: rgba(42,65,232,0.12);--theme-color-0_13: rgba(42,65,232,0.13);--theme-color-0_14: rgba(42,65,232,0.14);--theme-color-0_15: rgba(42,65,232,0.15);--theme-color-0_16: rgba(42,65,232,0.16);--theme-color-0_17: rgba(42,65,232,0.17);--theme-color-0_18: rgba(42,65,232,0.18);--theme-color-0_19: rgba(42,65,232,0.19);--theme-color-0_2: rgba(42,65,232,0.2);--theme-color-0_21: rgba(42,65,232,0.21);--theme-color-0_22: rgba(42,65,232,0.22);--theme-color-0_23: rgba(42,65,232,0.23);--theme-color-0_24: rgba(42,65,232,0.24);--theme-color-0_25: rgba(42,65,232,0.25);--theme-color-0_26: rgba(42,65,232,0.26);--theme-color-0_27: rgba(42,65,232,0.27);--theme-color-0_28: rgba(42,65,232,0.28);--theme-color-0_29: rgba(42,65,232,0.29);--theme-color-0_3: rgba(42,65,232,0.3);--theme-color-0_31: rgba(42,65,232,0.31);--theme-color-0_32: rgba(42,65,232,0.32);--theme-color-0_33: rgba(42,65,232,0.33);--theme-color-0_34: rgba(42,65,232,0.34);--theme-color-0_35: rgba(42,65,232,0.35);--theme-color-0_36: rgba(42,65,232,0.36);--theme-color-0_37: rgba(42,65,232,0.37);--theme-color-0_38: rgba(42,65,232,0.38);--theme-color-0_39: rgba(42,65,232,0.39);--theme-color-0_4: rgba(42,65,232,0.4);--theme-color-0_41: rgba(42,65,232,0.41);--theme-color-0_42: rgba(42,65,232,0.42);--theme-color-0_43: rgba(42,65,232,0.43);--theme-color-0_44: rgba(42,65,232,0.44);--theme-color-0_45: rgba(42,65,232,0.45);--theme-color-0_46: rgba(42,65,232,0.46);--theme-color-0_47: rgba(42,65,232,0.47);--theme-color-0_48: rgba(42,65,232,0.48);--theme-color-0_49: rgba(42,65,232,0.49);--theme-color-0_5: rgba(42,65,232,0.5);--theme-color-0_51: rgba(42,65,232,0.51);--theme-color-0_52: rgba(42,65,232,0.52);--theme-color-0_53: rgba(42,65,232,0.53);--theme-color-0_54: rgba(42,65,232,0.54);--theme-color-0_55: rgba(42,65,232,0.55);--theme-color-0_56: rgba(42,65,232,0.56);--theme-color-0_57: rgba(42,65,232,0.57);--theme-color-0_58: rgba(42,65,232,0.58);--theme-color-0_59: rgba(42,65,232,0.59);--theme-color-0_6: rgba(42,65,232,0.6);--theme-color-0_61: rgba(42,65,232,0.61);--theme-color-0_62: rgba(42,65,232,0.62);--theme-color-0_63: rgba(42,65,232,0.63);--theme-color-0_64: rgba(42,65,232,0.64);--theme-color-0_65: rgba(42,65,232,0.65);--theme-color-0_66: rgba(42,65,232,0.66);--theme-color-0_67: rgba(42,65,232,0.67);--theme-color-0_68: rgba(42,65,232,0.68);--theme-color-0_69: rgba(42,65,232,0.69);--theme-color-0_7: rgba(42,65,232,0.7);--theme-color-0_71: rgba(42,65,232,0.71);--theme-color-0_72: rgba(42,65,232,0.72);--theme-color-0_73: rgba(42,65,232,0.73);--theme-color-0_74: rgba(42,65,232,0.74);--theme-color-0_75: rgba(42,65,232,0.75);--theme-color-0_76: rgba(42,65,232,0.76);--theme-color-0_77: rgba(42,65,232,0.77);--theme-color-0_78: rgba(42,65,232,0.78);--theme-color-0_79: rgba(42,65,232,0.79);--theme-color-0_8: rgba(42,65,232,0.8);--theme-color-0_81: rgba(42,65,232,0.81);--theme-color-0_82: rgba(42,65,232,0.82);--theme-color-0_83: rgba(42,65,232,0.83);--theme-color-0_84: rgba(42,65,232,0.84);--theme-color-0_85: rgba(42,65,232,0.85);--theme-color-0_86: rgba(42,65,232,0.86);--theme-color-0_87: rgba(42,65,232,0.87);--theme-color-0_88: rgba(42,65,232,0.88);--theme-color-0_89: rgba(42,65,232,0.89);--theme-color-0_9: rgba(42,65,232,0.9);--theme-color-0_91: rgba(42,65,232,0.91);--theme-color-0_92: rgba(42,65,232,0.92);--theme-color-0_93: rgba(42,65,232,0.93);--theme-color-0_94: rgba(42,65,232,0.94);--theme-color-0_95: rgba(42,65,232,0.95);--theme-color-0_96: rgba(42,65,232,0.96);--theme-color-0_97: rgba(42,65,232,0.97);--theme-color-0_98: rgba(42,65,232,0.98);--theme-color-0_99: rgba(42,65,232,0.99);--theme-color-1: rgba(42,65,232,1);}
    </style>
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