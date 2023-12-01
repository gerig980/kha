@push('css')
<style>
[data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>a.menu-link {
    position: relative;
    width: calc(200px + 70px);
    color: #000 !important;
    background-color: var(--vz-vertical-menu-bg-dark);
    -webkit-transition: none;
    transition: none;
}
[data-layout-mode=dark][data-layout=vertical][data-sidebar-size=sm] .navbar-menu .navbar-nav .nav-item:hover>a.menu-link{
    color: #fff !important;
}
.btn-danger, .btn-danger:hover{
    background-color: #f01010;
    border-color: #f01010;
}
.btn-outline-danger {
    color: #f01010;
    border-color: #f01010;
}
.btn-outline-danger:hover, .btn-outline-danger:active {
    background-color: #f01010;
    border-color: #f01010;
}
</style>
@endpush