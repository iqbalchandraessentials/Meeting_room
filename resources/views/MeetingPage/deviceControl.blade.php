@extends('device')

@section('breadcrumb')
    <div class="mr-auto w-p100">
        <div class="row">
            <div class="col-6">
                <h2 class="page-title border-0">i-Touch Automation</h2>
            </div>
            <div class="col-6 text-right">
                <h2 class="page-title border-0 pr-0 mr-0" id="time"></h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box devices-control-dark mb-0">
                <div class="box-header pt-0">
                    <div class="row">
                        <div class="col-6 text-left">
                            <a class="text-white" data-toggle="collapse" href="#collapseExample" id="toogleDetails" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <h4 class="box-title mr-4">Meeting Info</h4>
                                <i class="ti-angle-up text-white" id="iconToogle" ></i>
                            </a>
                        </div>
                        {{-- <div class="col-6 text-right">
                            <a class="text-white" data-toggle="collapse" href="#collapseExample" id="toogleDetails" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <i class="ti-angle-up text-white" id="iconToogle" ></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="box-body pt-0 collapse show" id="collapseExample">
                    <div class="form-group">
                        <label for="">room</label>
                        <h5 class="font-weight-200">Large Meeting Room</h5>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">meeting pic</label>
                                <h5 class="font-weight-200">Kees Max Agostinho</h4>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="">meeting participants</label>
                                <h5 class="font-weight-200">12 People</h4>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="">meeting decription</label>
                        <h5 class="font-weight-200 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptatum laboriosam praesentium voluptatem in ut nobis dolor eligendi ullam recusandae? Consectetur inventore eveniet, facere maiores impedit commodi dolor ea ex?</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h4 class="box-title mb-4">Devices Control</h4>
            <div class="row">
                <div class="col-sm-auto col-auto mb-4">
                    <a href="javascript:void(0);" class="">
                        <div class="device-control-icon">
                            <i class="fa fa-shield"></i>
                        </div>
                    </a>
                    <p class="text-center">Security</p>
                </div>
                <div class="col-sm-auto col-auto mb-4">
                    <a href="javascript:void(0);" class="">
                        <div class="device-control-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                    </a>
                    <p class="text-center font-size-14">Frontdesk</p>
                </div>
                <div class="col-sm-auto col-auto mb-4">
                    <a href="javascript:void(0);" class="">
                        <div class="device-control-icon">
                            <i class="fa fa-cutlery"></i>
                        </div>
                    </a>
                    <p class="text-center">F&B</p>
                </div>
                <div class="col-sm-auto col-auto mb-0">
                    <a href="javascript:void(0);" class="">
                        <div class="device-control-icon">
                            <i class="fa fa-bolt"></i>
                        </div>
                    </a>
                    <p class="text-center font-size-14">Energy</p>
                </div>
                <div class="col-sm-auto col-auto mb-0">
                    <a href="javascript:void(0);" class="" id="btnParticipants">
                        <div class="device-control-icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </a>
                    <p class="text-center font-size-14">Participants</p>
                </div>
                <div class="col-sm-auto col-auto mb-0 icon-action-right">
                    <a href="javascript:void(0);" class="">
                        <div class="device-control-icon">
                            <i class="fa fa-bell"></i>
                        </div>
                    </a>
                    <p class="text-center font-size-14">Action</p>
                </div>
            </div>
        </div>
        <div class="col-12 d-none" id="contentWrapper">
            <div class="border p-4" style="border-radius: .675rem">
                <div class="devices-control-dark mb-0" style="border-radius: .675rem">
                    <div class="box-header p-0">
                        <div class="row">
                            <div class="col-6 text-left">
                                <h4 class="box-title mr-4">Participants</h4>
                            </div>
                            <div class="col-6 text-right">
                                {{-- <a class="text-white" data-toggle="collapse" href="#collapseExample" id="toogleDetails" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="ti-angle-up text-white" id="iconToogle" ></i>
                                </a> --}}
                                <a href="javascript:void(0);" class="text-white">
                                    <i class="ti-close text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-body pb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio sit fugiat quaerat asperiores deleniti neque praesentium! A nostrum optio possimus tempore, molestiae nulla hic, voluptates quis illo ducimus dicta distinctio?
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Show time
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            // s = checkTime(s);
            document.getElementById('time').innerHTML =
            // h + ":" + m + ":" + s;
            h + ":" + m;
            var t = setTimeout(startTime, 1000);
        }

        function checkTime(i) {
            if (i < 10) {i = "0" + i};
            return i;
        }

        setTimeout(function(){
            $('#collapseExample').removeClass("show");
            $('#iconToogle').toggleClass("ti-angle-up ti-angle-down");
        }, 5000);

        // setTimeout(function(){
        //     $('#collapseExample').addClass("show");
        //     $('#iconToogle').toggleClass("ti-angle-up ti-angle-down");
        // }, 3000);

        $('#toogleDetails').on('click', function() {
            $('#iconToogle').toggleClass("ti-angle-up ti-angle-down");
        })
    </script>

    {{-- btn show hide content --}}
    <script>
        $('#btnParticipants').on('click', function{
            $('#contentWrapper').removeClass('d-none')
        })
    </script>
@endsection

