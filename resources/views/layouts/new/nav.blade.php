<nav class="sticky top-0 left-0 right-0 w-full flex px-[14px] md:px-[35px] py-[11px] md:py-[18px] justify-between md:justify-start md:gap-[35px] items-center bg-white-0 md:bg-transparent shadow-[0px_3px_8px_0px_#00000024] md:shadow-none z-20">
    <a href="#">
        <img
            class="w-[36px] md:w-[45px] h-[36px] md:h-[45px] object-contain"
            src="{{asset('kcontrack.png')}}"
            alt=""
        />
    </a>

    <div class="flex md:flex-1 items-center justify-between">
        <div class="hidden md:flex items-center gap-[40px] lg:gap-[140px]">
            <button class="flex items-center gap-[10px]">
                <div
                    class="flex items-center justify-center w-[31px] h-[31px] rounded-full bg-white-0 border-[0.5px] border-[#B4BCB3]"
                >
                    @if(auth()->user()->company->logo)
                        <img src="{{ asset('storage/' . auth()->user()->company->logo) }}" class="w-[17px] h-[17px] object-cover rounded-full"/>
                    @else
                        <img src="{{ asset('img/icon_holder.png') }}" class="w-[17px] h-[17px] object-cover rounded-full"/>
                    @endif
                </div>

                <p class="text-[14px] font-semibold text-[#80868C] hidden lg:block">
                    {{auth()->user()->company->name}}
                </p>
            </button>

            <div class="group relative flex items-center max-w-[262px] h-[40px]">
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
                    class="outline-none pl-[36px] pr-[10px] bg-white-0 border-[1px] border-[#EDEFF4] rounded-[4px] font-monteserrat font-medium text-[14px] placeholder:text-[#8C8C8C] flex-1"
                />
            </div>
        </div>

        <div class="flex items-center gap-[23px] md:gap-[32px]">
            <button
                class="bg-gradient-to-b from-[#092C86] via-[#092C86] to-[#F828BE] rounded-[4px] w-[28px] h-[28px] flex items-center justify-center"
            >
                <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z"
                        fill="white"
                    />
                </svg>
            </button>

            <button
                class="relative rounded-[4px] w-[28px] h-[28px] flex items-center justify-center"
            >
                <svg
                    width="28"
                    height="28"
                    viewBox="0 0 28 28"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M25.2854 21.6449C24.5354 20.9763 23.8788 20.2098 23.3332 19.366C22.7376 18.2013 22.3806 16.9294 22.2832 15.6249V11.7827C22.2883 9.73369 21.5451 7.75336 20.1931 6.21375C18.8411 4.67414 16.9734 3.68122 14.941 3.42155V2.41822C14.941 2.14283 14.8316 1.87873 14.6368 1.684C14.4421 1.48928 14.178 1.37988 13.9026 1.37988C13.6272 1.37988 13.3631 1.48928 13.1684 1.684C12.9737 1.87873 12.8643 2.14283 12.8643 2.41822V3.4371C10.85 3.71549 9.00494 4.71441 7.6707 6.24885C6.33647 7.78329 5.60353 9.74927 5.60763 11.7827V15.6249C5.51021 16.9294 5.15323 18.2013 4.55763 19.366C4.02165 20.2078 3.37556 20.9742 2.63651 21.6449C2.55355 21.7178 2.48706 21.8075 2.44146 21.9081C2.39587 22.0086 2.37221 22.1178 2.37207 22.2282V23.286C2.37207 23.4923 2.45401 23.6901 2.59988 23.836C2.74574 23.9818 2.94357 24.0638 3.14985 24.0638H24.7721C24.9783 24.0638 25.1762 23.9818 25.322 23.836C25.4679 23.6901 25.5498 23.4923 25.5498 23.286V22.2282C25.5497 22.1178 25.5261 22.0086 25.4805 21.9081C25.4349 21.8075 25.3684 21.7178 25.2854 21.6449ZM3.98985 22.5082C4.7135 21.8092 5.35065 21.0258 5.88763 20.1749C6.63788 18.7683 7.07563 17.2162 7.17096 15.6249V11.7827C7.14011 10.8711 7.29301 9.96272 7.62055 9.11151C7.94809 8.26031 8.44357 7.48371 9.07748 6.82798C9.7114 6.17225 10.4708 5.65079 11.3104 5.29465C12.1501 4.93851 13.0528 4.75498 13.9648 4.75498C14.8769 4.75498 15.7796 4.93851 16.6193 5.29465C17.4589 5.65079 18.2183 6.17225 18.8522 6.82798C19.4861 7.48371 19.9816 8.26031 20.3091 9.11151C20.6367 9.96272 20.7896 10.8711 20.7587 11.7827V15.6249C20.8541 17.2162 21.2918 18.7683 22.0421 20.1749C22.579 21.0258 23.2162 21.8092 23.9398 22.5082H3.98985Z"
                        fill="#4F4F4F"
                    />
                    <path
                        d="M14.0005 26.662C14.4904 26.6507 14.9606 26.4665 15.3278 26.142C15.695 25.8175 15.9357 25.3735 16.0071 24.8887H11.916C11.9895 25.3867 12.2414 25.8411 12.6248 26.1673C13.0082 26.4935 13.4971 26.6693 14.0005 26.662Z"
                        fill="#4F4F4F"
                    />
                </svg>

                <!-- notification present indicator -->
                <span
                    class="w-[7px] h-[7px] rounded-full bg-[#D35400] absolute right-[2px] top-[5px]"
                ></span>
            </button>

            <button
                class="rounded-[4px] w-[28px] h-[28px] flex md:hidden items-center justify-center"
                onclick="toggleMobileSideNav()"
            >
                <svg
                    width="24"
                    height="16"
                    viewBox="0 0 24 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M1.5 1.5H22.5M1.5 8H22.5M1.5 14.5H22.5"
                        stroke="#2E2828"
                        stroke-width="3"
                        stroke-miterlimit="10"
                        stroke-linecap="round"
                    />
                </svg>
            </button>

            <button
                id="navDropdown"
                data-dropdown-toggle="dropdownMenu"
                class="hidden md:flex items-center gap-[4px]"
                type="button"
            >
                @if(auth()->user()->company->logo)
                    <img src="{{ asset('storage/' . auth()->user()->company->logo) }}" class="w-[40px] h-[40px] object-cover rounded-[8px]"/>
                @else
                    <img src="{{ asset('img/logo_place_holder.jpg') }}" class="w-[40px] h-[40px] object-cover rounded-[8px]"/>
                @endif

                <svg
                    width="14"
                    height="8"
                    viewBox="0 0 14 8"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M6.99805 8L13.998 0H-0.00195312L6.99805 8Z"
                        fill="#4F4F4F"
                    />
                </svg>
            </button>

            <!-- nav Dropdown menu -->
            <div id="dropdownMenu" class="z-10 hidden shadow w-44">
                <ul
                    class="py-2 text-[14px] text-[#4F4F4F] font-medium bg-white-0"
                    aria-labelledby="navDropdown"
                >
                    <li>
                        <a href="#" class="block px-4 py-2">Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- mobile nav sidebar -->
