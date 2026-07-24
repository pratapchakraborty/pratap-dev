<!doctype html>
<html lang="en">

@include('frontend.partials.head')
  <body>
    @include('frontend.partials.background')

    @include('frontend.partials.header')

    <main class="relative z-10">

        @yield('content')

    </main>

    <!-- ======================= FOOTER ======================= -->

    @include('frontend.partials.footer')

    @include('frontend.partials.toast')

    @include('frontend.partials.scripts')

</body>
</html>
