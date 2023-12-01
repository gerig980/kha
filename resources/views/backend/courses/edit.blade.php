@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link href="{{('backend/assets/libs/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />

@endpush
@section('title', 'Edit Course')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edito Kursin</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Edito Kursin</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('courses.update', $course->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Titulli Kursit</label>
                                <input type="text" class="form-control" name="name" value="{{ $course->name}}" >
                            </div>
                        </div>
                            <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Titulli Kursit English</label>
                                <input type="text" class="form-control" name="name_en" value="{{ $course->name_en}}" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6  mb-3">
                            <div>
                                <label for="start_time">Data e Fillimit </label>
                                <input class="form-control start-date" type="time" name="start_time" value="{{$course->start_time}}" id="start_time">
                            </div>
                        </div>
                        <div class="col-6  mb-3">
                            <div>
                                <label for="start_time">Data e Mbarimit</label>
                                <input class="form-control end-date" type="time" name="end_time" value="{{$course->end_time}}" id="end_time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Kursit</h5>
                                <div>
                                    <img src="{{ URL::asset('images/course/'.$course->image)}}" class="img-fluid d-block">
                                </div><br>
                                <input class="form-control" name="image" type="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="description">Pershkrimi</label>
                            <textarea name="description" id="ckeditor-classic">
                                @if($course->description != '')
                                {{$course->description}}
                                @endif
                            </textarea>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="description_en">Pershkrimi English</label>
                            <textarea name="description_en" id="ckeditor-classic_en">
                                @if($course->description_en != '')
                                {{$course->description_en}}
                                @endif
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-4 ">
                            <input type="button" class="btn btn-outline-primary mb-4" id="more_fields" onclick="add_fields();" value="Shto Mesues" />
                            <div id="teacher-field">
                                @php
                                    $teachers = json_decode($course->teachers,true);
                                    $nr = 0;
                                @endphp
                                @if($teachers)
                                @foreach ($teachers as $teacher)
                                    <div class="d-none">{{ $nr++ }}</div>
                              
                                <div style="position: relative;" id="teacher{{ $nr }}">
                                    <label for="teacher">Teacher  {{ $nr }}:</label>
                                    <input class="form-control" style="margin-left: 2px;" value="{{ $teacher }}" type="text" name="teachers[]" id="teacher" multiple>
                                    <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeTeacher({{ $nr }});">x</span>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <input type="button" class="btn btn-outline-primary mb-4" id="more_fields_times" onclick="add_fields_times();" value="Shto Orare" />
                                <div id="times-field">
                                @php
                                    $times = json_decode($course->times,true);
                                    $nr1 = 0;
                                @endphp
                                
                                @if($times)
                                @foreach ($times as $time)
                                    <div class="d-none">{{ $nr1++ }}</div>
                              
                                <div style="position: relative;" id="time_div{{ $nr1 }}">
                                    <label for="time">Time 1:</label>
                                    <input class="form-control input-date" type="time" value="{{ $time }}" name="times[]" id="time" >
                                    <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeTimes({{ $nr1 }});">x</span>
                                </div>
                                    @endforeach
                                @endif 
                                </div>
                               
                               
                        </div>
                            
                         <div class="col-6 mt-4 ">
                                <div>
                                    <label for="day">Days:</label>
                                    <input class="form-control" style="margin-left: 2px;" type="text" name="days" id="day" value="{{ $course->days }}" placeholder="Shembull: Mon-Fri">
                                </div>
                            </div>
                        
                    </div>
                    </div>

          
                
                <div class="text-end mb-3 me-3">
                    <button type="submit" name="submit" class="btn btn-success w-sm">Update</button>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</form>


@endsection
@push('js')
<!-- ckeditor -->
<script src="{{(URL::asset('backend/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js'))}}"></script>

<!-- dropzone js -->
{{-- <script src="{{(URL::asset('backend/assets/libs/dropzone/dropzone-min.js'))}}"></script>

<script src="{{(URL::asset('backend/assets/js/pages/ecommerce-product-create.init.js'))}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<script>
    var uploadUrl = '{{ route('image.upload.courses') }}';
    var csrfToken = '{{ csrf_token() }}';
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#ckeditor-classic' ), {
            ckfinder: {
                uploadUrl: uploadUrl + '?_token=' + csrfToken
            }
        })
        .catch( error => {
            console.error( error );
        });
        
        ClassicEditor
        .create( document.querySelector( '#ckeditor-classic_en' ), {
            ckfinder: {
                uploadUrl: uploadUrl + '?_token=' + csrfToken
            }
        })
        .catch( error => {
            console.error( error );
        });
</script>

<script>
$(document).ready(function () {
    $(".start-date").flatpickr({
    enableTime: false,
    dateFormat: "Y-m-d",
    });
});

$(document).ready(function () {
    $(".end-date").flatpickr({
    enableTime: false,
    dateFormat: "Y-m-d",
    });
});

$(document).ready(function () {
    $(".input-date").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true
    });
});
     var teachersjs = 1;
    function add_fields() {
        teachersjs++;
        var objTo = document.getElementById('teacher-field')
        var divtest = document.createElement("div");
        divtest.innerHTML = '<div  style="position: relative;" id="teacherJs' + teachersjs +'"><label for="teacher">Teacher :</label> <input class="form-control" type="text" name="teachers[]" id="teacher" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeTeacherJs('+teachersjs+');">x</span> </div>';
        
        objTo.appendChild(divtest)
    }
    var teachers = {{ $nr }}
     function removeTeacher(id){
        var teachers = document.querySelector("#teacher"+id);
        teachers.remove();
    }

    function removeTeacherJs(id){
        var teachersjs = document.querySelector("#teacherJs"+id);
        teachersjs.remove();
    }

    var timejs = 1;
    function add_fields_times() {
        timejs++;
        var objTimes = document.getElementById('times-field')
        var divtimes = document.createElement("div");
        divtimes.innerHTML = '<div style="position:relative;" id="time_div' + timejs +'"><label for="time">Time :</label> <input class="form-control input-date" type="time" name="times[]" id="time" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeTimes('+timejs+');">x</span></div>';
        
        objTimes.appendChild(divtimes)
        $(".input-date").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true
    });
    }

    var times = {{ $nr1 }}
    function removeTimes(id){
        var times = document.querySelector("#time_div"+id);
        times.remove();
    }
    function removeTimesJs(id){
        var timesjs = document.querySelector("#time_div"+id);
        timesjs.remove();
    }
</script>


@endpush


