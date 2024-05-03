@include('admin.base.start')


@include('admin.base/navbar')


<!-- strat wrapper -->
<div class="h-screen flex w-full">

    @include('admin.base/sidebar')

    <!-- strat content -->
    <div class="bg-gray-100 container m-10">

        @yield('main')

    </div>
    <!-- end content -->

</div>
<!-- end wrapper -->

@include('admin.base/end')
