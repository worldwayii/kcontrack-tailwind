{{--@extends('layouts.company-dashboard')--}}

{{--@section('meta-title', 'Employee | Scheduler')--}}
{{--@section('page-title', 'Employee | Scheduler')--}}
<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.header')

<body class="bg-white-20 text-[Montserrat]">
@include('layouts.partials.nav')
<div class="flex z-20 mt-2 md:mt-0">
    @include('layouts.partials.mobile-nav')
    <div class="relative z-10 w-[calc(100vw-10px)] mx-[5px] mt-[10px] rounded-md p-[20px] space-y-[20px] bg-[#fff]">
        <div id="row_1" class="flex flex-col justify-between h-[40px] h-fit space-y-[20px] md:flex-row">
            <div>
                <div class="font-medium text-[20px]">Scheduler</div>
                <div class="text-[#1A73E8] text-[10px]">Dashboard</div>
            </div>
            <div class="flex">
                <div id="create_schedule"
                     class="flex bg-gradient-to-b from-[#092C86] via-[#092C86] to-[#F828BE] text-[white] w-[fit] p-[5px] rounded cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z" fill="white" />
                    </svg> Create Schedule
                </div>
                <div id="publish" class="cursor-pointer p-[5px] bg-[#3984E6] text-[white] ml-[10px] rounded ">
                    Publish
                </div>
            </div>
        </div>
        <div id="row_2" class="flex flex-wrap items-center justify-between relative space-y-[20px]">
            <div class="flex">
                <div
                    class=" flex items-center space-x-2 border-solid border border-grey-70 p-1 rounded-md bg-white-0 ">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2758_2583)">
                            <path
                                d="M7.60884 2.24412C8.57156 2.24324 9.51292 2.52792 10.3138 3.06214C11.1147 3.59636 11.7392 4.35612 12.1082 5.24531C12.4772 6.1345 12.5743 7.11316 12.387 8.0575C12.1997 9.00183 11.7365 9.8694 11.0561 10.5505C10.3757 11.2315 9.50852 11.6955 8.56436 11.8836C7.62019 12.0718 6.64144 11.9756 5.75192 11.6074C4.86239 11.2392 4.10206 10.6154 3.5671 9.81502C3.03215 9.01461 2.74661 8.07351 2.74661 7.11079C2.75245 5.82263 3.26645 4.58884 4.17691 3.67755C5.08736 2.76626 6.32069 2.25113 7.60884 2.24412ZM7.60884 1.33301C6.4661 1.33301 5.34902 1.67187 4.39887 2.30674C3.44872 2.94161 2.70817 3.84397 2.27086 4.89973C1.83356 5.95548 1.71914 7.1172 1.94208 8.23798C2.16501 9.35875 2.71529 10.3883 3.52333 11.1963C4.33137 12.0043 5.36087 12.5546 6.48165 12.7775C7.60243 13.0005 8.76414 12.8861 9.8199 12.4488C10.8756 12.0115 11.778 11.2709 12.4129 10.3207C13.0478 9.3706 13.3866 8.25352 13.3866 7.11079C13.3866 5.57842 12.7779 4.10882 11.6943 3.02528C10.6108 1.94174 9.1412 1.33301 7.60884 1.33301Z"
                                fill="#8C8C8C"></path>
                            <path
                                d="M15.9067 14.7958L12.6311 11.498L12 12.1247L15.2756 15.4225C15.3167 15.4639 15.3656 15.4969 15.4195 15.5194C15.4734 15.5419 15.5311 15.5536 15.5895 15.5538C15.6479 15.5541 15.7058 15.5428 15.7598 15.5206C15.8139 15.4984 15.863 15.4659 15.9044 15.4247C15.9459 15.3836 15.9788 15.3347 16.0014 15.2808C16.0239 15.2269 16.0356 15.1691 16.0358 15.1107C16.036 15.0523 16.0247 14.9945 16.0026 14.9404C15.9804 14.8864 15.9478 14.8373 15.9067 14.7958Z"
                                fill="#8C8C8C"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_2758_2583">
                                <rect width="16" height="16" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <input placeholder="Search Employee">
                </div>
                <div onmouseover="dropFilter()" onmouseout="rowFilter()" class="cursor-pointer">
                    <div
                        class="ml-[10px] p-[5px] text-[#80868C] bg-[#FFF] border-[1px] rounded-md items-center hidden md:flex">
                        <div id="filter__by">Filter By</div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                <path d="M7.99867 11.3333L12.6653 6H3.332L7.99867 11.3333Z" fill="#80868C" />
                            </svg>
                        </div>
                    </div>
                    <div id="filter"
                         class="h-[0] invisible overflow-hidden  px-[23px] border-[1px] bg-[#fff] absolute text-[#4F4F4F] text-[12px] ml-[10px] flex flex-col space-y-[10px]">
                        <div onclick="select_filter(this)" class="cursor-pointer">Day</div>
                        <div onclick="select_filter(this)" class="cursor-pointer">Week</div>
                        <div onclick="select_filter(this)" class="cursor-pointer">Month</div>
                        <div onclick="select_filter(this)" class="cursor-pointer">Role</div>
                    </div>
                </div>
                <div
                    class="flex ml-[10px] p-[5px] text-[#80868C] bg-[#FFF] border-[1px] rounded-md items-center md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12" fill="none">
                        <path
                            d="M18.4375 2.5625H1.5625C1.31386 2.5625 1.0754 2.46373 0.899587 2.28791C0.723772 2.1121 0.625 1.87364 0.625 1.625C0.625 1.37636 0.723772 1.1379 0.899587 0.962087C1.0754 0.786272 1.31386 0.6875 1.5625 0.6875H18.4375C18.6861 0.6875 18.9246 0.786272 19.1004 0.962087C19.2762 1.1379 19.375 1.37636 19.375 1.625C19.375 1.87364 19.2762 2.1121 19.1004 2.28791C18.9246 2.46373 18.6861 2.5625 18.4375 2.5625ZM15.3125 6.9375H4.6875C4.43886 6.9375 4.2004 6.83873 4.02459 6.66291C3.84877 6.4871 3.75 6.24864 3.75 6C3.75 5.75136 3.84877 5.5129 4.02459 5.33709C4.2004 5.16127 4.43886 5.0625 4.6875 5.0625H15.3125C15.5611 5.0625 15.7996 5.16127 15.9754 5.33709C16.1512 5.5129 16.25 5.75136 16.25 6C16.25 6.24864 16.1512 6.4871 15.9754 6.66291C15.7996 6.83873 15.5611 6.9375 15.3125 6.9375ZM11.5625 11.3125H8.4375C8.18886 11.3125 7.9504 11.2137 7.77459 11.0379C7.59877 10.8621 7.5 10.6236 7.5 10.375C7.5 10.1264 7.59877 9.8879 7.77459 9.71209C7.9504 9.53627 8.18886 9.4375 8.4375 9.4375H11.5625C11.8111 9.4375 12.0496 9.53627 12.2254 9.71209C12.4012 9.8879 12.5 10.1264 12.5 10.375C12.5 10.6236 12.4012 10.8621 12.2254 11.0379C12.0496 11.2137 11.8111 11.3125 11.5625 11.3125Z"
                            fill="#2E2828" />
                    </svg>
                </div>
            </div>
            <div class="flex p-[5px] items-center border-[#3984E6] border-[1px] bg-[#3984e60d] rounded">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14" fill="none">
                    <path d="M7.44569e-07 7L7 0.874999L7 13.125L7.44569e-07 7Z" fill="#3984E6" />
                </svg>
                <span class="mx-[10px] text-[#3984E6]">Sept 04 - Sept 10, 2023</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14" fill="none">
                    <path d="M7 7L-5.35465e-07 0.874999L0 13.125L7 7Z" fill="#3984E6" />
                </svg>
            </div>
            <div class="flex text-[14px] flex-col">
                <div class="text-[#8C8C8C]">Amount Scheduled:</div>
                <div class="text-[#3984E6] font-medium ">62.00HRS</div>
            </div>
        </div>


        <div id="row_3_mobile" class="space-y-[10px] md:hidden">
            <div
                class="flex w-[100%] border-[1px] justify-between p-[10px] rounded-md text-[#80868C] text-[14px] font-medium text-center md:hidden">
                <div class="flex flex-col">
                    <span>Mon</span>
                    <span>04</span>
                </div>
                <div class="flex flex-col">
                    <span>Tue</span>
                    <span>05</span>
                </div>
                <div class="flex flex-col">
                    <span>Wed</span>
                    <span>06</span>
                </div>
                <div class="flex flex-col">
                    <span>Thur</span>
                    <span>07</span>
                </div>
                <div class="flex flex-col">
                    <span>Fri</span>
                    <span>08</span>
                </div>
                <div class="flex flex-col">
                    <span>Sat</span>
                    <span>09</span>
                </div>
                <div class="flex flex-col">
                    <span>Sun</span>
                    <span>10</span>
                </div>
            </div>
            <div class="flex justify-between items-center  bg-[#FBF0E9]">
                <div class="p-[10px] text-[#4F4F4F] flex">
                    <div class="p-[10px]">
                        <div class="bg-[green] w-[28px] h-[28px] rounded-full"></div>
                    </div>
                    <div class="text-left flex flex-col">
                        <div class="text-[13px]">Mary A</div>
                        <div class="text-[10px] text-[#3984E6]">05.50HRS</div>
                        <div class="text-[8px] flex"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                          viewBox="0 0 12 12" fill="none">
                                <path
                                    d="M0.204956 6.70504L2.99996 9.50004L3.70496 8.79004L0.914956 6.00004M11.12 2.79004L5.82996 8.08504L3.74996 6.00004L3.03496 6.70504L5.82996 9.50004L11.83 3.50004M8.99996 3.50004L8.29496 2.79004L5.11996 5.96504L5.82996 6.67004L8.99996 3.50004Z"
                                    fill="#40AD93" />
                            </svg>Delivered via Email</div>
                    </div>
                </div>
                <div>
                    <div class="hover:border-[1px] p-[10px]"><span>7am - 12pm</span> <br> <span>CASHIER</span></div>
                </div>
                <div class="p-[10px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M5 10C3.9 10 3 10.9 3 12C3 13.1 3.9 14 5 14C6.1 14 7 13.1 7 12C7 10.9 6.1 10 5 10ZM19 10C17.9 10 17 10.9 17 12C17 13.1 17.9 14 19 14C20.1 14 21 13.1 21 12C21 10.9 20.1 10 19 10ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                            fill="#80868C" />
                    </svg>
                </div>
            </div>
            <div class="flex justify-between items-center  bg-[#D9E3FC]">
                <div class="p-[10px] text-[#4F4F4F] flex">
                    <div class="p-[10px]">
                        <div class="bg-[green] w-[28px] h-[28px] rounded-full"></div>
                    </div>
                    <div class="text-left flex flex-col">
                        <div class="text-[13px]">Mary A</div>
                        <div class="text-[10px] text-[#3984E6]">05.50HRS</div>
                        <div class="text-[8px] flex"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                          viewBox="0 0 12 12" fill="none">
                                <path
                                    d="M0.204956 6.70504L2.99996 9.50004L3.70496 8.79004L0.914956 6.00004M11.12 2.79004L5.82996 8.08504L3.74996 6.00004L3.03496 6.70504L5.82996 9.50004L11.83 3.50004M8.99996 3.50004L8.29496 2.79004L5.11996 5.96504L5.82996 6.67004L8.99996 3.50004Z"
                                    fill="#40AD93" />
                            </svg>Delivered via Email</div>
                    </div>
                </div>
                <div>
                    <div class="hover:border-[1px] p-[10px]"><span>7am - 12pm</span> <br> <span>CASHIER</span></div>
                </div>
                <div class="p-[10px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M5 10C3.9 10 3 10.9 3 12C3 13.1 3.9 14 5 14C6.1 14 7 13.1 7 12C7 10.9 6.1 10 5 10ZM19 10C17.9 10 17 10.9 17 12C17 13.1 17.9 14 19 14C20.1 14 21 13.1 21 12C21 10.9 20.1 10 19 10ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                            fill="#80868C" />
                    </svg>
                </div>
            </div>
        </div>
        <div id="row_3">
            <table id="table" class="text-xm text-center w-[100%] mt-[10px] hidden md:table w-[100%]">



            </table>
        </div>
        <div id="row_4">
            <div
                class="flex border-[#3984E6] border-[1px] w-fit p-[10px] bg-[#3984e60d] rounded text-[#3984E6] text-xs hover:bg-[#3984e628] mt-[20px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                        d="M15.8333 10.8337H10.8333V15.8337H9.16667V10.8337H4.16667V9.16699H9.16667V4.16699H10.8333V9.16699H15.8333V10.8337Z"
                        fill="#3984E6" />
                </svg>
                <p>Add Employees</p>
            </div>
            <div class="mt-[30px] text-[#80868C]">
                <p>Employee role indicators</p>
                <ul>
                    <li class="flex items-center ">
                        <div class="w-[12px] mr-[10px] h-[12px] border-[1px] border-[#8C9FCE] bg-[#D9E3FC]"></div>
                        Barista
                    </li>
                    <li class="flex items-center ">
                        <div class="w-[12px] mr-[10px] h-[12px] border-[1px] border-[#7AB6A7] bg-[#DAF5EE]"></div>
                        Salesperson
                    </li>
                    <li class="flex items-center ">
                        <div class="w-[12px] mr-[10px] h-[12px] border-[1px] border-[#DEA59F] bg-[#F8DAD7]"></div>
                        Chef
                    </li>
                    <li class="flex items-center ">
                        <div class="w-[12px] mr-[10px] h-[12px] border-[1px] border-[#E3C1AA] bg-[#FBF0E9]"></div>
                        Cashier
                    </li>
                    <li class="flex items-center ">
                        <div class="w-[12px] mr-[10px] h-[12px] border-[1px] border-[#B37BB3] bg-[#F8E4F8]"></div>
                        Cleaner
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="back"
         class="fixed z-40 top-0 w-[100vw] h-[100vh] bg-[#00000033] items-center backdrop-blur-[3.5px] overflow-scroll invisible duration-100">
        <form id="create_schedule_popup"
              class="w-[372px] bg-[#F9F9F9] m-auto mt-[6vh] rounded-[16px] p-[24px] flex flex-col space-y-[24px] scale-[0.1] duration-100">
            <div id="Create Schedule" class="flex justify-between">
                <div class="font-semibold text-[20px]">
                    Create Schedule
                </div>
                <div id="close_schedule" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
                        <path d="M9.33337 9.83301L22.6667 23.1663M9.33337 23.1663L22.6667 9.83301" stroke="#828282"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col space-y-[12px]">
                <div id="row_1">
                    <div class="text-[#4F4F4F] text-[12px] font-semibold">Select employees</div>
                    <div>
                        <select name="'employee" id="networks"
                                class="w-[320px] text-[11px] text-[#A7A7A7] p-[10px] border-[0.7px] border-[#E6E6E6] rounded">
                            <option value="" selected>Select</option>
                            <option value=" >Mary A">Mary A</option>
                            <option value="Shelly K">Shelly K</option>
                            <option value=" Marc A">Marc A</option>
                            <option value=" Alexandre P">Alexandre P.</option>
                            <option value=" Annie E">Annie E</option>
                        </select>
                    </div>
                </div>
                <div id="row_2" class="flex justify-between items-center">
                    <div>
                        <div class="font-semibold text-[11px]">Time Frame</div>
                        <div class="text-[11px] space-x-2 text-[#A7A7A7] flex ">
                            <input name="start" title="Use employee set availability time?"
                                   class=" p-[10px] border-[0.7px] text-center w-[90px] border-[#E6E6E6] rounded-md"
                                   placeholder="09:00 AM" type="text">
                            <input name="finish" title="Use employee set availability time?"
                                   class=" p-[10px] border-[0.7px] text-center w-[90px] border-[#E6E6E6] rounded-md"
                                   placeholder="09:00 AM" type="text">
                        </div>
                    </div>
                    <div class="px-[10px]">
                        <div class="font-semibold text-[12px]">Breaks</div>
                        <div>
                            <select name="break" id=""
                                    class="text-[11px] text-[#A7A7A7] p-[10px] border-[0.7px] border-[#E6E6E6] rounded">
                                <option value="10 mins">10 mins</option>
                                <option value="20 mins">20 mins</option>
                                <option value="30 mins" selected>30 mins</option>
                                <option value="40 mins">40 mins</option>
                                <option value="50 mins">50 mins</option>
                                <option value="60 mins">60 mins</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div id="row_3">
                    <div class="font-semibold text-[12px]">Role Selection</div>
                    <div class="flex justify-between ">
                        <div class="w-[75%]">
                            <select id=""
                                    class="text-[11px] text-[#A7A7A7] p-[10px] border-[0.7px] border-[#E6E6E6] rounded w-[90%]">
                                <option value="" selected>Select</option>
                                <option value="Barista">Barista</option>
                                <option value="Salesperson">Salesperson</option>
                                <option value="Chef">Chef</option>
                                <option value="Cashier">Cashier</option>
                                <option value="Cleaner">Cleaner</option>
                            </select>
                        </div>
                        <div onmouseover="keep()" onmouseout="leave()" class="">
                            <div
                                class="flex items-center space-x-2 w-[100%] bg-[#FFF] p-[3px] border-[0.7px] border-[#E6E6E6] rounded">
                                <div>
                                    <div id="roleColor"
                                         class="w-[27px] h-[27px] bg-[#F8DAD7]  border-[#DEA59F] border-[1px] rounded-md">
                                    </div>
                                </div>
                                <div onmouseover="keep()" onmouseout="leave()" class="cursor-pointer"> <svg
                                        xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                        viewBox="0 0 21 21" fill="none">
                                        <path
                                            d="M3.80783 7.5583C3.86588 7.50019 3.93481 7.45409 4.01068 7.42263C4.08656 7.39118 4.16788 7.37499 4.25002 7.37499C4.33215 7.37499 4.41348 7.39118 4.48936 7.42263C4.56523 7.45409 4.63416 7.50019 4.69221 7.5583L10.5 13.3669L16.3078 7.5583C16.4251 7.44102 16.5842 7.37514 16.75 7.37514C16.9159 7.37514 17.0749 7.44102 17.1922 7.5583C17.3095 7.67557 17.3754 7.83463 17.3754 8.00048C17.3754 8.16634 17.3095 8.3254 17.1922 8.44267L10.9422 14.6927C10.8842 14.7508 10.8152 14.7969 10.7394 14.8283C10.6635 14.8598 10.5822 14.876 10.5 14.876C10.4179 14.876 10.3366 14.8598 10.2607 14.8283C10.1848 14.7969 10.1159 14.7508 10.0578 14.6927L3.80783 8.44267C3.74972 8.38463 3.70362 8.3157 3.67217 8.23982C3.64072 8.16395 3.62453 8.08262 3.62453 8.00048C3.62453 7.91835 3.64072 7.83702 3.67217 7.76115C3.70362 7.68527 3.74972 7.61634 3.80783 7.5583Z"
                                            fill="#828282" />
                                    </svg></div>
                            </div>
                            <div id="showColor" style="visibility: hidden;"
                                 class="overflow-hidden w-[77px] h-[0px] absolute bg-[#fff] rounded-lg border-[1px] border-[#EDEFF4] flex flex-col flex-wrap justify-around">
                                <div onclick="changeRole(this)"
                                     class="w-[20px] cursor-pointer h-[20px] rounded border-[1px] border-[#8C9FCE]"
                                     style="border-color:#8C9FCE; background: #D9E3FC;"></div>
                                <div onclick="changeRole(this)"
                                     class="w-[20px] cursor-pointer h-[20px] rounded border-[1px] bg-[#DAF5EE] border-[#7AB6A7]">
                                </div>
                                <div onclick="changeRole(this)"
                                     class="w-[20px] cursor-pointer h-[20px] bg-[#F8DAD7] rounded border-[1px] border-[#DEA59F]">
                                </div>
                                <div onclick="changeRole(this)"
                                     class="w-[20px] cursor-pointer h-[20px] rounded border-[1px] border-[#E3C1AA]"
                                     style="border-color:#E3C1AA; background: #FBF0E9;"></div>
                                <div onclick="changeRole(this)"
                                     class="w-[20px] cursor-pointer h-[20px] rounded border-[1px] border-[#B37BB3]"
                                     style="border-color:#B37BB3; background: #F8E4F8;"></div>
                                <div onclick="changeRole(this)"
                                     class="w-[20px] cursor-pointer h-[20px] rounded border-[1px] border-[#B37BB3]"
                                     style="border-color:#B37BB3; background: #FBF0E9;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="row_4">
                    <div class="font-semibold text-[12px] ">Assign days:</div>

                    <div class="flex justify-between text-[Montserrat] font-semibold">
                        <label>
                            <input class="peer appearance-none" type="radio" name="day" value="monday" />
                            <span
                                class="cursor-pointer bg-[#FFF] border-[1px] peer-checked:rounded-[8px] peer-checked:bg-gradient-to-r from-[#092C86] via-[#092C86] to-[#F828BE] peer-checked:text-white-0 text-black-10 rounded border-[#E6E6E6] px-[15px] py-[5px] ">M</span>
                        </label>
                        <label>
                            <input class="peer appearance-none" type="radio" name="day" value="tuesday" />
                            <span
                                class="cursor-pointer bg-[#FFF] border-[1px] peer-checked:rounded-[8px] peer-checked:bg-gradient-to-r from-[#092C86] via-[#092C86] to-[#F828BE] peer-checked:text-white-0 text-black-10 rounded border-[#E6E6E6] px-[15px] py-[5px] ">T</span>
                        </label>

                        <label>
                            <input class="peer appearance-none" type="radio" name="day" value="wednessday" />
                            <span
                                class="cursor-pointer bg-[#FFF] border-[1px] peer-checked:rounded-[8px] peer-checked:bg-gradient-to-r from-[#092C86] via-[#092C86] to-[#F828BE] peer-checked:text-white-0 text-black-10 rounded border-[#E6E6E6] px-[15px] py-[5px] ">W</span>
                        </label>

                        <label>
                            <input class="peer appearance-none" type="radio" name="day" value="thursday" />
                            <span
                                class="cursor-pointer bg-[#FFF] border-[1px] peer-checked:rounded-[8px] peer-checked:bg-gradient-to-r from-[#092C86] via-[#092C86] to-[#F828BE] peer-checked:text-white-0 text-black-10 rounded border-[#E6E6E6] px-[15px] py-[5px] ">T</span>
                        </label>

                        <label>
                            <input class="peer appearance-none" type="radio" name="day" value="friday" />
                            <span
                                class="cursor-pointer bg-[#FFF] border-[1px] peer-checked:rounded-[8px] peer-checked:bg-gradient-to-r from-[#092C86] via-[#092C86] to-[#F828BE] peer-checked:text-white-0 text-black-10 rounded border-[#E6E6E6] px-[15px] py-[5px] ">F</span>
                        </label>

                        <label>
                            <input class="peer appearance-none" type="radio" name="day" value="saturday" />
                            <span
                                class="cursor-pointer bg-[#FFF] border-[1px] peer-checked:rounded-[8px] peer-checked:bg-gradient-to-r from-[#092C86] via-[#092C86] to-[#F828BE] peer-checked:text-white-0 text-black-10 rounded border-[#E6E6E6] px-[15px] py-[5px] ">S</span>
                        </label>

                        <label>
                            <input class="peer appearance-none" type="radio" name="day" value="sunday" />
                            <span
                                class="cursor-pointer bg-[#FFF] border-[1px] peer-checked:rounded-[8px] peer-checked:bg-gradient-to-r from-[#092C86] via-[#092C86] to-[#F828BE] peer-checked:text-white-0 text-black-10 rounded border-[#E6E6E6] px-[15px] py-[5px] ">S</span>
                        </label>



                    </div>
                </div>
                <div id="row_5">
                    <div class="font-semibold text-[12px]">Shift Notes:</div>
                    <textarea
                        placeholder="Leave a note for your employee, like special instructions or the address of the job site and they will see it when they clock in"
                        onclick="comment(this)" style="color: #C4C4C4;"
                        class="w-[320px] h-[77px] px-[10px] py-[6px] rounded border-[0.7px] border-[#E6E6E6] text-[10px] font-medium">
