<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', env('APP_NAME'))</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.min.js') }}" defer></script>

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
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/create">Add article</a>
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/logout">Logout</a>
                    
                    
                    @else
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/login">Login</a>
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/register">Register</a>
                    @endif
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/">Main page</a>
                    <a class="p-2 text-dark d-block d-md-inline font-menu font-weight-500" href="/articles">Articles</a>
                    
            </div>
            

            <label for="menu">
                <div class="container-menu position-absolute w-30vw h-100vh" id="fall-white">
                </div>
            </label>

        </nav>
        </div>

    </header>

    <main
        class="main-section-container background-fixed background-cover background-center h-100vh w-100 position-relative">
        <div class="mr-auto w-100 bg-white d-none d-sm-flex w-100 rectangle position-absolute bottom-0">

        </div>
        <div
            class="ml-auto col-12 col-sm-7 col-md-5 col-xl-4 bg-white bg-section-circle bg-section-circle-bottom-right w-100 position-absolute d-flex align-items-center justify-content-center py-3 pl-5">
            <div class="text-right p-4 pl-5">
                <div class="col-12">
                    <h1 class="font-weight-light big-size-font color-black mx-auto">
                        Business
                    </h1>
                </div>


                <div class="col-12 mx-auto medium-size-font color-black font-weight-light">
                    <p>
                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                        approaches to corporate strategy foster collaborative thinking to further the overall value
                        proposition. Organically grow the holistic world view of disruptive innovation via workplace
                        diversity and empowerment.
                    </p>
                </div>
            </div>
        </div>

    </main>

    <section class="people-section-container bg-grey w-100 h-80vh container-fluid">
        <div class="d-flex position-relative h-100 row">
            <div class="col-12 col-sm-7 col-md-5 col-xl-4 mr-auto">
                <div
                    class="bg-white bg-section-circle bg-section-circle-top-left w-100 position-absolute d-flex align-items-center justify-content-center py-3 pr-5">
                    <div class="text-left p-4 pr-5">
                        <h2 class="big-size-font font-weight-light color-black">
                            People in business
                        </h2>

                        <div class="medium-size-font color-black font-weight-light pr-5">
                            <p>
                                Take five, punch the tree, and come back in here with a clear head synergestic
                                actionables for game plan, yet where do we stand on the latest client ask. We need to
                                follow protocol.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
            <div
                class="ml-auto mr-0 pr-sm-5 d-flex align-items-center justify-content-center col-12 col-sm-9 col-md-7 col-xl-8">
                <div class="overflow-hidden img-fluid">
                    <img class="img-3d-hover small-img" src="/img/pexels-fauxels-3183150-620.jpg">
                </div>

            </div>
        </div>
    </section>

    <section class="background-fixed backgroud-cover background-corporate w-100 d-flex align-items-center">
        <div id="carouselExampleControls" class="carousel slide w-100 h-100 background-dark d-flex align-items-center"
            data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="text-center color-white big-size-font-slider text-uppercase font-weight-bold">Bring to the
                        table</p>
                </div>
                <div class="carousel-item">
                    <p class="text-center color-white big-size-font-slider text-uppercase font-weight-bold">win-win
                        survival strategies</p>
                </div>
                <div class="carousel-item">
                    <p class="text-center color-white big-size-font-slider text-uppercase font-weight-bold">to ensure
                        domination</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

    </section>

    <section class="container-elements bg-grey position-relative container-fluid pr-0">

        <div class="d-flex justify-content-center sm-row">
            <div
                class="col-12 col-sm-6 col-md-5 col-xl-5 w-100 mr-auto py-5 d-flex align-items-start align-items-sm-center justify-content-center order-2 order-sm-1 position-relative">
                <div class="slider mx-auto position-relative">
                    <figure class="slide-click img-fluid">
                        <img src="img/pexels-matheus-bertelli-1144693.jpg"
                            class="box-image img-fluid position-absolute w-100" id="one-img">
                    </figure>
                    <figure class="slide-click img-fluid">
                        <img src="img/pexels-kaique-rocha-65438.jpg" class="box-image img-fluid position-absolute w-100"
                            id="two-img">
                    </figure>
                    <figure class="slide-click img-fluid">
                        <img src="img/pexels-fauxels-3184455.jpg" class="box-image img-fluid position-absolute w-100"
                            id="three-img">
                    </figure>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-7 col-lg-7 ml-auto position-relative h-100 pr-0 order-1 order-sm-2">
                <div
                    class="bg-white bg-section-circle bg-section-circle-top-right position-absolute d-flex align-items-center justify-content-center py-3 pl-5 mr-0 ml-auto">
                    <div class="text-right p-4 pl-5">
                        <h3 class="big-size-font font-weight-light color-black">
                            Capitalize
                        </h3>

                        <div class="medium-size-font color-black font-weight-light pl-5">
                            <p>
                                Capitalize on low hanging fruit to identify a ballpark value added activity to beta
                                test. Override the digital divide with additional clickthroughs from DevOps.
                                Nanotechnology immersion along the information highway will close the loop on focusing
                                solely on the bottom line.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="container-fluid mt-4 position-relative d-flex justify-content-start justify-content-md-center align-items-end h-xs-30vh container-small-images">
                    <div class="d-flex align-items-center justify-content-center row mr-md-4 mt-4">
                        <figure class="mx-2 box-small-image overflow-hidden figure-img d-flex justify-content-center">
                            <img src="img/pexels-matheus-bertelli-1144693.jpg" class="img-fluid img-small"
                                onclick="currentSlide(1)">
                        </figure>
                        <figure class="mx-2 box-small-image overflow-hidden figure-img d-flex justify-content-center">
                            <img src="img/pexels-kaique-rocha-65438.jpg" class="img-fluid img-small"
                                onclick="currentSlide(2)">
                        </figure>
                        <figure class="mx-2 box-small-image overflow-hidden figure-img d-flex justify-content-center">
                            <img src="img/pexels-fauxels-3184455.jpg" class="img-fluid img-small"
                                onclick="currentSlide(3)">
                        </figure>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section
        class="container-float-object container-fluid background-cover background-center background-fixed w-100 h-75vh">
        <div class="d-flex position-relative h-100 row">
            <div class="col-12 col-sm-7 col-md-5 col-xl-4 mr-auto">
                <div
                    class="bg-white bg-section-circle bg-section-circle-top-left w-100 position-absolute d-flex align-items-center justify-content-center py-3 pr-5">
                    <div class="text-left p-4 pl-5">
                        <h2 class="big-size-font font-weight-light color-black">
                            Collaboratively administrate
                        </h2>

                        <div class="medium-size-font color-black font-weight-light pr-5">
                            <p>
                                Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively
                                seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched
                                growth strategies and interoperable internal or "organic" sources.
                            </p>
                        </div>
                    </div>
                </div>


            </div>

        </div>



    </section>

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
