<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Custom fonts for this template-->

    <link href="{{asset('dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("dashboard/css/sb-admin-2.min.css")}}" rel="stylesheet">

    @yield('style')

    
    <title>@yield('title')</title>
    
</head>
<body>   


  

        @yield('content')
 
    
    

       <!-- Bootstrap core JavaScript-->
    <script src="{{asset("dashboard/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset("dashboard/vendor/jquery-easing/jquery.easing.min.js")}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset("dashboard/js/sb-admin-2.min.js")}}"></script>

    @yield('script')


</body>
</html>