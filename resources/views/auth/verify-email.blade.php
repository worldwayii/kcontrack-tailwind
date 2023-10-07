@extends('layouts.auth')

@section('meta-title', 'Confirm Email')
@section('page-title', 'Confirm Email')

@section('content')

    <div class="h-[80vh] flex flex-col items-center justify-start w-full">
        <form class="flex flex-col w-[80%] md:w-[60%]">
            <button class="bg-gray-50 border-none w-[40px] rounded py-2 mt-6 mb-2 cursor-pointer" >
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.83 19C13.6806 19.0005 13.533 18.9675 13.398 18.9035C13.263 18.8395 13.1441 18.746 13.05 18.63L8.22 12.63C8.07292 12.451 7.99251 12.2266 7.99251 11.995C7.99251 11.7633 8.07292 11.5389 8.22 11.36L13.22 5.35997C13.3897 5.15575 13.6336 5.02733 13.8981 5.00295C14.1625 4.97857 14.4258 5.06023 14.63 5.22997C14.8342 5.39971 14.9626 5.64362 14.987 5.90805C15.0114 6.17247 14.9297 6.43575 14.76 6.63997L10.29 12L14.61 17.36C14.7323 17.5068 14.81 17.6855 14.8338 17.875C14.8577 18.0646 14.8268 18.257 14.7447 18.4295C14.6627 18.6021 14.5329 18.7475 14.3708 18.8486C14.2087 18.9497 14.021 19.0022 13.83 19Z" fill="#828282" />
                </svg>
            </button>
            <span class=" text-xs font-semibold text-black-10">Step 3</span>
            <div class="rounded-full h-2 bg-gray-40 mt-1 mb-2 w-[90px]">
                <div class="rounded-full h-2 bg-brand-0 w-[90px]" ></div>
            </div>
            <span class="text-black-0  text-6xl font-extrabold leading-none">Confirm your</span>
            <span class="text-black-0  text-6xl font-extrabold leading-none ">email</span>
            <span class="text-sm font-medium text-gray-20 mb-4 mt-2">We sent a verification link to your email.</span>

            <a href="{{route('login')}}"
               class="bg-brand-0 p-4 border-none w-full rounded-lg cursor-pointer text-white-0 font-semibold text-base text-center">
                <span>Done</span>
            </a>

        </form>
    </div>
@endsection
