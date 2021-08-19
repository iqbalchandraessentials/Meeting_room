@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">My Booking</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-primary">
                <div class="no-shrink py-30">
                    <span class="ti-folder font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">4</div>
                    <span>Active</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-warning">
                <div class="no-shrink py-30">
                    <span class="ti-link font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">1</div>
                    <span>Waiting</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div class="flexbox flex-justified text-center mb-30 bg-success">
                <div class="no-shrink py-30">
                    <span class="ti-link font-size-50"></span>
                </div>
                <div class="py-30 bg-white text-dark">
                    <div class="font-size-30">2</div>
                    <span>Done</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-2 col-3 pr-0">
                            <button type="submit" class="btn btn-bold btn-pure btn-block btn-rounded btn-info" id="btnActive">Active</button>
                        </div>
                        <div class="col-sm-2 col-3">
                            <button type="submit" class="btn btn-bold btn-pure btn-block btn-rounded btn-info btn-outline" id="btnDone">Done</button>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div id="tableWrapper"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#tableWrapper').load('/my-booking/tableActive')
        $('#btnActive').on('click', function() {
            $('#btnDone').addClass('btn-outline')
            $(this).removeClass('btn-outline')
            $('#tableWrapper').load('/my-booking/tableActive')
        })
        $('#btnDone').on('click', function() {
            $('#btnActive').addClass('btn-outline')
            $(this).removeClass('btn-outline')
            $('#tableWrapper').load('/my-booking/tableDone')
        })
    </script>

@endsection

