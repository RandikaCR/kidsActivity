<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
    @include('partials.frontend.head')
</head>
<body class="main">

<div class="wrapper">

    @include('partials.frontend.header')


    <div id="main">

        @yield('content')




    </div>


    @include('partials.frontend.footer')

</div>

@include('partials.frontend.script')
</body>
</html>
