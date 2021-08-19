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
        <!-- Bootstrap 4.0-->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.css') }}">
        <!-- Bootstrap extend-->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/master_style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition bg-img" style="background: url(https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;" data-overlay="1">
        <div class="container h-p100">
            <div class="row align-items-center justify-content-md-center h-p100">
                <div class="col-12">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-5 col-12">
                            <div class="p-30 content-bottom rounded bg-img box-shadowed" style="" data-overlay="9">
                                    <div class="mb-4">
                                        <h4 class="text-white">Log In to Your Account</h4>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent bt-0 bl-0 br-0 no-radius text-white"><i class="ti-email"></i></span>
                                            </div>
                                            <input type="text" class="form-control pl-15 bg-transparent bt-0 bl-0 br-0 text-white" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text  bg-transparent bt-0 bl-0 br-0 text-white"><i class="ti-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control pl-15 bg-transparent bt-0 bl-0 br-0 text-white" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox text-white">
                                                <input type="checkbox" id="basic_checkbox_1" >
                                                <label for="basic_checkbox_1">Remember Me</label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <div class="fog-pwd text-right">
                                                <a href="{{ url('/Auth/forgot') }}" class="text-white hover-info"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center mt-4">
                                            {{-- <button type="submit" class="btn btn-info btn-block margin-top-10">SIGN IN</button> --}}
                                            <button type="submit" class="btn btn-info btn-block margin-top-10" onclick="window.location.href='{{ url('/dashboard')}}'">SIGN IN</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery 3 -->
        <script src="{{ asset('vendor/jquery-3.3.1/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/bootstrap.js') }}"></script>

    </body>
</html>
