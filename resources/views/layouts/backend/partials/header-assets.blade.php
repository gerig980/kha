<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Dashboard - KHA" name="description" />
    <meta content="Big Media Expert" name="author" />

    <!-- Layout config Js -->
    <script src="{{URL::asset('backend/assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <!-- Select 2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{URL::asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{URL::asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{URL::asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{URL::asset('backend/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- nouisliderribute css -->
    <link rel="stylesheet" href="{{URL::asset('backend/assets/libs/nouislider/nouislider.min.css')}}">
    <!--Swiper slider css-->
    <link href="{{URL::asset('backend/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert css-->
    <link href="{{URL::asset('backend/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- gridjs css -->
    <link rel="stylesheet" href="{{URL::asset('backend/assets/libs/gridjs/theme/mermaid.min.css')}}" />
    <!-- Icons Flag -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
 
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"/>
    <!-- Bootstrap Tags -->
    <link rel="stylesheet" href="{{ URL::asset('tag_input/src/bootstrap-tagsinput.css') }}">
    @stack('css')
</head>

</html>