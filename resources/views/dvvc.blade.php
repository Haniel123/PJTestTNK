@extends('index')
@section('maincontent')
<table  class="table table-bordered" id="dvvc-table">
<thead>
    <tr>
        <th>
            Tên DVVC
        </th>
        <th>
            Tên viết tắt
        </th>
        <th>
            Mã DVVC
        </th>
        <th>
            Ngày hết hạn
        </th>
    </tr>
</thead>
</table>
@endsection
@push()
    <script>
$('#dvvc-table').DataTable
    </script>
@endpus
