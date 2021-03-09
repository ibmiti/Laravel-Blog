<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.scss') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a7bffd41d3.js"></script>
    <title>BabyBassinet - @yield('title') </title>
</head>
<!-- | details which navbar is served -->
<!-- | this is a feature which can be turned on for various navbar setups -->
@switch($uri = Request::getRequestUri()) 
        @case($uri == '/')
            <x-navbar/>
        @break
        @case ($uri == '/babies')
            <x-navbar/>
        @break
        @case($uri == '/kids')
            <x-navbar/>
        @break
        @case($uri == '/guides')
            <x-navbar/>
        @break
        @case($uri == '/health')
            <x-navbar/>
        @break
        @case($uri == '/about')
            <x-navbar/>
        @break
        @case ($uri == '/contact')
            <x-navbar/>
        @break
        @case ($uri == '/articles')
            <x-navbar/>
        @break
        <!-- this is temp. -->
        @case($uri)        
            <x-navbar/>
        @break
    @endswitch
<body>
<div class="container">
    @include('partials.flash-message')
    @yield('content')
</div>

<!-- bootstrap related scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="row">
    <div class="col-sm-12 text-center">
        <x-footer />
    </div>
</div>
</body>
</html>