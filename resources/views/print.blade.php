<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('img/favicon.png') }}">
        <title>Booking Meeting Room System</title>
        @include('Layouts._head')
        @yield('head')

    </head>
    <body>
        <div class="wrapper">
        
                <div class="container">
                    <!-- Main content -->
                    <section class="content">
                        @yield('content')
                    </section>
                    <!-- /.content -->
                </div>
        </div>       
        @include('Layouts._script')
        @yield('script')
    </body>
</html>
