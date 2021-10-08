@extends('print')

@section('content')
<div class="box-body">
    <div class="table-responsive">
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-left">Name</th>
                    <th class="text-left text-nowrap">Category</th>
                    <th class="text-left">Description</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $menu)   
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td class="text-left text-nowrap">{{$menu->name}}</td>
                    <td class="text-left text-nowrap">{{ $menu->category->name }}</td>
                    <td class="text-left">{{$menu->description}}</td>
                    <td class="text-center text-lowercase">{{$menu->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


@section('script')
<script>
    window.print();
    $(document).ready( function () {
        $('#myTable').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false
        });
    } );
</script>
@endsection