{{-- Les pages auront ce schéma de base --}}
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>@yield('titre')</title>
            <link rel="stylesheet" href="{{asset('css/main.css')}}">
        </head>
        <body>
            <div class="container_principal">
                @include('incs.navbar')
                @yield('content')
                @include('incs.footer')
            </div>
            <script src="{{asset('js/app.js')}}"></script>
        </body>
    </html>