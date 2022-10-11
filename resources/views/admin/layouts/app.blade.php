@include('admin.layouts.header')
    <div id="app">

    @include('admin.layouts.nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>


@include('admin.layouts.footer')
