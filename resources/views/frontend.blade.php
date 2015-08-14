<!DOCTYPE html>
<html lang="vi">
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <link type="image/x-icon" href="{{url('favicon.ico')}}" rel="shortcut icon"/>
    <link href="https://plus.google.com/107515763736347546999" rel="publisher"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700italic,800italic,700,800&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/tlv.css')}}" type="text/css"/>
    <meta content='CSVN' name='generator'/>
    <title>{{empty($meta_title)? env('WEBSITE_NAME') : $meta_title}}</title>
    <meta property="og:title" content="{{empty($meta_title)? env('WEBSITE_NAME') : $meta_title}}">
    <meta property="og:description" content="{{empty($meta_desc)? env('WEBSITE_NAME') : $meta_desc}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:image" content="{{ empty($meta_image) ? url('images/logo.png') : $meta_image  }}">
    <meta property="og:site_name" content="Tên website">

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="{{Request::url()}}">
    <meta name="twitter:title" content="{{empty($meta_title)? env('WEBSITE_NAME') : $meta_title}}">
    <meta name="twitter:description" content="{{empty($meta_desc)? env('WEBSITE_NAME') : $meta_desc}}">
    <meta name="twitter:image" content="{{ empty($meta_image) ? url('images/logo.png') : $meta_image  }}">

    <meta itemprop="name" content="{{empty($meta_title)? env('WEBSITE_NAME') : $meta_title}}">
    <meta itemprop="description" content="{{empty($meta_desc)? env('WEBSITE_NAME') : $meta_desc}}">
    <meta itemprop="image" content="{{ empty($meta_image) ? url('images/logo.png') : $meta_image  }}">

    <meta name="ABSTRACT" content="{{empty($meta_desc)? env('WEBSITE_NAME') : $meta_desc}}"/>
    <meta http-equiv="REFRESH" content="1200"/>
    <meta name="REVISIT-AFTER" content="1 DAYS"/>
    <meta name="DESCRIPTION" content="{{empty($meta_desc)? env('WEBSITE_NAME') : $meta_desc}}"/>
    <meta name="KEYWORDS" content="{{empty($meta_keywords)? env('WEBSITE_NAME') : $meta_keywords}}"/>
    <meta name="ROBOTS" content="index,follow"/>
    <meta name="AUTHOR" content="Tiền liệt vương"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2013 by Goethe"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>
    <!--[if lte IE 8]>
    <script src="{{url('js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{url('css/ie.css')}}" type="text/css"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
</head>
<body class="home">
<div class="wrapper" id="wrapper">
    @include('frontend.header')

    @yield('content')

    @include('frontend.box_support')

    @include('frontend.footer')
</div>
<script type="text/javascript" src="{{url('js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/floating-navigation.js')}}"></script>
<script type="text/javascript" src="{{url('js/common.js')}}"></script>
@yield('footer')
</body>
</html>