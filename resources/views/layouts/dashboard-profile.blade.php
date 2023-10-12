<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>kontrack</title>
</head>

<body class="bg-white-20">

@include('layouts.partials.nav')

<div class="flex justify-between mt-2 md:mt-0">
    @include('layouts.partials.mobile-nav')
    @yield('content')


</div>
</body>
<script>
    function myFunction() {
        var element = document.getElementById("mobile_nav");
        element.classList.toggle("hidden");
        console.log({ element })
    }
</script>

</html>
