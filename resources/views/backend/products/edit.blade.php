@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Edit Products')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edit Products</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Ndrysho Produkt</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form  autocomplete="off" class="needs-validation" method="post" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Emri</label>
                                <input type="text" class="form-control" name="name"  value="{{ $product->name }}" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6 d-flex align-items-end">
                           <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhi Thumbnail</h5>
                                <div>
                                    <img src="{{ URL::asset('images/products/'.$product->thumbnail)}}" class="img-fluid d-block" style="width: 150px;">
                                </div><br>
                                <input class="form-control" name="thumbnail" type="file"/>
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-end">
                            <div class="mb-4">
                                <h5 class="fs-14 mb-1">Imazhe te produktit</h5>
                                <div style="display:flex; align-items:center; flex-wrap:wrap; gap:10px; justify-content:start;">
                                    @if($product->images)
                                   @foreach($product['images'] as $image)
                                   <div style="position:relative">
                                   <img class="form-control" style="width:100px;" src="{{URL::asset('images/products/' . $image)}}">
                                   <a style="position:absolute; top:1px;left:10px;"  href="{{ route('delete-images-products', ['id' => $product['id'], 'imageName' => $image]) }}"
                                       record="image"
                                       title="Delete Image"
                                       class="closes confirmDelete "
                                       recordId="{{$product['id']}}"
                                       recordName="{{$image}}">
                                       x
                                   </a>
                                   </div>
                                    @endforeach
                                    @endif
                                   <input type="file" name="images[]" class="form-control"  multiple />
                               </div>
                        
                            </div>
                        </div>
                    </div>

                    <label class="form-label" for="description">Përshkrimi Produktit</label>
                    <textarea name="description" id="ckeditor-classic">
                        @if ($product->description != '')
                            {{ $product->description }}
                        @endif
                    </textarea>
                    <div class="row">
                        <div class="col-6">
                            <div class="mt-2">
                                <label for="price">Cmimi</label>
                                <input name="price" type="number" class="form-control" value="{{ $product->price }}">
                            </div>
                        </div>
                      
                    </div>
                    <div class="row">
                        <?php 
                        $colors = json_decode($product->colors,true);
                        $sizes = json_decode($product->sizes,true);
                        $nr = 0;
                        ?>
                        <div class="col-6">
                            <input type="button" class="btn btn-light mb-2 mt-4" id="more_fields" onclick="add_fields();" value="Shto Ngjyra" />
                            <div id="color-field" >
                            @if ($colors)
                                @foreach ($colors as $color)
                                <span class="d-none">{{ $nr++ }}</span>
                                    <div id="color{{ $nr }}" class="color" style="position: relative; margin-bottom:5px;">
                                        <input type="text" class="form-control" name="colors[]" value="{{$color}}">
                                        <span style="position: absolute; top:7px;left:95%; cursor:pointer;" onclick="removeColor({{ $nr }});">x</span>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        </div>
                        <div class="col-6">
                            <input type="button" class="btn btn-light mb-2 mt-4"  onclick="add_fields_sizes();" value="Shto Size" />
                            <div id="size-field">
                            @if ($sizes)
                                @foreach ($sizes as $size)
                                <span class="d-none">{{ $nr++ }}</span>
                                    <div id="size{{ $nr }}" class="color" style="position: relative; margin-bottom:5px;">
                                        <input type="text" class="form-control" name="sizes[]" value="{{$size}}">
                                        <span style="position: absolute; top:7px;left:95%; cursor:pointer;" onclick="removeSize({{ $nr }});">x</span>
                                    </div>
                                @endforeach
                            @endif
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
       divtest.innerHTML = '<div  style="position: relative; margin-bottom:5px;" id="colorjs' + color +'"> <input class="form-control" type="text" name="colors[]" id="color" multiple> <span style="position: absolute; top:7px;left:95%; cursor:pointer;" onclick="removeColorjs('+color+');">x</span> </div>';
       
       objTo.appendChild(divtest)
   }
   function removeColor(id){
       var colors = document.querySelector("#color"+id);
       colors.remove();
   }

   function removeColorjs(id){
       var colorsjs = document.querySelector("#colorjs"+id);
       colorsjs.remove();
   }

   var size = 1;
   function add_fields_sizes() {
       size++;
       var objToSize = document.getElementById('size-field')
       var divsize = document.createElement("div");
       divsize.innerHTML = '<div  style="position: relative; margin-bottom:5px;" id="sizesjs' + size +'"> <input class="form-control" type="text" name="sizes[]" id="size" multiple> <span style="position: absolute; top:7px;left:95%; cursor:pointer;" onclick="removeSizesjs('+size+');">x</span> </div>';
       
       objToSize.appendChild(divsize)
   }
   function removeSize(id){
       var sizes = document.querySelector("#size"+id);
       sizes.remove();
   }

   function removeSizesjs(id){
       var sizesjs = document.querySelector("#sizesjs"+id);
       sizesjs.remove();
   }
   
</script>

@endpush


