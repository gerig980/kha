@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Create Products')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Create Products</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Krijo nje Produkt</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">                     
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="name">Emri</label>
                                    <input type="text" class="form-control" name="name"  placeholder="Emri Produktit" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mt-2">
                                    <label for="price">Cmimi</label>
                                    <input name="price" type="number" class="form-control" placeholder="Cmimi">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Thumbnail</h5>
                            
                                <input class="form-control" name="thumbnail" type="file"/>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhe te produktit</h5>
                                <input class="form-control" name="images[]" type="file" multiple/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label" for="description">Përshkrimi Produktit</label>
                            <textarea name="description" id="ckeditor-classic">
                                
                            </textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="col-6 mt-4">
                                <input type="button" class="btn btn-light mb-4" id="more_fields" onclick="add_fields();" value="Add Colors" />
                                <div id="color-field">
                                    <label for="color">Color:</label>
                                    <input class="form-control" style="margin-left: 2px;" type="text" name="colors[]" id="teacher" multiple>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-6 mt-4">
                                <input type="button" class="btn btn-light mb-4" id="more_fields" onclick="add_fields_sizes();" value="Add Sizes" />
                                <div id="size-field">
                                    <label for="size">Size:</label>
                                    <input class="form-control" style="margin-left: 2px;" type="text" name="sizes[]" id="size" multiple>
                                </div>
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
    var uploadUrl = '{{ route('image.upload.products') }}';
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
</script>
<script>
     var color = 1;
    function add_fields() {
        color++;
        var objTo = document.getElementById('color-field')
        var divtest = document.createElement("div");
        divtest.innerHTML = '<div  style="position: relative;" id="color' + color +'"><label for="color">Color ' + color +':</label> <input class="form-control" type="text" name="colors[]" id="color" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeColor('+color+');">x</span> </div>';
        
        objTo.appendChild(divtest)
    }
    function removeColor(id){
        var colors = document.querySelector("#color"+id);
        colors.remove();
    }

    var size = 1;
    function add_fields_sizes() {
        size++;
        var objToSize = document.getElementById('size-field')
        var divsize = document.createElement("div");
        divsize.innerHTML = '<div  style="position: relative;" id="size' + size +'"><label for="size">Size ' + size +':</label> <input class="form-control" type="text" name="sizes[]" id="size" multiple> <span style="position: absolute; top:35px;left:95%; cursor:pointer;" onclick="removeSize('+size+');">x</span> </div>';
        
        objToSize.appendChild(divsize)
    }
    function removeSize(id){
        var sizes = document.querySelector("#size"+id);
        sizes.remove();
    }

</script>
@endpush


