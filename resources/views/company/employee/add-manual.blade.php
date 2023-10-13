@extends('layouts.company-dashboard')

@section('meta-title', 'Add Employee | Manual')
@section('page-title', 'Add Employee | Manual')

@section('content')
<form class=" w-[100vw] md:w-[90vw] min-h-[90vh] md:me-[2vw] flex flex-col justify-between ">
    <div>

        <div class="flex space-x-4 p-2 bg-white-0 rounded-xl">
            <button class="py-2 px-4 bg-gray-50 rounded-lg">
                <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.83004 14C5.68065 14.0005 5.53304 13.9676 5.39806 13.9035C5.26308 13.8395 5.14416 13.7461 5.05004 13.63L0.220042 7.63003C0.07296 7.4511 -0.00744629 7.22666 -0.00744629 6.99503C-0.00744629 6.76341 0.07296 6.53896 0.220042 6.36003L5.22004 0.360032C5.38978 0.155815 5.63369 0.0273905 5.89812 0.0030108C6.16254 -0.0213689 6.42583 0.060293 6.63004 0.230032C6.83426 0.39977 6.96268 0.643682 6.98706 0.908108C7.01144 1.17253 6.92978 1.43581 6.76004 1.64003L2.29004 7.00003L6.61004 12.36C6.73233 12.5068 6.81 12.6856 6.83388 12.8751C6.85776 13.0647 6.82684 13.2571 6.74479 13.4296C6.66273 13.6021 6.53297 13.7475 6.37086 13.8486C6.20875 13.9497 6.02108 14.0023 5.83004 14Z"
                        fill="#828282" />
                </svg>
            </button>
            <div class="flex flex-col">
                        <span class="md:text-xl text-base text-black-10 font-semibold">
                            Add employee
                        </span>
                <span class="text-[#8D8D8D] md:text-xs text-[10px]">
                            Upload employees using CSV or input them manually.
                        </span>
            </div>

        </div>
        <div class="px-4 py-2 my-4 bg-white-0 rounded-xl">
            <input class="hidden" id="file" type="file" accept=".csv" />

            <div class="flex justify-between items-center">
                <span class="text-base font-semibold text-black-10">Upload CSV</span>
                <button class="bg-gray-50 rounded">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.17 5.00021C10.3194 4.9997 10.467 5.03268 10.602 5.0967C10.737 5.16073 10.8559 5.25419 10.95 5.37021L15.78 11.3702C15.9271 11.5491 16.0075 11.7736 16.0075 12.0052C16.0075 12.2368 15.9271 12.4613 15.78 12.6402L10.78 18.6402C10.6103 18.8444 10.3664 18.9729 10.1019 18.9972C9.8375 19.0216 9.57422 18.94 9.37 18.7702C9.16578 18.6005 9.03736 18.3566 9.01298 18.0921C8.9886 17.8277 9.07026 17.5644 9.24 17.3602L13.71 12.0002L9.39 6.64021C9.26772 6.49343 9.19004 6.31469 9.16616 6.12514C9.14228 5.93559 9.1732 5.74316 9.25525 5.57064C9.33731 5.39811 9.46707 5.2527 9.62918 5.15161C9.79129 5.05052 9.97896 4.99798 10.17 5.00021Z"
                            fill="#828282" />
                    </svg>
                </button>

            </div>


        </div>
        <div class="px-4 py-2 my-4 bg-white-0 rounded-lg">
            <div class="flex justify-between items-center">
                <span class="text-base font-semibold text-black-10">Upload Employee Manually</span>
                <button class="bg-gray-50 rounded">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 10.1701C19.0005 10.3195 18.9675 10.4671 18.9035 10.6021C18.8395 10.737 18.746 10.856 18.63 10.9501L12.63 15.7801C12.4511 15.9272 12.2266 16.0076 11.995 16.0076C11.7634 16.0076 11.5389 15.9272 11.36 15.7801L5.36 10.7801C5.15578 10.6103 5.02736 10.3664 5.00298 10.102C4.9786 9.83758 5.06026 9.5743 5.23 9.37008C5.39974 9.16586 5.64365 9.03744 5.90808 9.01306C6.1725 8.98868 6.43578 9.07034 6.64 9.24008L12 13.7101L17.36 9.39008C17.5068 9.2678 17.6855 9.19012 17.8751 9.16624C18.0646 9.14236 18.257 9.17328 18.4296 9.25533C18.6021 9.33739 18.7475 9.46715 18.8486 9.62926C18.9497 9.79137 19.0022 9.97905 19 10.1701Z"
                            fill="#828282" />
                    </svg>
                </button>
            </div>
            <div class="flex justify-center ">
                <div class="md:w-[40%]">
                    <div class="flex justify-between bg-white-20 p-2 rounded items-center w-[100%]">
                        <div class="flex items-center space-x-2">
                            <span class="text-xs text-black-10 font-semibold">Employee information 1</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M0 8C0 5.87827 0.842855 3.84344 2.34315 2.34315C3.84344 0.842855 5.87827 0 8 0C10.1217 0 12.1566 0.842855 13.6569 2.34315C15.1571 3.84344 16 5.87827 16 8C16 10.1217 15.1571 12.1566 13.6569 13.6569C12.1566 15.1571 10.1217 16 8 16C5.87827 16 3.84344 15.1571 2.34315 13.6569C0.842855 12.1566 0 10.1217 0 8ZM7.54347 11.424L12.1493 5.66613L11.3173 5.00053L7.38987 9.90827L4.608 7.5904L3.92533 8.4096L7.54347 11.4251V11.424Z"
                                      fill="#40AD93" />
                            </svg>
                        </div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.05781 16.692C6.9997 16.634 6.9536 16.5651 6.92215 16.4892C6.89069 16.4133 6.87451 16.332 6.87451 16.2499C6.87451 16.1677 6.89069 16.0864 6.92215 16.0105C6.9536 15.9346 6.9997 15.8657 7.05781 15.8077L12.8664 9.99986L7.05781 4.19205C6.94053 4.07477 6.87465 3.91571 6.87465 3.74986C6.87465 3.58401 6.94053 3.42495 7.05781 3.30767C7.17508 3.1904 7.33414 3.12451 7.5 3.12451C7.66585 3.12451 7.82491 3.1904 7.94218 3.30767L14.1922 9.55767C14.2503 9.61572 14.2964 9.68465 14.3278 9.76052C14.3593 9.8364 14.3755 9.91772 14.3755 9.99986C14.3755 10.082 14.3593 10.1633 14.3278 10.2392C14.2964 10.3151 14.2503 10.384 14.1922 10.442L7.94218 16.692C7.88414 16.7502 7.81521 16.7963 7.73933 16.8277C7.66346 16.8592 7.58213 16.8754 7.5 16.8754C7.41786 16.8754 7.33653 16.8592 7.26066 16.8277C7.18479 16.7963 7.11585 16.7502 7.05781 16.692Z"
                                fill="#828282" />
                        </svg>
                    </div>
                    <div class="flex justify-between mt-2 bg-white-20 p-2 rounded items-center w-[100%]">
                        <div class="flex items-center space-x-2">
                            <span class="text-xs text-black-10 font-semibold">Employee information 2</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M0 8C0 5.87827 0.842855 3.84344 2.34315 2.34315C3.84344 0.842855 5.87827 0 8 0C10.1217 0 12.1566 0.842855 13.6569 2.34315C15.1571 3.84344 16 5.87827 16 8C16 10.1217 15.1571 12.1566 13.6569 13.6569C12.1566 15.1571 10.1217 16 8 16C5.87827 16 3.84344 15.1571 2.34315 13.6569C0.842855 12.1566 0 10.1217 0 8ZM7.54347 11.424L12.1493 5.66613L11.3173 5.00053L7.38987 9.90827L4.608 7.5904L3.92533 8.4096L7.54347 11.4251V11.424Z"
                                      fill="#40AD93" />
                            </svg>
                        </div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.05781 16.692C6.9997 16.634 6.9536 16.5651 6.92215 16.4892C6.89069 16.4133 6.87451 16.332 6.87451 16.2499C6.87451 16.1677 6.89069 16.0864 6.92215 16.0105C6.9536 15.9346 6.9997 15.8657 7.05781 15.8077L12.8664 9.99986L7.05781 4.19205C6.94053 4.07477 6.87465 3.91571 6.87465 3.74986C6.87465 3.58401 6.94053 3.42495 7.05781 3.30767C7.17508 3.1904 7.33414 3.12451 7.5 3.12451C7.66585 3.12451 7.82491 3.1904 7.94218 3.30767L14.1922 9.55767C14.2503 9.61572 14.2964 9.68465 14.3278 9.76052C14.3593 9.8364 14.3755 9.91772 14.3755 9.99986C14.3755 10.082 14.3593 10.1633 14.3278 10.2392C14.2964 10.3151 14.2503 10.384 14.1922 10.442L7.94218 16.692C7.88414 16.7502 7.81521 16.7963 7.73933 16.8277C7.66346 16.8592 7.58213 16.8754 7.5 16.8754C7.41786 16.8754 7.33653 16.8592 7.26066 16.8277C7.18479 16.7963 7.11585 16.7502 7.05781 16.692Z"
                                fill="#828282" />
                        </svg>
                    </div>
                    <div class="w-full mt-2 bg-[#FAFAFA] rounded-lg">
                        <div
                            class="w-full rounded-t-xl flex justify-between items-center py-2 px-4 bg-[#F0F0F0]">
                            <span class="text-black-10 text-sm font-semibold">Employee information 3</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.30783 7.05781C3.36588 6.9997 3.43481 6.9536 3.51068 6.92215C3.58656 6.89069 3.66788 6.8745 3.75002 6.8745C3.83215 6.8745 3.91348 6.89069 3.98936 6.92215C4.06523 6.9536 4.13416 6.9997 4.19221 7.05781L10 12.8664L15.8078 7.05781C15.9251 6.94053 16.0842 6.87465 16.25 6.87465C16.4159 6.87465 16.5749 6.94053 16.6922 7.05781C16.8095 7.17508 16.8754 7.33414 16.8754 7.5C16.8754 7.66585 16.8095 7.82491 16.6922 7.94218L10.4422 14.1922C10.3842 14.2503 10.3152 14.2964 10.2394 14.3278C10.1635 14.3593 10.0822 14.3755 10 14.3755C9.91788 14.3755 9.83656 14.3593 9.76068 14.3278C9.68481 14.2964 9.61588 14.2503 9.55783 14.1922L3.30783 7.94218C3.24972 7.88414 3.20362 7.81521 3.17217 7.73933C3.14072 7.66346 3.12453 7.58213 3.12453 7.5C3.12453 7.41786 3.14072 7.33653 3.17217 7.26066C3.20362 7.18478 3.24972 7.11585 3.30783 7.05781Z"
                                    fill="#828282" />
                            </svg>
                        </div>
                        <div class="w-full pb-4">
                            <div class="flex justify-between w-full px-4">
                                <div class="w-[45%]">
                                    <span class="text-xs text-black-10">Last Name</span>
                                    <input class="border p-2 bg-white-0 rounded-lg text-[11px] w-full"
                                           placeholder="Enter your lastname" />
                                </div>
                                <div class="w-[45%]">
                                    <span class="text-xs text-black-10">First Name</span>
                                    <input class="border p-2 bg-white-0 rounded-lg text-[11px] w-full"
                                           placeholder="Enter your firstname" />
                                </div>
                            </div>
                            <div class="w-full px-4">
                                <span class="text-xs text-black-10">Employee Phone number</span>
                                <input class="border p-2 bg-white-0 rounded-lg text-[11px] w-full"
                                       placeholder="Enter your lastname" />
                            </div>
                            <div class="w-full px-4">
                                <span class="text-xs text-black-10">Employee Email Address</span>
                                <input class="border p-2 bg-white-0 rounded-lg text-[11px] w-full"
                                       placeholder="Enter your lastname" />
                            </div>
                            <div class="w-full px-4">
                                <span class="text-black-10 text-xs font-semibold mb-1">Business category</span>
                                <select
                                    class=" border p-2 bg-white-0 rounded-lg text-[11px] w-full border-gray-10 bg-white-0  outline-none focus:border-brand-0 border-[0.5px]">
                                    <option>Driver</option>
                                    <option>Cleaner</option>
                                    <option>Care giver</option>
                                </select>
                            </div>
                            <div class="w-full px-4">
                                <span class="text-black-10 text-xs font-semibold mb-1">Select hourly pay</span>
                                <select
                                    class=" border p-2 bg-white-0 rounded-lg text-[11px] w-full border-gray-10 bg-white-0  outline-none focus:border-brand-0 border-[0.5px]">
                                    <option>10 $/hr</option>
                                    <option>20 $/hr</option>
                                    <option>30 $/hr</option>
                                </select>
                            </div>
                            <div class="w-full px-4 flex justify-end mt-2">
                                <button class="text-[#1A73E8] text-sm font-semibold underline">
                                    + Add another employee
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <button class="bg-[#3984E6] text-white-0 py-1 md:w-[25%] w-[90%] rounded my-4">Done</button>

    </div>
</form>
@endsection
