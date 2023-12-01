@include('layouts.frontend.partials.header-assets')
<style>
    .button-course{
        width:100%;
        background-color:#e0dfd1;
        position:absolute;
        bottom:0;
        display:none;
        border-top-left-radius:0;
        border-top-right-radius:0;
        z-index:999;
        color:#fff;
    }
    .button-course:hover{
        background-color:#e0dfd1;
    }
</style>
  <body class="body-courses">
    @include('layouts.frontend.partials.header')
    <section class="section-courses">
        @if(session('error'))
        <style>
            .alert{
                max-width:450px;
                margin:1rem auto;
            }
            </style>
        <div class="alert alert-danger text-center">
        {{session('error')}}
        </div>
        @elseif(session('message'))
            <style>
                .alert{
                    max-width:450px;
                    margin:1rem auto;
                }
            </style>
         <div class="alert alert-success text-center" >
            {{session('message')}}
         </div>
        @endif
      <div class="container-fluid width-courses">
        <section class="cards">
            @foreach($courses as $course)
               @if($course->count() == 3)
                <style>
                @media(min-width:1920px){
                    .section-courses .cards{
                        justify-content:start;
                    }
                }
                </style>
                @endif
          <article class="card-courses card--1 card__img--hover" data-hover-image="{{ URL::asset('images/course/'.$course->image) }}">
            <div class="card__info-hover">
              <div class="card__like">
                <span>@if(app()->getLocale() == 'sq'){{$course->name}}@else{{$course->name_en}}@endif</span>
              </div>
            </div>
            <div class="card-description">
                @if(app()->getLocale() == 'sq'){!!$course->description!!}@else{!!$course->description_en!!}@endif
            </div>
            <div class="card-type">@if(app()->getLocale() == 'sq'){{$course->name}}@else{{$course->name_en}}@endif</div>
            <div class="card__info">
              <div class="row justify-content-center">
                <div class="col-6">
                  <div class="teachers">
                    <span>{{__('courses.teachers')}}</span>
                  </div>
                  <div class="teachers-name">
                      <?php
                        $teachers = json_decode($course->teachers,true);
                        $times = json_decode($course->times,true);
                      ?>
                    @foreach($teachers as $teacher)
                        <span>{{$teacher}}</span><br />
                    @endforeach

                  </div>
                </div>
                <div class="col-6">
                  <div class="oraret">
                    <span>{{__('courses.time')}}</span><br />
                    <span>{{$course->days}}</span>
                  </div>
                  <div class="times">
                      @foreach($times as $time)
                    <span>{{$time}}</span><br />
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="card-overlay"></div>
            <button class="btn button-course modal-trigger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$course->id}}">{{__('courses.register')}}</button>
          </article>
          
          
          
          @endforeach
          @foreach($courses as $course)
          <div class="modal fade" id="exampleModal{{$course->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('courses.registering for course')}} <span style="font-weight:bold;">@if(app()->getLocale() == 'sq'){{$course->name}}@else{{$course->name_en}}@endif</span></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('course.register')}}" method="POST" class="mb-2">
                                             @csrf
                                            <input type="hidden" name="course_id" value="{{$course->id}}">
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
                                            <input type="text" placeholder="+355xxxxx " name="phone"
                                                class="form-control" required>
                                            <label for="orari">{{__('courses.select time')}}</label>
                                                <select class="form-select" name="orari" >
                                                  <option selected>{{__('courses.course time')}}</option>
                                                  
                                                  @foreach($times as $time)
                                                  <option value="{{$time}}">{{$time}}</option>
                                                  @endforeach
                                                  
                                                 
                                                </select>
                                            <div class="pt-2"></div>
                                            <button type="submit" class="btn w-100 btn-outline-success">{{__('courses.register')}}</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
          @endforeach
         
        </section>
      </div>
    </section>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')
    
    <script>
      const cards = document.querySelectorAll(".card-courses");

      cards.forEach((card) => {
        const hoverImage = card.getAttribute("data-hover-image");
        const cardTypeElement = card.querySelector(".card-type");
        const cardTeachers = card.querySelector(".teachers");
        const cardTimes = card.querySelector(".times");
        const cardOraret = card.querySelector(".oraret");
        const cardDescription = card.querySelector(".card-description");
        const cardOverlay = card.querySelector(".card-overlay");
        const cardTeachersName = card.querySelector(".teachers-name");
        const buttonCourse      = card.querySelector(".button-course");
        const modalTrigger = card.querySelector(".modal-trigger");
        var color = "#" + Math.floor(Math.random() * 0xffffff).toString(16);

        card.addEventListener("mouseover", () => {
          card.style.backgroundImage = `url(${hoverImage})`;
          card.style.borderColor = color;
          cardTypeElement.style.display = "none";
          cardTeachers.style.visibility = "hidden";
          cardTimes.style.visibility = "hidden";
          cardOraret.style.visibility = "hidden";
          cardTeachersName.style.visibility = "hidden";
          buttonCourse.style.display = "block";
          buttonCourse.style.backgroundColor = color;
        //   if (modalTrigger) {
        //       const modalId = modalTrigger.getAttribute("data-bs-target").replace("#", "");
        //       const modalContent = document.querySelector(`#${modalId} .modal-content`);
              
        //       if (modalContent) {
        //         modalContent.style.backgroundColor = color;
        //       }
        //   }

        });

        card.addEventListener("mouseout", () => {
          card.style.backgroundImage = "";
          card.style.borderColor = "#fff";
          cardTypeElement.style.display = "";
          cardTeachers.style.visibility = "";
          cardTeachersName.style.visibility = "";
           cardTimes.style.visibility = "";
           cardOraret.style.visibility = "";
          buttonCourse.style.display = ""
          if (cardDescription) {
            cardDescription.style.display = "none";
          }
          cardOverlay.style.display = "none";
        });

        card.addEventListener("click", () => {
          if (cardDescription) {
            cardDescription.style.display = "block";
          }
          cardOverlay.style.display = "block";
        });
      });
    </script>
