<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.header')
<body class="bg-white-20">
    @include('layouts.partials.nav')
<div class="flex justify-between mt-2 md:mt-0">
    @include('layouts.partials.mobile-nav')

    @yield('content')
</div>
</body>
    @include('layouts.partials.footerscripts')
</html>
