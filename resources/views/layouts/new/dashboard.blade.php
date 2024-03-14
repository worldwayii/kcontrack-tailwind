<!DOCTYPE html>
<html lang="en">
@include('layouts.new.header')
<body class="bg-white-20 font-montserrat relative flex flex-col h-screen">
@include('layouts.new.nav')
<main class="w-full overflow-hidden flex-1 px-[14px] md:px-[16px] pt-[26px] md:pt-[20px] flex gap-[16px] bg-transparent">
    @include('layouts.new.side-menu')
    @yield('content')
</main>
@include('layouts.new.footer')
</body>
</html>