<aside id="mobile-side-nav" class="fixed block md:hidden w-full left-[-100%] right-0 bottom-0 top-0 h-full backdrop-blur-sm z-10 pt-[58px] transition-all">
    <div
        class="w-[270px] h-full overflow-y-auto bg-white-20 py-[39px] px-[17px] flex flex-col gap-[77px]"
    >
        <div class="flex flex-col gap-[28px]">
            <a
                href=""
                class="w-full flex items-center px-[10px] py-[7px] gap-[8px] font-semibold text-[14px] text-[#4F4F4F]"
            >
                <div
                    class="w-[36px] h-[36px] bg-[#092C86] rounded-[6px] flex items-center justify-center"
                >
                    <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M1.77778 16C1.28889 16 0.870223 15.8258 0.521779 15.4773C0.173335 15.1289 -0.000591083 14.7105 1.50915e-06 14.2222V1.77778C1.50915e-06 1.28889 0.174224 0.870223 0.522668 0.521779C0.871112 0.173335 1.28948 -0.000591083 1.77778 1.50915e-06H5.33333C5.82222 1.50915e-06 6.24089 0.174224 6.58933 0.522668C6.93778 0.871112 7.1117 1.28948 7.11111 1.77778V14.2222C7.11111 14.7111 6.93689 15.1298 6.58844 15.4782C6.24 15.8267 5.82163 16.0006 5.33333 16H1.77778ZM10.6667 16C10.1778 16 9.75911 15.8258 9.41067 15.4773C9.06222 15.1289 8.8883 14.7105 8.88889 14.2222V9.77778C8.88889 9.28889 9.06311 8.87022 9.41156 8.52178C9.76 8.17333 10.1784 7.99941 10.6667 8H14.2222C14.7111 8 15.1298 8.17422 15.4782 8.52267C15.8267 8.87111 16.0006 9.28948 16 9.77778V14.2222C16 14.7111 15.8258 15.1298 15.4773 15.4782C15.1289 15.8267 14.7105 16.0006 14.2222 16H10.6667ZM10.6667 6.22222C10.1778 6.22222 9.75911 6.048 9.41067 5.69956C9.06222 5.35111 8.8883 4.93274 8.88889 4.44445V1.77778C8.88889 1.28889 9.06311 0.870223 9.41156 0.521779C9.76 0.173335 10.1784 -0.000591083 10.6667 1.50915e-06H14.2222C14.7111 1.50915e-06 15.1298 0.174224 15.4782 0.522668C15.8267 0.871112 16.0006 1.28948 16 1.77778V4.44445C16 4.93333 15.8258 5.352 15.4773 5.70045C15.1289 6.04889 14.7105 6.22282 14.2222 6.22222H10.6667Z"
                            fill="white"
                        />
                    </svg>
                </div>

                <p>Dashboard</p>
            </a>

            <a
                href=""
                class="w-full flex items-center px-[10px] py-[7px] gap-[8px] font-semibold text-[12px] text-[#80868C] hover:text-[14px] hover:text-[#4F4F4F] transition-all group"
            >
                <div
                    class="w-[36px] h-[36px] bg-[#F3F5F7] group-hover:bg-[#092C86] rounded-[6px] flex items-center justify-center"
                >
                    <svg
                        width="20"
                        height="16"
                        viewBox="0 0 20 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-[#80868C] group-hover:text-white-0 fill-current"
                    >
                        <path
                            d="M19.2857 1.45455H15.7143V0.181818C15.7143 0.0818182 15.6339 0 15.5357 0H14.2857C14.1875 0 14.1071 0.0818182 14.1071 0.181818V1.45455H10.8036V0.181818C10.8036 0.0818182 10.7232 0 10.625 0H9.375C9.27679 0 9.19643 0.0818182 9.19643 0.181818V1.45455H5.89286V0.181818C5.89286 0.0818182 5.8125 0 5.71429 0H4.46429C4.36607 0 4.28571 0.0818182 4.28571 0.181818V1.45455H0.714286C0.319196 1.45455 0 1.77955 0 2.18182V15.2727C0 15.675 0.319196 16 0.714286 16H19.2857C19.6808 16 20 15.675 20 15.2727V2.18182C20 1.77955 19.6808 1.45455 19.2857 1.45455ZM8.03571 12C8.03571 12.1 7.95536 12.1818 7.85714 12.1818H3.75C3.65179 12.1818 3.57143 12.1 3.57143 12V10.9091C3.57143 10.8091 3.65179 10.7273 3.75 10.7273H7.85714C7.95536 10.7273 8.03571 10.8091 8.03571 10.9091V12ZM8.03571 8.90909C8.03571 9.00909 7.95536 9.09091 7.85714 9.09091H3.75C3.65179 9.09091 3.57143 9.00909 3.57143 8.90909V7.81818C3.57143 7.71818 3.65179 7.63636 3.75 7.63636H7.85714C7.95536 7.63636 8.03571 7.71818 8.03571 7.81818V8.90909ZM16.3951 6.83409L12.7121 12.0318C12.6792 12.0783 12.6359 12.1161 12.5859 12.1422C12.5358 12.1683 12.4804 12.1819 12.4241 12.1819C12.3679 12.1819 12.3124 12.1683 12.2624 12.1422C12.2123 12.1161 12.169 12.0783 12.1362 12.0318L9.58705 8.43636C9.50223 8.31591 9.58705 8.14773 9.73214 8.14773H10.9576C11.0714 8.14773 11.1786 8.20455 11.2455 8.29773L12.4241 9.95909L14.7388 6.69318C14.8058 6.59773 14.9129 6.54318 15.0268 6.54318H16.25C16.3951 6.54545 16.4799 6.71364 16.3951 6.83409Z"
                        />
                    </svg>
                </div>

                <p>Scheduler</p>
            </a>

            <a
                href=""
                class="w-full flex items-center px-[10px] py-[7px] gap-[8px] font-semibold text-[12px] text-[#80868C] hover:text-[14px] hover:text-[#4F4F4F] transition-all group"
            >
                <div
                    class="w-[36px] h-[36px] bg-[#F3F5F7] group-hover:bg-[#092C86] rounded-[6px] flex items-center justify-center"
                >
                    <svg
                        width="12"
                        height="16"
                        viewBox="0 0 12 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-[#80868C] group-hover:text-white-0 fill-current"
                    >
                        <g clip-path="url(#clip0_3145_9190)">
                            <path
                                d="M6 0C4.69375 0 3.58125 0.834375 3.17188 2H2C0.896875 2 0 2.89687 0 4V14C0 15.1031 0.896875 16 2 16H10C11.1031 16 12 15.1031 12 14V4C12 2.89687 11.1031 2 10 2H8.82812C8.41875 0.834375 7.30625 0 6 0ZM6 2C6.26522 2 6.51957 2.10536 6.70711 2.29289C6.89464 2.48043 7 2.73478 7 3C7 3.26522 6.89464 3.51957 6.70711 3.70711C6.51957 3.89464 6.26522 4 6 4C5.73478 4 5.48043 3.89464 5.29289 3.70711C5.10536 3.51957 5 3.26522 5 3C5 2.73478 5.10536 2.48043 5.29289 2.29289C5.48043 2.10536 5.73478 2 6 2ZM2.25 8.5C2.25 8.30109 2.32902 8.11032 2.46967 7.96967C2.61032 7.82902 2.80109 7.75 3 7.75C3.19891 7.75 3.38968 7.82902 3.53033 7.96967C3.67098 8.11032 3.75 8.30109 3.75 8.5C3.75 8.69891 3.67098 8.88968 3.53033 9.03033C3.38968 9.17098 3.19891 9.25 3 9.25C2.80109 9.25 2.61032 9.17098 2.46967 9.03033C2.32902 8.88968 2.25 8.69891 2.25 8.5ZM5.5 8H9.5C9.775 8 10 8.225 10 8.5C10 8.775 9.775 9 9.5 9H5.5C5.225 9 5 8.775 5 8.5C5 8.225 5.225 8 5.5 8ZM2.25 11.5C2.25 11.3011 2.32902 11.1103 2.46967 10.9697C2.61032 10.829 2.80109 10.75 3 10.75C3.19891 10.75 3.38968 10.829 3.53033 10.9697C3.67098 11.1103 3.75 11.3011 3.75 11.5C3.75 11.6989 3.67098 11.8897 3.53033 12.0303C3.38968 12.171 3.19891 12.25 3 12.25C2.80109 12.25 2.61032 12.171 2.46967 12.0303C2.32902 11.8897 2.25 11.6989 2.25 11.5ZM5 11.5C5 11.225 5.225 11 5.5 11H9.5C9.775 11 10 11.225 10 11.5C10 11.775 9.775 12 9.5 12H5.5C5.225 12 5 11.775 5 11.5Z"
                            />
                        </g>
                        <defs>
                            <clipPath id="clip0_3145_9190">
                                <rect width="12" height="16" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>

                <p>Directory</p>
            </a>

            <a
                href=""
                class="w-full flex items-center px-[10px] py-[7px] gap-[8px] font-semibold text-[12px] text-[#80868C] hover:text-[14px] hover:text-[#4F4F4F] transition-all group"
            >
                <div
                    class="w-[36px] h-[36px] bg-[#F3F5F7] group-hover:bg-[#092C86] rounded-[6px] flex items-center justify-center"
                >
                    <svg
                        width="14"
                        height="16"
                        viewBox="0 0 14 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-[#80868C] group-hover:text-white-0 fill-current"
                    >
                        <path
                            d="M13.8139 3.25692L10.632 0.18C10.5729 0.122871 10.5027 0.0775705 10.4255 0.0466855C10.3482 0.0158005 10.2654 -6.33759e-05 10.1818 1.90276e-07H3.81818C3.48063 1.90276e-07 3.15691 0.12967 2.91823 0.360484C2.67955 0.591298 2.54545 0.904349 2.54545 1.23077V2.46154H1.27273C0.935179 2.46154 0.611456 2.59121 0.372773 2.82202C0.13409 3.05284 0 3.36589 0 3.69231V14.7692C0 15.0957 0.13409 15.4087 0.372773 15.6395C0.611456 15.8703 0.935179 16 1.27273 16H10.1818C10.5194 16 10.8431 15.8703 11.0818 15.6395C11.3205 15.4087 11.4545 15.0957 11.4545 14.7692V13.5385H12.7273C13.0648 13.5385 13.3885 13.4088 13.6272 13.178C13.8659 12.9472 14 12.6341 14 12.3077V3.69231C14.0001 3.61147 13.9837 3.53141 13.9517 3.45671C13.9198 3.382 13.8729 3.31412 13.8139 3.25692ZM7.63636 12.9231H3.81818C3.64941 12.9231 3.48755 12.8582 3.3682 12.7428C3.24886 12.6274 3.18182 12.4709 3.18182 12.3077C3.18182 12.1445 3.24886 11.988 3.3682 11.8726C3.48755 11.7571 3.64941 11.6923 3.81818 11.6923H7.63636C7.80514 11.6923 7.967 11.7571 8.08634 11.8726C8.20568 11.988 8.27273 12.1445 8.27273 12.3077C8.27273 12.4709 8.20568 12.6274 8.08634 12.7428C7.967 12.8582 7.80514 12.9231 7.63636 12.9231ZM7.63636 10.4615H3.81818C3.64941 10.4615 3.48755 10.3967 3.3682 10.2813C3.24886 10.1659 3.18182 10.0094 3.18182 9.84615C3.18182 9.68294 3.24886 9.52642 3.3682 9.41101C3.48755 9.2956 3.64941 9.23077 3.81818 9.23077H7.63636C7.80514 9.23077 7.967 9.2956 8.08634 9.41101C8.20568 9.52642 8.27273 9.68294 8.27273 9.84615C8.27273 10.0094 8.20568 10.1659 8.08634 10.2813C7.967 10.3967 7.80514 10.4615 7.63636 10.4615ZM12.7273 12.3077H11.4545V6.15385C11.4546 6.07301 11.4382 5.99295 11.4063 5.91825C11.3743 5.84354 11.3275 5.77565 11.2684 5.71846L8.08659 2.64154C8.02745 2.58441 7.95725 2.53911 7.88 2.50822C7.80274 2.47734 7.71996 2.46148 7.63636 2.46154H3.81818V1.23077H9.91852L12.7273 3.94692V12.3077Z"
                        />
                    </svg>
                </div>

                <p>Work Records</p>
            </a>

            <a
                href=""
                class="w-full flex items-center px-[10px] py-[7px] gap-[8px] font-semibold text-[12px] text-[#80868C] hover:text-[14px] hover:text-[#4F4F4F] transition-all group"
            >
                <div
                    class="w-[36px] h-[36px] bg-[#F3F5F7] group-hover:bg-[#092C86] rounded-[6px] flex items-center justify-center"
                >
                    <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-[#80868C] group-hover:text-white-0 fill-current"
                    >
                        <path
                            d="M5.89497 6.73649C7.75539 6.73649 9.26356 5.22847 9.26356 3.36824C9.26356 1.50801 7.75539 0 5.89497 0C4.03454 0 2.52637 1.50801 2.52637 3.36824C2.52637 5.22847 4.03454 6.73649 5.89497 6.73649Z"
                        />
                        <path
                            d="M5.89505 16.0002C9.15079 16.0002 11.7901 14.4921 11.7901 12.6319C11.7901 10.7717 9.15079 9.26367 5.89505 9.26367C2.6393 9.26367 0 10.7717 0 12.6319C0 14.4921 2.6393 16.0002 5.89505 16.0002Z"
                        />
                        <path
                            d="M16 12.6307C16 14.026 14.2854 15.1569 12.1927 15.1569C12.8091 14.4832 13.2336 13.637 13.2336 12.6324C13.2336 11.6261 12.8083 10.7798 12.1902 10.1054C14.2837 10.1045 16 11.2362 16 12.6307ZM13.4736 3.36802C13.4739 3.7745 13.376 4.17504 13.1884 4.53563C13.0008 4.89622 12.7289 5.20622 12.3959 5.4393C12.0628 5.67239 11.6784 5.82167 11.2754 5.87447C10.8723 5.92728 10.4624 5.88205 10.0806 5.74263C10.492 5.01892 10.7076 4.20048 10.7063 3.36802C10.7063 2.50491 10.4789 1.69485 10.0814 0.994252C10.4632 0.855001 10.873 0.809906 11.276 0.862796C11.6789 0.915685 12.0632 1.065 12.3961 1.29806C12.729 1.53112 13.0008 1.84106 13.1884 2.20156C13.376 2.56206 13.4738 2.96165 13.4736 3.36802Z"
                        />
                    </svg>
                </div>

                <p>Employee Timesheet</p>
            </a>

            <a
                href=""
                class="w-full flex items-center px-[10px] py-[7px] gap-[8px] font-semibold text-[12px] text-[#80868C] hover:text-[14px] hover:text-[#4F4F4F] transition-all group"
            >
                <div
                    class="w-[36px] h-[36px] bg-[#F3F5F7] group-hover:bg-[#092C86] rounded-[6px] flex items-center justify-center"
                >
                    <svg
                        width="20"
                        height="18"
                        viewBox="0 0 20 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-[#80868C] group-hover:text-white-0 fill-current"
                    >
                        <path
                            d="M1.81818 9C0.818182 9 0 8.15 0 7.11111V2.38889C0 1.35 0.818182 0.5 1.81818 0.5H9.09091C10.0909 0.5 10.9091 1.35 10.9091 2.38889V7.11111C10.9091 8.15 10.0909 9 9.09091 9H7.27273V11.8333L4.54545 9H1.81818ZM18.1818 14.6667C19.1818 14.6667 20 13.8167 20 12.7778V8.05556C20 7.01667 19.1818 6.16667 18.1818 6.16667H12.7273V7.11111C12.7273 9.18889 11.0909 10.8889 9.09091 10.8889V12.7778C9.09091 13.8167 9.90909 14.6667 10.9091 14.6667H12.7273V17.5L15.4545 14.6667H18.1818Z"
                        />
                    </svg>
                </div>

                <p>Work Chat</p>
            </a>
        </div>

        <button
            id="profileDropdown"
            data-dropdown-toggle="asideDropdown"
            class="w-full flex justify-between items-center px-[10px] py-[4px]"
            type="button"
        >
            <div class="flex items-center gap-[5px]">
                <img
                    src="../assets/user.jpg"
                    class="w-[40px] h-[40px] object-cover rounded-[8px]"
                    alt=""
                />

                <p class="text-[14px] font-semibold text-[#80868C]">Username</p>
            </div>

            <svg
                width="14"
                height="8"
                viewBox="0 0 14 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M6.99805 8L13.998 0H-0.00195312L6.99805 8Z"
                    fill="#4F4F4F"
                />
            </svg>
        </button>

        <!-- profile Dropdown menu -->
        <div id="asideDropdown" class="z-10 hidden shadow w-44">
            <ul
                class="py-2 text-[14px] text-[#4F4F4F] font-medium"
                aria-labelledby="profileDropdown"
            >
                <li>
                    <a href="#" class="block px-4 py-2">Profile</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</aside>
