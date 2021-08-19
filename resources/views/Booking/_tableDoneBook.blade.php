<div class="table-responsive">
    <table class="table table-striped dataTables">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-left">Date</th>
                <th class="text-left">Time</th>
                <th class="text-left">Room</th>
                <th class="text-left">Description</th>
                <th class="text-center">Participants</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">1</td>
                <td class="text-left text-nowrap">12 Jun 2021</td>
                <td class="text-left text-nowrap">11:00 - 13:00</td>
                <td class="text-left text-nowrap">Large Meeting Room</td>
                <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci</td>
                <td class="text-right">23</td>
                <td class="text-center text-success"><span class="btn btn-success btn-block btn-rounded">Done</span></td>
                <td class="text-center">
                    <a href="{{ url('/my-booking/view') }}" data-toggle="tooltip" data-placement="bottom" title="View">
                        <i class="ti-eye"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td class="text-left text-nowrap">16 Jun 2021</td>
                <td class="text-left text-nowrap">11:00 - 13:00</td>
                <td class="text-left text-nowrap">Large Meeting Room</td>
                <td class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci</td>
                <td class="text-right">23</td>
                <td class="text-center text-success text-nowrap"><span class="btn btn-danger btn-block btn-rounded">Reject</span></td>
                <td class="text-center">

                </td>
            </tr>
        </tbody>
    </table>
</div>

{{-- data table --}}
<script>
    $('.dataTables').DataTable();
</script>
