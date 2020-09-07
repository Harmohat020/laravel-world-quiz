<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
        
        <!--Custom CSS Files -->
        <link rel="stylesheet" href="./assets/styles/welcome.css">
        
        <!--Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                        <a href="{{ url('/home') }}"><span class="link-home">HOME</span></a>
                </div>

            <div class="content">
                <div class="title m-b-md" id="welcome-title">Welcome</div>
            </div>
        </div>

     <script src="./assets/js/welcome.js"></script>
    </body>
</html>
