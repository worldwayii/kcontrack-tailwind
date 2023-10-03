<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>kcontrack</title>
</head>

<body class="flex justify-between">
<div class="w-full md:w-[50%] ">
    <a href="{{route('home')}}">
        @include('partials/auth-logo')
    </a>

    @yield('content')

</div>
<div
    class="w-[49%] bg-auth bg-no-repeat bg-cover h-[95vh] rounded-3xl m-5 md:flex flex-col justify-end items-center  hidden">
    <div class="bg-white-10 m-5 py-2 px-4 rounded-full">
        <span class="text-gray-10 text-lg font-medium">Create an account for your company</span>
    </div>
</div>
</body>


</html>
