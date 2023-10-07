@extends('layouts.auth')

@section('meta-title', 'Confirm Email')
@section('page-title', 'Confirm Email')

@section('content')
    <div class="flex h-[80vh] flex-col items-center justify-center w-full">
        <form class="flex flex-col w-[80%] md:w-[60%]">
            <p class="text-black-0  text-6xl font-extrabold">Welcome</Text>
            <p class="text-black-0  text-6xl font-extrabold mb-10">Back</Text>
            <div class="flex w-full items-center  border-[0.5px] rounded-lg px-2 md:px-8 py-2 mb-5">
                <div>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 9.5L12 13L17 9.5" stroke="#4F4F4F" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round" />
                        <path
                            d="M2 17.5V7.5C2 6.96957 2.21071 6.46086 2.58579 6.08579C2.96086 5.71071 3.46957 5.5 4 5.5H20C20.5304 5.5 21.0391 5.71071 21.4142 6.08579C21.7893 6.46086 22 6.96957 22 7.5V17.5C22 18.0304 21.7893 18.5391 21.4142 18.9142C21.0391 19.2893 20.5304 19.5 20 19.5H4C3.46957 19.5 2.96086 19.2893 2.58579 18.9142C2.21071 18.5391 2 18.0304 2 17.5Z"
                            stroke="#4F4F4F" stroke-width="1.5" />
                    </svg>
                </div>
                <div class="flex flex-col md:w-full border-l md:ms-2 ms-1 md:ps-2 ps-1">
                    <span class="text-black-10 text-xs font-semibold">Email address</span>
                    <input class=" outline-none border-gray-10 focus:border-brand-0 "
                           placeholder='Enter email address' />
                </div>
                <div>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2.5C6.5 2.5 2 7 2 12.5C2 18 6.5 22.5 12 22.5C17.5 22.5 22 18 22 12.5C22 7 17.5 2.5 12 2.5ZM10 17.5L5 12.5L6.41 11.09L10 14.67L17.59 7.08L19 8.5L10 17.5Z"
                            fill="#44A96C" />
                    </svg>
                </div>
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
@endsection
