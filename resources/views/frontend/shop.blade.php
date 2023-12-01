@include('layouts.frontend.partials.header-assets')
  <style>
        
    </style>


<body>
    @include('layouts.frontend.partials.header')
    <section class="single-product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="swiper swiper_main">
                        <div class="swiper-wrapper">
                            @if($product->images)
                            @foreach($product->images as $image)
                            <div class="swiper-slide"><img src="{{URL::asset('images/products/'.$image)}}"></div>
                            @endforeach
                            @endif
                            
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                    <div class="swiper swiper_thumbnail pt-2">
                        <div class="swiper-wrapper">
                            @if($product->images)
                            @foreach($product->images as $image)
                            <div class="swiper-slide me-2"><img src="{{URL::asset('images/products/'.$image)}}"></div>
                            @endforeach
                            @endif
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details">
                        <div class="product-item" data-product-id="{{$product->id}}">
                            <div class="product-image" style="display:none;">
                                <img src="{{URL::asset('/frontend/assets/product/Group93@2x.png')}}" alt="Product 3 Image">
                            </div>
                            <h1 class="title">{{$product->name}}</h1>
                            <p class="price"> Price: ${{$product->price}}</p>
                            <span class="description">{!!$product->description!!}</span>

                            <input type="number" class="quantity-input" value="1" style="width:10%;">
                            <button class="btn add-to-cart-btn ">ADD TO CART</button>
                        </div>

                    </div>
                </div>
                <div class="cart-page" style="display:none">
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

    </section>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')
   <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Existing code...

            function addToCart(productId, productName, productImage, price, quantity) {
                const cartItem = {
                    productId: productId,
                    productName: productName,
                    productImage: productImage,
                    price: price,
                    quantity: quantity
                };
                let storedCartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
                const existingItemIndex = storedCartItems.findIndex(item => item.productId === productId);

                if (existingItemIndex !== -1) {
                    storedCartItems[existingItemIndex].quantity += quantity;
                } else {
                    storedCartItems.push(cartItem);
                }
                
                localStorage.setItem("cartItems", JSON.stringify(storedCartItems));
                sessionStorage.setItem("cartMessage", "Produkti shtua me sukses ne karte!");
                location.reload();
            }

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
                        addToCart(productId, productName, productImage, price, quantity);
                        // Optionally, you can provide a message indicating the item has been added to the cart.
                        // alert("Item added to cart!");
                    } else {
                        alert("Quantity must be greater than 0.");
                    }
                });
            });

            const quantityInputs = document.querySelectorAll(".quantity-input");

            quantityInputs.forEach(input => {
                input.addEventListener("input", (event) => {
                    const quantity = parseInt(event.target.value);
                    const productItem = event.target.closest(".product-item");
                    const priceString = productItem.querySelector(".price").textContent;
                    const price = parseFloat(priceString.replace("Price: $", ""));
                    const totalPriceElement = productItem.querySelector(".total-price");

                    if (!isNaN(quantity) && quantity > 0) {
                        const total = price * quantity;
                        totalPriceElement.textContent = `Total Price: $${total.toFixed(2)}`;
                    } else {
                        totalPriceElement.textContent = "Total Price: $0.00";
                    }
                });
            });
            // Rest of your code...
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
    </script>
