<!DOCTYPE html>
<html lang="en">
    @include('layouts.new.header')
    <body class="bg-white-20 font-montserrat relative flex flex-col h-screen">
        @include('layouts.new.navbar')
        <!-- mobile nav sidebar -->
        @include('layouts.new.mobile-navbar')
        <!-- main body -->
        <main class="w-full overflow-hidden flex-1 px-[14px] md:px-[16px] pt-[26px] md:pt-[20px] flex gap-[16px] bg-white-0 md:bg-transparent">
            @include('layouts.new.side-menu')
            <!-- main body -->
            <div class="flex-1 flex flex-col gap-[24px] lg:gap-[36px] overflow-y-auto md:px-[24px] lg:px-[36px] pb-[24px] md:py-[24px] md:bg-white-0">
                @include('layouts.new.horizontal-tabs')

                <div class="w-full flex flex-col lg:flex-row gap-[24px]">
                    @include('company.dashboard.index-employee')
                    @include('company.dashboard.index-schedule')
                </div>
            </div>
        </main>
        <!-- Yield contents -->
            @yield('content')


        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
        <script>
            function toggleMobileSideNav() {
                var element = document.getElementById("mobile-side-nav");
                if (element.classList.contains("left-[-100%]")) {
                    element.classList.remove("left-[-100%]");
                    element.classList.add("left-0");
                } else {
                    element.classList.remove("left-0");
                    element.classList.add("left-[-100%]");
                }
            }
        </script>
    </body>
</html>
