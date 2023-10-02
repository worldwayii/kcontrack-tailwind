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
    <div class="flex h-[80vh] flex-col items-center justify-center w-full">
        <form class="flex flex-col w-[80%] md:w-[60%]">
            <p class="text-black-0  text-6xl font-extrabold">Welcome</Text>
            <p class="text-black-0  text-6xl font-extrabold mb-10">Back</Text>
            <div class="flex flex-col w-full mb-5">
                <span class="text-black-10 text-xs font-semibold mb-1">Email address</span>
                <input class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                       placeholder='Enter email address' />
            </div>
            <div class="flex flex-col w-full mb-5">
                <span class="text-black-10 text-xs font-semibold mb-1">Password</span>
                <input class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 input focus:border-brand-0"
                       placeholder='Enter password' />
            </div>
            <button
                class="bg-brand-0 p-4 border-none w-full rounded-lg cursor-pointer text-white-0 font-semibold text-base text-center">
                <span>Log in</span>
            </button>
            <div class="my-5 space-x-1">
                    <span class="text-sm font-medium text-black-0">
                        Don't have an account?
                    </span>
                <a to='/business-details'
                   class="text-brand-0 bg-white-0 text-sm font-medium border-none cursor-pointer">
                    <span>Sign up</span>
                </a>
            </div>
        </form>
    </div>
</div>
<div
    class="w-[49%] bg-auth bg-no-repeat bg-cover h-[95vh] rounded-3xl m-5 md:flex flex-col justify-end items-center  hidden">
    <div class="bg-white-10 m-5 py-2 px-4 rounded-full">
        <Text class="text-gray-10 text-lg font-medium">Create an account for your company</Text>
    </div>
</div>
</body>


</html>
