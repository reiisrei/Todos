<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        @yield('title')
    </title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


  <!-- Custom fonts for this theme -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="{{ asset('css/freelancer.min.css') }}" rel="stylesheet">
<style>
div.timer-title {
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    color:ivory;
    font-weight: bolder;
    font-size: 35px;
  position: absolute;
  top: 60px;
  right: 0;
  /* width: 339.984; */
  /* height: 245; */
  /* border: 1px solid #2c3e50; */

}

.thumbnail {
    position: relative;
}

.caption {
    position: absolute;
    top: 45%;
    left: 0;
    width: 100%;
}
</style>
</head>
