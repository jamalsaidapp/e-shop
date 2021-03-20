<!DOCTYPE html>
<html>
<head>
    <title>E-shop</title>
    <link href=" {{ asset('Assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('Assets/js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--webfont-->
    <!-- for bootstrap working -->
    <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <script type="text/javascript" src="{{ asset('Assets/js/bootstrap-3.1.1.min.js') }}"></script>--}}
<!-- //for bootstrap working -->
    <!-- cart -->
    <script src="{{ asset('Assets/js/simpleCart.min.js') }}"></script>
    <!-- cart -->
    <link rel="stylesheet" href="{{ asset('Assets/css/flexslider.css') }}" type="text/css" media="screen"/>
</head>
<body>
<div id="app">
    <headerr></headerr>
    <bodyy></bodyy>
    <footerr></footerr>
</div>

</body>
</html>
