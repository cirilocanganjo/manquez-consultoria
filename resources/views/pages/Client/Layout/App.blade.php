<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>


    <!-- Dynamical Content-->
        @yield("Content")
    <!-- Dynamical Content-->


    <script src="{{ asset('assets/vendors/js/glightbox.min.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/scriptsAdicionais.js') }}"></script>

 <div class="footer-bottom__copyright text-center">
      &COPY; Copyright {{ date('Y') }} <span>ManQuez Consultoria  Todos os direitos reservados | Desenvolvido por Ensinautas </span><br><br>
  </div>
