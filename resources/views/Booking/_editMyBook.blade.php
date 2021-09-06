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
            @foreach ($rooms as $room)
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Title : {{$room->title}}</h4>
                </div>
                <div class="box-body">
                    <div class="form-group mb-0">
                        <label>Meeting PIC</label>
                        <div class="row align-items-center">
                            <div class="col-sm-4 col-12 mb-4">
                                <input type="text" class="form-control" value="{{$name}}" placeholder="" readonly>
                            </div>
                            <div class="col-sm-4 col-12 mb-4">
                                <input type="text" class="form-control" value="{{$email}}" placeholder="" readonly>
                            </div>
                            <div class="col-sm-4 col-12 mb-4">
                                <input type="text" class="form-control" value="{{$phone}}" placeholder="" readonly>
                            </div>
                        </div>
                    </div>
                        
                    
                    <div class="form-group">
                        <label>Meeting date</label>
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-12">
                                <input type="text" class="form-control" value="{{$room->date}}" placeholder="" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Meeting time</label>
                        <div class="row align-items-center">
                            <div class="col-sm-5 col-5">
                                <input type="text" class="form-control" value="{{substr($room->start,11, 5)}}" placeholder="" readonly>
                            </div>
                            <div class="col-sm-2 col-2 text-center">
                                <p class="mb-0">Until</p>
                            </div>
                            <div class="col-sm-5 col-5">
                                <input type="text" class="form-control" value="{{substr($room->end,11, 5)}}" placeholder="" readonly>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('update-book-now', $room->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label>Meeting Description</label>
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-12">
                                <textarea class="form-control" name="description" rows="3" cols="3">{{$room->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <label>Meeting Participants (max {{$room->room->capacity}} Person)</label>
                    </div>
                    {{-- <div class="form-group mb-0">
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
                    </div> --}}
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
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($room->menuFNB as $item)
                                <tr>
                                    <td class="">{{$no}}</td>
                                    <td class="text-left">{{$item->menu->name}}</td>
                                    <td class="text-left text-uppercase">{{$item->menu->category->name}}</td>
                                    <td class="text-left">{{$item->note}}</td>
                                    <td class="text-center w-60">
                                        <span class="badge bg-dark" style="min-width: 32px">{{$item->qty}}</span>
                                    </td>
                                    <td class="text-center">
                                        {{-- <a href="" class="mr-3" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <span class="ti-pencil"></span>
                                        </a> --}}
                                        <a href="{{route('deleteFNB-book-now', $item->id)}}" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <span class="ti-trash text-danger"></span>
                                        </a>
                                    </td>
                                </tr>
                                @php
                                $no++;
                                @endphp
                                @endforeach
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
                                <p class="text-left font-size-11 text-uppercase text-bold">{{$room->room->name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($room->room->galleries as $gallery)
                            <div class="col-12 mb-4">
                                <img src="{{Storage::url($gallery->photos ?? '')}}" alt="">
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-left font-size-11 text-uppercase text-bold">Capacity</p>
                                <p class="text-left">Capacity: {{$room->room->capacity}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-left font-size-11 text-uppercase text-bold" style="margin-top: 1rem">Room Facility</p>

                                        <ol class="nav d-block nav-stacked">



                                            <ol class="nav d-block nav-stacked">
                                        @php
                                            $fasilitas = $room->room->facility;
                                        @endphp
                                        @foreach(explode(',',$fasilitas) as $row)
                                        <li class="nav-item"><p class="text-capitalize mb-0">{{ $row }}</p></li>
                                       
                                        @endforeach

                                            {{-- <li class="nav-item">
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
                                            </li> --}}
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
                {{-- <div class="col-3">
                    <div class="form-group">
                        <a href="{{ url('/my-booking') }}" class="btn btn-bold btn-pure btn-secondary btn-block">Cancel</a>
                    </div>
                </div> --}}
                <div class="col-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-bold btn-pure btn-info btn-block">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

    {{-- modal fnb --}}
    <div class="modal" data-backdrop="false" tabindex="-1" id="myFnBModal" style="z-index: 9999;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Food & Baverage</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <form action="{{route('fnbStore-book-now')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <input type="text" value="{{$room->code}}" style="display: none" name="id_book">
                        <div class="col-12">
                            <div class="form-group">
                                <label>F&B Category</label>
                                <div class="">
                                    <select name="id_category" class="select2" id="selecMenu" style="width: 100%">
                                        <option selected disabled>Select Category</option>
                                        @foreach ($menus as $menu)
                                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>F&B Menu</label>
                                <div class="">
                                    <select name="id_name" class="select2" id="selectFoods" style="width: 100%">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" name="qty" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Notes</label>
                                <textarea class="form-control" name="note" rows="3" id="notesMenu" cols="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer p-4">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-bold btn-pure btn-secondary btn-block" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-bold btn-pure btn-info btn-block">Save</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
    </div>
</div>
@endforeach
@endsection

@section('script')
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        // dynamic input meeting participants
        // $(document).ready(function(){
        //     var maxField = 24; //Input fields increment limitation
        //     var addButton = $('#addRow'); //Add button selector
        //     var wrapper = $('#field_wrapper'); //Input field wrapper
        //     var html = ''; //New input field html
        //         html +='<div class="form-group mb-0 mt-4 new-row">';
        //             html +='<div class="row">';
        //                 html +='<div class="col-3">';
        //                     html +='<input type="text" name="guest_name" class="form-control">';
        //                 html +='</div>';
        //                 html +='<div class="col-3">';
        //                     html +='<input type="text" name="guest_email" class="form-control">';
        //                 html +='</div>';
        //                 html +='<div class="col-3">';
        //                     html +='<input type="text" name="guest_company" class="form-control">';
        //                 html +='</div>';
        //                 html +='<div class="col-2">';
        //                     html +='<input type="text" name="guset_phone" class="form-control">';
        //                 html +='</div>';
        //                 html +='<div class="col-1">';
        //                     html +='<button class="btn btn-bold btn-pure btn-danger btn-block" id="removeRow"><i class="ti-minus"></i></button>';
        //                 html +='</div>';
        //             html +='</div>';
        //         html +='</div>';
        //     var x = 1; 
            //Initial field counter is 1

            //Once add button is clicked
            // $(addButton).click(function(){
            //     //Check maximum number of input fields
            //     if(x < maxField){
            //         x++; //Increment field counter
            //         $(wrapper).append(html); //Add field html
            //     } else {
            //         Swal.fire('You have reached the maximum number of participants')
            //     }
            // });

            //Once remove button is clicked
        //     $(wrapper).on('click', '#removeRow', function(e){
        //         e.preventDefault();
        //         $(this).closest('.form-group').remove(); //Remove field html
        //         x--; //Decrement field counter
        //     });
        // });

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
    
        $('#myFnBModal').on('change','#selecMenu', function() {
        $.ajax({
                url : 'http://meeting-room.test/api/menu-fnb',
                type : 'get',
                dataType: "json",
                data : {
                    search : $("#selecMenu").val(), 
                },
                success: function (res) {
                
                let data = res.data;
                let menu = '';
                for (let i = 0; i < data.length; i++) {
                    console.log(data[i]);
                    if (data[i].status == "ACTIVE") {   
                    menu += `<option value=" `+data[i].id+` ">`+data[i].name+`</option>`;
                    }
                    
                }
                $('#selectFoods').html(`  <option selected disabled>Select Menu</option>
                `+menu+` `)
                $('#notesMenu').attr('placeholder')
            }, 
            });
        });

        $('#myFnBModal').on('change','#selectFoods', function() {
        $.ajax({
                url : 'http://meeting-room.test/api/placeholder-fnb',
                type : 'get',
                dataType: "json",
                data : {
                    search : $("#selectFoods").val(), 
                },
                success: function (res) {
                console.log(res);
                let notes = res.data.description;
                $('#notesMenu').attr('placeholder','info: '+ notes)
            
            }, 
            });
        });



    </script>
@endsection
