<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            overflow-x: hidden;
        }
    </style>

@include('frontend.includes.assets.meta')

<title>Shamima Haque</title>

@include('frontend.includes.assets.css')








</head>

<body onload="myFunction()">
    @include('frontend.includes.header')
    @yield('body')

    @include('frontend.includes.footer')
    @include('frontend.includes.assets.js')
</body>
</html>
