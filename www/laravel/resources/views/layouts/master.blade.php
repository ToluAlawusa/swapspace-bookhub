<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ URL::to('src/css/ad_styles.css') }} ">
    </head>
    <body id="home">
        <!-- top bar starts here -->
            @include('includes.adminheader')
        <!-- main content starts here -->
        <div class="main">
            @yield('content')
        </div>

        <section class="foot">
            <!-- footer starts here-->
            <div class="footer">
                <p class="copyright">&copy; copyright 2016</p>
            </div>
        </section>
    </body>
</html>
