

<footer>
    <section class="footer">
        <div class="container-fluid">
            <div class="footer-content">
                <div class="row">
                    <div class="footer-third-col-mobile col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <form action="{{route('subscribe.store')}}" method="post" class="row g-3">
                            @csrf
                            <div class="col-auto">
                                <input type="email" class="form-control" id="email"
                                    placeholder="Enter your email here*">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-subscribe mb-3">SUBSCRIBE</button>
                            </div>
                        </form>
                    </div>
                    <div class=" col-6 col-lg-2 col-md-6 col-sm-6 col-xs-6 p-0">
                        <ul class="p-2">
                            <li><a class="dropdown-item" href="{{route('allProducts')}}">{{__('home.shop')}}</a></li>
                            <li><a class="dropdown-item" href="{{route('blogs.front')}}">{{__('home.blogs')}}</a></li>
                            <li><a class="dropdown-item" href="{{route('aboutus')}}">{{__('home.about us')}}</a></li>
                            <li><a class="dropdown-item" href="{{route('events.front')}}">{{__('home.production')}}</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6 col-sm-6 col-xs-6 p-0">
                        <ul class="p-2">
                            <li>FAQ</li>
                            <li>{{__('home.help grow')}}</li>
                            <li ><a href="{{route('privacyPolicy')}}" class="dropdown-item">Policies</a></li>
                            <li ><a class="dropdown-item" href="{{route('termsService')}}">Terms of Agreement</a></li>
                        </ul>
                    </div>
                    <div class="footer-third-col-desktop col-lg-8 col-md-12 col-sm-12 col-xs-12 d-flex footer-third-col ">
                        <form action="{{route('subscribe.store')}}" method="post" class="row g-3">
                            @csrf
                            <div class="col-auto">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Enter your email here*" required>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-subscribe mb-3">SUBSCRIBE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 <section class="footer-last-line">
        <div class="container-fluid">
            <div class="last-line">
                <div class="row">
                    <div class="col-12 p-0 ">
                        <p class="p-2 m-0">© <span id="year"></span>. All Right Reserved. Klea Huta Academy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
   
</footer>
@push('js')
<script>
document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
@endpush


