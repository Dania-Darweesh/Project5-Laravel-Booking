@include('admin/includes/header')
@include('admin/includes/sidebar')
<div class="all-content-wrapper">
@include('admin/includes/main_header')
@yield('content')
@include('admin/includes/footer')
</div>
@include('admin/includes/scripts')
