<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sirius</title>

    <link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('css/fontastic.css')}}">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ asset('css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}"> 
    <link rel="stylesheet" href="{{ asset('css/form-elements.css')}}">
    <!-- Favicon
    <link rel="shortcut icon" href="img/favicon.ico">    
    --> 
</head>

<body class="nav-md" style="overflow-x:hidden;">
            
    <div class="page" style="max-height:90vh">
        @include ('header')
        @yield('conteudo')
    </div> 
   @include ('footer')
    
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('js/google.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="{{ asset('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('js/front.js')}}"></script> 
    <script src="{{ asset('js/jquery.backstretch.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script src="https://www.gstatic.com/firebasejs/4.8.2/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-database.js"></script>
    <script src="{{ asset('js/firebase.js')}}"></script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCv2dAI4ZALFsfMzsAmynw6gmk_spa2EfU&callback=initMap">
    </script> 

    @yield('scripts')

</body>
</html>
