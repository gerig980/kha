@extends('layouts.backend.app1')

@section('title', 'Blogs')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Blogs</h4>
    
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Blogs</li>
                    </ol>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-sm-auto ms-auto">
                        <div class="hstack gap-2">
                            <button type="button" class="btn btn-success add-btn"  onclick = "window.location.href='{{ route('blog.create') }}';"><i class="ri-add-line align-bottom me-1"></i>Shto Blog</button>
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
    
                    <table class="table table-bordered yajra-datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created</th>
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
                url: "{{ route('all_Blogs') }}",
                data: function (d) {
                    d.search = $('input[type="search"]').val()
                }
            },
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false},
                {data: 'title', name: 'title'},
                {
                    data: 'description', 
                    name: 'description',
                    render: function (data) {
                        // Create a temporary div element
                        var tempDiv = document.createElement('div');
                        // Set the HTML content of the div to the description data
                        tempDiv.innerHTML = data;
                        // Get the text content (without HTML tags) from the div
                        var strippedDescription = tempDiv.textContent || tempDiv.innerText;

                        // Limit the stripped description to 50 characters
                        return strippedDescription.length > 50 ? strippedDescription.substr(0, 50) + '...' : strippedDescription;
                    }
                },
                {data: 'image', name: 'image',

                render:function(data){
                    return "<img src=\"{{ URL::asset('images/blogs/') }}/" + data + "\" height=\"50\"/>";
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
    
        });
    </script>
    
@endsection


