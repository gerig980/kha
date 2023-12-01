@include('layouts.frontend.partials.header-assets')
<style>
    .card-price{
        font-size:16px;
        color:#686868;
        line-height:2rem;
    }
     iframe{
      width:100%!important;   
     }

      @media(max-width:474px){
      .swiper-button-prev::after, .swiper-rtl .swiper-button-next::after{
        content: '';
      }
      .swiper-button-next::after, .swiper-rtl .swiper-button-prev::after{
        content: '';
      }
      .swiper-button-next i{
        position: absolute;
        z-index:10;
        top:10%; 
        left:1%;
        color: #fff;
      }
      .swiper-button-prev i{
        position: absolute;
        z-index:10;
        top:10%; 
        right:1%;
        color: #fff;
      }
     
    }
</style>

<body class="body-events">
    @include('layouts.frontend.partials.header')

    <div class="section-events">
        <div class="first-section-events">
            <div class="container-fluid d-desktop width-container-events">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="event-header">
                            <h2>KHA YOUTH FESTIVAL IN TIRANA</h2>
                            <span class="event-by-header">By Klea Huta</span>
                            <p class="event-desc-header">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Porro, atque dolore. Repudiandae vel sequi fugiat. A obcaecati
                                hic molestiae sint alias vero!
                            </p>
                            <div class="view-map">
                                <i class="bi bi-geo-alt"></i> <a target="_blank" @if($event)href="{{$event->maps_url}}"@endif>{{__('events.view on map')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-event">
                            <div class="card-body">
                                 @if(session('limit_reached'))
                                 <style>
                                     .first-section-events .card-event{
                                         height:55%;
                                     }
                                 </style>
                                    <div class="alert alert-danger">
                                    {{session('limit_reached')}}
                                    </div>
                                    @elseif(session('message'))
                                    <style>
                                     .first-section-events .card-event{
                                         height:50%;
                                     }
                                    </style>
                                     <div class="alert alert-success">
                                        {{session('message')}}
                                     </div>
                                    @endif
                                <h5 class="card-title">{{__('events.data and time')}}</h5>
                                <h6 class="card-subtitle">@if($event){{$event->data_eventit->format("l, M j Y,")}} at {{$event->data_eventit->format('H:i')}}@endif</h6>
                                <a target="_blank"
                                    href="#"
                                    class="card-text">+ {{__('events.add to calendar')}}</a><br>
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">{{__('events.book now')}} <span style="font-size:17px;"> &nbsp;@if($event->isPaid == 1)({{__('events.ticket')}}/{{number_format($event->price)}} ALL)@elseif($event->isPaid == 0)({{__('events.ticket')}}/Free) @endif</span></button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('events.book ticket')}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <form action="{{route('booking.store')}}" method="POST" class="mb-2">
                                             @csrf
                                            @if($event)<input type="hidden" name="event_id" value="{{$event->id}}">@endif
                                            <label for="name">{{__('courses.name')}}</label>
                                            <input type="text" placeholder="{{__('courses.name')}}" name="name" class="form-control"
                                                required>
                                            <label for="surname">{{__('courses.surname')}}</label>
                                            <input type="text" placeholder="{{__('courses.surname')}}" name="surname"
                                                class="form-control" required>
                                            <label for="email">Email</label>
                                            <input type="text" placeholder="name@example.com" name="email"
                                                class="form-control" required>
                                            <label for="phone">{{__('courses.phone')}}</label>
                                            <input type="text" placeholder="+355xxxx " name="phone"
                                                class="form-control" required>
                                            <div class="pt-2"></div>
                                            <button type="submit" class="btn w-100 btn-outline-success">{{__('events.submit')}}</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="second-section-events">
        <div class="container-fluid ">
            <div class="row d-mobile">
                <div class="col-12">
                    <div class="event-header">
                        <h2>KHA YOUTH FESTIVAL IN TIRANA</h2>
                        <span class="event-by-header">By Klea Huta</span>
                        <p class="event-desc-header">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Porro, atque dolore. Repudiandae vel sequi fugiat. A obcaecati
                            hic molestiae sint alias vero!
                        </p>
                        <div class="view-map">
                            <i class="bi bi-geo-alt"></i> <a target="_blank" @if($event)href="{{$event->maps_url}}"@endif>{{__('events.view on map')}}</a>
                        </div>
                    </div>
                    <div class="card card-event">
                        <div class="card-body">
                            <h5 class="card-title">{{__('events.data and time')}}</h5>
                            <h6 class="card-subtitle">@if($event){{$event->data_eventit->format("l, M j Y,")}} at {{$event->data_eventit->format('H:i')}}@endif</h6>
                            <a target="_blank"
                                href="#"
                                class="card-text">+ {{__('events.add to calendar')}}</a><br>
                                @if($event)
                                 @if($event->isPaid == 1)
                                 <style>
                                     .second-section-events .card-event{
                                         height:50%;
                                     }
                                 </style>
                            
                                    @endif
                                    @endif
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">{{__('events.book now')}} <span style="font-size:17px;"> &nbsp;@if($event->isPaid == 1)({{__('events.ticket')}}/{{number_format($event->price)}} ALL)@else({{__('events.ticket')}}/Free) @endif</span></button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel2">{{__('events.book ticket')}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('booking.store')}}" method="POST" class="mb-2">
                                    @csrf
                                    @if($event)<input type="hidden" name="event_id" value="{{$event->id}}">@endif
                                    <label for="name">{{__('courses.name')}}</label>
                                    <input type="text" placeholder="{{__('courses.name')}}" name="name" class="form-control"
                                        required>
                                    <label for="surname">{{__('courses.surname')}}</label>
                                    <input type="text" placeholder="Mbiemri" name="{{__('courses.surname')}}"
                                        class="form-control" required>
                                    <label for="email">Email</label>
                                    <input type="text" placeholder="name@example.com" name="email"
                                        class="form-control" required>
                                    <label for="phone">{{__('courses.phone')}}</label>
                                    <input type="text" placeholder="+355 xxx" name="phone"
                                        class="form-control" required>
                                    <div class="pt-2"></div>
                                    <button type="submit" class="btn w-100 btn-outline-success">{{__('courses.submit')}}</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
                <h2 class="second-header-events">
                   {!!__('events.other events')!!} <span>{{__('events.see upcoming events')}}</span>
                </h2>
            
            <section class="cards d-desktop">
                @foreach($events as $evente)
                
                <article event-id="{{route('single_event',$evente->id)}}" class="card-courses card--1 card__img--hover"
                    data-hover-image="{{ URL::asset('images/events/'. $evente->image) }}">
                   
                    <div class="card__info-hover">
                        <div class="card__like">
                            <span>@if(app()->getLocale() == 'sq'){{$evente->title}}@else{{$evente->title_en}}@endif</span>
                        </div>
                    </div>
                    <div class="card-description">
                        @if(app()->getLocale() == 'sq'){!!$evente->description!!}@else{!!$evente->description_en!!}@endif
                    </div>
                    <div class="card-type">@if(app()->getLocale() == 'sq'){{$evente->title}}@else{{$evente->title_en}}@endif</div>
                   @if($evente->isSold == 1) <div class="card-soldout">SOLD OUT</div>@endif
                    <div class="card__info">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <div class="teachers">
                                    <span>{{__('events.direction')}}</span>
                                </div>
                                <div class="teachers-name">
                                    <?php 
                                    $regjia = json_decode($evente->regjia,true);
                                    $times = json_decode($evente->times,true);
                                    ?>
                                    @if($regjia)
                                    @foreach($regjia as $regji)
                                    <span>{{$regji}}</span><br />
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="oraret">
                                    <span>{{__('courses.time')}}</span><br />
                                    <span>{{$evente->days}}</span>
                                </div>
                                <div class="times">
                                    @if($times)
                                    @foreach($times as $time)
                                    <span>{{$time}}</span><br />
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-overlay"></div>
                  
                </article>
              
                @endforeach
               
            </section>
            <div class="swiper mySwiper d-mobile">
                <div class="swiper-wrapper">
                    @foreach($events as $evente)
                    <div class="swiper-slide">
                        <article event-id="{{route('single_event',$evente->id)}}" class="card-courses card--1 card__img--hover"
                            data-hover-image="{{ URL::asset('images/events/' . $evente->image) }}">
                            <div class="card__info-hover">
                                <div class="card__like">
                                    <span>@if(app()->getLocale() == 'sq'){{$evente->title}}@else{{$evente->title_en}}@endif</span>
                                </div>
                            </div>
                            <div class="card-description">
                                @if(app()->getLocale() == 'sq'){!!$evente->description!!}@else{!!$evente->description_en!!}@endif
                            </div>
                            <div class="card-type">@if(app()->getLocale() == 'sq'){{$evente->title}}@else{{$evente->title_en}}@endif</div>
                            @if($evente->isSold)<div class="card-soldout">SOLD OUT</div>@endif
                            <div class="card__info">
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <div class="teachers">
                                            <span>{{__('events.direction')}}</span>
                                        </div>
                                        <div class="teachers-name">
                                            @if($regjia)
                                            @foreach($regjia as $regji)
                                            <span>{{$regji}}</span><br />
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="oraret">
                                            <span>{{__('courses.time')}}</span><br />
                                            <span>{{$evente->days}}</span>
                                        </div>
                                        <div class="times">
                                            @if($times)
                                            @foreach($times as $time)
                                            <span>{{$time}}</span><br />
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-overlay"></div>
                        </article>
                    </div>
                    @endforeach
                 
                </div>
                <div class="swiper-button-next">
                  {{-- <i class="fa-solid fa-play fa-rotate-60"></i> --}}
                </div>
                <div class="swiper-button-prev">
                  <i class="fa-solid fa-play fa-rotate-180"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="third-section-events">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>"CURRENT EVENT"</h2>

                    <div class="current-event-description">
                        <span class="description-span">{{__('events.description')}}</span>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Atque fugit laboriosam, est magni porro quam voluptatum ab
                            alias ut quaerat, inventore hic maxime? Sequi placeat
                            repudiandae cumque nam, aperiam quisquam!
                        </p>
                        <div class="curent-event-dates d-desktop">
                            <div class="event-date">
                                <span>{{__('courses.time')}}</span>
                                <br><span>Mon-Fri</span>
                            </div>
                            <div class="event-time">
                                <span>18:00</span>
                                <br><span>15:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="map">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23969.130727763335!2d19.81361695!3d41.3275398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1700493397338!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br />
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 500px;
                                        width: 100%;
                                    }
                                </style>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 500px;
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')

    <script>
        const cards = document.querySelectorAll(".card-courses");

        cards.forEach((card) => {
            const hoverImage = card.getAttribute("data-hover-image");
            const cardTypeElement = card.querySelector(".card-type");
            const cardSoldOutElement = card.querySelector(".card-soldout");
            const cardTeachers = card.querySelector(".teachers");
            const cardDescription = card.querySelector(".card-description");
            const cardOverlay = card.querySelector(".card-overlay");
            const cardTeachersName = card.querySelector(".teachers-name");
            var eventeId  =   card.getAttribute('event-id');
            var color = "#" + Math.floor(Math.random() * 0xffffff).toString(16);

            card.addEventListener("mouseover", () => {
                card.style.backgroundImage = `url(${hoverImage})`;
                card.style.borderColor = color;
                cardTypeElement.style.display = "none";
                if (cardSoldOutElement){
                cardSoldOutElement.style.display = "none";
                }
                cardTeachers.style.visibility = "hidden";
                cardTeachersName.style.visibility = "hidden";
            });

            card.addEventListener("mouseout", () => {
                card.style.backgroundImage = "";
                card.style.borderColor = "#fff";
                cardTypeElement.style.display = "";
                cardTeachers.style.visibility = "";
                cardTeachersName.style.visibility = "";
                if(cardSoldOutElement){
                cardSoldOutElement.style.display = "";
                }
                if (cardDescription) {
                    cardDescription.style.display = "none";
                }
                cardOverlay.style.display = "none";
            });

            card.addEventListener("click", () => {
                // if (cardDescription) {
                //     cardDescription.style.display = "block";
                // }
                // cardOverlay.style.display = "block";
               window.location.href= eventeId;
            });
        });
    </script>

    <script>
         var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1.3,
        spaceBetween: 35,
        centeredSlides: true,
        initialSlide: 1,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      });
    </script>
