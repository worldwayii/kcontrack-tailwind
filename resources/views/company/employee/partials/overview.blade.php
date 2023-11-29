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
    @if(count(auth()->user()->company->employees) === 0 )
        <div class="flex items-center justify-center md:h-[60%] ">
            <span class="text-[#A7A7A7] text-sm md:text-lg font-medium">You have not added any employee</span>
        </div>
    @else
        <div class="flex justify-between">
            <div class="flex items-center space-x-2">
                <div class="flex items-center space-x-2 p-1 bg-white-0 mx-2 border rounded  w-[40%] md:w-[80%]">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2761_2612)">
                            <path
                                d="M7.60884 2.24412C8.57156 2.24324 9.51292 2.52792 10.3138 3.06214C11.1147 3.59636 11.7392 4.35612 12.1082 5.24531C12.4772 6.1345 12.5743 7.11316 12.387 8.0575C12.1997 9.00183 11.7365 9.8694 11.0561 10.5505C10.3757 11.2315 9.50852 11.6955 8.56436 11.8836C7.62019 12.0718 6.64144 11.9756 5.75192 11.6074C4.86239 11.2392 4.10206 10.6154 3.5671 9.81502C3.03215 9.01461 2.74661 8.07351 2.74661 7.11079C2.75245 5.82263 3.26645 4.58884 4.17691 3.67755C5.08736 2.76626 6.32069 2.25113 7.60884 2.24412ZM7.60884 1.33301C6.4661 1.33301 5.34902 1.67187 4.39887 2.30674C3.44872 2.94161 2.70817 3.84397 2.27086 4.89973C1.83356 5.95548 1.71914 7.1172 1.94208 8.23798C2.16501 9.35875 2.71529 10.3883 3.52333 11.1963C4.33137 12.0043 5.36087 12.5546 6.48165 12.7775C7.60243 13.0005 8.76414 12.8861 9.8199 12.4488C10.8756 12.0115 11.778 11.2709 12.4129 10.3207C13.0478 9.3706 13.3866 8.25352 13.3866 7.11079C13.3866 5.57842 12.7779 4.10882 11.6943 3.02528C10.6108 1.94174 9.1412 1.33301 7.60884 1.33301Z"
                                fill="#8C8C8C" />
                            <path
                                d="M15.9067 14.7958L12.6311 11.498L12 12.1247L15.2756 15.4225C15.3167 15.4639 15.3656 15.4969 15.4195 15.5194C15.4734 15.5419 15.5311 15.5536 15.5895 15.5538C15.6479 15.5541 15.7058 15.5428 15.7598 15.5206C15.8139 15.4984 15.863 15.4659 15.9044 15.4247C15.9459 15.3836 15.9788 15.3347 16.0014 15.2808C16.0239 15.2269 16.0356 15.1691 16.0358 15.1107C16.036 15.0523 16.0247 14.9945 16.0026 14.9404C15.9804 14.8864 15.9478 14.8373 15.9067 14.7958Z"
                                fill="#8C8C8C" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2761_2612">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <input class="outline-none text-[#A7A7A7]  w-[80%]" placeholder="search" />
                </div>
                <button class="border border-solid p-2 bg-white-0 rounded">
                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.666748 1.5835C0.666748 1.25198 0.798444 0.934033 1.03286 0.699612C1.26729 0.465192 1.58523 0.333496 1.91675 0.333496H16.0834C16.4149 0.333496 16.7329 0.465192 16.9673 0.699612C17.2017 0.934033 17.3334 1.25198 17.3334 1.5835C17.3334 1.91502 17.2017 2.23296 16.9673 2.46738C16.7329 2.7018 16.4149 2.8335 16.0834 2.8335H1.91675C1.58523 2.8335 1.26729 2.7018 1.03286 2.46738C0.798444 2.23296 0.666748 1.91502 0.666748 1.5835ZM4.00008 6.5835C4.00008 6.25198 4.13178 5.93403 4.3662 5.69961C4.60062 5.46519 4.91856 5.3335 5.25008 5.3335H12.7501C13.0816 5.3335 13.3995 5.46519 13.634 5.69961C13.8684 5.93403 14.0001 6.25198 14.0001 6.5835C14.0001 6.91502 13.8684 7.23296 13.634 7.46738C13.3995 7.7018 13.0816 7.8335 12.7501 7.8335H5.25008C4.91856 7.8335 4.60062 7.7018 4.3662 7.46738C4.13178 7.23296 4.00008 6.91502 4.00008 6.5835ZM7.75008 10.3335C7.41856 10.3335 7.10062 10.4652 6.8662 10.6996C6.63178 10.934 6.50008 11.252 6.50008 11.5835C6.50008 11.915 6.63178 12.233 6.8662 12.4674C7.10062 12.7018 7.41856 12.8335 7.75008 12.8335H10.2501C10.5816 12.8335 10.8995 12.7018 11.134 12.4674C11.3684 12.233 11.5001 11.915 11.5001 11.5835C11.5001 11.252 11.3684 10.934 11.134 10.6996C10.8995 10.4652 10.5816 10.3335 10.2501 10.3335H7.75008Z"
                            fill="#8C8C8C" />
                    </svg>
                </button>
            </div>
            <button class="text-[#3984E6] text-xs underline w-[40%] md:w-[20%] md:mx-8">
                Invite Employee(s)
            </button>
        </div>
        <div class="flex flex-col items-center  md:min-h-[60%] overflow-y-scroll">
            <table class="w-full mt-4">
                <tr class="bg-[#EDF0F6]">
                    <th class="flex ps-3 py-4"><input  type="checkbox" /></th>
                    <th class="text-left text-sm font-semibold text-black-10">Employee</th>
                    <th class="text-left text-sm font-semibold text-black-10">Job Role</th>
                    <th class="text-left text-sm font-semibold text-black-10">Action</th>
                </tr>
                @foreach(auth()->user()->company->employees as $employee)
                    <tr class="border bg-white-0">
                        <td> <input class="ms-2" type="checkbox" />
                        </td>
                        <td>
                            <div class="flex items-center  py-3">
                                <img class=" h-[28px] w-[28px] rounded-full" src="{{ asset('img/icon_holder.png') }}" />
                                <div class="flex flex-col mx-2 ">
                                    <span class="text-xs font-semibold leading-0">{{$employee->first_name}} {{$employee->last_name}}</span>
                                    <span class="text-[#80868C] text-[10px] leading-0">{{$employee->user->email}}</span>
                                </div>
                            </div>
                        </td>
                        <td class="text-[#80868C] font-medium text-xs">{{$employee->role}}</td>
                        <td class="group">
                            <div class="relative">
                                <svg width="18" height="5" viewBox="0 0 18 5" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 0.5C0.9 0.5 0 1.4 0 2.5C0 3.6 0.9 4.5 2 4.5C3.1 4.5 4 3.6 4 2.5C4 1.4 3.1 0.5 2 0.5ZM16 0.5C14.9 0.5 14 1.4 14 2.5C14 3.6 14.9 4.5 16 4.5C17.1 4.5 18 3.6 18 2.5C18 1.4 17.1 0.5 16 0.5ZM9 0.5C7.9 0.5 7 1.4 7 2.5C7 3.6 7.9 4.5 9 4.5C10.1 4.5 11 3.6 11 2.5C11 1.4 10.1 0.5 9 0.5Z"
                                        fill="#80868C" />
                                </svg>
                                <div class="hidden bg-white-0 shadow-lg p-3 cursor-pointer rounded-lg group-hover:flex group-hover:flex-col space-y-2 absolute">
                                    <span class="text-xs">Invite</span>
                                    <span class="text-xs">Remove</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div>
                <div>
                    <button class="border text-xs text-[#80868C] px-1">Prev</button>
                    <span  class="border text-xs text-[#80868C] px-1" >1</span>
                    <span  class="border text-xs text-[#80868C] px-1">2</span>
                    <span  class="border text-xs text-[#80868C] px-1">3</span>
                    <button  class="border text-xs text-[#80868C] px-1">Next</button>
                </div>
            </div>
        </div>
    @endif

</div>
