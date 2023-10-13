@extends('layouts.company-dashboard')

@section('meta-title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<div class=" bg-white-0 w-[100vw] md:w-[90vw] h-[90vh] md:me-[2vw] rounded-xl">
    <div class="flex md:flex-col md:mx-8 items-center md:items-start justify-between mx-2 my-4  md:my-8">
        <span class="text-base md:text-xl text-black-10 font-semibold">Dashboard</span>
        <div class=" md:hidden flex items-center space-x-2 border-solid border border-grey-70 p-1 rounded-md bg-white-0 ">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2758_2583)">
                    <path
                        d="M7.60884 2.24412C8.57156 2.24324 9.51292 2.52792 10.3138 3.06214C11.1147 3.59636 11.7392 4.35612 12.1082 5.24531C12.4772 6.1345 12.5743 7.11316 12.387 8.0575C12.1997 9.00183 11.7365 9.8694 11.0561 10.5505C10.3757 11.2315 9.50852 11.6955 8.56436 11.8836C7.62019 12.0718 6.64144 11.9756 5.75192 11.6074C4.86239 11.2392 4.10206 10.6154 3.5671 9.81502C3.03215 9.01461 2.74661 8.07351 2.74661 7.11079C2.75245 5.82263 3.26645 4.58884 4.17691 3.67755C5.08736 2.76626 6.32069 2.25113 7.60884 2.24412ZM7.60884 1.33301C6.4661 1.33301 5.34902 1.67187 4.39887 2.30674C3.44872 2.94161 2.70817 3.84397 2.27086 4.89973C1.83356 5.95548 1.71914 7.1172 1.94208 8.23798C2.16501 9.35875 2.71529 10.3883 3.52333 11.1963C4.33137 12.0043 5.36087 12.5546 6.48165 12.7775C7.60243 13.0005 8.76414 12.8861 9.8199 12.4488C10.8756 12.0115 11.778 11.2709 12.4129 10.3207C13.0478 9.3706 13.3866 8.25352 13.3866 7.11079C13.3866 5.57842 12.7779 4.10882 11.6943 3.02528C10.6108 1.94174 9.1412 1.33301 7.60884 1.33301Z"
                        fill="#8C8C8C" />
                    <path
                        d="M15.9067 14.7958L12.6311 11.498L12 12.1247L15.2756 15.4225C15.3167 15.4639 15.3656 15.4969 15.4195 15.5194C15.4734 15.5419 15.5311 15.5536 15.5895 15.5538C15.6479 15.5541 15.7058 15.5428 15.7598 15.5206C15.8139 15.4984 15.863 15.4659 15.9044 15.4247C15.9459 15.3836 15.9788 15.3347 16.0014 15.2808C16.0239 15.2269 16.0356 15.1691 16.0358 15.1107C16.036 15.0523 16.0247 14.9945 16.0026 14.9404C15.9804 14.8864 15.9478 14.8373 15.9067 14.7958Z"
                        fill="#8C8C8C" />
                </g>
                <defs>
                    <clipPath id="clip0_2758_2583">
                        <rect width="16" height="16" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <input placeholder="search" />
        </div>
    </div>

    <div class="flex flex-col md:flex-row md:mx-8 mx-2 md:justify-between space-y-2  ">
        <div class="flex items-center justify-between bg-[#F8F9FC] p-4 rounded-md w-[100%] md:w-[24%]">
            <div class="flex flex-col">
                <div class="flex md:flex-col md:space-x-0 space-x-2">
                    <span class="text-gray-60 text-sm">Total </span>
                    <span class="text-gray-60 text-sm">Employees</span>
                </div>

                <span class="text-[#40AD93] font-bold  text-base">6,700</span>
            </div>
            <div class="bg-[#40AD93] p-2 shadow-lg shadow-[#40AD93a0] rounded">
                <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.10546 9.76267C10.6635 9.76267 12.7373 7.68915 12.7373 5.13134C12.7373 2.57352 10.6635 0.5 8.10546 0.5C5.54737 0.5 3.47363 2.57352 3.47363 5.13134C3.47363 7.68915 5.54737 9.76267 8.10546 9.76267Z"
                        fill="white" />
                    <path
                        d="M8.10569 22.5C12.5823 22.5 16.2114 20.4265 16.2114 17.8686C16.2114 15.3108 12.5823 13.2373 8.10569 13.2373C3.62904 13.2373 0 15.3108 0 17.8686C0 20.4265 3.62904 22.5 8.10569 22.5Z"
                        fill="white" />
                    <path
                        d="M22.0001 17.8676C22.0001 19.7862 19.6425 21.3411 16.765 21.3411C17.6126 20.4149 18.1962 19.2512 18.1962 17.8699C18.1962 16.4863 17.6115 15.3227 16.7615 14.3953C19.6402 14.3941 22.0001 15.9503 22.0001 17.8676ZM18.5262 5.13146C18.5266 5.69036 18.3921 6.2411 18.1341 6.73692C17.8761 7.23273 17.5023 7.65898 17.0444 7.97947C16.5864 8.29996 16.0579 8.50522 15.5037 8.57783C14.9495 8.65044 14.3859 8.58825 13.8608 8.39655C14.4265 7.40144 14.7231 6.27609 14.7212 5.13146C14.7212 3.94468 14.4086 2.83084 13.862 1.86752C14.387 1.67605 14.9504 1.61405 15.5045 1.68677C16.0586 1.75949 16.5869 1.9648 17.0447 2.28526C17.5025 2.60572 17.8762 3.03188 18.1341 3.52757C18.392 4.02326 18.5265 4.57269 18.5262 5.13146Z"
                        fill="white" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-between bg-[#F8F9FC] p-4 rounded-md  w-[100%] md:w-[24%]">
            <div class="flex flex-col">
                <div class="flex md:flex-col  md:space-x-0 space-x-2">
                    <span class="text-gray-60 text-sm">Total </span>
                    <span class="text-gray-60 text-sm">Schedules</span>
                </div>
                <span class="text-[#E8A476] font-bold  text-base">23</span>
            </div>
            <div class="bg-[#E8A476] p-2 shadow-lg shadow-[#E8A476a0] rounded">
                <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.7857 1.95455H16.2143V0.681818C16.2143 0.581818 16.1339 0.5 16.0357 0.5H14.7857C14.6875 0.5 14.6071 0.581818 14.6071 0.681818V1.95455H11.3036V0.681818C11.3036 0.581818 11.2232 0.5 11.125 0.5H9.875C9.77679 0.5 9.69643 0.581818 9.69643 0.681818V1.95455H6.39286V0.681818C6.39286 0.581818 6.3125 0.5 6.21429 0.5H4.96429C4.86607 0.5 4.78571 0.581818 4.78571 0.681818V1.95455H1.21429C0.819196 1.95455 0.5 2.27955 0.5 2.68182V15.7727C0.5 16.175 0.819196 16.5 1.21429 16.5H19.7857C20.1808 16.5 20.5 16.175 20.5 15.7727V2.68182C20.5 2.27955 20.1808 1.95455 19.7857 1.95455ZM8.53571 12.5C8.53571 12.6 8.45536 12.6818 8.35714 12.6818H4.25C4.15179 12.6818 4.07143 12.6 4.07143 12.5V11.4091C4.07143 11.3091 4.15179 11.2273 4.25 11.2273H8.35714C8.45536 11.2273 8.53571 11.3091 8.53571 11.4091V12.5ZM8.53571 9.40909C8.53571 9.50909 8.45536 9.59091 8.35714 9.59091H4.25C4.15179 9.59091 4.07143 9.50909 4.07143 9.40909V8.31818C4.07143 8.21818 4.15179 8.13636 4.25 8.13636H8.35714C8.45536 8.13636 8.53571 8.21818 8.53571 8.31818V9.40909ZM16.8951 7.33409L13.2121 12.5318C13.1792 12.5783 13.1359 12.6161 13.0859 12.6422C13.0358 12.6683 12.9804 12.6819 12.9241 12.6819C12.8679 12.6819 12.8124 12.6683 12.7624 12.6422C12.7123 12.6161 12.669 12.5783 12.6362 12.5318L10.0871 8.93636C10.0022 8.81591 10.0871 8.64773 10.2321 8.64773H11.4576C11.5714 8.64773 11.6786 8.70455 11.7455 8.79773L12.9241 10.4591L15.2388 7.19318C15.3058 7.09773 15.4129 7.04318 15.5268 7.04318H16.75C16.8951 7.04545 16.9799 7.21364 16.8951 7.33409Z"
                        fill="white" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-between bg-[#F8F9FC] p-4 rounded-md  w-[100%] md:w-[24%]">
            <div class="flex flex-col">
                <div class="flex md:flex-col  md:space-x-0 space-x-2">
                    <span class="text-gray-60 text-sm">Vacant </span>
                    <span class="text-gray-60 text-sm">Schedules</span>
                </div>

                <span class="text-[#4277BC] font-bold  text-base">23</span>
            </div>
            <div class="bg-[#4277BC] p-2 shadow-lg shadow-[#4277BCa0] rounded">
                <svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.7857 1.95455H16.2143V0.681818C16.2143 0.581818 16.1339 0.5 16.0357 0.5H14.7857C14.6875 0.5 14.6071 0.581818 14.6071 0.681818V1.95455H11.3036V0.681818C11.3036 0.581818 11.2232 0.5 11.125 0.5H9.875C9.77679 0.5 9.69643 0.581818 9.69643 0.681818V1.95455H6.39286V0.681818C6.39286 0.581818 6.3125 0.5 6.21429 0.5H4.96429C4.86607 0.5 4.78571 0.581818 4.78571 0.681818V1.95455H1.21429C0.819196 1.95455 0.5 2.27955 0.5 2.68182V15.7727C0.5 16.175 0.819196 16.5 1.21429 16.5H19.7857C20.1808 16.5 20.5 16.175 20.5 15.7727V2.68182C20.5 2.27955 20.1808 1.95455 19.7857 1.95455ZM8.53571 12.5C8.53571 12.6 8.45536 12.6818 8.35714 12.6818H4.25C4.15179 12.6818 4.07143 12.6 4.07143 12.5V11.4091C4.07143 11.3091 4.15179 11.2273 4.25 11.2273H8.35714C8.45536 11.2273 8.53571 11.3091 8.53571 11.4091V12.5ZM8.53571 9.40909C8.53571 9.50909 8.45536 9.59091 8.35714 9.59091H4.25C4.15179 9.59091 4.07143 9.50909 4.07143 9.40909V8.31818C4.07143 8.21818 4.15179 8.13636 4.25 8.13636H8.35714C8.45536 8.13636 8.53571 8.21818 8.53571 8.31818V9.40909ZM16.8951 7.33409L13.2121 12.5318C13.1792 12.5783 13.1359 12.6161 13.0859 12.6422C13.0358 12.6683 12.9804 12.6819 12.9241 12.6819C12.8679 12.6819 12.8124 12.6683 12.7624 12.6422C12.7123 12.6161 12.669 12.5783 12.6362 12.5318L10.0871 8.93636C10.0022 8.81591 10.0871 8.64773 10.2321 8.64773H11.4576C11.5714 8.64773 11.6786 8.70455 11.7455 8.79773L12.9241 10.4591L15.2388 7.19318C15.3058 7.09773 15.4129 7.04318 15.5268 7.04318H16.75C16.8951 7.04545 16.9799 7.21364 16.8951 7.33409Z"
                        fill="white" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-between bg-[#F8F9FC] p-4 rounded-md  w-[100%] md:w-[24%]">
            <div class="flex flex-col">
                <div class="flex md:flex-col  md:space-x-0 space-x-2">
                    <span class="text-gray-60 text-sm">Posted </span>
                    <span class="text-gray-60 text-sm">Jobs</span>
                </div>

                <span class="text-[#CD716B] font-bold  text-base">13</span>
            </div>
            <div class="bg-[#CD716B] p-2 shadow-lg shadow-[#CD716Ba0] rounded">
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M6.54176 5.05081V6.23414L5.1301 6.34914C4.64512 6.38818 4.18724 6.58869 3.82965 6.91863C3.47207 7.24856 3.23544 7.68887 3.1576 8.16914C3.12343 8.38414 3.09093 8.59914 3.0626 8.81498C3.05585 8.86716 3.06586 8.92014 3.09117 8.96627C3.11648 9.0124 3.15579 9.0493 3.20343 9.07164L3.2676 9.10164C7.79176 11.2433 13.2093 11.2433 17.7326 9.10164L17.7968 9.07164C17.8442 9.04917 17.8834 9.01222 17.9085 8.9661C17.9337 8.91998 17.9436 8.86707 17.9368 8.81498C17.9085 8.59925 17.8771 8.38395 17.8426 8.16914C17.7648 7.68887 17.5281 7.24856 17.1705 6.91863C16.813 6.58869 16.3551 6.38818 15.8701 6.34914L14.4584 6.23498V5.05164C14.4585 4.70235 14.3332 4.36464 14.1054 4.09991C13.8775 3.83519 13.5622 3.66104 13.2168 3.60914L12.2001 3.45664C11.0731 3.28756 9.92712 3.28756 8.8001 3.45664L7.78343 3.60914C7.43816 3.66102 7.12296 3.83504 6.8951 4.09959C6.66725 4.36415 6.54188 4.70166 6.54176 5.05081ZM12.0143 4.69248C11.0104 4.54192 9.98976 4.54192 8.98593 4.69248L7.96926 4.84498C7.91994 4.85236 7.8749 4.87719 7.84232 4.91496C7.80975 4.95273 7.79181 5.00094 7.79176 5.05081V6.14664C9.59584 6.0433 11.4044 6.0433 13.2084 6.14664V5.05081C13.2084 5.00094 13.1904 4.95273 13.1579 4.91496C13.1253 4.87719 13.0803 4.85236 13.0309 4.84498L12.0143 4.69248Z"
                          fill="white" />
                    <path
                        d="M18.0984 10.5583C18.0967 10.5314 18.0886 10.5052 18.0746 10.4821C18.0606 10.4591 18.0412 10.4397 18.0181 10.4258C17.995 10.4118 17.9688 10.4037 17.9419 10.4021C17.9149 10.4006 17.888 10.4055 17.8634 10.4166C13.2209 12.4725 7.77922 12.4725 3.13672 10.4166C3.11212 10.4055 3.08519 10.4006 3.05825 10.4021C3.0313 10.4037 3.00514 10.4118 2.98203 10.4258C2.95891 10.4397 2.93952 10.4591 2.92553 10.4821C2.91155 10.5052 2.90337 10.5314 2.90172 10.5583C2.81656 12.1537 2.90232 13.7537 3.15755 15.3308C3.2354 15.8111 3.47203 16.2514 3.82961 16.5813C4.1872 16.9113 4.64508 17.1118 5.13005 17.1508L6.69005 17.2775C9.22589 17.4816 11.7734 17.4816 14.3101 17.2775L15.8701 17.1516C16.3551 17.1126 16.8131 16.9119 17.1707 16.5818C17.5283 16.2517 17.7649 15.8112 17.8426 15.3308C18.0976 13.7516 18.1842 12.1516 18.0984 10.5591V10.5583Z"
                        fill="white" />
                </svg>
            </div>
        </div>
    </div>

    <!-- this is the empty table -->
    <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between mt-4 mx-2 md:mx-8">

        <div class="md:w-[49.5%] bg-[#F8F9FC] md:h-[50vh] h-[20vh] ">
            <div class="flex justify-between items-center">
                <div class="border-l-2 border-[#3984E6]">
                    <span class="text-black md:text-lg text-sm mx-2">Employee Overview</span>
                </div>
                <a href="{{route('company.employee.create')}}">
                    <button class="flex items-center space-x-2 bg-[#3984E6] m-6 p-2 rounded text-white-0 md:text-sm text-xs font-medium">
                        <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.3332 6.83317H7.33317V11.8332H5.6665V6.83317H0.666504V5.1665H5.6665V0.166504H7.33317V5.1665H12.3332V6.83317Z"
                                fill="white" />
                        </svg>
                        <span> Add Employee</span>
                    </button>
                </a>
            </div>
            <div class="flex items-center justify-center md:h-[60%] ">
                <span class="text-[#A7A7A7] text-sm md:text-lg font-medium">You have not added any employee</span>
            </div>

        </div>
        <div class="md:w-[49.5%] bg-[#F8F9FC] md:h-[50vh] h-[20vh] ">
            <div class="flex justify-between items-center">
                <div class="border-l-2 border-[#3984E6]">
                    <span class="text-black md:text-lg text-sm mx-2">Today’s Schedule</span>
                </div>
                <button class="flex items-center border border-[#3984E6] m-6 p-2 rounded text-[#3984E6] md:text-sm text-xs font-medium">

                    <span>Create Schedule</span>
                </button>
            </div>
            <div class="flex items-center justify-center h-[60%] md:mb-0 mb-10">
                <div class="bg-white-0 flex flex-col items-center space-y-2 p-4 rounded-lg">
                    <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3047_4612)">
                            <path d="M29.0001 23.2002C27.2532 23.1997 25.5389 23.6726 24.0393 24.5685C22.5397 25.4645 21.3109 26.75 20.4835 28.2885C19.6562 29.827 19.2612 31.5609 19.3405 33.306C19.4199 35.051 19.9706 36.742 20.9342 38.199L34.3361 24.801C32.7542 23.7528 30.8977 23.1959 29.0001 23.2002ZM29.0001 42.5336C27.0281 42.5336 25.1991 41.9458 23.6679 40.9328L37.0659 27.5309C38.0305 28.988 38.5821 30.6793 38.662 32.425C38.7419 34.1706 38.3471 35.9052 37.5196 37.4444C36.6921 38.9835 35.4629 40.2695 33.9627 41.1657C32.4626 42.0618 30.7475 42.5345 29.0001 42.5336Z" fill="#A7A7A7"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M52.2 7.73333H46.4V0H42.5333V7.73333H15.4667V0H11.6V7.73333H5.8C4.26174 7.73333 2.78649 8.3444 1.69878 9.43211C0.61107 10.5198 0 11.9951 0 13.5333L0 52.2C0 53.7383 0.61107 55.2135 1.69878 56.3012C2.78649 57.3889 4.26174 58 5.8 58H52.2C53.7383 58 55.2135 57.3889 56.3012 56.3012C57.3889 55.2135 58 53.7383 58 52.2V13.5333C58 11.9951 57.3889 10.5198 56.3012 9.43211C55.2135 8.3444 53.7383 7.73333 52.2 7.73333ZM15.4667 32.8667C15.4667 29.2774 16.8925 25.8351 19.4305 23.2972C21.9685 20.7592 25.4107 19.3333 29 19.3333C32.5893 19.3333 36.0315 20.7592 38.5695 23.2972C41.1075 25.8351 42.5333 29.2774 42.5333 32.8667C42.5333 36.4559 41.1075 39.8982 38.5695 42.4362C36.0315 44.9742 32.5893 46.4 29 46.4C25.4107 46.4 21.9685 44.9742 19.4305 42.4362C16.8925 39.8982 15.4667 36.4559 15.4667 32.8667Z" fill="#A7A7A7"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3047_4612">
                                <rect width="58" height="58" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="text-[#A7A7A7] md:text-sm text-xs font-medium">You have not created any schedule yet.</span>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
