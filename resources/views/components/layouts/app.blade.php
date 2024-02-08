<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partials.livewire.header')
        <body class="bg-white-20">
            @include('layouts.partials.livewire.nav')
            <div class="flex justify-between mt-2 md:mt-0">
                @include('layouts.partials.mobile-nav')
                    {{ $slot }}
            </div>
        </body>
    @include('layouts.partials.livewire.footerscripts')
</html>

