@extends('layouts.backend.app1')
@section('title', 'Subscribes')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
            <h4 class="mb-sm-0">Subscribes</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Subscribes</li>
                </ol>
            </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                        <table class="table table-bordered yajra-datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Aplikuar në</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
            </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {

      var table = $('.yajra-datatable').DataTable({
        responsive: true,
        rowReorder: {
            selector: 'td:nth-child(1)'
        },
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('all_subscribes') }}",
            data: function (d) {
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
            
            {data: 'email', name: 'email'},
            { 
                data: 'created_at', 
                name: 'created_at',
                render: function (data) {
                    return moment(data, 'YYYY-MM-DDTHH:mm:ss').format('YYYY-MM-DD');
                }
            },
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
      });

    });
</script>
@endsection


