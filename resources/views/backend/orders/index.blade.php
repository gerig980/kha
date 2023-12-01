@extends('layouts.backend.app1')

@section('title', 'Porosite')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Porosite</h4>
    
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Porosite</li>
                    </ol>
                </div>
                
    
            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="form-group ms-3 mt-1">
                    <label><strong>Filtro sipas Statusit :</strong></label>
                    <select id='approved' class="form-control" style="width: 200px">
                        <option value="null">Statuset</option>
                        <option value="0">Te Reja</option>
                        <option value="1">Te Konfirmuara</option>
                        <option value="2">Te Anulluara</option>
                        <option value="3">Te Dorezuara</option>
                    </select>
                </div>
                <div class="card-header border-0">
                    <div class="table-responsive">
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Order Code</th>
                                <th>Emri</th>
                                <th>Email</th>
                                <th>Telefoni</th>
                                <th>Totali</th>
                                <th>Statusi</th>
                                <th>Porositur në</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    </div>
    <!--end row-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function () {
    
          var table = $('.yajra-datatable').DataTable({
            responsive: true,
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('all_orders') }}",
                data: function (d) {
                    d.approved = $('#approved').val(),
                    d.search = $('input[type="search"]').val()
                }
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
                {data: 'order_code',name: 'order_code'},
                {data: null, 
                    name: 'name', 
                    render: function (data) {
                      return data.name + ' ' + data.surname;
                    }
                },
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'total_sum' , name: 'total_sum'},
                {data: 'status', name: 'status',
                      render: function (data) {
                          if (data === 1) {
                                return '<td><span class="badge badge-soft-success">Konfirmuar</span></td>';
                              } else if(data === 2) {
                                return '<td><span class="badge badge-soft-danger">Anulluar</span></td>';
                              }else if(data === 0){
                                return '<td><span class="badge badge-soft-secondary">E Re</span></td>'; 
                              }else if(data === 3){
                                  return '<td><span class="badge badge-soft-primary">Dorëzuar</span></td>';
                              }
                              else{
                                return '<td><span class="badge badge-soft-warning">Not Known</span></td>'; 
                              }
                        }
                  },
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
           $('#approved').change(function(){
                table.draw();
            });
    
        });
    </script>
    
@endsection


