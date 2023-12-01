@include('layouts.frontend.partials.header-assets')
<style>
    .view-map{
        color:#fff;
    }
    .view-map i{
        font-size:27px;
    }
    .view-map a{
        font-size:23px;
        color:#fff;
        text-decoration:none;
    }
    .book-event{
        margin-top:1rem;
        display:flex;
        justify-content:end;
        margin-left:10px;
    }
    .book-event .btn{
        background-color:#D15342;
        color:#fff;
        border:0;
    }
    
    .section-single-blog .card-courses{
        width:80%;
        height:420px;
        margin:2rem auto;
    }
    @media(max-width:474px){
    .section-single-blog .card-courses .card-type{
        top:25%;
        font-size:1.35rem;
    }
    .section-single-blog .card__info-hover{
        font-size:16px;
    }
    }
</style>
  <body class="body-blogs">
    @include('layouts.frontend.partials.header')

    <section class="section-single-blog">
      <div class="container">
        <div class="row">
            
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="blog-content mb-5">
            <div class="prime-image">
              <img src="{{ URL::asset('images/events/' . $event->image) }}" class="img-fluid" alt="event-image"/>
                <div class="row">
                    <div class="col-6">
                        <div class="blog-date">
                <span>{{$event->data_eventit->format("l, M j Y,")}} at {{$event->data_eventit->format('H:i')}}</span>
              </div>
                    </div>
                    <div class="col-6">
                        <div class="book-event">
                        <button class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">{{__('events.book now')}} <span style="font-size:17px;"> &nbsp;@if($event->isPaid == 1)({{__('events.ticket')}}/{{number_format($event->price)}} ALL)@elseif($event->isPaid == 0)({{__('events.ticket')}}/Free) @endif</span></button>
                        </div>
                    </div>
                </div>
                @if(session('limit_reached'))
                                 <style>
                                     .first-section-events .card-event{
                                         height:55%;
                                     }
                                 </style>
                                    <div class="alert alert-danger text-center">
                                    {{session('limit_reached')}}
                                    </div>
                                    @elseif(session('message'))
                                    <style>
                                     .first-section-events .card-event{
                                         height:50%;
                                     }
                                    </style>
                                     <div class="alert alert-success text-center">
                                        {{session('message')}}
                                     </div>
                                    @endif
              
              <div class="blog-title">
                <h2>@if(app()->getLocale() == 'sq'){{$event->title}}@else{{$event->title_en}}@endif</h2>
              </div>
              <div class="blog-description">
               @if(app()->getLocale() == 'sq'){!!$event->description!!}@else{!!$event->description_en!!}@endif
              </div>
              <div >
                <div>
                    <?php 
                    $regjia = json_decode($event->regjia,true);
                    $times = json_decode($event->times,true);
                    ?>
                    @if($regjia)<span style="color:#fff;font-size:20px;font-weight:bold">{{__('events.direction')}}:</span> 
                                    @foreach($regjia as $regji)
                                    <span style="color:#fff;font-size:16px;">{{$regji}},</span>
                                    @endforeach
                                    @endif
               </div>
              </div>
              <div class="view-map mt-4">
                    <i class="bi bi-geo-alt"></i> <a target="_blank" href="{{$event->maps_url}}">{{__('events.view on map')}}</a>
                </div>
              
            </div>
          
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="other-blog-contents">
            <h3>
              {{__('events.other event')}}
            </h3> 

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
            </div>
          </div>
        </div>
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
                                            <input type="hidden" name="event_id" value="{{$evente->id}}">
                                            <label for="name">{{__('courses.name')}}</label>
                                            <input type="text" placeholder="{{__('courses.name')}}" name="name" class="form-control"
                                                required>
                                            <label for="surname">{{__('courses.surname')}}</label>
                                            <input type="text" placeholder="{{__('courses.surname')}}" name="surname"
                                                class="form-control" required>
                                            <label for="email">Email</label>
                                            <input type="text" placeholder="emri@example.com" name="email"
                                                class="form-control" required>
                                            <label for="phone">{{__('courses.phone')}}</label>
                                            <input type="text" placeholder="+355 xxx" name="phone"
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
    </section>
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
