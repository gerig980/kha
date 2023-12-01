
@include('layouts.frontend.partials.header-assets')
    <style>
    .short-desc{
        color:#fff;
    }
    </style>

<body>
    @include('layouts.frontend.partials.header')
    <section class="allproducts">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-2">

                </div> -->
                <div class="col-lg-12">
                    <h1 class="all-products-title">All Products</h1>
                    <div class="row products">
                        @foreach($products as $product)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-xs-6 col-sm-12 col-12 pt-4">
                            <a style="text-decoration:none;" href="{{route('shop',$product->id)}}">
                            <div class="card product-item"  data-product-id="{{$product->id}}">
                                 <div class="product-image">
                                <img src="{{ URL::asset('images/products/'.$product->thumbnail) }}" class="card-img-top product-thumbnail" alt="{{$product->thumbnail}}">
</div>
                                <div class="card-body">
                                    <h1 class="card-title">{{$product->name}}</h1>
                                     <p class="card-text price">Price: ${{$product->price}}</p>
                                        <input type="hidden" class="quantity-input" value="1">
                                    <span class="short-desc">{!!substr($product->description,0,30)!!}</span>
                                    <a href="#" class="btn add-to-cart-btn">{{__('cart.add to cart')}}</a>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach
                      <div class="cart-page" style="display:none;">
                    <div class="cart-items">
                        <!-- Cart items will be displayed here using JavaScript -->
                    </div>
                    <div class="cart-summary">
                        <h2>Cart Summary</h2>
                        <div id="total-price">Total: $0.00</div>
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
            const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");
            const cartItemsContainer = document.querySelector(".cart-items");
            const totalPrice = document.getElementById("total-price");

            addToCartButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
        const productItem = document.querySelectorAll(".product-item")[index];
        const productId = productItem.getAttribute('data-product-id');
        const productName = productItem.querySelector("h1").textContent;
        const productImage = productItem.querySelector(".product-image img").src;
        const price = parseFloat(productItem.querySelector(".price").textContent.replace("Price: $", ""));
        const quantity = parseInt(productItem.querySelector(".quantity-input").value);

        if (quantity > 0) {
            let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

            const existingCartItemIndex = cartItems.findIndex(item => item.productId === productId);

            if (existingCartItemIndex !== -1) {
                cartItems[existingCartItemIndex].quantity += quantity;
            } else {
                const cartItem = {
                    productId: productId,
                    productName: productName,
                    productImage: productImage,
                    price: price,
                    quantity: quantity
                };
                cartItems.push(cartItem);
            }

            localStorage.setItem("cartItems", JSON.stringify(cartItems));

            // Set session message
            sessionStorage.setItem("cartMessage", "Produkti shtua me sukses ne karte!");

            // Display the cart items
            displayCartItems();

            // Reload the page to display the session message
            location.reload();
        } else {
            alert("Quantity must be greater than 0.");
        }
    });
});


            function displayCartItems() {
                cartItemsContainer.innerHTML = "";
                let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

                cartItems.forEach(item => {
                    const cartItem = document.createElement("div");
                    cartItem.className = "cart-item";
                    cartItem.setAttribute('data-product-id', item.productId);
                    cartItem.innerHTML = `
   <img src="${item.productImage}" alt="${item.productName} Image">
   <div>
       <p>${item.productName}</p>
       <p class="quantity">Quantity: ${item.quantity}</p>
       <p class="item-price">Price: $${(item.price * item.quantity).toFixed(2)}</p>
   </div>
   <button class="delete-button">Delete</button>
   `;
                    cartItemsContainer.appendChild(cartItem);
                });

                updateTotalPrice();
            }

            cartItems.addEventListener("click", (event) => {
                if (event.target.classList.contains("delete-button")) {
                    const itemToDelete = event.target.closest(".cart-item");
                    const itemPrice = parseFloat(itemToDelete.querySelector(".item-price").textContent
                        .replace("Price: $", ""));
                    itemToDelete.remove();
                    updateTotalPrice(-
                        itemPrice); // Pass the negative value to subtract from the total price
                }
            });

            // Function to update the total price of items in the cart
            function updateTotalPrice() {
                const cartItemPrices = document.querySelectorAll(".item-price");
                let total = 0;

                cartItemPrices.forEach(price => {
                    total += parseFloat(price.textContent.replace("Price: $", ""));
                });

                totalPrice.textContent = `Total: $${total.toFixed(2)}`;
            }
            // Update quantity within the cart
            cartItems.addEventListener("change", (event) => {
                if (event.target.classList.contains("cart-quantity-input")) {
                    const quantityInput = event.target;
                    const cartItem = quantityInput.closest(".cart-item");
                    const price = parseFloat(cartItem.querySelector(".item-price").textContent.replace(
                        "Price: $", ""));
                    const quantity = parseInt(quantityInput.value);

                    if (quantity > 0) {
                        const itemPrice = cartItem.querySelector(".item-price");
                        itemPrice.textContent = `Price: $${(price * quantity).toFixed(2)}`;
                        updateTotalPrice();
                    } else {
                        alert("Quantity must be greater than 0.");
                        quantityInput.value =
                            1; // Reset quantity to 1 if value is less than or equal to 0
                    }
                }
            });

        });
    </script>

    <script>
        const swiper_thumbnail = new Swiper(".swiper_thumbnail", {
            slidesPerView: 4,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        })
        const swiper = new Swiper('.swiper_main', {
            loop: true,
            autoplay: {
                delay: 2000,
            },
            thumbs: {
                swiper: swiper_thumbnail,
            },
        })
        
        if (sessionStorage.getItem('cartMessage')) {
    const type = "success"; // You can customize the type based on your needs
    toastr.options.progressBar = 'true';
    toastr.options.closeButton = 'true';
    toastr.options.positionClass = 'toast-bottom-right';
    toastr[type](sessionStorage.getItem('cartMessage'));
    sessionStorage.removeItem('cartMessage'); // Clear the session message
}
        
        @if(Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':
                        toastr.options.progressBar = 'true';
                        toastr.options.closeButton = 'true',
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.info(" {{ Session::get('message') }} "); 
                        break;
                    case 'success':
                        toastr.options.progressBar = 'true';
                        toastr.options.closeButton = 'true',
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.success(" {{ Session::get('message') }} ");
                        break;
                    case 'warning':
                        toastr.options.progressBar = 'true';
                        toastr.options.closeButton = 'true',
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.warning(" {{ Session::get('message') }} "); 
                        break;
                        case 'error':
                        toastr.options.progressBar = 'true';
                        toastr.options.closeButton = 'true',
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.error(" {{ Session::get('message') }} "); 
                        break;
                }
            @endif
    </script>

    </body>
        </html>