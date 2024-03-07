<nav class="sticky top-0 left-0 right-0 w-full flex px-[14px] md:px-[35px] py-[11px] md:py-[18px] justify-between md:justify-start md:gap-[35px] items-center bg-white-0 md:bg-transparent shadow-[0px_3px_8px_0px_#00000024] md:shadow-none z-20">
    <a href="#" >
        @include('partials.logo')
    </a>

    <div class="flex md:flex-1 items-center justify-between">
        <div class="hidden md:flex items-center gap-[40px] lg:gap-[140px]">
            <button class="flex items-center gap-[10px]">
                <div class="flex items-center justify-center w-[31px] h-[31px] rounded-full bg-white-0 border-[0.5px] border-[#B4BCB3]">
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
                    <img class="rounded-md h-[40px] w-[40px]" src="{{ asset('storage/' . auth()->user()->company->logo) }}"
                         class="w-[40px] h-[40px] object-cover rounded-[8px]"
                    />
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
