@extends('layouts.dashboard-profile')

@section('meta-title', 'Profile')
@section('page-title', 'Profile')

@section('content')
<div class=" bg-white-0 w-[100vw] md:w-[90vw] h-[90vh] md:me-[2vw] rounded-xl">
    <div class="flex md:flex-col md:mx-8 items-center md:items-start justify-between mx-2 my-4  md:my-8">
        <div class="flex justify-between w-full">
            <span class="text-base md:text-xl text-black-10 font-semibold">Profile</span>
            <a href="{{route('company.dashboard')}}" class="text-[#3984E6] text-xs underline">
                Back to Dashboard
            </a>
        </div>
    </div>

    <div class="flex md:mx-8 mx-2 justify-between  border md:px-4 px-2 md:py-8 py-4 rounded-xl ">
        <div class="flex md:space-x-4 space-x-2 items-center">
            <div
                class="border-solid border  flex items-center justify-center rounded-full  h-[31px] w-[31px] ">
                <img src="/img/logo.png" />

            </div>
            <div class="flex flex-col">
                <span class="md:text-xl text-sm font-semibold text-black-10">{{Auth::user()->company->name}}</span>
                <span class="md:text-sm text-[10px] text-[#A7A7A7]">{{Auth::user()->email}}</span>
            </div>
        </div>
        <a  href="{{route('company.edit-profile')}}">
            <button class="flex border items-center p-2 space-x-2 rounded-lg border-[#3984E6] bg-[#3984E620]" role="link">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.5 17.5H17.5" stroke="#3984E6" stroke-width="1.67" stroke-linecap="round"
                          stroke-linejoin="round" />
                    <path d="M5.83301 14.1667V10.8333L14.1663 2.5L17.4997 5.83333L9.16634 14.1667H5.83301Z"
                          stroke="#3984E6" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M11.667 5L15.0003 8.33333" stroke="#3984E6" stroke-width="1.67" stroke-linecap="round"
                          stroke-linejoin="round" />
                </svg>
                <span class="md:text-sm text-xs text-[#3984E6]">Edit</span>
            </button>
        </a>
    </div>
    <div class="px-4 border md:mx-8 mx-2 mt-4 rounded-xl py-6">
        <div class="border-l border-l-2 border-l-[#3984E6] px-2 mb-6">
            <span class="text-base font-bold text-black-10">Account Information</span>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="md:w-[40%] flex flex-col">
                <span class="text-black-10 font-semibold text-sm">Lastname:</span>
                <span class="text-[#B0AFAF] text-xs mb-4">{{Auth::user()->company->last_name}}</span>
                <span class="text-black-10 font-semibold text-sm">Company name:</span>
                <span class="text-[#B0AFAF] text-xs mb-4">{{Auth::user()->company->name}}</span>
                <span class="text-black-10 font-semibold text-sm">Phone Number:</span>
                <span class="text-[#B0AFAF] text-xs mb-4">{{Auth::user()->company->phone_number}}</span>
                <span class="text-black-10 font-semibold text-sm">Company Description</span>
                <span class="text-[#B0AFAF] text-xs mb-4">{{Auth::user()->company->description}}</span>
            </div>
            <div class="md:w-[40%] flex flex-col">
                <span class="text-black-10 font-semibold text-sm">Firstname:</span>
                <span class="text-[#B0AFAF] text-xs mb-4">{{Auth::user()->company->first_name}}</span>
                <span class="text-black-10 font-semibold text-sm">Company email:</span>
                <span class="text-[#B0AFAF] text-xs mb-4">{{Auth::user()->email}}</span>
                <span class="text-black-10 font-semibold text-sm">Zip Code:</span>
                <span class="text-[#B0AFAF] text-xs mb-4">{{Auth::user()->company->zip_code}}</span>
            </div>
        </div>
    </div>
    <div class="px-4 border md:mx-8 mx-2 mt-4 rounded-xl py-6 mb-4">
        <div class="border-l border-l-2 border-l-[#3984E6] px-2 mb-6">
            <span class="text-base font-bold text-black-10">Service Category Information</span>
        </div>
        <div class="flex space-x-2">
            <div class="py-1 px-2 border rounded-lg">
                <span class="text-[#80868C] text-xs">{{Auth::user()->company->category->label()}}</span>
            </div>
        </div>
    </div>


</div>
@endsection
