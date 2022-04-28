<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="@yield('description')" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>@yield('title', env('APP_NAME'))</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/script.min.js') }}" defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    </head>
    <body>
        <header
        class="main-header d-flex flex-column flex-md-row align-items-center px-md-4 mb-3 p-4 bg-white border-bottom shadow-sm position-fixed w-100 z-index-5">
        <h5 class="my-0 mr-md-auto font-weight-normal">{{ env('APP_NAME') }}</h5>
        <div class="d-md-none text-right w-100 position-absolute mr-5">
            <input class="d-none" type="checkbox" id="menu" onclick="OpenMenu()">

            <label for="menu">
                <svg aria-hidden="true" width="25" height="25" focusable="false" data-prefix="fas" data-icon="bars"
                    class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                    </path>
                </svg>
            </label>

        </div>

        <nav class="my-2 my-md-0 mr-md-3 position-sm-absolute d-flex text-left text-lg-right" id="site-header-menu">
            <div class="w-70vw transition-low">
                @if(auth()->check())
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" class="p-2 text-dark">
                        Hi {{auth()->user()->name }}
                    </a>
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/logout">Logout</a>
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/articles">Articles</a>
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/create">Add article</a>
                    @else
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/login">Login</a>
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/register">Register</a>
                    @endif
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/">Main page</a>
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="#">Contact</a>
            </div>
            

            <label for="menu">
                <div class="container-menu position-absolute w-30vw h-100vh d-md-none" id="fall-white">
                </div>
            </label>

        </nav>
        </div>

    </header>

        
                @if ($errors->any())
                <div class="alert alert-danger my-3 w-75 ml-auto">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            
                        @yield('error')
                    
            
            @yield('base-box-log')
            </div>
            
                @yield('content')
            </div>
            
            
        </div>

        
        <footer class="bg-grey container-fluid py-2">
            <div class="row">
                <div class="col-12 col-sm-4 text-center font-07-05 font-weight-500">
                    <a>Terms</a>
                </div>
                <div class="col-12 col-sm-4 text-center font-07-05 font-weight-500">
                    <a>Privacy</a>
                </div>
                <div class="col-12 col-sm-4 text-center font-07-05 font-weight-500">
                    <a>K&M</a>
                </div>
            </div>
        </footer>
        @stack('scripts')
    </body>
</html>