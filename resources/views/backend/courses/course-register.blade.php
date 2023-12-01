@extends('layouts.backend.app1')
@section('title', 'Regjistrimet')
<style>
    .filter-btn{
        margin:1rem;
        border-radius:110px!important;
    }
</style>
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
            <h4 class="mb-sm-0">Regjistrimet ne Kurs</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Regjistrimet ne Kurs</li>
                </ol>
            </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="form-group ms-3 mt-1">
                    
                <div class="btn-group" role="group" aria-label="Filter by Courses">
                <button type="button" class="btn btn-secondary filter-btn" data-course="all">Te Gjitha</button>
                <input type="hidden" id="approved" name="approved">
                @foreach($courses as $course)
                @if($course->name == 'Piano')
                <button type="button" class="btn btn-success filter-btn" data-course="{{$course->id}}">{{$course->name}}</button>
                <input type="hidden" id="approved" name="approved">
                @elseif($course->name == 'Kitare' || $course->name == 'Guitar')
                <button type="button" class="btn btn-warning filter-btn" data-course="{{$course->id}}">{{$course->name}}</button>
                <input type="hidden" id="approved" name="approved">
                @elseif($course->name == 'Kanto')
                <button type="button" class="btn btn-info filter-btn" data-course="{{$course->id}}">{{$course->name}}</button>
                <input type="hidden" id="approved" name="approved">
                @elseif($course->name == 'Kercim' || $course->name == 'Dance')
                <button type="button" class="btn btn-secondary filter-btn" data-course="{{$course->id}}">{{$course->name}}</button>
                <input type="hidden" id="approved" name="approved">
                @elseif($course->name == 'Kendim' || $course->name == 'Singing')
                <button type="button" class="btn btn-danger filter-btn" data-course="{{$course->id}}">{{$course->name}}</button>
                <input type="hidden" id="approved" name="approved">
                @elseif($course->name == 'Aktrim' || $course->name == 'Acting')
                <button type="button" class="btn btn-info filter-btn" data-course="{{$course->id}}">{{$course->name}}</button>
                <input type="hidden" id="approved" name="approved">
                @elseif($course->name == 'Pikture' || $course->name == 'Painting')
                <button type="button" class="btn btn-light filter-btn" data-course="{{$course->id}}">{{$course->name}}</button>
                <input type="hidden" id="approved" name="approved">
                @elseif($course->name == 'Fotografi' || $course->name == 'Photography')
                <button type="button" class="btn btn-dark filter-btn" data-course="{{$course->id}}">{{$course->name}}</button>
                <input type="hidden" id="approved" name="approved">
                @else
                <button type="button" class="btn btn-secondary filter-btn" data-course="{{$course->id}}">{{$course->name}}</button>
                <input type="hidden" id="approved" name="approved">
                 @endif
                @endforeach
        </div>

                </div>
            <div class="card-header border-0">
                        <table class="table table-bordered yajra-datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Emri</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Kursi</th>
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
            url: "{{ route('all_register_course') }}",
            data: function (d) {
                d.approved = $('#approved').val(),
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
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data:'course.name',name: 'course',orderable: false,
               render: function (data) {
                          if (data === 'Piano') {
                                return '<td><span class="badge badge-soft-success">'+data+'</span></td>';
                          } else if(data === 'Kitare' || data === 'Guitar'){
                              return '<td><span class="badge badge-soft-warning">'+data+'</span></td>';
                          } else if(data === 'Kanto'){
                              return '<td><span class="badge badge-soft-light">'+data+'</span></td>';
                          } else if(data === 'Dance' || data === 'Kercim'){
                              '<td><span class="badge badge-soft-secondary">'+data+'</span></td>';
                          }
                          } else if(data === 'Kendim' || data === 'Singing'){
                              '<td><span class="badge badge-soft-danger">'+data+'</span></td>';
                          }
                          } else if(data === 'Pikture' || data === 'Painting'){
                              '<td><span class="badge badge-soft-info">'+data+'</span></td>';
                          }
                          } else if(data === 'Fotografi' || data === 'Photography'){
                              '<td><span class="badge badge-soft-dark">'+data+'</span></td>';
                          }
                          else{
                            return '<td><span class="badge badge-soft-primary">'+data+'</span></td>'; 
                          }
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
    //   $('#approved').change(function(){
    //             table.draw();
    //         });


    $('#approved').val('all');
    
    setTimeout(function () {
        $('.filter-btn[data-course="all"]').click();
    }, 100); 


    $('.filter-btn').click(function () {
        var courseId = $(this).data('course');
        $('#approved').val(courseId);
        table.draw();
    });
    
    });
</script>
@endsection


