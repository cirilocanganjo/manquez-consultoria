<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

        <title>@yield('title')</title>

    </head>
    <body>

        <main class="container text-center " style="display: flex; flex-direction: column; margin-top: 30vh;">

            <div>

                <h1 class="display-1">@yield('code')</h1>
                <h3 class="mb-4">  @yield('message')</h3>
                <a class="" href="/">Voltar para a página inicial</a>

            </div>


        </main>


    </body>
</html>
