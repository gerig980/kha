<!-- JAVASCRIPT -->
<script src="{{ URL::asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ URL::asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ URL::asset('backend/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
{{-- <script src="{{ URL::asset('backend/assets/js/plugins.js') }}"></script> --}}
<!--jquery cdn-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--select2 cdn-->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ URL::asset('backend/assets/js/pages/select2.init.js') }}"></script>
<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

{{-- <script src="{{ URL::asset('backend/assets/libs/flatpickr/flatpickr.min.js') }}"></script> --}}
{{-- <script src="{{ URL::asset('backend/assets/js/pages/datatables.init.js') }}"></script> --}}
<script src="{{ URL::asset('backend/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<!-- apexcharts -->
<script src="{{ URL::asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ URL::asset('backend/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('backend/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ URL::asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ URL::asset('backend/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

<!-- nouisliderribute js -->
<script src="{{URL::asset('backend/assets/libs/nouislider/nouislider.min.js')}}"></script>
<script src="{{URL::asset('backend/assets/libs/wnumb/wNumb.min.js')}}"></script>

<!-- list.js min js -->
<script src="{{URL::asset('backend/assets/libs/list.js/list.min.js')}}"></script>

<!--list pagination js-->
<script src="{{URL::asset('backend/assets/libs/list.pagination.js/list.pagination.min.js')}}"></script>

<!-- Echarts -->
<script src="{{ URL::asset('backend/assets/libs/chart.js/chart.min.js') }}"></script>

<!-- Sweet Alerts js -->
<script src="{{URL::asset('backend/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>



<!-- gridjs js -->
<script src="{{ URL::asset('backend/assets/libs/gridjs/gridjs.umd.js')}}"></script>
<script src="https://unpkg.com/gridjs/plugins/selection/dist/selection.umd.js"></script>



<!-- App js -->
<script src="{{ URL::asset('backend/assets/js/app.js') }}"></script>

<!-- Tags Input -->
<script src="{{ URL::asset('tag_input/src/bootstrap-tagsinput.js') }}"></script>
<!-- Toastr Notification -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
@include('layouts.backend.partials.message')
@stack('js')   