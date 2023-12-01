@extends('layouts.backend.app1')

@section('title', 'Courses')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Kurset</h4>
    
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Kurset</li>
                    </ol>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-sm-auto ms-auto">
                        <div class="hstack gap-2">
                            <button type="button" class="btn btn-success add-btn"  onclick = "window.location.href='{{ route('courses.create') }}';"><i class="ri-add-line align-bottom me-1"></i>Shto Kurse</button>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    <!-- end page title -->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="table-responsive">
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Emri</th>
                                <th>Përshkrimi</th>
                                <th>Imazhi</th>
                                <th>Data Fillimit</th>
                                <th>Data Mbarimit</th>
                                <th>Statusi</th>
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
                url: "{{ route('all_courses') }}",
                data: function (d) {
                    d.search = $('input[type="search"]').val()
                }
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
                {data: 'name', name: 'name'},

                {
                    data: 'description', 
                    name: 'description',
                    render: function (data) {

                        var tempDiv = document.createElement('div');
                        tempDiv.innerHTML = data;
            
                        var strippedDescription = tempDiv.textContent || tempDiv.innerText;

                        return strippedDescription.length > 50 ? strippedDescription.substr(0, 50) + '...' : strippedDescription;
                    }
                },


                {data: 'image', name: 'image',

                render:function(data){
                    return "<img src=\"{{ URL::asset('images/course/') }}/" + data + "\" height=\"50\"/>";
                }

                },
                { 
                    data: 'start_time', 
                    name: 'start_time',
                    render: function (data) {
                       if(data){
                        return moment(data, 'YYYY-MM-DDTHH:mm:ss').format('YYYY-MM-DD');
                        }else{
                            return "Nuk ka date fillimi";
                        }
                    }
                },
                { 
                    data: 'end_time', 
                    name: 'end_time',
                    render: function (data) {
                        if(data){
                        return moment(data, 'YYYY-MM-DDTHH:mm:ss').format('YYYY-MM-DD');
                        }else{
                            return "Nuk ka date mbarimi";
                        }
                    }
                },
                {
                data: 'status',
                name: 'status',
                render: function (data, type, full, meta) {
                    var updateStatus = "{{ route('course.updateStatus', ':id') }}".replace(':id', full.id);
                    var statusid    =   "updateStatus:id".replace(':id',full.id);
            
                    // var csrfToken = document.querySelector('meta[name="_token"]').content;
            
                    var statusBtn = '<form class="d-flex justify-content-center" action="' + updateStatus + '" method="post" enctype="multipart/form-data" id="'+ statusid +'">'
                        + '<input type="hidden" name="_method" value="PUT">'
                        + '<input type="hidden" name="_token" value="{{csrf_token()}}">'
                        + '<div class="form-check form-switch form-switch-right form-switch-md">';
            
                    if (data == 0) {
                        statusBtn += '<input class="form-check-input code-switcher" type="checkbox" onclick=\'$("#'+ statusid +'").submit();\'>';
                    } else {
                        statusBtn += '<input class="form-check-input code-switcher" type="checkbox" onclick=\'$("#'+ statusid +'").submit();\' checked>';
                    }
            
                    statusBtn += '</div></form>';
            
                    return statusBtn;
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


