<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if(isset($page_title))
        <title>{{ $page_title }} - {{ config('app.name') }}</title>
        @else
        <title>{{ config('app.name') }}</title>
        @endif

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
        <link rel="stylesheet" href="{{ URL::asset('fonts/icomoon/style.css') }}">

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/layouts.css') }}">

        <style type="text/css">
            body, html {
                height: 100%;
                display: grid;
            }
        </style>

    </head>
    <body>
        <div class="container" style="margin: auto;">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-3 col-sm-6 col-6 mb-16">
                    <h1 class="text-center mb-0" style="font-size: 48px;">ManyVote</h1>
                </div>
            </div>

            <div class="row justify-content-center mb-16">
                <div class="col-lg-7 col-md-8 col-sm-12 col-12">
                    <h4 class="text-center">Admin Portal Login</h4>
                    <p class="text-center">Enter your username and password to gain access to the ManyVote Admin Portal.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-10 col-12">
                    <div class="gray-box">
                        <form action="{{ url('/admin/login/attempt') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <h6>Email:</h6>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <h6>Password:</h6>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            @if(session()->has('error'))
                            <div class="form-group">
                                <p class="text-center red">{{ session()->get('error') }}</p>
                            </div>
                            @endif

                            <div class="form-group mt-32">
                                <input type="submit" value="Login to Admin Portal" class="btn btn-primary centered">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
