@include('layouts.frontend.partials.header-assets')
    <style>
    /* CART */
.bordered {
  border-bottom: 1px solid #e5e5e5;
  margin-bottom: 10px;
}
.cart-empty {
  background: #fff;
  text-align: center;
  padding: 40px 0px;
}
.cart-empty img {
  width: 150px;
  height: auto;
  margin-bottom: 20px;
}
.cart-empty p {
  font-size: 1.2rem;
  font-weight: 500;
  font-family: "Rubik", sans-serif;
  text-transform: uppercase;
}
.cart-empty a {
  padding: 10px 20px;
  background: #020202;
  color: #fff;
  font-weight: 500;
  font-family: "Rubik", sans-serif;
  text-transform: uppercase;
}
.summary-tel {
  display: none;
}
.summary-pc {
  display: block;
}
.cart input {
  -webkit-appearance: none;
  margin-right: 10px;
  background-color: #fafafa;
  border: 1px solid #b3b3b3;
  width: 42px;
  height: 26px;
  align-self: center;
}
.cart input:checked {
  background-color: #020202;
}
.cart {
  background: #f7f8fa;
  padding-top: 100px;
  padding-bottom: 100px;
}
.item-sum {
  font-size: 15px;
  font-family: "Rubik", sans-serif;
  font-weight: 600;
  font-size: 1.4rem;
}
.item-summary-col {
  padding: 24px 10px 0 10px;
}
.card-item-cell {
  font-weight: 700;
  font-size: 14px;
  color: #222;
  text-align: center;
}
.card-item-cell p {
  margin-bottom: 0 !important;
  margin-top: auto;
}
.order-summary {
  padding: 24px;
  background-color: white;
}
.order-summary .main-title {
  font-size: 20px;
  display: inline-block;
  font-family: "Muli", sans-serif;
  font-weight: 800;
  color: #222;
  margin-bottom: 16px;
}
.order-summary .subtotal {
  color: #222;
  font-family: "Muli", sans-serif;
  font-weight: 800;
}
.items-selected {
  background-color: white;
}
.quantity{
    margin-left: 60px;
}

