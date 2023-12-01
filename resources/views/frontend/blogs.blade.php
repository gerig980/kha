@include('layouts.frontend.partials.header-assets')
  <body class="body-blogs">
    @include('layouts.frontend.partials.header')

    <section class="section-blog">
      <div class="container-fluid width-courses">
        <div class="row">
          <div class="col-4">
            <div id="searchBox" class="mobile-form">
              <form action="{{ route('blogs.search') }}" class="search-form" id="searchform"  style="width:260px">
                <span id="noEasy"
                  >
                  <span class="sb-icon-search"></span
                ></span>
                <input
                  id="sbox"
                  name="q"
                  onblur="if (this.placeholder == '') {this.placeholder = 'Search';}"
                  onfocus="if (this.placeholder == 'Search') {this.placeholder = '';}"
                  placeholder="Search"
                  type="search"

                />
              </form>
                
            </div>
          </div>
        </div>
        <div class="blog-posts">
          <div class="row">
            @foreach($blogs as $blog)
         
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <a style="text-decoration:none;" href="{{route('single_blog',$blog->id)}}">
              <div class="card">
                <img
                  src="{{ URL::asset('images/blogs/' . $blog->image) }}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-header">
                  <div class="row">
                    <div class="col-5 blog-tag">@foreach($blog->tags->take(2) as $tag) #{{$tag->name}} @endforeach</div>
                    <div class="col-7 blog-time">Time: {{$blog->created_at->format('d:m:Y')}}</div>
                  </div>
                </div>

                <div class="card-body">
                  <h4 class="card-title">@if(app()->getLocale() == 'sq'){{$blog->title}}@else{{$blog->title_en}}@endif</h4>
                  <p class="card-text">
                    @if(app()->getLocale() == 'sq'){!!substr($blog->description,0,150)!!}...@else{!!substr($blog->description_en,0,150)!!}...@endif
                  </p>
                </div>
              </div>
               </a>
            </div>
           
            @endforeach
           
          </div>
        </div>
      </div>
    </section>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')


