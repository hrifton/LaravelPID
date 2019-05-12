<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">



        @include('layouts/head')

    </head>
    <body>
        
        <div id="app" >
<div style="display:flex; flex-wrap:wrap;"> 
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <navbar/>
                </div>
            </nav>
            


            <div class="container-fluid">
                @yield('contenu')
            </div></div>
            

        </div>
        @include('layouts/footer')
    </body>
</html>
