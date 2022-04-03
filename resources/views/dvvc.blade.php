@extends('index')
@section('maincontent')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <table class="table table-bordered" id="dvvc-table">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Tên DVVC
                </th>
            </tr>
        </thead>
    </table>
@endsection
@section('script')
@routes
<script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" ></script>
<script>
    $(function() {
        $('#dvvc-table').DataTable({
            processing: true,
            serverSide: true,
            ajax:'{{asset('DataTable/getdata')}}',
            columns: [{
                data: 'id',
                name: 'id'
            }, {
                data: 'TenDVVC',
                name: 'TenDVVC'
            }]
        });
    });
</script>
@endsection
