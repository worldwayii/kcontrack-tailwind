<!-- Employee Overview -->
<div
    class="w-full flex flex-col gap-[20px] min-h-[218px] md:min-h-[318px] lg:min-h-[506px] bg-[#F8F9FC] rounded-[4px] pt-[28px]"
>
    <div class="w-full flex items-center justify-between pr-[20px]">
        <p
            class="font-semibold text-[14px] md:text-[16px] lg:text-[18px] text-[#4F4F4F] pl-[12px] border-l-[3px] border-l-[#1A73E8]"
        >
            Employee Overview
        </p>

        <a  href="{{route('company.employee.create')}}"
            class="font-medium text-[12px] lg:text-[14px] text-white-0 flex items-center justify-center gap-[4px] px-[10px] h-[40px] bg-[#3984E6] rounded-[4px] border-[0.5px] border-[#3984E6]"
        >
            <svg
                width="12"
                height="12"
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M11.8332 6.83317H6.83317V11.8332H5.1665V6.83317H0.166504V5.1665H5.1665V0.166504H6.83317V5.1665H11.8332V6.83317Z"
                    fill="white"
                />
            </svg>

            Add Employee
        </a>
    </div>

    <div class="flex-1 flex flex-col gap-[20px]">
        <div class="flex items-center justify-between px-[12px]">
            <div class="flex items-center gap-[8px]">
                <div
                    class="group relative flex items-center w-[138px] h-[40px]"
                >
                    <svg
                        class="absolute left-[10px]"
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g clip-path="url(#clip0_3124_6583)">
                            <path
                                d="M7.60884 2.24412C8.57156 2.24324 9.51292 2.52792 10.3138 3.06214C11.1147 3.59636 11.7392 4.35612 12.1082 5.24531C12.4772 6.1345 12.5743 7.11316 12.387 8.0575C12.1997 9.00183 11.7365 9.8694 11.0561 10.5505C10.3757 11.2315 9.50852 11.6955 8.56436 11.8836C7.62019 12.0718 6.64144 11.9756 5.75192 11.6074C4.86239 11.2392 4.10206 10.6154 3.5671 9.81502C3.03215 9.01461 2.74661 8.07351 2.74661 7.11079C2.75245 5.82263 3.26645 4.58884 4.17691 3.67755C5.08736 2.76626 6.32069 2.25113 7.60884 2.24412ZM7.60884 1.33301C6.4661 1.33301 5.34902 1.67187 4.39887 2.30674C3.44872 2.94161 2.70817 3.84397 2.27086 4.89973C1.83356 5.95548 1.71914 7.1172 1.94208 8.23798C2.16501 9.35875 2.71529 10.3883 3.52333 11.1963C4.33137 12.0043 5.36087 12.5546 6.48165 12.7775C7.60243 13.0005 8.76414 12.8861 9.8199 12.4488C10.8756 12.0115 11.778 11.2709 12.4129 10.3207C13.0478 9.3706 13.3866 8.25352 13.3866 7.11079C13.3866 5.57842 12.7779 4.10882 11.6943 3.02528C10.6108 1.94174 9.1412 1.33301 7.60884 1.33301Z"
                                fill="#8C8C8C"
                            />
                            <path
                                d="M15.9067 14.7958L12.6311 11.498L12 12.1247L15.2756 15.4225C15.3167 15.4639 15.3656 15.4969 15.4195 15.5194C15.4734 15.5419 15.5311 15.5536 15.5895 15.5538C15.6479 15.5541 15.7058 15.5428 15.7598 15.5206C15.8139 15.4984 15.863 15.4659 15.9044 15.4247C15.9459 15.3836 15.9788 15.3347 16.0014 15.2808C16.0239 15.2269 16.0356 15.1691 16.0358 15.1107C16.036 15.0523 16.0247 14.9945 16.0026 14.9404C15.9804 14.8864 15.9478 14.8373 15.9067 14.7958Z"
                                fill="#8C8C8C"
                            />
                        </g>
                        <defs>
                            <clipPath id="clip0_3124_6583">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <input
                        type="text"
                        placeholder="Search"
                        class="outline-none pl-[36px] pr-[10px] bg-white-0 border-[1px] border-[#EDEFF4] rounded-[4px] font-monteserrat font-medium text-[14px] placeholder:text-[#8C8C8C] w-full"
                    />
                </div>

                <button
                    class="w-[40px] h-[40px] flex items-center justify-center border-[1px] border-[#EDEFF4] rounded-[4px] bg-white-0"
                >
                    <svg
                        width="18"
                        height="13"
                        viewBox="0 0 18 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M0.666626 1.5835C0.666626 1.25198 0.798322 0.934033 1.03274 0.699612C1.26716 0.465192 1.58511 0.333496 1.91663 0.333496H16.0833C16.4148 0.333496 16.7328 0.465192 16.9672 0.699612C17.2016 0.934033 17.3333 1.25198 17.3333 1.5835C17.3333 1.91502 17.2016 2.23296 16.9672 2.46738C16.7328 2.7018 16.4148 2.8335 16.0833 2.8335H1.91663C1.58511 2.8335 1.26716 2.7018 1.03274 2.46738C0.798322 2.23296 0.666626 1.91502 0.666626 1.5835ZM3.99996 6.5835C3.99996 6.25198 4.13166 5.93403 4.36608 5.69961C4.6005 5.46519 4.91844 5.3335 5.24996 5.3335H12.75C13.0815 5.3335 13.3994 5.46519 13.6338 5.69961C13.8683 5.93403 14 6.25198 14 6.5835C14 6.91502 13.8683 7.23296 13.6338 7.46738C13.3994 7.7018 13.0815 7.8335 12.75 7.8335H5.24996C4.91844 7.8335 4.6005 7.7018 4.36608 7.46738C4.13166 7.23296 3.99996 6.91502 3.99996 6.5835ZM7.74996 10.3335C7.41844 10.3335 7.1005 10.4652 6.86608 10.6996C6.63166 10.934 6.49996 11.252 6.49996 11.5835C6.49996 11.915 6.63166 12.233 6.86608 12.4674C7.1005 12.7018 7.41844 12.8335 7.74996 12.8335H10.25C10.5815 12.8335 10.8994 12.7018 11.1338 12.4674C11.3683 12.233 11.5 11.915 11.5 11.5835C11.5 11.252 11.3683 10.934 11.1338 10.6996C10.8994 10.4652 10.5815 10.3335 10.25 10.3335H7.74996Z"
                            fill="#8C8C8C"
                        />
                    </svg>
                </button>
            </div>

            <button
                class="h-[35px] flex items-center justify-center px-[10px] rounded-[4px] md:border-[1px] md:border-[#3984E6] font-semibold text-[12px] text-[#3984E6] underline"
                data-modal-target="invite_employee"
                data-modal-toggle="invite_employee"
                type="button"
            >
                Invite Employee(s)
            </button>
        </div>

        <!-- table -->
        <div class="flex flex-col w-full">
            <!-- heading -->
            <div
                class="w-full flex gap-[16px] md:gap-[24px] items-center py-[16px] bg-[#EDF0F6]"
            >
                <div class="pl-[16px]">
                    <input
                        type="checkbox"
                        class="w-[15px] h-[15px] text-[#3984E6] rounded-[2px] border-none"
                    />
                </div>

                <div
                    class="flex-1 max-w-[42%] font-semibold text-[12px] md:text-[14px] text-[#4F4F4F] flex items-center gap-[4px]"
                >
                    <p>Employee</p>

                    <button
                        class="w-[20px] h-[20px] flex items-center justify-center"
                    >
                        <svg
                            width="12"
                            height="13"
                            viewBox="0 0 12 13"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M7.22497 2.77478C7.34215 2.89182 7.50101 2.95756 7.66663 2.95756C7.83226 2.95756 7.99111 2.89182 8.1083 2.77478L8.7083 2.17478V10.6664C8.7083 10.8322 8.77415 10.9912 8.89136 11.1084C9.00857 11.2256 9.16754 11.2914 9.3333 11.2914C9.49906 11.2914 9.65803 11.2256 9.77524 11.1084C9.89245 10.9912 9.9583 10.8322 9.9583 10.6664V2.17478L10.5583 2.77478C10.6155 2.83618 10.6845 2.88543 10.7612 2.91959C10.8378 2.95375 10.9206 2.97212 11.0045 2.9736C11.0884 2.97508 11.1718 2.95965 11.2496 2.92821C11.3275 2.89678 11.3981 2.84999 11.4575 2.79064C11.5168 2.73129 11.5636 2.6606 11.5951 2.58277C11.6265 2.50495 11.6419 2.42159 11.6405 2.33767C11.639 2.25375 11.6206 2.17099 11.5864 2.09433C11.5523 2.01766 11.503 1.94866 11.4416 1.89144L9.77497 0.224775C9.65778 0.107733 9.49892 0.0419922 9.3333 0.0419922C9.16767 0.0419922 9.00882 0.107733 8.89163 0.224775L7.22497 1.89144C7.10792 2.00863 7.04218 2.16748 7.04218 2.33311C7.04218 2.49873 7.10792 2.65759 7.22497 2.77478ZM3.29163 10.8248L3.89163 10.2248C3.94885 10.1634 4.01785 10.1141 4.09452 10.08C4.17118 10.0458 4.25394 10.0274 4.33786 10.026C4.42178 10.0245 4.50514 10.0399 4.58296 10.0713C4.66079 10.1028 4.73148 10.1496 4.79083 10.2089C4.85018 10.2683 4.89697 10.339 4.9284 10.4168C4.95984 10.4946 4.97527 10.578 4.97379 10.6619C4.97231 10.7458 4.95394 10.8286 4.91978 10.9052C4.88562 10.9819 4.83637 11.0509 4.77497 11.1081L3.1083 12.7748C2.99111 12.8918 2.83226 12.9576 2.66663 12.9576C2.50101 12.9576 2.34215 12.8918 2.22497 12.7748L0.558298 11.1081C0.496893 11.0509 0.447641 10.9819 0.413481 10.9052C0.379321 10.8286 0.360953 10.7458 0.359472 10.6619C0.357992 10.578 0.373429 10.4946 0.404863 10.4168C0.436297 10.339 0.483084 10.2683 0.542433 10.2089C0.601782 10.1496 0.672477 10.1028 0.7503 10.0713C0.828124 10.0399 0.911482 10.0245 0.995401 10.026C1.07932 10.0274 1.16208 10.0458 1.23875 10.08C1.31541 10.1141 1.38441 10.1634 1.44163 10.2248L2.04163 10.8248V2.33311C2.04163 2.16735 2.10748 2.00838 2.22469 1.89117C2.3419 1.77396 2.50087 1.70811 2.66663 1.70811C2.83239 1.70811 2.99136 1.77396 3.10857 1.89117C3.22578 2.00838 3.29163 2.16735 3.29163 2.33311V10.8248Z"
                                fill="#80868C"
                            />
                        </svg>
                    </button>
                </div>

                <div
                    class="flex-1 max-w-[24%] font-semibold text-[12px] md:text-[14px] text-[#4F4F4F] flex items-center justify-center gap-[4px]"
                >
                    <p>Job Role</p>

                    <button
                        class="w-[20px] h-[20px] flex items-center justify-center"
                    >
                        <svg
                            width="12"
                            height="13"
                            viewBox="0 0 12 13"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M7.22497 2.77478C7.34215 2.89182 7.50101 2.95756 7.66663 2.95756C7.83226 2.95756 7.99111 2.89182 8.1083 2.77478L8.7083 2.17478V10.6664C8.7083 10.8322 8.77415 10.9912 8.89136 11.1084C9.00857 11.2256 9.16754 11.2914 9.3333 11.2914C9.49906 11.2914 9.65803 11.2256 9.77524 11.1084C9.89245 10.9912 9.9583 10.8322 9.9583 10.6664V2.17478L10.5583 2.77478C10.6155 2.83618 10.6845 2.88543 10.7612 2.91959C10.8378 2.95375 10.9206 2.97212 11.0045 2.9736C11.0884 2.97508 11.1718 2.95965 11.2496 2.92821C11.3275 2.89678 11.3981 2.84999 11.4575 2.79064C11.5168 2.73129 11.5636 2.6606 11.5951 2.58277C11.6265 2.50495 11.6419 2.42159 11.6405 2.33767C11.639 2.25375 11.6206 2.17099 11.5864 2.09433C11.5523 2.01766 11.503 1.94866 11.4416 1.89144L9.77497 0.224775C9.65778 0.107733 9.49892 0.0419922 9.3333 0.0419922C9.16767 0.0419922 9.00882 0.107733 8.89163 0.224775L7.22497 1.89144C7.10792 2.00863 7.04218 2.16748 7.04218 2.33311C7.04218 2.49873 7.10792 2.65759 7.22497 2.77478ZM3.29163 10.8248L3.89163 10.2248C3.94885 10.1634 4.01785 10.1141 4.09452 10.08C4.17118 10.0458 4.25394 10.0274 4.33786 10.026C4.42178 10.0245 4.50514 10.0399 4.58296 10.0713C4.66079 10.1028 4.73148 10.1496 4.79083 10.2089C4.85018 10.2683 4.89697 10.339 4.9284 10.4168C4.95984 10.4946 4.97527 10.578 4.97379 10.6619C4.97231 10.7458 4.95394 10.8286 4.91978 10.9052C4.88562 10.9819 4.83637 11.0509 4.77497 11.1081L3.1083 12.7748C2.99111 12.8918 2.83226 12.9576 2.66663 12.9576C2.50101 12.9576 2.34215 12.8918 2.22497 12.7748L0.558298 11.1081C0.496893 11.0509 0.447641 10.9819 0.413481 10.9052C0.379321 10.8286 0.360953 10.7458 0.359472 10.6619C0.357992 10.578 0.373429 10.4946 0.404863 10.4168C0.436297 10.339 0.483084 10.2683 0.542433 10.2089C0.601782 10.1496 0.672477 10.1028 0.7503 10.0713C0.828124 10.0399 0.911482 10.0245 0.995401 10.026C1.07932 10.0274 1.16208 10.0458 1.23875 10.08C1.31541 10.1141 1.38441 10.1634 1.44163 10.2248L2.04163 10.8248V2.33311C2.04163 2.16735 2.10748 2.00838 2.22469 1.89117C2.3419 1.77396 2.50087 1.70811 2.66663 1.70811C2.83239 1.70811 2.99136 1.77396 3.10857 1.89117C3.22578 2.00838 3.29163 2.16735 3.29163 2.33311V10.8248Z"
                                fill="#80868C"
                            />
                        </svg>
                    </button>
                </div>

                <div
                    class="w-[60px] font-semibold text-[12px] md:text-[14px] text-[#4F4F4F] flex items-center justify-center gap-[4px]"
                >
                    <p>Action</p>
                </div>
            </div>
            @if(count(auth()->user()->company->employees) === 0 )
                <div class="flex items-center justify-center md:h-[60%] ">
                    <span class="text-[#A7A7A7] text-sm md:text-lg font-medium">You have not added any employee</span>
                </div>
            @else
            <!-- table row -->
                @foreach(auth()->user()->company->employees as $employee)
                    <div
                    class="w-full flex gap-[16px] md:gap-[24px] items-center py-[16px] bg-white-0 border-[0.5px] border-t-none border-[#EDEFF4]"
                >
                    <div class="pl-[16px]">
                        <input
                            type="checkbox"
                            class="w-[15px] h-[15px] text-[#3984E6] rounded-[2px] border-none bg-[#EDF0F6]"
                        />
                    </div>

                    <div
                        class="flex-1 max-w-[42%] flex items-center gap-[4px] md:gap-[6px]"
                    >
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-[28px] h-[28px] relative"
                        >
                            <img
                                src="{{ asset('img/icon_holder.png') }}"
                                class="w-full h-full rounded-full object-cover"
                                alt=""
                            />

                            <div
                                class="w-[8px] h-[8px] rounded-full bg-[#48DC95] absolute bottom-0 right-[-2px] hidden md:flex"
                            ></div>
                        </div>

                        <div class="flex-1 flex flex-col gap-[2px]">
                            <p
                                class="font-semibold text-[12px] md:text-[13px] lg:text-[14px] text-[#4F4F4F] leading-none break-words"
                            >
                                {{$employee->first_name}} {{$employee->last_name}}
                            </p>
                            <p
                                class="font-medium text-[8px] md:text-[9px] lg:text-[10px] text-[#80868C] leading-none break-words"
                            >
                                {{$employee->user->email}}
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex-1 max-w-[24%] flex items-center justify-center font-medium text-[12px] text-[#80868C]"
                    >
                        <p>{{$employee->role}}</p>
                    </div>

                    <div
                        class="w-[60px] font-semibold text-[12px] md:text-[14px] text-[#4F4F4F] flex items-center justify-center gap-[4px]"
                    >
                        <button
                            data-dropdown-toggle="action-1"
                            class="w-[24px] h-[24px] flex items-center justify-center"
                        >
                            <svg
                                width="18"
                                height="5"
                                viewBox="0 0 18 5"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M2 0.5C0.9 0.5 0 1.4 0 2.5C0 3.6 0.9 4.5 2 4.5C3.1 4.5 4 3.6 4 2.5C4 1.4 3.1 0.5 2 0.5ZM16 0.5C14.9 0.5 14 1.4 14 2.5C14 3.6 14.9 4.5 16 4.5C17.1 4.5 18 3.6 18 2.5C18 1.4 17.1 0.5 16 0.5ZM9 0.5C7.9 0.5 7 1.4 7 2.5C7 3.6 7.9 4.5 9 4.5C10.1 4.5 11 3.6 11 2.5C11 1.4 10.1 0.5 9 0.5Z"
                                    fill="#80868C"
                                />
                            </svg>
                        </button>

                        <div
                            id="action-1"
                            class="z-10 hidden bg-white-0 divide-y divide-gray-100 rounded-lg shadow w-44"
                        >
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Invite</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Remove</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif

        </div>

        <!-- pagination -->
        <div
            class="w-full flex flex-col lg:flex-row lg:justify-between gap-[18px] items-center pb-[30px] lg:px-[12px]"
        >
            <div class="bg-white-0 flex">
                <a
                    href="#"
                    class="h-[30px] flex items-center justify-center bg-white-0 hover:bg-[#1A73E8] border-[1px] border-[#EDEFF4] px-[10px] text-[12px] font-medium text-[#80868C] hover:text-white-0 transition-all"
                >Prev</a
                >
                <a
                    href="#"
                    class="h-[30px] flex items-center justify-center bg-white-0 hover:bg-[#1A73E8] border-[1px] border-[#EDEFF4] px-[10px] text-[12px] font-medium text-[#80868C] hover:text-white-0 transition-all"
                >1</a
                >
                <a
                    href="#"
                    class="h-[30px] flex items-center justify-center bg-white-0 hover:bg-[#1A73E8] border-[1px] border-[#EDEFF4] px-[10px] text-[12px] font-medium text-[#80868C] hover:text-white-0 transition-all"
                >2</a
                >
                <a
                    href="#"
                    class="h-[30px] flex items-center justify-center bg-white-0 hover:bg-[#1A73E8] border-[1px] border-[#EDEFF4] px-[10px] text-[12px] font-medium text-[#80868C] hover:text-white-0 transition-all"
                >3</a
                >
                <a
                    href="#"
                    class="h-[30px] flex items-center justify-center bg-white-0 hover:bg-[#1A73E8] border-[1px] border-[#EDEFF4] px-[10px] text-[12px] font-medium text-[#80868C] hover:text-white-0 transition-all"
                >Next</a
                >
            </div>

            <div class="flex items-center gap-[12px]">
                <div class="flex items-center gap-[12px]">
                    <label
                        for="perPage"
                        class="font-medium text-[12px] text-[#80868C]"
                    >View</label
                    >

                    <select
                        id="perPage"
                        class="h-[30px] border-[1px] border-[#EDEFF4] text-[12px] font-medium text-[#80868C] bg-white-0 pl-[4.5px]"
                    >
                        <option value="10" selected>10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                </div>

                <p class="font-medium text-[12px] text-[#80868C]">
                    Showing 1 to 5 of 20 entries
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End employee overview -->


