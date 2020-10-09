<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield("title")
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="" rel="stylesheet">
       
        <script src="" defer></script>
    </head>

    <body class="h-screen" >
      @include ("_partials/nav")
        
            <main class="h-auto">
                @yield("content")
            </main>
        

        @include("_partials/footer")
    </body>
</html>
