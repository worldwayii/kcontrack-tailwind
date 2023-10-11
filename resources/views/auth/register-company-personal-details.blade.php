@extends('layouts.auth')

@section('meta-title', 'Register - Company personal details')
@section('page-title', 'Register - Company personal details')

@section('content')
    <div  class="flex h-[80vh] flex-col items-center justify-center w-full">
        <form class="flex flex-col w-[80%] md:w-[60%]" action="{{ route('register.two.post') }}" method="POST" autocomplete="off">
            @csrf
            <a href="{{route('register.one')}}" class="bg-gray-50 border-none w-[40px] rounded py-2 mt-6 mb-2 cursor-pointer">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.83 19C13.6806 19.0005 13.533 18.9675 13.398 18.9035C13.263 18.8395 13.1441 18.746 13.05 18.63L8.22 12.63C8.07292 12.451 7.99251 12.2266 7.99251 11.995C7.99251 11.7633 8.07292 11.5389 8.22 11.36L13.22 5.35997C13.3897 5.15575 13.6336 5.02733 13.8981 5.00295C14.1625 4.97857 14.4258 5.06023 14.63 5.22997C14.8342 5.39971 14.9626 5.64362 14.987 5.90805C15.0114 6.17247 14.9297 6.43575 14.76 6.63997L10.29 12L14.61 17.36C14.7323 17.5068 14.81 17.6855 14.8338 17.875C14.8577 18.0646 14.8268 18.257 14.7447 18.4295C14.6627 18.6021 14.5329 18.7475 14.3708 18.8486C14.2087 18.9497 14.021 19.0022 13.83 19Z" fill="#828282" />
                </svg>
            </a>
            <span class=" text-xs font-semibold text-black-10">Step 2</span>
            <div class="rounded-full h-2 bg-gray-40 mt-1 mb-2 w-[90px]">
                <div class="rounded-full h-2 bg-brand-0 w-[60px]" ></div>
            </div>
            <span class="text-black-0  text-6xl font-extrabold leading-none">You're almost</span>
            <span class="text-black-0  text-6xl font-extrabold leading-none ">done!</span>
            <span class="text-sm font-medium text-gray-20 mb-4 mt-2">Complete the information below to
                    proceed</span>
            <div class="flex space-x-5 w-full  justify-between">
                <div class="flex flex-col mb-2 w-[48%]">
                    <span class="text-black-10 text-xs font-semibold mb-1">Last name</span>
                    <input name="last_name" value="{{ old('last_name') }}"
                        class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0"
                        placeholder="Enter your lastname" />
                    @error('last_name')
                        <div class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-2  w-[48%]">
                    <span class="text-black-10 text-xs font-semibold mb-1">First name</span>
                    <input name="first_name" value="{{ old('first_name') }}"
                        class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0"
                        placeholder="Enter you firstname" />
                    @error('first_name')
                        <div class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col mb-2  w-full">
                <span class="text-black-10 text-xs font-semibold mb-1">Company Email</span>
                <input name="email" value="{{old('email')}}"
                    class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0"
                    placeholder="Enter email address" aria-describedby="email-error"/>
                    @error('email')
                        <div class="mt-2 text-sm text-red-600" id="email-error">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="flex space-x-5 w-full  justify-between">
                <div class="flex flex-col mb-2 w-[60%]">
                    <span class="text-black-10 text-xs font-semibold mb-1">Phone Number</span>
                    <input name="phone_number" value="{{old('phone_number')}}"
                        class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0"
                        placeholder="Enter phone number" />
                    @error('phone_number')
                        <div class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-2  w-[38%]">
                    <span class="text-black-10 text-xs font-semibold mb-1">Zip Code</span>
                    <input name="zip_code" value="{{old('zip_code')}}"
                        class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0"
                        placeholder="Enter zipcode" />
                    @error('zip_code')
                        <div class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col mb-2  w-full">
                <span class="text-black-10 text-xs font-semibold mb-1">Password</span>
                <input name="password" value="{{old('password')}}" type="password"
                    class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0"
                    placeholder="Enter email password" />
                    @error('password')
                        <div class="mt-2 text-sm text-red-600">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div class="flex space-x-1 items-center mb-2">
                <input type="checkbox" name="remember_me" class="p-3 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0"/>
                <span class="text-xs text-black-10 font-medium">Remember password.</span>
            </div>
            <span class="text-[10px] text-center text-black-10 mb-4">By creating account I accept Kontrack <span class="font-bold"> Terms & Conditions </span> and <span class="font-bold">Privacy Policy</span></span>

            <button
                class="bg-brand-0 p-4 border-none w-full rounded-lg cursor-pointer text-white-0 font-semibold text-base text-center">
                <span>Next</span>
            </button>
            <div class="mt-2 space-x-1">
                    <span class="text-sm font-medium text-black-0">
                        Already have an account?
                    </span>
                <a href="{{route('login')}}" class="text-brand-0 bg-white-0 text-sm font-medium border-none cursor-pointer">
                    <span>Sign in</span>
                </a>
            </div>
        </form>
    </div>
@endsection
