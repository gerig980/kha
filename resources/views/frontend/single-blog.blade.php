@include('layouts.frontend.partials.header-assets')

  <body class="body-blogs">
    @include('layouts.frontend.partials.header')

    <section class="section-single-blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="blog-content mb-5">
            <div class="prime-image">
              <img src="{{ URL::asset('images/blogs/' . $blog->image) }}" class="img-fluid" alt="blog-image"/>
         
              <div class="blog-date">
                <span>{{$blog->created_at->format('d-m-y')}}</span>
              </div>
              <div class="blog-title">
                <h2>@if(app()->getLocale() == 'sq'){{$blog->title}}@else{{$blog->title_en}}@endif</h2>
              </div>
              <div class="blog-description">
               @if(app()->getLocale() == 'sq'){!!$blog->description!!}@else{!!$blog->description_en!!}@endif
              </div>
              <div class="blog-tags">
                <a href="#"><span>@foreach($blog->tags as $tag) #{{$tag->name}} @endforeach</span></a>
              </div>
            </div>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="other-blog-contents">
            <h3>
              Latest Blog
            </h3>
            <div class="row">
                @foreach($blogs as $blogLatest)
              <div class="col-lg-12 col-md-12 col-sm-6">
                  <a href="{{route('single_blog',$blogLatest->id)}}" style="text-decoration:none;">
                  <div class="card">
                    <img
                      src="{{ URL::asset('images/blogs/' . $blogLatest->image) }}"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-header">
                      <div class="row">
                        <div class="col-5 blog-tag">@foreach($blog->tags->take(2) as $tag) #{{$tag->name}} @endforeach</div>
                        <div class="col-7 blog-time">Time: {{$blogLatest->created_at->format('d-m-y')}}</div>
                      </div>
                    </div>

                    <div class="card-body">
                      <h4 class="card-title"> @if(app()->getLocale() == 'sq'){{$blogLatest->title}}@else{{$blogLatest->title_en}}@endif</h4>
                      <p >
                        @if(app()->getLocale() == 'sq'){!!substr($blogLatest->description,0,150)!!}...@else{!!substr($blogLatest->description_en,0,150)!!}...@endif
                      </p>
                    </div>
                  </div>
                  </a>
              </div>
                @endforeach
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')
