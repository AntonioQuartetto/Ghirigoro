<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title}}</title>

       @vite(['resources\css\app.css', 'resources\js\app.js'])
        
    </head>
    <body class="body-custom">
        
    <!-- navbar -->
    <x-navbar />

    <!-- contenuto pagina -->
    <main class="container my-5">

    {{$slot}}

    </main>



    <!-- footer -->

    </body>
</html>
