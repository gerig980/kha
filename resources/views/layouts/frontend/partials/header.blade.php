<header>
    <section class="header-navbar">
        <div class="container-fluid">
            <div class="header d-flex justify-content-between">
                <div class="logo logo-desktop">
                    <a href="{{route('home')}}">
                    <img src="{{ URL::asset('frontend/assets/homepage/KHA-Logo-Site.png') }}" alt="">
                    </a>
                </div>
                  <div class="logo logo-mobile">
                    <a href="{{route('home')}}">
                    <img src="{{ URL::asset('frontend/assets/homepage/kha-white.png') }}" alt="" style="width:80%;">
                    </a>
                </div>
                <div class="navbar">

                         <div class="icon-1 pe-3">
                       <button onclick="sound()" class="music-button">  <img src="{{ URL::asset('frontend/assets/homepage/icons/Path930.png') }}" alt="">
                      </button>
                    </div>

                    <div class="icon-2 pe-3">
                        <a class="text-dec" href="{{route('courses.front')}}">
                        <img src="{{ URL::asset('frontend/assets/homepage/icons/Path939.png') }}" alt="">
                        <span>{{__('home.courses')}}</span>
                        </a>
                    </div>
                    <div class="icon-3 pe-3 ">
                         <a class="text-dec d-flex pt-2" href="{{route('cart')}}">
                      <i class="fa-solid fa-cart-shopping fa-cart-desktop" style="color: #030303;"></i>
                       <i class="fa-solid fa-cart-shopping fa-cart-mobile" style="color: #ffffff;"></i>
                       
                        <span id="count" style="color:green;">0</span>
                        </a>
                    </div>

                  <div class="dropdown" style="border: 1px solid transparent; background: transparent;">
                            <button type="button" id="app-btn" class="btn dropdown-btn p-0" onclick="displayMenu()">
                                <svg class="svg-desktop"xmlns="http://www.w3.org/2000/svg" width="27" height="19" viewBox="0 0 27 19"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M27 1.5C27 2.32843 26.3284 3 25.5 3L1.5 3C0.671576 3 3.8147e-06 2.32843 3.8147e-06 1.5C3.8147e-06 0.671573 0.671576 2.38419e-07 1.5 2.38419e-07L25.5 2.38419e-07C26.3284 2.38419e-07 27 0.671573 27 1.5Z"
                                        fill="black"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M27 17.5C27 18.3284 26.3284 19 25.5 19L1.5 19C0.671576 19 3.8147e-06 18.3284 3.8147e-06 17.5C3.8147e-06 16.6716 0.671576 16 1.5 16L25.5 16C26.3284 16 27 16.6716 27 17.5Z"
                                        fill="black"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M27 9.5C27 10.3284 26.3284 11 25.5 11L7.5 11C6.67158 11 6 10.3284 6 9.5C6 8.67157 6.67158 8 7.5 8L25.5 8C26.3284 8 27 8.67157 27 9.5Z"
                                        fill="black"></path>
                                </svg>
                                       <svg class="svg-mobile"xmlns="http://www.w3.org/2000/svg" width="27" height="19" viewBox="0 0 27 19"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M27 1.5C27 2.32843 26.3284 3 25.5 3L1.5 3C0.671576 3 3.8147e-06 2.32843 3.8147e-06 1.5C3.8147e-06 0.671573 0.671576 2.38419e-07 1.5 2.38419e-07L25.5 2.38419e-07C26.3284 2.38419e-07 27 0.671573 27 1.5Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M27 17.5C27 18.3284 26.3284 19 25.5 19L1.5 19C0.671576 19 3.8147e-06 18.3284 3.8147e-06 17.5C3.8147e-06 16.6716 0.671576 16 1.5 16L25.5 16C26.3284 16 27 16.6716 27 17.5Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M27 9.5C27 10.3284 26.3284 11 25.5 11L7.5 11C6.67158 11 6 10.3284 6 9.5C6 8.67157 6.67158 8 7.5 8L25.5 8C26.3284 8 27 8.67157 27 9.5Z"
                                        fill="white"></path>
                                </svg>
                            </button>
                            <div id="menu" class="dropdown-menu">
                                    <li><a class="menu-link dropdown-item" href="{{ route('home') }}">Home</a></li>
                                    <li><a class="menu-link dropdown-item" href="{{route('aboutus')}}">{{__('home.about us')}}</a></li>
                                    <li><a class="menu-link dropdown-item" href="{{route('courses.front')}}">{{__('home.courses')}}</a></li>
                                    <li><a class="menu-link dropdown-item" href="{{ route('events.front') }}">{{__('home.production')}}</a></li>
                                    <li><a class="menu-link dropdown-item" href="{{ route('blogs.front') }}">{{__('home.blogs')}}</a></li>
                                    <li><a class="menu-link dropdown-item" href="{{ route('allProducts') }}">{{__('home.shop')}}</a></li>
                                    <li><a class="menu-link dropdown-item" href="{{ route('help_us_grow') }}">{{__('home.help grow')}}</a></li>
                                    <li><a class="menu-link dropdown-item" href="https://summercamp.al/"><div>Summer Camp</div></a></li>
                                    <div class="d-flex justify-content-center pb-3">
                                    <a
                                     class="pt-2"
                                     rel="alternate"
                                     hreflang="sq"
                                     href="{{ LaravelLocalization::getLocalizedURL('sq', null, [], true) }}"
                                     >
                                     <span class="fi fi-al"></span>
                                                 
                                     </a><span class="pt-2">&nbsp;/&nbsp;</span>
                                      <a
                                         class="pt-2"
                                         rel="alternate"
                                         hreflang="en"
                                         href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"
                                     >
                                         <span class="fi fi-gb"></span>
                                                 
                                     </a>
                                     </div>
                            </div>
                        </div>
                
                </div>
            </div>

        </div>
    </section>
</header>
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