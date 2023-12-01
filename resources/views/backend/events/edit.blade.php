@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Edit Events')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edit Events</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Edito Eventin</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('event.update',$event->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
   
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="title">Titulli</label>
                                <input type="text" class="form-control" name="title" value="{{$event->title}}" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="title">Titulli English</label>
                                <input type="text" class="form-control" name="title_en" value="{{$event->title_en}}" >
                            </div>
                        </div>
                        <div class="col-6">

                            <h5 class="fs-14 mb-1">Bejini check nese deshironi qe ky event te shfaqet ne krye te eventeve ?</h5>
                            <div class="mt-3">
                                <input type="checkbox" value="1" id="isbanner" name="isBanner" {{($event->isBanner == 1 ? 'checked' : '')}}  />
                                <label for="isbanner">Shfaq si event kryesore</label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Eventit</h5>
                                 <div>
                                    <img src="{{ URL::asset('images/events/'.$event->image)}}" class="img-fluid d-block" style="max-height:400px;">
                                </div><br>
                                <input class="form-control" name="image" type="file"/>
                            </div>
                        </div>
                        
                         
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="description">Përshkrimi (* 350 chars Max)</label>
                            <textarea name="description" id="ckeditor-classic">
                                {{$event->description}}
                            </textarea>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="description">Përshkrimi English (* 350 chars Max)</label>
                            <textarea name="description_en" id="ckeditor-classic_en">
                                {{$event->description_en}}
                            </textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-6 mt-4">
                           <label class="form-label" for="maps_url">URL e Maps</label>
                           <input class="form-control" type="text" name="maps_url" value="{{$event->maps_url}}" >
                        </div>
                        
                         <div class="col-4 mt-4">
                           <label class="form-label" for="date">Data dhe ora Eventit</label>
                           <input class="form-control input-date" type="datetime-local" value="{{$event->data_eventit}}" id="date" name="data_eventit" >
                        </div>
                       <div class="col-2 mt-4">
                           <label class="form-label" for="numbers">Totali vendeve ne event</label>
                           <input class="form-control " type="number" value="{{$event->limit_number}}"  name="limit_number" >
                        </div>
                        
                    </div>
                    
                    <div class="row">
                            <div class="col-6 mt-4 ">
                                <input type="button" class="btn btn-outline-primary mb-4" id="more_fields" onclick="add_fields();" value="Shto Regji" />
                                <div id="regjia-field">
                                    @php
                                        $regjia = json_decode($event->regjia,true);
                                        $nr = 0;
                                    @endphp
                                    @if($regjia)
                                    @foreach ($regjia as $regji)
                                        <div class="d-none">{{ $nr++ }}</div>
                                  
                                    <div style="position: relative;" id="regjia{{ $nr }}">
                                        <label for="regjia">Regjia  {{ $nr }}:</label>
                                        <input class="form-control" style="margin-left: 2px;" value="{{ $regji }}" type="text" name="regjia[]" id="regjia" multiple>
                                        <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeRegjia({{ $nr }});">x</span>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-6 mt-4">
                            @php
                                $times = json_decode($event->times,true);
                                $nr1 = 0;
                            @endphp
                            <input type="button" class="btn btn-outline-primary mb-4" id="more_fields_times" onclick="add_fields_times();" value="Shto Orare" />
                            <div id="times-field">
                            @if($times)
                            @foreach ($times as $time)
                                <div class="d-none">{{ $nr1++ }}</div>
                          
                            <div style="position: relative;" id="time_div{{ $nr1 }}">
                                <label for="time">Time 1:</label>
                                <input class="form-control input-date" type="time" value="{{ $time }}" name="times[]" id="time" multiple >
                                <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeTimes({{ $nr1 }});">x</span>
                            </div>
                                
                            </div>
                            @endforeach
                            @endif
                            
                        </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="row">
                                  <div class="col-6">
                                        <h5 class="fs-14 mb-1 mt-4">Bejini check nese eshte soldout ?</h5>
                                        <div class="mt-3">
                                            <input type="checkbox" value="1" id="isSold" name="isSold" {{($event->isSold == 1 ? 'checked' : '')}}  />
                                            <label for="isSold">Is SoldOut</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="day">Ditet:</label>
                                        <input class="form-control" style="margin-left: 2px;" type="text" name="days" id="day" value="{{ $event->days }}" placeholder="Shembull: Mon-Fri">
                                    </div> 
                            </div>
                            <div class="row">
                                  <div class="col-6">
                                        <h5 class="fs-14 mb-1 mt-4">Bejini check nese eventi eshte me pagesë</h5>
                                        <div class="mt-3">
                                            <input type="checkbox" value="1" id="isPaid" name="isPaid" onclick='handleClick(this);' {{($event->isPaid == 1 ? 'checked' : '')}}  />
                                            <label for="isPaid">Me Pagesë</label>
                                        </div>
                                    </div>
                                    @if($event->isPaid == 1)
                                    <div class="col-6" >
                                        <label for="day">Cmimi eventit:</label>
                                        <input class="form-control" style="margin-left: 2px;" type="number" name="price" id="day" value="{{ $event->price }}">
                                    </div> 
                                    @else
                                    <div class="col-6 d-none" id="price">
                                        <label for="day">Cmimi eventit:</label>
                                        <input class="form-control" style="margin-left: 2px;" type="number" name="price" id="day" value="{{ $event->price }}">
                                    </div> 
                                    @endif
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
    $(".input-date").flatpickr({
   enableTime: true,
    dateFormat: "Y-m-d H:i",
    });
});
     var regjiajs = 1;
    function add_fields() {
        regjiajs++;
        var objTo = document.getElementById('regjia-field')
        var divtest = document.createElement("div");
        divtest.innerHTML = '<div  style="position: relative;" id="regjiajs' + regjiajs +'"><label for="regjia">Regjia ' + regjiajs +':</label> <input class="form-control" type="text" name="regjia[]" id="regjia" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeRegjiaJs('+regjiajs+');">x</span> </div>';
        
        objTo.appendChild(divtest)
    }
    var regjia = {{ $nr }}
     function removeRegjia(id){
        var regjia = document.querySelector("#regjia"+id);
        regjia.remove();
    }

    function removeRegjiaJs(id){
        var regjiajs = document.querySelector("#regjiajs"+id);
        regjiajs.remove();
    }

    var timejs = 1;
    function add_fields_times() {
        timejs++;
        var objTimes = document.getElementById('times-field')
        var divtimes = document.createElement("div");
        divtimes.innerHTML = '<div style="position:relative;" id="time_div' + timejs +'"><label for="time">Time ' + timejs +':</label> <input class="form-control input-date" type="time" name="times[]" id="time" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeTimes('+timejs+');">x</span></div>';
        
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


