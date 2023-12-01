@extends('layouts.backend.app1')
@push('css')
<!-- Plugins css -->
<link rel="stylesheet" href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.css') }}" type="text/css"/>
@endpush
@section('title', 'Porosia')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Shiko Porosine</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                    <li class="breadcrumb-item active">Porosia</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

  <!-- Start right Content here -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h5 class="card-title flex-grow-1 mb-0">Porosia me kod #{{$order->order_code}}</h5>
                                        <!--<div class="flex-shrink-0">-->
                                        <!--    <a href="apps-invoices-details.html" class="btn btn-success btn-sm"><i class="ri-download-2-fill align-middle me-1"></i> Invoice</a>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-nowrap align-middle table-borderless mb-0">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col">Detajet e Produktit</th>
                                                    <th scope="col">Cmimi Produktit</th>
                                                    <th scope="col">Sasia</th>
                                                    <th scope="col" class="text-end">Totali</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($order->orderItems as $orderItem)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="{{route('product.edit',$orderItem->product_id)}}">
                                                                <div class="flex-shrink-0  rounded p-1" style="width:100px;height:100px;">
                                                                    <img src="{{URL::asset('public/images/products/'.$orderItem->product->thumbnail)}}" alt="" class="img-fluid">
                                                                </div>
                                                                <div class="flex-grow-1 ms-3">
                                                                    <h5 class="fs-15"><a href="#" class="link-primary">{{$orderItem->product->name}}</a></h5>
                                                                    <p class="text-muted mb-0">Ngjyra: <span class="fw-medium">{{$orderItem->color}}</span></p>
                                                                    <p class="text-muted mb-0">Size: <span class="fw-medium">{{$orderItem->size}}</span></p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>{{$orderItem->price}} ALL</td>
                                                    <td>{{$orderItem->quantity}}</td>
                                                    <td class="fw-medium text-end">
                                                       <?php
                                                       $quantity = (int)$orderItem->quantity;
                                                       $price   = (int)$orderItem->price;
                                                       $total   = $price*$quantity;
                                                       ?>
                                                        
                                                        {{$total}} ALL
                                                    </td>
                                                </tr>
                                                @endforeach

                                                <tr class="border-top border-top-dashed">
                                                    <td colspan="3"></td>
                                                    <td colspan="2" class="fw-medium p-0">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Sub Total :</td>
                                                                    <td class="text-end">{{$total}} ALL</td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td>Shipping Charge :</td>
                                                                    <td class="text-end">{{$order->shipping_fee}} ALL</td>
                                                                </tr>
                                                                
                                                                <tr class="border-top border-top-dashed">
                                                                    <th scope="row">Total (ALL) :</th>
                                                                    <th class="text-end">{{$order->total_sum}} ALL</th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-sm-flex align-items-center">
                                        <h5 class="card-title flex-grow-1 mb-0">Statusi i Porosise</h5>
                                        <div class="flex-shrink-0 mt-2 mt-sm-0">
                                                
                                            <!--<a href="javasccript:void(0;)" class="btn btn-soft-info btn-sm mt-2 mt-sm-0 shadow-none"><i class="ri-map-pin-line align-middle me-1"></i> Change Address</a>-->
                                            <!--<a href="javasccript:void(0;)" class="btn btn-soft-danger btn-sm mt-2 mt-sm-0 shadow-none"><i class="mdi mdi-archive-remove-outline align-middle me-1"></i> Cancel Order</a>-->
                                            @if($order->status == 0) <span class="btn btn-soft-info btn-sm mt-2 mt-sm-0 shadow-none"> Porosi e Re</span> @elseif($order->status == 1) <span class="btn btn-soft-success btn-sm mt-2 mt-sm-0 shadow-none"> Porosi e Konfirmuar</span> @elseif($order->status == 2) <span class="btn btn-soft-danger btn-sm mt-2 mt-sm-0 shadow-none"> Porosi e Anulluar</span> @elseif($order->status == 3) <span class="btn btn-soft-primary btn-sm mt-2 mt-sm-0 shadow-none"> Porosi është Dorëzuar</span> @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="profile-timeline">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item border-0">
                                                <div class="accordion-header" id="headingOne">
                                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 avatar-xs">
                                                                <div class="avatar-title bg-success rounded-circle shadow">
                                                                    <i class="ri-shopping-bag-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h6 class="fs-15 mb-0 fw-semibold">Porositur në datë - <span class="fw-normal">{{$order->created_at->format('l , M j Y')}} ora {{$order->created_at->format('H:i')}} </span></h6>
                                                                <!--<h6 class="fs-15 mb-0 fw-semibold">Porositur në datë - <span class="fw-normal">{{$order->created_at->locale('en')->isoFormat('dddd, MMMM Do YYYY, h:mm')}} </span></h6>-->
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">-->
                                                <!--    <div class="accordion-body ms-2 ps-5 pt-0">-->
                                                <!--        <h6 class="mb-1">An order has been placed.</h6>-->
                                                <!--        <p class="text-muted">Wed, 15 Dec 2021 - 05:34PM</p>-->

                                                <!--        <h6 class="mb-1">Seller has proccessed your order.</h6>-->
                                                <!--        <p class="text-muted mb-0">Thu, 16 Dec 2021 - 5:48AM</p>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                            </div>
                                            
                                        </div>
                                        <!--end accordion-->
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xl-3">
                            <!--end card-->

                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <h5 class="card-title flex-grow-1 mb-0">Detajet e Porositesit</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0 vstack gap-3">
                                        <li>
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="fs-14 mb-1">{{$order->name}} {{$order->surname}}</h6>
                                                    <!--<p class="text-muted mb-0">Customer</p>-->
                                                </div>
                                            </div>
                                        </li>
                                        <li><i class="ri-mail-line me-2 align-middle text-muted fs-16"></i>{{$order->email}}</li>
                                        <li><i class="ri-phone-line me-2 align-middle text-muted fs-16"></i>{{$order->phone}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0"><i class="ri-map-pin-line align-middle me-1 text-muted"></i>Adresa</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                                        <!--<li class="fw-medium fs-14">{{$order->name}} {{$order->surname}}</li>-->
                                        <!--<li>{{$order->phone}}</li>-->
                                        <li>{{$order->address}}</li>
                                        <li>{{$order->city}}</li>
                                        <li>{{$order->country}}</li>
                                    </ul>
                                </div>
                            </div>
                            <!--end card-->
                            <form action="{{route('confirm_order', $order->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                            <select class="form-select" name="status" aria-label="Ndrysho statusin e Porosisë">
                                
                                  <option  selected disabled >Ndryshoni Statusin e Porosisë</option>
                                  <option  value="1">Konfirmo Porosinë</option>
                                  <option  value="2">Anullo Porosinë</option>
                                  <option  value="3">Porosia është Dorëzuar</option>
                                </select>
                                <button type="submit" class="btn btn-success mt-2">Ndrysho</button>
                            </form>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->




@endsection
@push('js')


<!-- dropzone js -->
<script src="{{(URL::asset('backend/assets/libs/dropzone/dropzone-min.js'))}}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//unpkg.com/alpinejs" defer></script>





@endpush


