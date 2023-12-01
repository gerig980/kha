@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">-->
@endpush
@section('title', 'Create Courses')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Krijo Kurse</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Krijo nje Kurs</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('courses.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Titulli kursit</label>
                                <input type="text" class="form-control" name="name"  placeholder="Titulli Kursit" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Titulli kursit English</label>
                                <input type="text" class="form-control" name="name_en"  placeholder="Titulli Kursit Anglisht" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6  mb-3">
                            <div>
                                <label for="start_time">Data e Fillimit </label>
                                <input class="form-control start-date" type="time" name="start_time" id="start_time">
                            </div>
                        </div>
                        <div class="col-6  mb-3">
                            <div>
                                <label for="start_time">Data e Mbarimit</label>
                                <input class="form-control end-date" type="time" name="end_time" id="end_time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Kursit</h5>
                                <input class="form-control" name="image" type="file"/>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                        <label class="form-label" for="description">Përshkrimi (* 350 chars Max)</label>
                        <textarea name="description" id="ckeditor-classic">
                            
                        </textarea>
                        </div>
                        <div class="col-6">
                        <label class="form-label" for="description_en">Përshkrimi English (* 350 chars Max)</label>
                        <textarea name="description_en" id="ckeditor-classic_en">
                            
                        </textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-6 mt-4 ">
                            <input type="button" class="btn btn-outline-primary mb-4" id="more_fields" onclick="add_fields();" value="Shto Mesues" />
                            <div id="teacher-field">
                                <label for="teacher">Teacher  1:</label>
                                <input class="form-control" style="margin-left: 2px;" type="text" name="teachers[]" id="teacher" multiple>
                            </div>
                        </div>

                       

                        <div class="col-6 mt-4 ">
                            <input type="button" class="btn btn-outline-primary mb-4" id="more_fields_times" onclick="add_fields_times();" value="Shto Orare" />
                            <div id="times-field">
                                <label for="time">Time 1:</label>
                                <input class="form-control input-date" type="time" name="times[]" id="time" multiple>

                            </div>
                        </div>

                        <div class="col-4 mt-4 ">
                            <div>
                                <label for="day">Days:</label>
                                <input class="form-control" style="margin-left: 2px;" type="text" name="days" id="day" placeholder="Shembull: Mon-Fri">
                            </div>
                        </div>
    

                    </div>
                </div>
                
                <div class="text-end mb-3 me-3">
                    <button type="submit" name="submit" class="btn btn-success w-sm">Submit</button>
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
<!--<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>-->

<!-- dropzone js -->
<script src="{{(URL::asset('backend/assets/libs/dropzone/dropzone-min.js'))}}"></script>

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
      
    var teachers = 1;
    function add_fields() {
        teachers++;
        var objTo = document.getElementById('teacher-field')
        var divtest = document.createElement("div");
        divtest.innerHTML = '<div  style="position: relative;" id="teacher' + teachers +'"><label for="teacher">Teacher ' + teachers +':</label> <input class="form-control" type="text" name="teachers[]" id="teacher" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeTeacher('+teachers+');">x</span> </div>';
        
        objTo.appendChild(divtest)
    }
    function removeTeacher(id){
        var teachers = document.querySelector("#teacher"+id);
        teachers.remove();
    }

    var times = 1;
    function add_fields_times() {
        times++;
        var objTimes = document.getElementById('times-field')
        var divtimes = document.createElement("div");
        divtimes.innerHTML = '<div style="position:relative;" id="time_div' + times +'"><label for="time">Time ' + times +':</label> <input class="form-control input-date" type="time" name="times[]" id="time" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeTimes('+times+');">x</span></div>';
        objTimes.appendChild(divtimes);
        $(".input-date").flatpickr({
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true
    });
    }
    function removeTimes(ids){
        var times = document.querySelector("#time_div"+ids);
        times.remove();
    }
    
</script>



@endpush


