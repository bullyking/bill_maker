<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- <link rel="icon" href="{{url('/image')}}/blog/title-logo.png/16/16" type="image/x-icon"> --}}
    {{-- <link rel="canonical" href="https://www.jobs.asearcher.com"> --}}

    <input type="hidden" id="token" class="token" value="{{ csrf_token() }}">
    <input type="hidden" id="url" class="url" value="{{ url('/') }}">

    <!-- animation -->
    {{ Html::style('public/assets/theme/pofo/default/css/animate.css?v='.date('Y-m-d H:i')) }}
    <!-- bootstrap -->
    {{ Html::style('public/assets/theme/pofo/default/css/bootstrap.min.css?v='.date('Y-m-d H:i')) }}
    <!-- et line icon -->
    {{ Html::style('public/assets/theme/pofo/default/css/et-line-icons.css?v='.date('Y-m-d H:i')) }}
    <!-- font-awesome icon -->
    {{ Html::style('public/assets/theme/pofo/default/css/font-awesome.min.css?v='.date('Y-m-d H:i')) }}
    <!-- themify icon -->
    {{ Html::style('public/assets/theme/pofo/default/css/themify-icons.css?v='.date('Y-m-d H:i')) }}
    <!-- swiper carousel -->
    {{ Html::style('public/assets/theme/pofo/default/css/swiper.min.css?v='.date('Y-m-d H:i')) }}
    <!-- justified gallery  -->
    {{ Html::style('public/assets/theme/pofo/default/css/justified-gallery.min.css?v='.date('Y-m-d H:i')) }}
    <!-- magnific popup -->
    {{ Html::style('public/assets/theme/pofo/default/css/magnific-popup.css?v='.date('Y-m-d H:i')) }}
    <!-- revolution slider -->
    {{ Html::style('public/assets/theme/pofo/default/revolution/css/settings.css?v='.date('Y-m-d H:i')) }}
    {{ Html::style('public/assets/theme/pofo/default/revolution/css/layers.css?v='.date('Y-m-d H:i')) }}
    {{ Html::style('public/assets/theme/pofo/default/revolution/css/navigation.css?v='.date('Y-m-d H:i')) }}
    <!-- bootsnav -->
    {{ Html::style('public/assets/theme/pofo/default/css/bootsnav.css?v='.date('Y-m-d H:i')) }}
    <!-- style -->
    {{ Html::style('public/assets/theme/pofo/default/css/style.css?v='.date('Y-m-d H:i')) }}
    <!-- responsive css -->
    {{ Html::style('public/assets/theme/pofo/default/css/responsive.css?v='.date('Y-m-d H:i')) }}

    {{ Html::style('public/assets/theme/pofo/customize/css/custom.css?v='.date('Y-m-d H:i')) }}

    <!-- scripts -->
    @yield('styles')
    {{-- end scripts  --}}

</head>

<body>

  @yield('content')

</body>

{{ Html::script('public/assets/theme/pofo/default/js/jquery.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/default/js/modernizr.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/default/js/bootstrap.bundle.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/default/js/jquery.easing.1.3.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/default/js/skrollr.min.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/default/js/smooth-scroll.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/default/js/jquery.appear.js?v='.date('Y-m-d H:i')) }}
<!-- menu navigation -->
{{ Html::script('public/assets/theme/pofo/default/js/bootsnav.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/default/js/jquery.nav.js?v='.date('Y-m-d H:i')) }}
<!-- animation -->
{{ Html::script('public/assets/theme/pofo/default/js/wow.min.js?v='.date('Y-m-d H:i')) }}
<!-- page scroll -->
{{ Html::script('public/assets/theme/pofo/default/js/page-scroll.js?v='.date('Y-m-d H:i')) }}
<!-- swiper carousel -->
{{ Html::script('public/assets/theme/pofo/default/js/swiper.min.js?v='.date('Y-m-d H:i')) }}
<!-- counter -->
{{ Html::script('public/assets/theme/pofo/default/js/jquery.count-to.js?v='.date('Y-m-d H:i')) }}
<!-- parallax -->
{{ Html::script('public/assets/theme/pofo/default/js/jquery.stellar.js?v='.date('Y-m-d H:i')) }}
<!-- magnific popup -->
{{ Html::script('public/assets/theme/pofo/default/js/jquery.magnific-popup.min.js?v='.date('Y-m-d H:i')) }}
<!-- portfolio with shorting tab -->
{{ Html::script('public/assets/theme/pofo/default/js/isotope.pkgd.min.js?v='.date('Y-m-d H:i')) }}
<!-- images loaded -->
{{ Html::script('public/assets/theme/pofo/default/js/imagesloaded.pkgd.min.js?v='.date('Y-m-d H:i')) }}
<!-- pull menu -->
{{ Html::script('public/assets/theme/pofo/default/js/classie.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/default/js/hamburger-menu.js?v='.date('Y-m-d H:i')) }}
<!-- counter  -->
{{ Html::script('public/assets/theme/pofo/default/js/counter.js?v='.date('Y-m-d H:i')) }}
<!-- fit video  -->
{{ Html::script('public/assets/theme/pofo/default/js/jquery.fitvids.js?v='.date('Y-m-d H:i')) }}
<!-- skill bars  -->
{{ Html::script('public/assets/theme/pofo/default/js/skill.bars.jquery.js?v='.date('Y-m-d H:i')) }}
<!-- justified gallery  -->
{{ Html::script('public/assets/theme/pofo/default/js/justified-gallery.min.js?v='.date('Y-m-d H:i')) }}
<!--pie chart-->
{{ Html::script('public/assets/theme/pofo/default/js/jquery.easypiechart.min.js?v='.date('Y-m-d H:i')) }}
<!-- instagram -->
{{ Html::script('public/assets/theme/pofo/default/js/instafeed.min.js?v='.date('Y-m-d H:i')) }}
<!-- retina -->
{{ Html::script('public/assets/theme/pofo/default/js/retina.min.js?v='.date('Y-m-d H:i')) }}
<!-- revolution -->
{{ Html::script('public/assets/theme/pofo/default/revolution/js/jquery.themepunch.tools.min.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/default/revolution/js/jquery.themepunch.revolution.min.js?v='.date('Y-m-d H:i')) }}

<!-- setting -->
{{ Html::script('public/assets/theme/pofo/default/js/main.js?v='.date('Y-m-d H:i')) }}

{{ Html::script('public/assets/theme/pofo/customize/js/custom.js?v='.date('Y-m-d H:i')) }}

<!-- scripts -->
@yield('scripts')
{{-- end script  --}}

</html>
