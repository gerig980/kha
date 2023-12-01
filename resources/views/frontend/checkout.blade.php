@include('layouts.frontend.partials.header-assets')

 <style>
 /* Checkout */

.checkout {
  padding-top: 100px;
  padding-bottom: 100px;
}
.checkout .checkout-title {
  padding-bottom: 20px;
}
.checkout .checkout-title h1 {
  font-family: "Cobe-Medium", sans-serif;
  font-size: 35px;
  font-weight: 600;
  line-height: 24px;
}
.checkout .details-title {
  font-size: 24px;
}

.checkout form .form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #8c8c8c !important;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: white;
  background-clip: padding-box;
  border-radius: 0;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.checkout .place-order {
  background: #020202;
  border: 0;
  border-radius: 0;
  color: hsla(0, 0%, 100%, 0.6);
  font-family: "Coba-Medium", sans-serif;
  font-size: 1rem;
  font-weight: 500;
  padding: 0.65rem 0.75rem;
  text-transform: uppercase;
  width: 94%;
  margin: auto;
}

.checkout .place-order:hover {
  border: 1px solid #020202;
  border-radius: 0;
  color: #020202;
  background:transparent;
  font-family: "Coba-Medium", sans-serif;
  font-size: 1rem;
  font-weight: 500;
  padding: 0.65rem 0.75rem;
  text-transform: uppercase;
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
        .select2-container{
        width: 113px!important;
            
        }
        .select2-container--default .select2-selection--single{
    height:40px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered{
    text-align:start;
    line-height:37px!important;
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
    line-height:37px!important;
}
#country{
    background:transparent;
    height:40px;
}
    </style>

<body>
    @include('layouts.frontend.partials.header')
   <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="checkout-title">
                    <h1>Checkout</h1>
                </div>
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @elseif(session()->has('error'))
                <div class="alert alert-error">
                    {{ session()->get('error') }}
                </div>
            @endif
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="details-title">{{__('cart.shipping address')}}</h1>
                    <hr>
                    <form action="{{ route('make.payment') }}" id="checkout-form" class="row g-3" method="post">
                        @csrf
                        <div class="col-md-6">
                            <label for="f_name"  class="form-label">{{__('cart.name')}}*</label>
                            <input type="text" name="name" class="form-control" id="f_name">
                        </div>
                        <div class="col-md-6">
                            <label for="l_name"  class="form-label">{{__('cart.surname')}}*</label>
                            <input type="text" name="surname" class="form-control" id="l_name">
                        </div>
                        <div class="col-6">
                            <label for="number" class="form-label">{{__('cart.phone')}}*</label>
                            <div class="input-group mb-3" style="flex-wrap:nowrap;">
                                <span class="input-group-text" id="basic-addon1">+355 </span>
                                <input type="text" name="phone" class="form-control" placeholder="69 *** ****"
                                    aria-label="Email">
                            </div>

                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Email*</label>
                            <div class="input-group mb-3" style="flex-wrap:nowrap;">
                                <input type="text" name="email" class="form-control" placeholder="example@email.com"
                                    aria-label="Phone Number" aria-describedby="basic-addon1">
                            </div>

                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">{{__('cart.address')}}*</label>
                            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="St Street Name">
                        </div>
                     
                        <div class="col-md-6">
                            <label for="country" class="form-label">{{__('cart.State')}}*</label>
                            <select id="country" name="country" class="form-select" required>
                            <option disabled selected>{{__('cart.Select State')}}</option>
                            <option value="Shqiperi">Shqipëri</option>
                            <option value="Kosove">Kosovë</option>
                            <option value="Maqedonia">Maqedoni</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="country" class="form-label">{{__('cart.City')}}*</label>
                                 <div  id="city-dropdown">
                                    <select id="cities" name="city" class="form-select" required>
                                     <option disabled selected>{{__('cart.Select City')}}</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                        </div>
                        <div id="selected-city-display"></div>
                        <div class="row ">
                        <div class="col-md-6 col-6 ">
                            <label for="inputZip" class="form-label">{{__('cart.postal')}}</label>
                            <input type="text" name="zip_code" class="form-control" id="inputZip">
                        </div>
                        <div class="col-md-6 ">
                        <p>{{__('cart.payment type')}}:</p>
                        <input type="radio" id="cash" name="payment_type" value="1">
                        <label for="cash">Cash on delivery</label><br>
                        <input type="radio" id="paypal" name="payment_type" value="2">
                        <label for="paypal">Paypal</label><br>
                        </div>
                 
                      </div>
                </div>
                <div class="col-lg-4">
                    <h1 class="details-title">{{__('cart.summary order')}}</h1>
                    <hr>
                      <div class="items-selected cart-items cart-item" style="display:block;">
                                </div>
                    <hr>
                        <p class="d-flex justify-content-between subtotal" name="total_sum"> Subtotal: <span> </span></p>
                    <p class="d-flex justify-content-between transport"> Transport: <span> </span></p> 
                         <!--<p class="d-flex justify-content-between total"> Total: <span> </span></p>-->
                    <div class="row">
                        {{-- <button class="btn place-order" width="100%" name="submit" type="submit">{{__('cart.complete order')}}</button> --}}
                         <button class="btn place-order" width="100%" name="submit" type="submit">Paypal</button> 
               
                    </div>
                    
                </div>
                 </form>
            </div>
        </div>
    </section>
    @include('layouts.frontend.partials.footer')
    @include('layouts.frontend.partials.footer-assets')
    
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

</script>
 <script>
document.getElementById('country').addEventListener('change', function () {
    var country = this.value;
    var cityDropdown = document.getElementById('city-dropdown');
    var citiesSelect = document.getElementById('cities');
    var selectedCityDisplay = document.getElementById('selected-city-display');

    // Reset the cities dropdown and search box
    citiesSelect.innerHTML = '';
    selectedCityDisplay.innerHTML = '';

    if (country) {
        // Show the city dropdown
        cityDropdown.style.display = 'block';
            var defaultOption = document.createElement('option');
    defaultOption.value = '';
    defaultOption.text = '{{__('cart.Select City')}}';
 
    citiesSelect.appendChild(defaultOption);

        // Show the respective cities for the selected country
        if (country === 'Shqiperi') {
            @foreach($cityAlb as $city)
                var option = document.createElement('option');
                option.value = "{{ $city->name }}";
                option.text = "{{ $city->name }}";
                option.setAttribute('data-shipping-fee', "{{ $city->shipping_fee }}");

                citiesSelect.appendChild(option);
            @endforeach
        } else if (country === 'Kosove') {
            @foreach($cityKs as $city)
                var option = document.createElement('option');
                option.value = "{{ $city->name }}";
                option.text = "{{ $city->name }}";
                option.setAttribute('data-shipping-fee', "{{ $city->shipping_fee }}");

                citiesSelect.appendChild(option);
            @endforeach
        } else if (country === 'Maqedonia') {
            @foreach($cityMk as $city)
                var option = document.createElement('option');
                option.value = "{{ $city->name }}";
                option.text = "{{ $city->name }}";
                option.setAttribute('data-shipping-fee', "{{ $city->shipping_fee }}");

                citiesSelect.appendChild(option);
            @endforeach
        }
        
        
        shippingFeeElement.textContent = '$0.00'; 
    } else {
        // Hide the city dropdown if no country is selected
        cityDropdown.style.display = 'none';
    }
});

  </script>
  
  <script>
document.getElementById('cities').addEventListener('click', function () {
    var selectedCity = this.value;
    var shippingFeeElement = document.querySelector('.transport span');

    // Fetch the shipping fee directly from the selected option's attribute
    var shippingFee = parseFloat(this.options[this.selectedIndex].getAttribute('data-shipping-fee'));

    if (!isNaN(shippingFee)) {
        // Update the HTML content of the "transport" class with the shipping fee
        shippingFeeElement.textContent = `$${shippingFee.toFixed(2)}`;

        // Update the total by adding the shipping fee
        var totalElement = document.querySelector('.total span');
        var subtotalElement = document.querySelector('.subtotal span');
        var subtotal = parseFloat(subtotalElement.textContent.replace('$', '')); // Remove the "$" sign
        var total = subtotal + shippingFee;
        totalElement.textContent = `$${total.toFixed(2)}`;
    } else {
        console.log('Shipping fee is not available for the selected city.');
    }
});


  </script>


<div id="selected-city-display"></div>
<script>
    var successPaymentRoute = '{{ url(route('success.payment')) }}';
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const checkoutItems = document.querySelector(".cart-items");
    const subtotalElement = document.querySelector(".subtotal");
    const totalElement = document.querySelector(".total");
    const form = document.querySelector("form");
    let storedCartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

    function appendProductFields() {
        storedCartItems.forEach((item, index) => {
            const productId = item.productId;
            const productName = item.productName;
            const productPrice = item.price;

            const hiddenProductId = document.createElement("input");
            hiddenProductId.type = "hidden";
            hiddenProductId.name = `products[${index}][id]`;
            hiddenProductId.value = productId;
            form.appendChild(hiddenProductId);

            const hiddenProductName = document.createElement("input");
            hiddenProductName.type = "hidden";
            hiddenProductName.name = `products[${index}][name]`;
            hiddenProductName.value = productName;
            form.appendChild(hiddenProductName);

            const hiddenProductPrice = document.createElement("input");
            hiddenProductPrice.type = "hidden";
            hiddenProductPrice.name = `products[${index}][price]`;
            hiddenProductPrice.value = productPrice;
            form.appendChild(hiddenProductPrice);

            const hiddenProductQuantity = document.createElement("input");
            hiddenProductQuantity.type = "hidden";
            hiddenProductQuantity.name = `products[${index}][quantity]`;
            hiddenProductQuantity.value = item.quantity;
            form.appendChild(hiddenProductQuantity);
        });
    }

form.addEventListener("submit", async function (event) {
    // event.preventDefault();

    try {
        appendProductFields();

        // Calculate subtotal before sending the form
        let subtotal = 0;
        storedCartItems.forEach(item => {
            subtotal += item.price * item.quantity;
        });

        // Append the subtotal to the form data
        const formData = new FormData(form);
        formData.append('subtotal', subtotal);

        const response = await fetch(form.action, {
            method: form.method,
            body: formData,
        });

        if (response.ok) {
            localStorage.removeItem("cartItems");
            // console.log("Subtotal of the order:", subtotal);
            // Redirect or perform other actions upon successful submission
            window.location.href = "{{ route('thankyou') }}";
        } else {
            console.log("There was a problem with the request");
        }
    } catch (error) {
        console.error("Error occurred:", error);
        console.log("There was an error in processing the request");
    }
});

    function displayCheckoutItems() {
        checkoutItems.innerHTML = "";
        let subtotal = 0;
        let total = 0;

        storedCartItems.forEach(item => {
            const checkoutItem = document.createElement("div");
            checkoutItem.className = "cart-item"; // Adjust class names as needed
            checkoutItem.innerHTML = `
                <div class="item-details" style="display: -webkit-inline-box;">
                    <img class="product-image img-fluid" style="width:70%;" src="${item.productImage}" alt="${item.productName}">
                    <div>
                        <p class="product-name">${item.productName}</p>
                        <input type="hidden" name="product_id" value="${item.productId}">
                        <p class="quantity" name="quantity" value="${item.quantity}">{{__('cart.quantity')}}: ${item.quantity}</p>
                        <p class="price" name="price" value="${item.price}">{{__('cart.price')}}: $${item.price.toFixed(2)}</p>
                    </div>
                </div>
            `;

            checkoutItems.appendChild(checkoutItem);
            subtotal += item.price * item.quantity;
              total = subtotal+5 ;
        });

        subtotalElement.textContent = `Subtotal: $${subtotal.toFixed(2)}`;
        totalElement.textContent = `Total: $${total.toFixed(2)}`;
    }

    displayCheckoutItems();
});






</script>