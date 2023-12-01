@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Create Events')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Krijo Evente</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Krijo nje Event</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('event.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
   
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="title">Titulli</label>
                                <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Titulli Eventit" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="title">Titulli English</label>
                                <input type="text" class="form-control" name="title_en" value="{{old('title_en')}}" placeholder="Titulli Eventit Anglisht" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Eventit</h5>
                                <input class="form-control" name="image" type="file"/>
                            </div>
                        </div>
                        
                         <div class="col-6">

                            <h5 class="fs-14 mb-1">Bejini check nese deshironi qe ky event te shfaqet ne krye te eventeve ?</h5>
                            <div class="mt-3">
                                <input type="checkbox" value="1" id="isbanner" name="isBanner"  />
                                <label for="isbanner">Shfaq si event kryesore</label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="description">Përshkrimi (* 350 chars Max)</label>
                            <textarea name="description" id="ckeditor-classic">
                                {{old('description')}}
                            </textarea>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="description_en">Përshkrimi English (* 350 chars Max)</label>
                            <textarea name="description_en" id="ckeditor-classic_en">
                                {{old('description_en')}}
                            </textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6 mt-2">
                           <label class="form-label" for="maps_url">Url e Maps</label>
                           <input class="form-control" type="text" name="maps_url" value="{{old('maps_url')}}" placeholder="Map Url">
                        </div>
                        
                         <div class="col-4 mt-2">
                           <label class="form-label" for="date">Data & Ora Eventit</label>
                           <input class="form-control input-date2" type="datetime-local" value="{{old('data_eventit')}}" id="date" name="data_eventit" >
                        </div>
                        <div class="col-2 mt-2">
                           <label class="form-label" for="numbers">Totali vendeve ne event</label>
                           <input class="form-control " type="number" value="{{old('limit_number')}}"  name="limit_number" >
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-6 mt-4 ">
                            <input type="button" class="btn btn-outline-primary mb-4" id="more_fields" onclick="add_fields();" value="Shto Regji" />
                            <div id="regjia-field">
                                <label for="regjia">Regjia  1:</label>
                                <input class="form-control" style="margin-left: 2px;" type="text" name="regjia[]" id="regjia" multiple>
                            </div>
                        </div>

                       

                        <div class="col-6 mt-4 ">
                            <input type="button" class="btn btn-outline-primary mb-4" id="more_fields_times" onclick="add_fields_times();" value="Shto Orare" />
                            <div id="times-field">
                                <label for="time">Orari 1:</label>
                                <input class="form-control input-date" type="time" name="times[]" id="time" multiple>

                            </div>
                        </div>

                        <div class="col-6 mt-4 ">
                            <div>
                                <label for="day">Ditet:</label>
                                <input class="form-control" style="margin-left: 2px;" type="text" name="days" id="day" placeholder="Shembull: Mon-Fri">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 mt-4">
    
                                <h5 class="fs-14 mb-1">Bejini check nese ky event eshte me pagesë</h5>
                                <div class="mt-3">
                                    <input type="checkbox" value="1" id="isPaid" name="isPaid" onclick='handleClick(this);'  />
                                    <label for="isPaid">Me Pagesë</label>
                                    
                                </div>
                            </div>
                            <div class="col-4 mt-4 d-none" id="price">
                                <label class="form-label">Cmimi eventit:</label>
                                <input class="form-control" name="price" placeholder="2000">
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

<!-- dropzone js -->
<script src="{{(URL::asset('backend/assets/libs/dropzone/dropzone-min.js'))}}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<script>
    var uploadUrl = '{{ route('image.upload.events') }}';
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
    $(".input-date2").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
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
      
    var regjia = 1;
    function add_fields() {
        regjia++;
        var objTo = document.getElementById('regjia-field')
        var divtest = document.createElement("div");
        divtest.innerHTML = '<div  style="position: relative;" id="regjia' + regjia +'"><label for="regjia">Regjia ' + regjia +':</label> <input class="form-control" type="text" name="regjia[]" id="regjia" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeRegjia('+regjia+');">x</span> </div>';
        
        objTo.appendChild(divtest)
    }
    function removeRegjia(id){
        var regjia = document.querySelector("#regjia"+id);
        regjia.remove();
    }

    var times = 1;
    function add_fields_times() {
        times++;
        var objTimes = document.getElementById('times-field')
        var divtimes = document.createElement("div");
        divtimes.innerHTML = '<div style="position:relative;" id="time_div' + times +'"><label for="time">Orari ' + times +':</label> <input class="form-control input-date" type="time" name="times[]" id="time" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeTimes('+times+');">x</span></div>';
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
<script>
   function handleClick(cb) {
            if (cb.checked == true) {
                $('#price').toggleClass('d-none');
            }else{
                $('#price').addClass('d-none');
            }

        }
</script>


@endpush


