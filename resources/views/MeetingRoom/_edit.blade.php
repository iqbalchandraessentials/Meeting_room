@extends('master')

@section('head')
    <link rel="stylesheet" href="{{ asset('vendor/dropzone/dropzone.css') }}">
@endsection

@section('breadcrumb')
    <div class="mr-auto w-p50">
        <h3 class="page-title border-0">Edit Meeting Room</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Basic Info</h4>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Meeting Room Name</label>
                        <input type="text" class="form-control" value="Large Meeting Room" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Capacity</label>
                        <input type="number" class="form-control" value="12" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Room Location</label>
                        <textarea rows="5" cols="5" class="form-control" placeholder="">Jl. Letjen M.T. Haryono No.kav 20, RT.4/RW.1, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630.</textarea>
                    </div>
                    <div class="form-group">
                        <label>Hours Availability</label>
                        <select class="form-control select2" id="selectHours" style="width: 100%;">
                            <option selected="selected">Full Days</option>
                            <option value="99">Custom hour</option>
						</select>
                        <div class="mt-4 d-none" id="customHour">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Start</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option>00.00</option>
                                            <option>01.00</option>
                                            <option>02.00</option>
                                            <option>03.00</option>
                                            <option>04.00</option>
                                            <option>05.00</option>
                                            <option>06.00</option>
                                            <option>07.00</option>
                                            <option>08.00</option>
                                            <option>09.00</option>
                                            <option>10.00</option>
                                            <option>11.00</option>
                                            <option>12.00</option>
                                            <option>13.00</option>
                                            <option>14.00</option>
                                            <option>15.00</option>
                                            <option>16.00</option>
                                            <option>17.00</option>
                                            <option>18.00</option>
                                            <option>19.00</option>
                                            <option>20.00</option>
                                            <option>21.00</option>
                                            <option>22.00</option>
                                            <option>23.00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Until</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option>00.00</option>
                                            <option>01.00</option>
                                            <option>02.00</option>
                                            <option>03.00</option>
                                            <option>04.00</option>
                                            <option>05.00</option>
                                            <option>06.00</option>
                                            <option>07.00</option>
                                            <option>08.00</option>
                                            <option>09.00</option>
                                            <option>10.00</option>
                                            <option>11.00</option>
                                            <option>12.00</option>
                                            <option>13.00</option>
                                            <option>14.00</option>
                                            <option>15.00</option>
                                            <option>16.00</option>
                                            <option>17.00</option>
                                            <option>18.00</option>
                                            <option>19.00</option>
                                            <option>20.00</option>
                                            <option>21.00</option>
                                            <option>22.00</option>
                                            <option>23.00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Days Availability</label>
                        <select class="form-control select2" id="selectDays" style="width: 100%;">
                            <option selected="selected">All Days</option>
                            <option>Weekdays Only</option>
                            <option>Weekend Only</option>
                            <option value="99">Custom day</option>
						</select>
                        <div class="mt-4 d-none" id="customDay">
                            <select class="form-control select2 mt-4" multiple="multiple" data-placeholder="Select days" style="width: 100%; font-size: 1rem">
                                <option>Sunday</option>
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Meeting Room Status</label>
                        <div class="c-inputs-stacked">
                            <input name="status" type="radio" id="status_active" value="1" checked>
                            <label for="status_active" class="mr-30">Active</label>
                            <input name="status" type="radio" id="status_inactive" value="0">
                            <label for="status_inactive" class="mr-30">Inactive</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box">
				<div class="box-header">
					<h4 class="box-title">Meeting Room Facilities</h4>
				</div>
				<div class="box-body">
					<div class="form-group">
                        <label>Facilities</label>
                        <select class="form-control select2" multiple="multiple" data-placeholder="Select facilities" style="width: 100%;">
                            <option>Infocus</option>
                            <option>Screen</option>
                            <option>Glass Board</option>
                            <option>Sound System</option>
                            <option>Pencils and memos</option>
                            <option>Internet connection</option>
						</select>
                    </div>
				</div>
			</div>
            <div class="box">
				<div class="box-header">
					<h4 class="box-title">Meeting Room Photo</h4>
				</div>
				<div class="box-body">
					<form action="#" class="dropzone dz-clickable">
                        <div class="dz-default dz-message"><span>Click or drop files here to upload</span></div>
                    </form>
				</div>
			</div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <button type="submit" onclick="window.history.go(-1)" class="btn btn-bold btn-pure btn-secondary btn-block">Cancel</button>
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
@endsection

@section('script')
    <script src="{{ asset('vendor/dropzone/dropzone.js') }}"></script>
    <script>
        $('#selectHours').on('change', function() {
            // alert( this.value );
            if(this.value == 99) {
                console.log('hello em')
                $('#customHour').removeClass('d-none')
            } else {
                $('#customHour').addClass('d-none')
            }
        });

        $('#selectDays').on('change', function() {
            // alert( this.value );
            if(this.value == 99) {
                console.log('hello em')
                $('#customDay').removeClass('d-none')
            } else {
                $('#customDay').addClass('d-none')
            }
        });
    </script>
@endsection