.item-quantity {
  margin: 0 auto;
  text-align: center;
  display: flex;
}
.subtotal-title,
.subtotal {
  font-size: 1.1rem;
}
.value-button {
  display: flex;
  justify-content: center;
  align-items: center;
  border: 1px solid #ddd;
  margin: 0px;
  width: 25px;
  height: 25px;
  text-align: center;
  vertical-align: middle;
  padding: 11px 0;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.value-button:hover {
  cursor: pointer;
}
.item-quantity #decrease {
  border-radius: 24px 0 0 24px;
}
.item-quantity #increase {
  border-radius: 0 24px 24px 0;
}
.item-quantity #input-wrap {
  margin: 0px;
  padding: 0px;
}
.item-total{
    margin-left: 136px;
}
input#number {
  text-align: center;
  border: none;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  height: 25px;
  align-self: flex-start;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.breadcrumbs {
  padding: 20px 0px;
  display: flex;
  justify-content: start;
}
.bread-crumb-link {
  color: #000;
}
.bread-crumb-link:hover {
  color: #474747;
}
.breadcrumbs .bread-crumb-item span {
  color: #474747;
}
/* .sale-attr {
  color: #020202;
  background: #f7f8fa;
  width: max-content;
  padding: 1px 4px;
  height: 28px;
  border: 1px solid transparent;
  border-radius: 15px;
  justify-content: center;
  align-content: center;
  cursor: pointer;
} */
.sale-attr:hover {
  border: 1px solid #020202;
}
.sale-attr p {
  font-weight: 600;
  font-size: 0.9rem;
}
.filter select {
  border-radius: 0px;
  font-weight: 600;
  padding: 0px 20px 0px 5px;
  -moz-appearance: inherit;
  -webkit-appearance: inherit;
  background-image: url("../assets/chevron-down.png");
  appearance: inherit;
  background-repeat: no-repeat;
  background-position: right 0.7em top 55%, 0 0;
}
.card-item-cells,
.items-selected {
  display: flex;
  justify-content: start;
  padding: 10px 0px;
}
.card-item-cells .card-item-cell {
  width: calc(100% / 5);
  display: flex;
}
.card-item-cells .card-item-cell.first {
  width: calc(40%) !important;
}
.items-selected .even {
  width: calc(100% / 5);
}
.items-selected .item-image {
  width: calc(20%);
}
.card-item-cells .card-item-cell.first {
  display: flex;
  justify-content: start;
}
.item-image img {
  max-width: 100%;
  height: 133px;
  object-fit: cover;
}
.item-details {
  height: 133px;
  position: relative;
  width: 34%;
  padding-left: 10px;
}
.item-details .delete-item {
  position: absolute;
  bottom: 0;
  cursor: pointer;
}
.item-details .delete-item p {
  margin-bottom: 0px;
}
@media (max-width: 900px) {
  .summary-tel {
    display: none;
  }
  .summary-pc {
    display: block;
  }
  .summary-tel .items-selected .even {
    width: calc(100% / 2);
  }
  .summary-tel .items-selected .item-image {
    width: calc(20%);
  }
  .summary-tel .item-image img {
    width: 100%;
    height: 55px;
    object-fit: cover;
  }
  .summary-tel .item-details .product-name,
  .summary-tel .sale-attr p {
    font-size: 0.7rem;
    font-weight: 400;
    margin-bottom: 0;
    align-self: center;
  }
  .summary-tel .sale-attr {
    width: 104px;
    height: 25px;
    align-content: center;
  }
  .summary-tel .item-details .delete-item {
    position: static;
    margin-left: 5px;
  }
  .summary-tel .item-details .delete-item img {
    max-width: 12px;
  }
  .summary-tel .item-details {
    width: 56%;
  }
  .summary-tel .value-button,
  .summary-tel input#number {
    width: 20px;
    height: 20px;
    padding: 0;
    border-radius: 0;
    outline: none;
  }
  .summary-tel .item-quantity {
    margin: 0;
  }
  .summary-tel .card-item-cells .card-item-cell {
    width: calc(100% / 2);
  }
  .summary-tel .single-price {
    align-self: center;
    margin-right: 10px;
    font-size: 0.8rem;
  }
  .summary-tel .product-total {
    font-weight: 600;
  }
  .summary-tel .items-selected {
    border-bottom: 1px solid #b3b3b3;
    height: 100px;
  }
  .cart {
    padding-top: 50px;
  }
  .item-sum {
    font-size: 1.1rem;
  }
}
        .swiper {
            width: 80%;
        }

        .swiper img {
            width: 100%;
        }

        .swiper_thumbnail .swiper-slide {
            cursor: pointer;
        }

        .swiper_thumbnail .swiper-slide-thumb-active {
            outline: 2px solid #000;
            outline-offset: -2px;
        }

        .swiper_thumbnail img {
            vertical-align: bottom;
        }


        .value-button {
            display: inline-block;
            border: 1px solid #ddd;
            margin: 0px;
            width: 30px;
            height: 30px;
            text-align: center;
            vertical-align: middle;
            padding: 0px 0;
            background: #eee;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .value-button:hover {
            cursor: pointer;
        }

        .cart-inc #decrease {
            margin-right: -4px;
            border-radius: 8px 0 0 8px;
        }

        .cart-inc #increase {
            margin-left: -4px;
            border-radius: 0 8px 8px 0;
        }

        .cart-inc #input-wrap {
            margin: 0px;
            padding: 0px;
        }

        input#number {
            text-align: center;
            border: none;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            margin: 0px;
            width: 30px;
            height: 30px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .cart-itemm{
            display:flex;
            padding-bottom:10px;
        }
        
        @media (max-width: 600px) {
            .quantity {
    margin-left: 28px;
    }
         .item-total {
    margin-left: 0px;
           }   
           .item-image img {
          max-width: 100%;
          height: 70px;
          object-fit: cover;
        }
        .item-details .delete-item {
  position: absolute;
  bottom: 55px;
  cursor: pointer;
}
        }
    </style>


<body>
    @include('layouts.frontend.partials.header')
    <section class="cart">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 ps-md-0 pe-md-2">
                        <div v-if="!cartStore.isEmpty">
                            <div class="item-summary-col bg-white summary-pc">
                                <h3 class="item-sum text-start">{{__('cart.summary products')}}</h3>
                                <div class="card-item-cells ">

                                    <div class="card-item-cell first">
                                        <p class="">{{__('cart.item')}}</p>
                                    </div>
                                    <div class="card-item-cell">
                                        <p>{{__('cart.price')}}</p>
                                    </div>
                                    <div class="col-md-2 card-item-cell">
                                        <p>{{__('cart.quantity')}}</p>
                                    </div>
                                    <div class="card-item-cell justify-content-center">
                                        <p>Total</p>
                                    </div>
                                </div>
                                <div class="items-selected cart-items cart-item" style="display:block;">


                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="order-summary cart-summary">
                            <h3 class="main-title">{{__('cart.summary order')}}</h3>
                            <div class="row">
                                <div class="col-6 text-start">
                                    <p class="subtotal-title">Subtotal</p>
                                </div>
                                <div class="col-6 text-end">
                                    <p class="subtotal" id="total-price"> $0.00</p>
                                </div>
                            </div>
                            <div class="row">
                                 
                                     <a id="checkoutLink" href="{{route('checkout')}}" style="color:white; text-decoration:none;">
                                    <button  id="checkoutButton" class="btn btn-dark btn-sent"  style="border-radius: 0; line-height: 52px; font-size: 18px;width:100%;">
                                     {{__('cart.complete order')}}
                                  </button></a>
                                 
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
                              <button class="delete-button" data-product-id="${item.productId}" style="background-color:transparent; border:1px solid transparent">Delete</button>
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