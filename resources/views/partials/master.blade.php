<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    <!-- Navigation-->
    @include('partials.navbar')
    <!-- Header-->
    @yield('content')

    @include('partials.script')
</body>

</html>