.
                    </textarea>
                </div>
            </div>
            <button id="add"
                    class="bg-[#3984E6] p-[10px] text-[white] rounded text-center font-bold hover:cursor-pointer">
                Add
            </button>
            <div id="edit" class="flex justify-between hidden">
                <div id="delete"
                     class="bg-[#fff] p-[10px] text-[#3984E6] text-[16px] rounded text-center font-bold hover:cursor-pointer border-[1px] border-[#828282] rounded-lg px-[50px]">
                    Delete</div>
                <div id="save"
                     class="bg-[#3984E6] p-[10px] text-[white] rounded-lg text-center font-bold hover:cursor-pointer px-[50px]">
                    Save</div>
            </div>
        </form>
    </div>
    <div id="back_2"
         class="fixed z-40 top-0 w-[100vw] h-[100vh] bg-[#00000033] items-center backdrop-blur-[3.5px] overflow-scroll invisible duration-100">
        <div id="publish_popup"
             class="w-[372px] bg-[#F9F9F9] m-auto mt-[6vh] rounded-[16px] p-[24px] flex flex-col space-y-[24px] scale-[0.1] duration-100">
            <div class="flex justify-between items-center">
                <div class="font-semibold text-[20px]">Summary</div>
                <div id="close_publish" class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M1.33337 1.33301L14.6667 14.6663M1.33337 14.6663L14.6667 1.33301" stroke="#828282"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
            </div>
            <div>
                <div class="text-[12px] font-semibold">Employee</div>
                <p></p>
            </div>
            <div>
                <div class="text-[12px] font-semibold">Time Frame</div>
                <div>###</div>
            </div>
            <div>
                <div class="text-[12px] font-semibold">Breaks</div>
                <div>###</div>
            </div>
            <div>
                <div class="text-[12px] font-semibold">Role Selection</div>
                <div>
                    <div>###</div>
                    <div>###</div>
                </div>
            </div>
            <div>
                <div class="text-[12px] font-semibold">Days Assigned</div>
                <div>###</div>
            </div>
            <div>
                <div class="text-[12px] font-semibold">Shift Notes</div>
                <div>###</div>
            </div>
            <div id="publish_nw"
                 class="bg-[#3984E6] p-[10px] text-[white] rounded text-center font-bold hover:cursor-pointer">
                Publish
            </div>
            <div id="cancel"
                 class="bg-[#fff] p-[10px] text-[#3984E6] text-[16px] rounded text-center font-bold hover:cursor-pointer">
                Cancel
            </div>
        </div>
    </div>

