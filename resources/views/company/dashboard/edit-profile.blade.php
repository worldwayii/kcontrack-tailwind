@extends('layouts.company-dashboard')

@section('meta-title', 'Edit Profile')
@section('page-title', 'Edit Profile')

@section('content')

    <div class="bg-white-0 w-[100vw] md:w-[90vw] h-[90vh] md:me-[2vw] rounded-xl">
        <div class="flex md:flex-col md:mx-8 items-center md:items-start justify-between mx-2 my-4  md:my-8">
            <div class="flex justify-between w-full">
                <span class="text-base md:text-xl text-black-10 font-semibold">Edit Profile</span>
                <a href="{{route('company.dashboard')}}" class="text-[#3984E6] text-xs underline">
                    Back to Dashboard
                </a>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <form class="flex flex-col w-[90%] md:w-[40%] mb-4">
                <div class="flex space-x-4 mb-8 items-center">
                    <div
                        class="border-solid border relative flex items-center justify-center rounded-full  h-[103px] w-[103px] ">
                        <img class=" h-[63px] w-[63px]" src="/img/logo.png" />
                        <div class="absolute right-0 top-1">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3127_6790)">
                                    <path
                                        d="M2.63724 15.3632C1.77765 14.533 1.09201 13.5399 0.62033 12.4419C0.148649 11.3438 -0.0996274 10.1629 -0.110012 8.96785C-0.120396 7.77284 0.107319 6.58772 0.559847 5.48166C1.01238 4.37559 1.68065 3.37072 2.52569 2.52569C3.37072 1.68065 4.37559 1.01238 5.48166 0.559847C6.58772 0.107319 7.77284 -0.120396 8.96785 -0.110012C10.1629 -0.0996274 11.3438 0.148649 12.4419 0.62033C13.5399 1.09201 14.533 1.77765 15.3632 2.63724C17.0027 4.33466 17.9098 6.60808 17.8893 8.96785C17.8688 11.3276 16.9223 13.5849 15.2536 15.2536C13.5849 16.9223 11.3276 17.8688 8.96785 17.8893C6.60808 17.9098 4.33466 17.0027 2.63724 15.3632ZM10.2602 9.00024L12.8072 6.45324L11.5382 5.18424L9.00024 7.73124L6.45324 5.18424L5.18424 6.45324L7.73124 9.00024L5.18424 11.5472L6.45324 12.8162L9.00024 10.2692L11.5472 12.8162L12.8162 11.5472L10.2692 9.00024H10.2602Z"
                                        fill="#E1473D" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_3127_6790">
                                        <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col justify-start items-start">
                        <input class="hidden" id="image" type="file" accept="image/png, image/jpeg"/>
                        <button type="button" onclick="openFolder()" id="imageBtn" class="border px-2 py-1 rounded-lg text-black-10 text-sm font-bold">Upload Photo</button>
                        <span class="text-[#A7A7A7] text-xs font-medium">At least 256 x 256 PNG pr JPG file.</span>
                    </div>
                </div>

                <div class="flex space-x-5 w-full  justify-between">
                    <div class="flex flex-col mb-2 w-[48%]">
                        <span class="text-black-10 text-xs font-semibold mb-1">Last name</span>
                        <input
                            class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                            placeholder="Enter your lastname" />
                    </div>
                    <div class="flex flex-col mb-2  w-[48%]">
                        <span class="text-black-10 text-xs font-semibold mb-1">First name</span>
                        <input
                            class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                            placeholder="Enter you firstname" />
                    </div>
                </div>
                <div class="flex flex-col mb-2  w-full">
                    <span class="text-black-10 text-xs font-semibold mb-1">Company Name</span>
                    <input class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                           placeholder="Enter company name" />
                </div>
                <div class="flex flex-col mb-2  w-full">
                    <span class="text-black-10 text-xs font-semibold mb-1">Company Email</span>
                    <input class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                           placeholder="Enter email address" />
                </div>
                <div class="flex space-x-5 w-full  justify-between">
                    <div class="flex flex-col mb-2 w-[60%]">
                        <span class="text-black-10 text-xs font-semibold mb-1">Phone Number</span>
                        <input
                            class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                            placeholder="Enter phone" />
                    </div>
                    <div class="flex flex-col mb-2  w-[38%]">
                        <span class="text-black-10 text-xs font-semibold mb-1">Zip Code</span>
                        <input
                            class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                            placeholder="Enter zipcode" />
                    </div>
                </div>
                <div class="flex flex-col mb-2  w-full">
                    <span class="text-black-10 text-xs font-semibold mb-1">Business Description</span>
                    <input class="p-4 border-[0.5px] rounded-lg outline-none border-gray-10 focus:border-brand-0 "
                           placeholder="Enter business description" />
                </div>
                <div class="flex flex-col mb-5">
                    <span class="text-black-10 text-xs font-semibold mb-1">Business category</span>
                    <select
                        class="p-5 rounded-lg border-gray-10 bg-white-0  outline-none focus:border-brand-0 border-[0.5px]">
                        <option>Logistics</option>
                        <option>Tech</option>
                        <option>Sales</option>
                    </select>
                </div>
                <button
                    class="bg-[#3984E6] p-4 border-none w-full rounded-lg cursor-pointer text-white-0 font-semibold text-base text-center">
                    <span>Save Changes</span>
                </button>

            </form>
        </div>

    </div>
@endsection
