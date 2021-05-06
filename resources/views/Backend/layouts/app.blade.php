<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>KBPro Consulting | @yield('title')</title>
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="32x32" href="{{asset('assets/images/logo-law.svg')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/images/logo-law.svg')}}" sizes="32x32">
  <link rel="icon" type="image/png" href="{{asset('assets/images/logo-law.svg')}}" sizes="16x16">
<script src="{{asset('/frontend/js/jquery.min.js')}}"></script>

  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

  @yield('customStyle')

</head>



<body class="hold-transition sidebar-mini">

  <div class="wrapper">



@include('Backend.include.sidebar')

@include('Backend.include.header')

     

@yield('content')



@include('Backend.include.footer')

