<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProySoft</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('fonts/glyphicons-halflings-regular.woff2')}}">
    <link rel="stylesheet" href="{{URL::asset('css/sticky-footer-navbar.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-select.min.css')}}">  
    <script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script> 
</head>
<body>
    <div class="container">
    @include('navbar')
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header text-center">
                    Sistema de Registro de Asistencia
                </h1>
            </div>
            @yield('content')
        </div>
    </div>
    @include('footer')
    <script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
    @stack('scripts')
    <script type="text/javascript" src="{{URL::asset('js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.js')}}"></script>

</body>
</html>