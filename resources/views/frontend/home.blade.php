@include('layouts.frontend.partials.header-assets')
    <style>
     .header-navbar{
        background:transparent !important;
    }
     #hero .carousel-image{
         height:87vh;
         object-fit:cover;
     }
   #hero.dropdown-item.active, .dropdown-item:active {
    color:#d15342;
    text-decoration: none;
    background-color: transparent;
    }
    
/*@media only screen and (max-width: 600px) {*/
/*  .offcanvas.offcanvas-end {*/
/*            top: 13px;*/
/*            right: 2px;*/
/*            width: var(--bs-offcanvas-width);*/
/*            border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);*/
/*            transform: translateX(100%);*/
/*        }*/
/*     .color-bar-style {*/

/*        display: none !important;*/
/*      }*/

/*      .social-media {*/
/*        display: none !important;*/
/*      }*/
/*        #hero .carousel-image{*/
/*         height:auto;*/
/*         object-fit:cover;*/
/*     }*/
/*     .carousel-style {*/
/*    width: 100%;*/
/*    margin: auto;*/
/*}*/
/*  #hero .hero-text {*/
/*      display: flex;*/
/*      justify-content: center;*/
/*      text-align: center;*/
/*      padding-top: 50px;*/
/*      padding-bottom: 0px;*/
/*    }*/
/*    }*/
     
    </style>


<body>
    <div class="wrapper">
 <div class="spinner-container">
    <div class="spinner"></div>
  </div>
  <div class="color-strips">
    <div class="strip strip1"></div>
    <div class="strip strip2"></div>
    <div class="strip strip3"></div>
    <div class="strip strip4"></div>
    <div class="strip strip5"></div>
    <div class="strip strip6"></div>
    <div class="strip strip7"></div>
     <div class="strip strip8"></div>
  </div>
  <div class="all w-100">
    <div class="content hero">
            @include('layouts.frontend.partials.header')
          <section id="hero">
        <div class="container-fluid">
            <div class="hero-part">
                   <div style="position: relative;">
                        <div id="color-bar" class="color-bar-style">
                <input type="range" id="color-range" min="0" max="360" value="0">
              </div>
              
                <div id="carouselExampleIndicators" class="carousel slide carousel-style">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ URL::asset('frontend/assets/homepage/hero/Group354.png') }}" class="d-block w-100 carousel-image"
                                                alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <div>
                                                    <h1> <span class="d-inline-grid">THE
                                                            <span>BEST</span></span>ARTISTIC<br>
                                                        COURSES</h1>
                                                </div>
                                                <p>“hapa te vegjël, ëndërr e madhe”</p>
                                                <button class="btn btn-join">Join the Academy</button>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ URL::asset('frontend/assets/homepage/hero/hector-bermudez-iIWDt0fXa84-unsplash.jpg') }}" class="d-block w-100 carousel-image"
                                                alt="...">
                                             <div class="carousel-caption d-none d-md-block">
                                                <div>
                                                    <h1> <span class="d-inline-grid">THE
                                                            <span>BEST</span></span>ARTISTIC<br>
                                                        COURSES</h1>
                                                </div>
                                                <p>“hapa te vegjël, ëndërr e madhe”</p>
                                                <button class="btn btn-join">Join the Academy</button>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ URL::asset('frontend/assets/homepage/hero/kendim.jpg') }}" class="d-block w-100 carousel-image"
                                                alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <div>
                                                    <h1> <span class="d-inline-grid">THE
                                                            <span>BEST</span></span>ARTISTIC<br>
                                                        COURSES</h1>
                                                </div>
                                                <p>“hapa te vegjël, ëndërr e madhe”</p>
                                                <button class="btn btn-join">Join the Academy</button>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ URL::asset('frontend/assets/homepage/hero/abhyuday-majhi-bW-vRGOF5EI-unsplash (1).jpg') }}" class="d-block w-100 carousel-image"
                                                alt="...">
                                                    <div class="carousel-caption d-none d-md-block">
                                                <div>
                                                    <h1> <span class="d-inline-grid">THE
                                                            <span>BEST</span></span>ARTISTIC<br>
                                                        COURSES</h1>
                                                </div>
                                                <p>“hapa te vegjël, ëndërr e madhe”</p>
                                                <button class="btn btn-join">Join the Academy</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                          
                                <div class="social-media social-media-style">
                                    <ul class="d-flex">
                                        <li><a href=""><img src="{{ URL::asset('frontend/assets/homepage/icons/images.png') }}" alt=""></a>
                                        </li>
                                        <li><a href=""><img src="{{ URL::asset('frontend/assets/homepage/icons/Group343.png') }}" alt=""></a>
                                        </li>
                                        <li><a href=""><img src="{{ URL::asset('frontend/assets/homepage/icons/Path1153.png') }}" alt=""></a></li>
                                        <li><a href=""><img src="{{ URL::asset('frontend/assets/homepage/icons/Group425.png') }}" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="hero-text">
                        <div class="d-md-block">
                            <div>
                                <h1> <span class="d-inline-grid">THE <span>BEST</span></span>ARTISTIC<br>
                                    COURSES</h1>
                            </div>
                            <p>“hapa te vegjël, ëndërr e madhe”</p>
                            <button class="btn btn-join">Join the Academy</button>
                        </div>
                    </div>
                </div>

            </section>
            @include('layouts.frontend.partials.footer')
            @include('layouts.frontend.partials.footer-assets')
        </div>
    </div>


