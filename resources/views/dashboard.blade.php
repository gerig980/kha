@extends('layouts.backend.app1')
@push('css')
<style>
    @import url('https://fonts.cdnfonts.com/css/general-sans');
</style>
@endpush
@include('layouts.backend.styling_scss')
@section('title', 'Dashboard')

@section('content')

<div class="page-content pt-4">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row project-wrapper">
            <div class="col-xxl-8">
                <div class="row">
                    <div class="col-xl-4">
                        <a href="{{ route('contacts') }}">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-primary rounded-2 fs-2">
                                                <i data-feather="mail"></i>                                           
                                            </span>          
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Booking Evente</p>
                                            <div class="d-flex align-items-center mb-0">
                                                <div class="d-flex align-items-center mb-0">
                                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ \App\Models\Booking::count() }}"></span></h4>                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </a>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <a href="">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-warning rounded-2 fs-2">
                                                <i data-feather="award"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Regjistrime Kurse</p>
                                            <div class="d-flex align-items-center mb-0">
                                                <div class="d-flex align-items-center mb-0">
                                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ \App\Models\CourseRegister::count() }}"></span></h4>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </a>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <a href="">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info rounded-2 fs-2">
                                                <i data-feather="gift"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Orders</p>
                                            <div class="d-flex align-items-center mb-0">
                                                <div class="d-flex align-items-center mb-0">
                                                    <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ \App\Models\Orders::count() }}"></span></h4>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                        </a>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">    
                     <div>
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex">
                                        <h4 class="graphic-title">Regjistrime ne Kurse</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body p-0 pb-2">
                                        <div class="chart-container">
                                            <div id="course" style="width: 100%;height:400px;"></div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex">
                                        <h4 class="graphic-title">Regjistrime ne Evente</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body p-0 pb-2">
                                        <div class="chart-container">
                                            <div id="events" style="width: 100%;height:400px;"></div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <!-- end col -->
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end col -->

            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="card-title mb-0"></h4>
                    </div><!-- end cardheader -->
                    <div class="card-body pt-2">
                        <div class="upcoming-scheduled">
                            <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true">
                        </div>

                        <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted"></h6>

                       
                        <div class="mini-stats-wid d-flex align-items-center mt-3">
                            
                         

                            <div class="flex-grow-1 ms-3">
                               
                            </div>
                            <div class="flex-shrink-0">
                                <p class="text-muted mb-0"></p>
                            </div>
                           
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-8">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Porosite e Fundit</h4>
                                                
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th>Order Code</th>
                                                                <th>Emri</th>
                                                                <th>Telefoni</th>
                                                                <th>Totali</th>
                                                                <th>Statusi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if($orders)
                                                            @foreach($orders->take(5) as $order)
                                                            <tr>
                                                                <td>
                                                                    <a href="{{route('order.show',$order->id)}}" class="fw-medium link-primary">{{$order->order_code}}</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-grow-1">{{$order->name}} {{$order->surname}}</div>
                                                                    </div>
                                                                </td>
                                                               <td>
                                                                   <span>{{$order->phone}}</span>
                                                               </td>
                                                                <td>
                                                                    <span class="text-success">{{number_format($order->total_sum)}} ALL</span>
                                                                </td>
                                                               
                                                                <td>
                                                                    @if($order->status == 0)
                                                                    <span class="badge badge-soft-info">E Re</span>
                                                                    @elseif($order->status == 1)
                                                                    <span class="badge badge-soft-success">Dorezuar</span>
                                                                    @elseif($order->status == 2)
                                                                    <span class="badge badge-soft-danger">Anulluar</span>
                                                                    @endif
                                                                </td>
                                                                
                                                            </tr><!-- end tr -->
                                                            @endforeach
                                                            @endif
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>
                                            </div>
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
        </div><!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.1/echarts.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    


 <script>
var myChart = echarts.init(document.getElementById('course'));

// Draw the chart
myChart.setOption({
    color: ['#4B38B3'],
            tooltip: {
                trigger: 'axis',
                axisPointer: {            
                    type: 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [
                {
                    type: 'category',
                    data: ['Janar', 'Shkurt','Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nentor', 'Dhjetor'],
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis: [
                {
                    type: 'value'
                }
            ],
            series: [
                {
                    name: 'Totali i Regjistrimeve',
                    type: 'bar',
                    barWidth: '50%',
                    data: [
                        {{count($janCourse)}},
                        {{count($febCourse)}}, 
                        {{count($marchCourse)}},
                        {{count($aprCourse)}},
                        {{count($mayCourse)}},
                        {{count($juneCourse)}},
                        {{count($julyCourse)}},
                        {{count($augCourse)}},
                        {{count($septCourse)}},
                        {{count($octCourse)}},
                        {{count($novCourse)}},
                        {{count($decCourse)}},
                    ]
                }
            ]
});

var myChart2 = echarts.init(document.getElementById('events'));

// Draw the chart
myChart2.setOption({
    color: ['#FFBE0B'],
            tooltip: {
                trigger: 'axis',
                axisPointer: {            
                    type: 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [
                {
                    type: 'category',
                    data: ['Janar', 'Shkurt','Mars', 'Prill', 'Maj', 'Qershor', 'Korrik', 'Gusht', 'Shtator', 'Tetor', 'Nentor', 'Dhjetor'],
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis: [
                {
                    type: 'value'
                }
            ],
            series: [
                {
                    name: 'Totali i Regjistrimeve',
                    type: 'bar',
                    barWidth: '50%',
                    data: [
                        {{count($janBooking)}},
                        {{count($febBooking)}}, 
                        {{count($marchBooking)}},
                        {{count($aprBooking)}},
                        {{count($mayBooking)}},
                        {{count($juneBooking)}},
                        {{count($julyBooking)}},
                        {{count($augBooking)}},
                        {{count($septBooking)}},
                        {{count($octBooking)}},
                        {{count($novBooking)}},
                        {{count($decBooking)}},
                    ]
                }
            ]
});
</script> 
    @endpush