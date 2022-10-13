<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>BLOGGER LARAVEL</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>
    <div class="header_section">
        <div class="container-fluid header_main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="logo" href="/">LARAVEL03</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="{{ Request::path() === '/' ? 'active' : '' }} nav-link" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="{{ Request::path() === '/pages/blog' ? 'active' : '' }} nav-link"
                                href="pages/blog">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages/create_article">New Post</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/pages/contact">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <section class="antialiased">

            @yield('content')
            @yield('sidebar')

        </section>

</body>

<footer>
    @yield('footer')
    <!--   include('layouts.footer');-->
</footer>

</html>
