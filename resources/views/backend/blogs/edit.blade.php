@extends('layouts.backend.app1')
@push('css')
    <!-- Plugins css -->
    <link href="{{ 'backend/assets/libs/dropzone/dropzone.css' }}" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: white !important;
            background-color: #0d6efd;
            padding: 0.2rem;
        }
    </style>
@endpush
@section('title', 'Edit Blog')
@section('content')


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Blog</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Edit Blog</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <form autocomplete="off" class="needs-validation" method="post" action="{{ route('blog.update', $blog->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title">Blog Title</label>
                                    <input type="text" class="form-control" id="blog_title" name="title"
                                        value="{{ $blog->title }}" placeholder="Titulli Blogut">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="title">Blog Title English</label>
                                    <input type="text" class="form-control" id="blog_title" name="title_en"
                                        value="{{ $blog->title_en }}" placeholder="Titulli Blogut Anglisht">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <h5 class="fs-14 mb-1">Blog Image (856px / 500px)</h5>

                                    <div >
                                        <img src="{{ URL::asset('images/blogs/' . $blog->image) }}"
                                            class="img-fluid d-block">
                                    </div><br>
                                    <input class="form-control" name="image" type="file" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="description">Description</label>
                                <textarea name="description" id="ckeditor-classic">
                                    @if ($blog->description != '')
                                    {{ $blog->description }}
                                    @endif
                                </textarea>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="description_en">Description English</label>
                                <textarea name="description_en" id="ckeditor-classic_en">
                                    @if ($blog->description_en != '')
                                    {{ $blog->description_en }}
                                    @endif
                                </textarea>
                            </div>
                        </div>
                        
                        <div class="row ">
                            <div class="col-6 mt-4 d-flex flex-column">
                                <label for="tag">Vendosni tags te ndare me presje</label>
                                <div class="input-group">
                                    
                                    <input type="text" class="form-control p-4" data-role="tagsinput" name="tags"
                                        id="tag" value="{{ $tags }}" />
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
    <script src="{{ URL::asset('backend/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

    <!-- dropzone js -->
    {{-- <script src="{{(URL::asset('backend/assets/libs/dropzone/dropzone-min.js'))}}"></script>

<script src="{{(URL::asset('backend/assets/js/pages/ecommerce-product-create.init.js'))}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        var uploadUrl = '{{ route('image.upload.blog') }}';
        var csrfToken = '{{ csrf_token() }}';
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor-classic'), {
                ckfinder: {
                    uploadUrl: uploadUrl + '?_token=' + csrfToken
                }
            })
            .catch(error => {
                console.error(error);
            });
            
            ClassicEditor
            .create(document.querySelector('#ckeditor-classic_en'), {
                ckfinder: {
                    uploadUrl: uploadUrl + '?_token=' + csrfToken
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        $(function() {
            $('#tag')
                .on('change', function(event) {
                    var $element = $(event.target);
                    var $container = $element.closest('.example');

                    if (!$element.data('tagsinput')) return;

                    var val = $element.val();
                    if (val === null) val = 'null';
                    var items = $element.tagsinput('items');

                    $('code', $('pre.val', $container)).html(
                        $.isArray(val) ?
                        JSON.stringify(val) :
                        '"' + val.replace('"', '\\"') + '"'
                    );
                    $('code', $('pre.items', $container)).html(
                        JSON.stringify($element.tagsinput('items'))
                    );
                })
                .trigger('change');
        });
    </script>
@endpush
