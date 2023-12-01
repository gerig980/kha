@extends('layouts.backend.app1')
@section('title', 'Teachers')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
            <h4 class="mb-sm-0">Teachers</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Teachers</li>
                </ol>
            </div>
    </div>
</div>
<br>
<div class="card-body border border-dashed border-end-0 border-start-0">
            <div class="row g-4 align-items-center">
                <div class="col-sm-auto ms-auto">
                    <div class="hstack mt-2">
                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>Shto Mesues</button>
                    </div>
                </div>
            </div>
         </div> 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header border-0">
                <table class="table table-bordered yajra-datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Emri</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>

                </table>
                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row g-3">
                                             <div class="col-lg-6">
                                                <div>
                                                    <label for="name" class="form-label">Emri</label>
                                                    <input type="text" name="name" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="surname" class="form-label">Mbiemri</label>
                                                    <input type="text" name="surname" class="form-control" required />
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Mbyll</button>
                                            <button type="submit" class="btn btn-success" id="add-btn" name="submit">Shto</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
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
            url: "{{ route('all_teachers') }}",
            data: function (d) {
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
             {data: null, 
                    name: 'name', 
                    render: function (data) {
                      return data.name + ' ' + data.surname;
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


