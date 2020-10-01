<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield("title")
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/> --}}
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
        <link href="" rel="stylesheet">
       
        <script src="" defer></script>
    </head>

    <body>
        @include("_partials/nav")

        <div class="main_container">
            <main class =" h1 text-center">
                @yield("content")
            </main>
        </div>

        @include("_partials/footer")
    </body>
</html>
