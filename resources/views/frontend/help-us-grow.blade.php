@include('layouts.frontend.partials.header-assets')
    <style>
      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        /* text-align: center; */
        font-size: 18px;
        /* background: #fff; */
        display: flex;
        justify-content: center;
        align-items: center;
      }

      

      .swiper-button-next{
        right: -50px;
        color: #ebebeb;
        font-weight: bold;
        font-size: 11px;
      }

      .swiper-button-prev{
        left: -50px;
        color: #ebebeb;
        font-weight: bold;
      }
      
    </style>
  </head>

  <body class="body-help">
    @include('layouts.frontend.partials.header')

    <section class="first-section-help">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="head-title-help">
              <h2>
                WHY YOU SHOULD BECOME<br />
                A BRAND AMBASSADOR
              </h2>
            </div>
            <div class="head-description-help">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                amet sit vel nihil libero nam quam reprehenderit accusantium,
                autem, nobis aperiam minus id iure, tenetur distinctio in vitae!
                Delectus veritatis, sequi esse dolore temporibus aut perferendis
                quis tenetur enim, voluptatibus distinctio. Necessitatibus
                repellat ab ex ipsa harum sit quae exercitationem?Necessitatibus
                repellat ab ex ipsa harum sit quae exercitationem?Lorem ipsum
                dolor sit amet consectetur adipisicing elit.
              </p>
              <ol>
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Quaerat non explicabo rerum repellendus ab recusandae.
                </li>
                <li>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem
                  ipsum dolor sit amet consectetur adipisicing elit. Quaerat non
                  explicabo rerum repellendus ab recusandae.
                </li>
                <li>
                  Lorem ielit. Quaerat non explicabo rerum repellendus ab
                  recusandae.
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="second-section-help">
        <div class="container-fluid">
          <div class="row">
            <div class="help-reviews-section">
              <div class="col-12">
                <div class="head-title-reviews">
                  <h2>REVIEWS</h2>
                  <span>WHAT DO THEY SAY ABOUT US</span>
                </div>
                <div class="carousel-reviews">
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Lorem ipsum</h5>
                            <h6 class="card-subtitle mb-2">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                            </h6>
                            <p class="card-text">
                              Some quick example text to build on the card title
                              and make up the bulk of the card's content.
                            </p>
                            <div class="card-footer">
                              <span>#Acting</span>
                              &nbsp; &nbsp; &nbsp;
                              <span>23:09:2023</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Lorem ipsum</h5>
                            <h6 class="card-subtitle mb-2">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                            </h6>
                            <p class="card-text">
                              Lorem ipsum dolor, sit amet consectetur
                              adipisicing elit. Voluptatum pariatur qui ab. A,
                              quis natus.
                            </p>
                            <div class="card-footer">
                              <span>#Acting</span>
                              &nbsp; &nbsp; &nbsp;
                              <span>23:09:2023</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Lorem ipsum</h5>
                            <h6 class="card-subtitle mb-2">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                            </h6>
                            <p class="card-text">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Corrupti facilis at nesciunt labore cumque
                              quam perspiciatis, earum quos temporibus dolor.
                              Mollitia 
                              laudantium enim nulla veritatis.
                            </p>
                            <div class="card-footer">
                              <span>#Acting</span>
                              &nbsp; &nbsp; &nbsp;
                              <span>23:09:2023</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Lorem ipsum</h5>
                            <h6 class="card-subtitle mb-2">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                            </h6>
                            <p class="card-text">
                              Some quick example text to build on the card title
                              and make up the bulk of the card's content.
                            </p>
                            <div class="card-footer">
                              <span>#Acting</span>
                              &nbsp; &nbsp; &nbsp;
                              <span>23:09:2023</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Lorem ipsum</h5>
                            <h6 class="card-subtitle mb-2">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                            </h6>
                            <p class="card-text">
                              Lorem ipsum dolor sit, amet consectetur
                              adipisicing elit. Ipsam et, ex laborum, accusamus
                              quam sapiente veritatis tempora saepe 
                              adipisci soluta pariatur!
                            </p>
                            <div class="card-footer">
                              <span>#Acting</span>
                              &nbsp; &nbsp; &nbsp;
                              <span>23:09:2023</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Lorem ipsum</h5>
                            <h6 class="card-subtitle mb-2">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                            </h6>
                            <p class="card-text">
                              Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Ipsa ipsum placeat ea doloremque
                              soluta dolor, temporibus nam possimus dolorum
                              fugit sed quisquam .
                            </p>
                            <div class="card-footer">
                              <span>#Acting</span>
                              &nbsp; &nbsp; &nbsp;
                              <span>23:09:2023</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Lorem ipsum</h5>
                            <h6 class="card-subtitle mb-2">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-regular fa-star"></i>
                            </h6>
                            <p class="card-text">
                              Lorem ipsum dolor sit, amet consectetur
                              adipisicing elit. Iste impedit illum aspernatur
                              laudantium fugiat error soluta deleniti,
                              asperiores corrupti.
                            </p>
                            <div class="card-footer">
                              <span>#Acting</span>
                              &nbsp; &nbsp; &nbsp;
                              <span>23:09:2023</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')
    
    <script>
      
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1524: {
            slidesPerView: 5,
            spaceBetween: 50,
          },
        },
      });
    
    </script>
