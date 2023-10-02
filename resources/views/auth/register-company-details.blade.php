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
<div class="w-full md:w-[50%]">
    <a href="{{route('home')}}">
        @include('partials/auth-logo')
    </a>
    <div  class="flex h-[80vh] flex-col items-center justify-center w-full">
        <form class="flex flex-col w-[80%] md:w-[60%]">
            <span class="text-xs font-semibold text-black-10">Step 1</span>
            <div class="rounded-full h-2 bg-gray-40 mt-2 mb-4 w-[90px]"  >
                <div class="rounded-full h-2 bg-brand-0 w-[30px]"></div>
            </div>
            <span class="text-black-0  text-6xl font-extrabold leading-none">Welcome to</span>
            <span class="text-black-0  text-6xl font-extrabold leading-none ">Kontrack</span>
            <span class="text-sm font-medium text-gray-20 mb-6 mt-2">Tell us about your business</span>
            <div class="flex flex-col w-full mb-5">
                <span class="text-black-10 text-xs font-semibold mb-1">What is your business name</span>
                <input  class="p-4  border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                        placeholder="What is your company's name"/>
            </div>
            <div class="flex flex-col w-full mb-5">
                <span class="text-black-10 text-xs font-semibold mb-1">Business description</span>
                <input class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                       placeholder='What does your business do?'/>
            </div>
            <div class="flex flex-col mb-5">
                <span class="text-black-10 text-xs font-semibold mb-1">Business category</span>
                <select class="p-5 rounded-lg border-gray-10 bg-white-0  outline-none focus:border-brand-0 border-[0.5px]">
                    <option >Logistics</option>
                    <option >Tech</option>
                    <option >Sales</option>
                </select>
            </div>
            <label class="ext-black-10 text-xs font-semibold mb-1">How many workers do you have?</label>
            <div class=" flex justify-between mb-10">
                <div
                    class=" w-[65px] flex  items-center space-x-1 p-1 bg-gray-30 rounded-md cursor-pointer border-gray-0 text-xs text-black-0 font-medium hover:bg-brand-10 border-[0.5px]">
                    <input name="no_of_staff" value="1-5" type="radio" />
                    <span>1 - 5</span>
                </div>
                <div
                    class=" w-[65px] flex  items-center space-x-1 p-1 bg-gray-30 rounded-md cursor-pointer border-gray-0 text-xs text-black-0 font-medium hover:bg-brand-10 border-[0.5px]">
                    <input name="no_of_staff" value="6 - 10" type="radio" />
                    <span>6 - 10</span>
                </div>
                <div
                    class=" w-[65px] flex   items-center space-x-1 p-1 bg-gray-30 rounded-md cursor-pointer border-gray-0 text-xs text-black-0 font-medium hover:bg-brand-10 border-[0.5px]">
                    <input name="no_of_staff" value="11 - 19" type="radio" />
                    <span>11 - 19</span>
                </div>
                <div
                    class=" w-[70px] flex  items-center space-x-1 p-1 bg-gray-30 rounded-md cursor-pointer border-gray-0 text-xs text-black-0 font-medium hover:bg-brand-10 border-[0.5px]">
                    <input name="no_of_staff" value="20 - 29" type="radio" />
                    <span>20 - 29</span>
                </div>
                <div
                    class=" w-[75px] flex  items-center space-x-1 p-1 bg-gray-30 rounded-md cursor-pointer border-gray-0 text-xs text-black-0 font-medium hover:bg-brand-10 border-[0.5px]">
                    <input name="no_of_staff" value="30 - 50" type="radio" />
                    <span>30 - 50</span>
                </div>

                <div
                    class=" w-[55px] flex items-center space-x-1 p-1 bg-gray-30 rounded-md cursor-pointer border-gray-0 text-xs text-black-0 font-medium hover:bg-brand-10 border-[0.5px]">
                    <input name="no_of_staff" value="50+" type="radio" />
                    <span>50+</span>
                </div>
            </div>
            <button
                class="bg-brand-0 p-4 border-none w-full rounded-lg cursor-pointer text-white-0 font-semibold text-base text-center">
                <span>Next</span>
            </button>
            <div class="mt-5 space-x-1">
                    <span class="text-sm font-medium text-black-0">
                        Already have an account?
                    </span>
                <a href="{{route('login')}}"
                    class="text-brand-0 bg-white-0 text-sm font-medium border-none cursor-pointer">
                    <span>Sign in</span>
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