@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cartItems = document.querySelector(".cart-items");
            const totalPrice = document.getElementById("total-price");
            let storedCartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

            function updateItemTotal(productId, newQuantity) {
                const foundItem = storedCartItems.find(item => item.productId === productId);
                if (foundItem) {
                    foundItem.quantity = newQuantity;
                    const itemPrice = foundItem.price * newQuantity;
                    return itemPrice.toFixed(2);
                }
                return 0;
            }

            function updateCartItem(productId, quantity) {
                const foundIndex = storedCartItems.findIndex(item => item.productId === productId);
                if (foundIndex !== -1) {
                    storedCartItems[foundIndex].quantity = quantity;
                }
            }

            function deleteCartItem(productId) {
                storedCartItems = storedCartItems.filter(item => item.productId !== productId);
                displayCartItems(); // Refresh displayed items after deletion
                updateTotalPrice(); // Update the total price after deletion
 
    
            // Update count after deleting an item
            const countElement = document.getElementById('count');
            countElement.textContent = storedCartItems.length;
                    }



            function displayCartItems() {
                cartItems.innerHTML = "";
                storedCartItems.forEach(item => {
                    const cartItem = document.createElement("div");
                    cartItem.className = "cart-itemm"; // Adjust class names as needed
                    cartItem.innerHTML = `
                        <!-- Constructing the cart item HTML -->
                        <a class="item-image ">
                        <img class="img-fluid" src="${item.productImage}" alt="${item.productName}">
                      </a>
                        <div class="item-details">
                            <p class="product-name text-start">${item.productName}</p>
                            <div class="delete-item">
                              <button class="delete-button" data-product-id="${item.productId}" style="background-color:transparent; border:1px solid transparent"><i class="fa-solid fa-trash " style="color: #121212;"></i></button>
                              </div>
                              </div>
                              <div class=" even text-center">
                            <p>$${item.price}</p>
                            </div>
                            <p class=" quantity">
                            <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-product-id="${item.productId}"> </p>
                            <div class="item-total even text-end">
                              <p><span id="productTotal" class="item-price"> $${(item.price * item.quantity).toFixed(2)}</span>
                                            Lekë</p>
                        </div>
                       
                    `;
                    const quantityInput = cartItem.querySelector('.quantity-input');
                    quantityInput.addEventListener('input', (event) => {
                        const productId = event.target.dataset.productId;
                        const newQuantity = parseInt(event.target.value);
                        const updatedPrice = updateItemTotal(productId, newQuantity);
                        if (updatedPrice !== 0) {
                            const itemTotalElement = cartItem.querySelector('.item-total');
                            itemTotalElement.textContent = `${updatedPrice}`;
                            updateCartItem(productId, newQuantity);
                            updateTotalPrice();
                        } else {
                            deleteCartItem(productId);
                            displayCartItems();
                            updateTotalPrice();
                        }
                    });
                    const deleteButton = cartItem.querySelector('.delete-button');
                    deleteButton.addEventListener('click', (event) => {
                        const productIdToDelete = event.target.getAttribute('data-product-id');
                        deleteCartItem(productIdToDelete);
                    });
                    cartItems.appendChild(cartItem);
                });
                  const countElement = document.getElementById('count');
                  countElement.textContent = storedCartItems.length;
                
                 const checkoutButton = document.getElementById('checkoutButton');
                    const checkoutLink = document.getElementById('checkoutLink');
                
                    // If there are no items in the cart, disable the button and link
                    if (storedCartItems.length === 0) {
                        checkoutButton.disabled = true;
                        checkoutLink.removeAttribute('href');
                        checkoutLink.style.pointerEvents = 'none'; // Optional: Disable link clicks
                    } else {
                        checkoutButton.disabled = false;
                        checkoutLink.setAttribute('href', "{{ route('checkout') }}");
                        checkoutLink.style.pointerEvents = 'auto'; // Optional: Enable link clicks
                    }
                updateTotalPrice();
            }
            
            
            const deleteButtons = document.querySelectorAll('.delete-button');
            deleteButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    const productIdToDelete = event.target.getAttribute('data-product-id');
                    console.log('Product ID to delete:',
                        productIdToDelete); // Check if the correct ID is being retrieved
                    deleteCartItem(productIdToDelete);
                });
            });

            function updateTotalPrice() {
                let total = 0;
                storedCartItems.forEach(item => {
                    total += item.price * item.quantity;
                });
                totalPrice.textContent = ` $${total.toFixed(2)}`;
                localStorage.setItem("cartItems", JSON.stringify(storedCartItems));
            }




            // Handle Add to Cart button clicks
            const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");
            addToCartButtons.forEach((button, index) => {
                button.addEventListener("click", () => {
                    const productItem = document.querySelectorAll(".product-item")[index];
                    const productId = productItem.getAttribute('data-product-id');
                    const productName = productItem.querySelector("h1").textContent;
                    const productImage = productItem.querySelector(".product-image img").src;
                    const price = parseFloat(productItem.querySelector(".price").textContent
                        .replace("Price: $", ""));
                    const quantity = parseInt(productItem.querySelector(".quantity-input")
                        .value);

                if (quantity > 0) {
            updateCartItem(productId, quantity);
            displayCartItems();
        } else {
            alert("Quantity must be greater than 0.");
        }
        // Update count after adding an item
        const countElement = document.getElementById('count');
        countElement.textContent = storedCartItems.length;
                });
            });
            

            // Display any existing cart items when the page loads
            displayCartItems();
        });
     
  
    </script>
@endpush


 
    
