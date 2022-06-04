<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Fizemos esta aplicação para ajudar as pessoas que usam o WhatsApp no computador e não tem como salvar o contato. Use e compartilhe a ideia.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('imagens/favicon-48.ico') }}">
    <title>{{ config('app.name', 'NoSave - Mensagens Whats') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('main.css') }}" rel="stylesheet">        
    <style>
        .erroInput {
            border: 2px solid red;
        }

    </style>
</head>

<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
        <footer>
          @yield('footer')
        </footer>
    </div>
</body>
@yield('content-js')

<script src="{{ asset('js/dd.min.js?ver=4.0') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
{{-- <script src="{{ asset('plugins/fontawesome/js/all.min.js') }}"></script> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>
