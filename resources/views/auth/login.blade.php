@extends('layouts.auth')

@section('meta-title', 'Login')
@section('page-title', 'Login')

@section('content')
    <div class="flex h-[80vh] flex-col items-center justify-center w-full">
        <form class="flex flex-col w-[80%] md:w-[60%]">
            <p class="text-black-0  text-6xl font-extrabold">Welcome</p>
            <p class="text-black-0  text-6xl font-extrabold mb-10">Back</p>
            <div class="flex flex-col w-full mb-5">
                <span class="text-black-10 text-xs font-semibold mb-1">Email address</span>
                <input name="email" value="{{old('email')}}"
                       class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0"
                       placeholder="Enter email address" aria-describedby="email-error"/>
                @error('email')
                    <div class="mt-2 text-sm text-red-600" id="email-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex flex-col w-full mb-5">
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
            <button
                class="bg-brand-0 p-4 border-none w-full rounded-lg cursor-pointer text-white-0 font-semibold text-base text-center">
                <span>Log in</span>
            </button>
            <div class="my-5 space-x-1">
                    <span class="text-sm font-medium text-black-0">
                        Don't have an account?
                    </span>
                <a href="{{route('register.one')}}"
                   class="text-brand-0 bg-white-0 text-sm font-medium border-none cursor-pointer">
                    <span>Sign up</span>
                </a>
            </div>
        </form>
    </div>
@endsection
