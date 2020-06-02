<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                
                <div class="title m-b-md">
                    Projektas: sunkvežimiai
                </div>

                <div class="links ">
                    @if(Session::get('status'))
                        <div class="alert alert-success">
                            {{Session::get('status')}}
                        </div>
                    @endif
                    <a class="btn btn-secondary btn-sm btn-block" href="{{route('trucks.create')}}">Pridėti sunkvežimį</a>
                    <a class="btn btn-secondary btn-sm btn-block" href="{{route('owners.create')}}">Pridėti savininką</a>
                    <a class="btn btn-secondary btn-sm btn-block" href="{{route('years.create')}}">Priskirti sunkvežimio gamybos metus</a>
                    <a class="btn btn-secondary btn-sm btn-block" href="{{route('addOwner.create')}}">Priskirti sunkvežimio savininką</a>
                    <a class="btn btn-secondary btn-sm btn-block" href="{{route('comments.create')}}">Aprašyti (komentuoti) sunkvežimį</a>
                </div>
                <br>
                <div class="links">
                    <a class="btn btn-info btn-sm float-left" href="{{route('trucks.index')}}">Bazinis sąrašas</a>
                </div>
                <hr>
                <div class="container">
                    @yield('content')
                </div>
            </div>
            
        </div>
    </body>
</html>
