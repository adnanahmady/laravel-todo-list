<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <header class="header jumbotron bg-dark text-light">
                <span class="h2">
                    @yield('header', config('app.name'))
                </span>
            </header>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <main class="main">
                <div class="row">
                    <div class="col">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
        <div class="col-4">
            <section class="section">
                @section('sidebar')
                    <div class="row">
                        <div class="col">
                            <div class="card bg-dark text-light">
                                <div class="card-header">
                                    <div class="card-title">
                                        <span class="h3">
                                            sidebar
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-action list-group-item-dark">item
                                            001
                                        </li>
                                        <li class="list-group-item list-group-item-action list-group-item-dark">item
                                            002
                                        </li>
                                        <li class="list-group-item list-group-item-action list-group-item-dark">item
                                            003
                                        </li>
                                        <li class="list-group-item list-group-item-action list-group-item-dark">item
                                            004
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @show
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <header class="footer jumbotron bg-dark text-light">
                <span class="h6">
                    @section('footer')
                        <div class="row">
                            <p class="col">
                                <i class="fa fa-copyright" aria-hidden="true"></i>
                                <span class="ml-2">
                                    All rights are reserved for adnan ahmady
                                </span>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col">
                                <i class="fa fa-gitlab" aria-hidden="true"></i>
                                <span class="ml-2">https://gitlab.com/adnanahmady/</span>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col">
                                <i class="fa fa-github" aria-hidden="true"></i>
                                <span class="ml-2">https://github.com/adnanahmady/</span>
                            </p>
                        </div>
                    @show
                </span>
            </header>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
