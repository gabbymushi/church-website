<!DOCTYPE html>
<html class="no-js">

<head>
    @include('partials.head')
</head>

<body>
    <!-- fixed-top-->
    <div class="body header-style3">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
    @include('partials.javascript')
</body>

</html>