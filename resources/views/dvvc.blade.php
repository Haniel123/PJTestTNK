@extends('index')
@section('maincontent')
    <div id="row inputrange">
        <div class="col-md-2"><input id="start" type="date" name="start"></div>
        <div class="col-md-3"><input type="date" id="end" name="end"></div>

        <div class="row-md-4">
            <button type="button" class="btn btn-primary" name="search" id="search">Search</button>
        </div>
        <div class="row-md-4">
            <button type="button" class="btn btn-primary" name="refresh" id="refresh">Refresh</button>
        </div>

    </div>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <table class="table" id="dvvctable">

        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Tên DVVC
                </th>
                <th>
                    Ngày tạo
                </th>
            </tr>
        </thead>
    </table>
@endsection
@section('script')
    @routes
    <script type="text/javascript" src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        loaddata();

        function loaddata(from_date = ' ', to_date = '', url_base = '{{ route('Getdata') }}') {
            $(document).ready(function() {
                $('#dvvctable').DataTable({
                    processing: true,
                    serverSide: true,
                    ordering: false,
                    ajax: {
                        url: url_base,
                        data: {
                            from_date: from_date,
                            to_date: to_date
                        }
                    },
                    columns: [{
                        data: 'id',
                        name: 'id'
                    }, {
                        data: 'TenDVVC',
                        name: 'TenDVVC'
                    }, {
                        data: 'created_at',
                        name: 'created_at'
                    }]
                });
            });
        }
        $('#search').click(function() {
            var from_date = $('#start').val();
            var to_date = $('#end').val();
            $('#dvvctable').DataTable().destroy();
            console.log(from_date);
            if (from_date == '' || to_date == '') {
                alert('Nhập đủ dùm');
            }
            loaddata(from_date = from_date, to_date = to_date);

        });
    </script>
@endsection
