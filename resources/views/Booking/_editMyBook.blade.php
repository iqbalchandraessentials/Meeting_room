@extends('master')

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Edit My Booking</h3>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.css') }}">
@endsection


@section('content')
    <div class="row">
        <div class="col-sm-8">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Basic Info</h4>
                </div>
                <div class="box-body">
                    <div class="form-group mb-0">
                        <label>Meeting PIC</label>
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-12 mb-4">
                                <input type="text" class="form-control" value="Orrin Haim Timoteus" placeholder="" readonly>
                            </div>
                            <div class="col-sm-4 col-12 mb-4">
                                <input type="text" class="form-control" value="orrin.haim@timoteus.com" placeholder="" readonly>
                            </div>
                            <div class="col-sm-4 col-12 mb-4">
                                <input type="text" class="form-control" value="+6281381358809" placeholder="" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Meeting date</label>
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-12">
                                <input type="text" class="form-control" value="04 May 2021" placeholder="" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Meeting time</label>
                        <div class="row align-items-center">
                            <div class="col-sm-5 col-5">
                                <input type="text" class="form-control" value="14:00" placeholder="" readonly>
                            </div>
                            <div class="col-sm-2 col-2 text-center">
                                <p class="mb-0">Until</p>
                            </div>
                            <div class="col-sm-5 col-5">
                                <input type="text" class="form-control" value="16:00" placeholder="" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Meeting Description</label>
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-12">
                                <textarea class="form-control" rows="3" cols="3" placeholder="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, numquam autem! Assumenda odit quae obcaecati non similique. Voluptatum mollitia delectus asperiores repellendus unde voluptates, beatae, ullam praesentium odio minima quod.</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <label>Meeting Participants (max 24 Person)</label>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-3">
                                <label>Name</label>
                            </div>
                            <div class="col-3">
                                <label>Email address</label>
                            </div>
                            <div class="col-3">
                                <label>Company</label>
                            </div>
                            <div class="col-3">
                                <label>Phone</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-3">
                                <input type="text" name="guest_name" class="form-control" value="Nero Jaida Janka">
                            </div>
                            <div class="col-3">
                                <input type="text" name="guest_email" class="form-control" value="nero.jaida@janka.com">
                            </div>
                            <div class="col-3">
                                <input type="text" name="guest_company" class="form-control" value="Nero Jaida Inc.">
                            </div>
                            <div class="col-2">
                                <input type="text" name="guset_phone" class="form-control" value="081377662244">
                            </div>
                            <div class="col-1">
                                <button class="btn btn-bold btn-pure btn-info btn-block" id="addRow">
                                    <i class="ti-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="field_wrapper"></div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-6 text-left">
                            <h4 class="box-title">Food & Beverage</h4>
                        </div>
                        <div class="col-6 text-right">
                            <a href="javascript:void(0);" class="btn btn-bold btn-pure btn-info" data-toggle="modal" data-target="#myFnBModal">Add F&B</a>
                        </div>
                    </div>
                </div>
                <div class="box-body pt-0 pb-0">
                    <div class="table-resposive">
                        <table class="table" id="groupTables">
                            <thead>
                                <tr>
                                    <th class="">#</th>
                                    <th class="text-left" style="width: 40%">Name</th>
                                    <th class="text-left">category</th>
                                    <th class="text-left">Notes</th>
                                    <th class="text-center w-60">Qty</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="">1</td>
                                    <td class="text-left">Thai fried banana</td>
                                    <td class="text-left text-uppercase">Snack</td>
                                    <td class="text-left">Extra honey</td>
                                    <td class="text-center w-60">
                                        <span class="badge bg-dark" style="min-width: 32px">10</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0);" class="mr-3" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <span class="ti-pencil"></span>
                                        </a>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <span class="ti-trash text-danger"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">2</td>
                                    <td class="text-left">French fries</td>
                                    <td class="text-left text-uppercase">Snack</td>
                                    <td class="text-left">-</td>
                                    <td class="text-center w-60">
                                        <span class="badge bg-dark" style="min-width: 32px">3</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0);" class="mr-3" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <span class="ti-pencil"></span>
                                        </a>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <span class="ti-trash text-danger"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">3</td>
                                    <td class="text-left">Black coffee</td>
                                    <td class="text-left text-uppercase">Hot Drink</td>
                                    <td class="text-left">Less sugar</td>
                                    <td class="text-center w-60">
                                        <span class="badge bg-dark" style="min-width: 32px">2</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0);" class="mr-3" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <span class="ti-pencil"></span>
                                        </a>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <span class="ti-trash text-danger"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">4</td>
                                    <td class="text-left">Hot tea</td>
                                    <td class="text-left text-uppercase">Hot Drink</td>
                                    <td class="text-left">Less sugar</td>
                                    <td class="text-center w-60">
                                        <span class="badge bg-dark" style="min-width: 32px">8</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0);" class="mr-3" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <span class="ti-pencil"></span>
                                        </a>
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <span class="ti-trash text-danger"></span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Room Info</h4>
                </div>
                <div class="box-body">
                    <div class="">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-left font-size-11 text-uppercase text-bold">Large Meeting Room</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-4">
                                <img src="{{ asset('img/meeting-room/meeting_room_1.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-left font-size-11 text-uppercase text-bold">Capacity</p>
                                <p class="text-left">24 Participants</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-left font-size-11 text-uppercase text-bold" style="margin-top: 1rem">Room Facility</p>

                                        <ol class="nav d-block nav-stacked">
                                            <li class="nav-item">
                                                <p class="text-capitalize mb-0">1. Infocus</p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="text-capitalize mb-0">2. Screen</p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="text-capitalize mb-0">3. Glass board</p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="text-capitalize mb-0">4. Sound system</p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="text-capitalize mb-0">5. Pencils and memos</p>
                                            </li>
                                            <li class="nav-item">
                                                <p class="text-capitalize mb-0">6. Internet connection</p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <a href="{{ url('/my-booking') }}" class="btn btn-bold btn-pure btn-secondary btn-block">Cancel</a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-bold btn-pure btn-info btn-block">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal start --}}
    <div class="modal" data-backdrop="false" tabindex="-1" id="myFnBModal" style="z-index: 9999;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Food & Baverage</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>F&B Category</label>
                                <div class="">
                                    <select name="" class="select2" id="selectMRoom" style="width: 100%">
                                        <option selected disabled>Select Category</option>
                                        <option value="">Food</option>
                                        <option value="">Snack</option>
                                        <option value="">Hot Drink</option>
                                        <option value="">Cold Drink</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>F&B Menu</label>
                                <div class="">
                                    <select name="" class="select2" id="selectMRoom" style="width: 100%">
                                        <option selected disabled>Select Menu</option>
                                        <option value="">Thai fried banana</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control" rows="3" cols="3" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-4">
                    <div class="row">
                        <div class="col-3">
                            <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-bold btn-pure btn-info btn-block" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        // dynamic input meeting participants
        $(document).ready(function(){
            var maxField = 24; //Input fields increment limitation
            var addButton = $('#addRow'); //Add button selector
            var wrapper = $('#field_wrapper'); //Input field wrapper
            var html = ''; //New input field html
                html +='<div class="form-group mb-0 mt-4 new-row">';
                    html +='<div class="row">';
                        html +='<div class="col-3">';
                            html +='<input type="text" name="guest_name" class="form-control">';
                        html +='</div>';
                        html +='<div class="col-3">';
                            html +='<input type="text" name="guest_email" class="form-control">';
                        html +='</div>';
                        html +='<div class="col-3">';
                            html +='<input type="text" name="guest_company" class="form-control">';
                        html +='</div>';
                        html +='<div class="col-2">';
                            html +='<input type="text" name="guset_phone" class="form-control">';
                        html +='</div>';
                        html +='<div class="col-1">';
                            html +='<button class="btn btn-bold btn-pure btn-danger btn-block" id="removeRow"><i class="ti-minus"></i></button>';
                        html +='</div>';
                    html +='</div>';
                html +='</div>';
            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){
                    x++; //Increment field counter
                    $(wrapper).append(html); //Add field html
                } else {
                    Swal.fire('You have reached the maximum number of participants')
                }
            });

            //Once remove button is clicked
            $(wrapper).on('click', '#removeRow', function(e){
                e.preventDefault();
                $(this).closest('.form-group').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

        // table f&b
        var groupColumn = 2;
        var table = $('#groupTables').DataTable({
            "columnDefs": [
                { "visible": false, "targets": groupColumn }
            ],
            "order": [[ groupColumn, 'asc' ]],
            // "displayLength": 25,
            "searching": false,
            "paging": false,
            "info": false,
            // "sort": false,
            "ordering": false,
            "drawCallback": function ( settings ) {
                var api = this.api();
                var rows = api.rows( {page:'current'} ).nodes();
                var last=null;

                api.column(groupColumn, {page:'current'} ).data().each( function ( group, i ) {
                    if ( last !== group ) {
                        $(rows).eq( i ).before(
                            '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                        );

                        last = group;
                    }
                } );
            }
        } );
    </script>
@endsection