</div>
</body>
<script>
    /*FOR OPENING AND CLOSING "CREATE SCHEDULE MODAL*/
    let createSchedule = document.getElementById("create_schedule")
    let back = document.getElementById('back')
    let popup = document.getElementById("create_schedule_popup")
    popup.style.transition = '0.3s'
    createSchedule.addEventListener("click", () => {
        back.style.visibility = 'visible'
        popup.style.scale = "10"
        let close = document.getElementById("close_schedule")
        close.addEventListener('click', () => {
            back.style.visibility = 'hidden'
            popup.style.transition = '0.1s'
            popup.style.scale = "0.1"
        })
    })

    /*FOR TOGGLING "PUBLISH* IN SCHEDULER MODAL*/
    let publish = document.getElementById("publish")
    let back2 = document.getElementById('back_2')
    let publish_popup = document.getElementById("publish_popup")
    let cancel_publish = document.getElementById("cancel")
    publish_popup.style.transition = '0.3s'
    publish.addEventListener("click", () => {
        back2.style.visibility = 'visible'
        publish_popup.style.scale = "10"
        let close2 = document.getElementById("close_publish")
        close2.addEventListener('click', () => {
            back2.style.visibility = 'hidden'
            publish_popup.style.transition = '0.1s'
            publish_popup.style.scale = "0.1"
        })
        cancel_publish.addEventListener('click', () => {
            back2.style.visibility = 'hidden'
            publish_popup.style.transition = '0.1s'
            publish_popup.style.scale = "0.1"
        })
    })


    /*TOGGLE ROLE COVER*/
    let showColor = document.getElementById('showColor')
    showColor.style.transition = '0.2s'
    function keep() {
        showColor.style.visibility = 'visible'
        showColor.style.height = '57px'
    }
    function leave() {
        showColor.style.visibility = 'hidden'
        showColor.style.height = '0px'
    }

    /*CHANGE ROLE COLOR*/
    function changeRole(x) {
        let change = document.getElementById('roleColor')
        change.style.background = x.style.background
        change.style.borderColor = x.style.borderColor
    }


    let filter_by = document.getElementById('filter')
    filter_by.style.transition = '0.2s'

    function dropFilter() {
        filter_by.style.visibility = 'visible'
        filter_by.style.height = 'fit-content'
    }

    function rowFilter() {
        filter_by.style.visibility = 'hidden'
        filter_by.style.height = '0px'
    }

    function select_filter(x) {
        let f = document.getElementById('filter__by')
        f.innerHTML = x.innerHTML
    }



    function myFunction() {
        var element = document.getElementById("mobile_nav");
        element.classList.toggle("hidden");
        console.log({ element })
    }
    function openFolder() {
        let btn = document.getElementById("file");
        btn.click()

    }





    const table = document.getElementById('table');


    const users = [
        {
            name: 'Chuka C',
            hours: '5.5HRS',
            schedule: [
                {
                    date: '1',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '3',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '5',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '7',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
            ]
        },
        {
            name: 'Marvel B',
            hours: '5.5HRS',
            schedule: [
                {
                    date: '1',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '3',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '5',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '7',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
            ]
        },
        {
            name: 'Mary A',
            hours: '5.5HRS',
            schedule: [
                {
                    date: '1',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '3',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '5',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '7',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
            ]
        },
        {
            name: 'Kenneth A',
            hours: '5.5HRS',
            schedule: [
                {
                    date: '1',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '3',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '5',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '7',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
            ]
        },
        {
            name: 'Mary A',
            hours: '5.5HRS',
            schedule: [
                {
                    date: '1',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '3',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '5',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
                {
                    date: '7',
                    duration: '7am - 12pm',
                    role: 'CASHIER'
                },
            ]
        },
    ];

    table.innerHTML = `
    <tr class="text-[#A7A7A7]">
                        <th class="p-[10px]  bg-[#FAFAFA]  hover:text-[#3984E6] text-[#4F4F4F]">Employees</th>
                        <th class="p-[10px] bg-[#FAFAFA] hover:bg-[#3984e60d] cursor-pointer text-[#A7A7A7] hover:text-[#3984E6] "><div class='flex justify-center '>
                           <div>
                            <p class='text-xs font-semibold'>Monday</p>
                            <p class="text-left text-[24px] font-medium">04</p></div>

                            </div>
                        </th>
                        <th class="p-[10px] bg-[#FAFAFA] hover:bg-[#3984e60d] cursor-pointer text-[#A7A7A7] hover:text-[#3984E6] "><div class='flex justify-center '>
                           <div>
                            <p class='text-xs font-semibold'>Tuesday</p>
                            <p class="text-left text-[24px] font-medium">05</p></div>

                            </div>
                        </th>
                        <th class="p-[10px] bg-[#3984e60d]  hover:bg-[#3984e60d] cursor-pointer text-[#3984E6] hover:text-[#3984E6] "><div class='flex justify-center '>
                          <div>
                            <p class='text-xs font-semibold'>Wednesday</p>
                            <p class="text-left text-[24px] font-medium">06</p>
                            </div>
                        </div>
                        </th>
                        <th class="p-[10px] bg-[#FAFAFA] hover:bg-[#3984e60d] cursor-pointer text-[#A7A7A7] hover:text-[#3984E6] "><div class='flex justify-center '>
                           <div>

                            <p class='text-xs font-semibold'>Thursday</p>
                            <p class="text-left text-[24px] font-medium">07</p></div>
                            </div>
                        </th>
                        <th class="p-[10px] bg-[#FAFAFA]  hover:bg-[#3984e60d] cursor-pointer text-[#A7A7A7] hover:text-[#3984E6] "><div class='flex justify-center '>
                           <div>

                            <p class='text-xs font-semibold'>Friday</p>
                            <p class="text-left text-[24px] font-medium">08</p></div>
                            </div>
                        </th>
                        <th class="p-[10px] bg-[#FAFAFA]  hover:bg-[#3984e60d] cursor-pointer text-[#A7A7A7] hover:text-[#3984E6] "><div class='flex justify-center '>
                           <div>
                            <p class='text-xs font-semibold'>Saturday</p>
                            <p class="text-left text-[24px] font-medium">09</p></div>

                            </div>
                        </th>
                        <th class="p-[10px] bg-[#FAFAFA] hover:bg-[#3984e60d] cursor-pointer text-[#A7A7A7] hover:text-[#3984E6] "><div class='flex justify-center '>
                           <div>

                            <p class='text-xs font-semibold'>Sunday</p>
                            <p class="text-left text-[24px] font-medium">10</p>
                            </div>
                            </div>
                        </th>

                    </tr>

    `
    for (let i = 0; i < users.length; i++)
        table.innerHTML += `
    <tr class="text-xs text-[4F4F4F]">
                        <td class="p-[10px] text-[#4F4F4F] flex border border-collapse ">
                            <div class="p-[10px]">
                                <div class="bg-[green] w-[28px] h-[28px] rounded-full"></div>
                            </div>
                            <div class="text-left"> <span class="text-[13px]">${users[i].name}</span> <br> <span
                                    class="text-[10px] text-[#3984E6]">${users[i].hours}</span> <br> <span
                                    class="text-[8px] flex"><svg xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="12" viewBox="0 0 12 12" fill="none">
                                        <path
                                            d="M0.204956 6.70504L2.99996 9.50004L3.70496 8.79004L0.914956 6.00004M11.12 2.79004L5.82996 8.08504L3.74996 6.00004L3.03496 6.70504L5.82996 9.50004L11.83 3.50004M8.99996 3.50004L8.29496 2.79004L5.11996 5.96504L5.82996 6.67004L8.99996 3.50004Z"
                                            fill="#40AD93" />
                                    </svg>Delivered via Email</span></div>
                        </td>
                        <td class='border border-collapse ' ondrop="drop(event)" ondragover="allowDrop(event)"><div class="hover:border-[1px] border-[#B37BB3] border-[1px] bg-[#FBF0E9] p-[10px]" id="one-${i}"
                                draggable="true" ondragstart="drag(event)">
                                <span class='text-[10px] font-bold'>7am -
                                    12pm</span> <br> <span class='text-[10px] font-medium'>CASHIER</span>
                            </div></td>
                        <td class='border border-collapse '  ondrop="drop(event)" ondragover="allowDrop(event)" class="hover:border-[1px]"></td>
                        <td class='border border-collapse '   ondrop="drop(event)" ondragover="allowDrop(event)" class="hover:border-[1px]"></td>
                        <td class='border border-collapse '   ondrop="drop(event)" ondragover="allowDrop(event)" class="hover:border-[1px]"></td>
                        <td class='border border-collapse '  ondrop="drop(event)" ondragover="allowDrop(event)" class="hover:border-[1px]"></td>
                        <td class='border border-collapse '  ondrop="drop(event)" ondragover="allowDrop(event)" class="hover:border-[1px]"></td>
                        <td class='border border-collapse '  ondrop="drop(event)" ondragover="allowDrop(event)" class="hover:border-[1px]"></td>
                    </tr>

    `

    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
        ev.preventDefault();
        if (!ev.target.hasChildNodes()) {
            var data = ev.dataTransfer.getData("text");
            let details = document.getElementById(data);
            if (ev.shiftKey) {
                let detailsClone = details.cloneNode(true);
                detailsClone.setAttribute('id', Date.now())
                ev.target.appendChild(detailsClone);

            } else {
                ev.target.appendChild(details);
            }
        }
    }
    // ${users.map((user) => '<tr class="text-xs text-"> <td class="  hover:border-[1px] p-[10px] text-[#4F4F4F] flex"> <div class="p-[10px]"> <div class="bg-[green] w-[28px] h-[28px] rounded-full"></div> </div><div class="text-left"> <span class="text-[13px]">Marc A</span> <br> <span class="text-[10px] text-[#3984E6]">15.00HRS</span> <br> <span class="text-[8px]">Delivered via SMS</span></div></td><td class="hover:border-[1px] "></td><td class="hover:border-[1px] bg-[#DAF5EE] border-[#7AB6A7] border-[1px] p-[10px] "><span>7am - 12pm</span> <br> <span>CASHIER</span></td> <td class="hover:border-[1px] bg-[#DAF5EE] border-[#7AB6A7] border-[1px] "><span>7am - 12pm</span> <br> <span>CASHIER</span></td> <td class="hover:border-[1px] bg-[#DAF5EE] border-[#7AB6A7] border-[1px] "><span>7am - 12pm</span> <br> <span>CASHIER</span></td> <td class=" hover:border-[1px]"></td><td class=" hover:border-[1px]"></td><td class=" hover:border-[1px]"></td></tr>')


</script>


</html>
