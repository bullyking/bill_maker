<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ Html::style('public/pofo/css/style.css?v='.date('Y-m-d H:i')) }}
    {{-- <link rel="icon" href="{{url('/image')}}/blog/title-logo.png/16/16" type="image/x-icon"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bill Maker</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>

</body>

</html>
