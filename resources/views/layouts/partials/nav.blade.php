<nav
    class="flex z-1 items-center shadow-md md:shadow-none justify-between bg-white-0 md:bg-white-20 border-solid border-b-gray-0 px-2 md:px-8 py-2 md:py-4">
    <div class="flex items-center">
        @include('partials.auth-logo')
        <div
            class="border-solid border hidden md:flex items-center justify-center rounded-full p-2 h-[31px] w-[31px] ms-8 me-2">
            <img src="/img/logo.png" />

        </div>
        <span class="text-sm  hidden md:block text-gray-60 font-semibold me-12">{{Auth::user()->company->name}}</span>
        <div
            class=" hidden md:flex items-center space-x-2 border-solid border border-grey-70 p-1 rounded-md bg-white-0 ">
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
            <input placeholder="Search" />
        </div>
    </div>
    <div class="flex items-center">
        <button class="bg-gradient-to-b from-[#092C86] via-[#092C86] to-[#F828BE]  rounded-md mx-4 md:mx-8">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 13H13V19H11V13H5V11H11V5H13V11H19V13Z" fill="white" />
            </svg>
        </button>
        <svg class="cursor-pointer" width="28" height="28" viewBox="0 0 28 28" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M25.2854 21.6454C24.5354 20.9767 23.8788 20.2102 23.3332 19.3665C22.7376 18.2018 22.3806 16.9299 22.2832 15.6254V11.7831C22.2883 9.73418 21.5451 7.75385 20.1931 6.21424C18.8411 4.67463 16.9734 3.68171 14.941 3.42204V2.4187C14.941 2.14332 14.8316 1.87922 14.6368 1.68449C14.4421 1.48977 14.178 1.38037 13.9026 1.38037C13.6272 1.38037 13.3631 1.48977 13.1684 1.68449C12.9737 1.87922 12.8643 2.14332 12.8643 2.4187V3.43759C10.85 3.71598 9.00494 4.7149 7.6707 6.24934C6.33647 7.78378 5.60353 9.74976 5.60763 11.7831V15.6254C5.51021 16.9299 5.15323 18.2018 4.55763 19.3665C4.02165 20.2083 3.37556 20.9747 2.63651 21.6454C2.55355 21.7183 2.48706 21.808 2.44146 21.9086C2.39587 22.0091 2.37221 22.1183 2.37207 22.2287V23.2865C2.37207 23.4928 2.45401 23.6906 2.59988 23.8365C2.74574 23.9823 2.94357 24.0643 3.14985 24.0643H24.7721C24.9783 24.0643 25.1762 23.9823 25.322 23.8365C25.4679 23.6906 25.5498 23.4928 25.5498 23.2865V22.2287C25.5497 22.1183 25.5261 22.0091 25.4805 21.9086C25.4349 21.808 25.3684 21.7183 25.2854 21.6454ZM3.98985 22.5087C4.7135 21.8096 5.35065 21.0263 5.88763 20.1754C6.63788 18.7687 7.07563 17.2167 7.17096 15.6254V11.7831C7.14011 10.8716 7.29301 9.96321 7.62055 9.112C7.94809 8.26079 8.44357 7.4842 9.07748 6.82847C9.7114 6.17274 10.4708 5.65128 11.3104 5.29514C12.1501 4.939 13.0528 4.75547 13.9648 4.75547C14.8769 4.75547 15.7796 4.939 16.6193 5.29514C17.4589 5.65128 18.2183 6.17274 18.8522 6.82847C19.4861 7.4842 19.9816 8.26079 20.3091 9.112C20.6367 9.96321 20.7896 10.8716 20.7587 11.7831V15.6254C20.8541 17.2167 21.2918 18.7687 22.0421 20.1754C22.579 21.0263 23.2162 21.8096 23.9398 22.5087H3.98985Z"
                fill="#4F4F4F" />
            <path
                d="M14 26.6625C14.4899 26.6512 14.9601 26.467 15.3273 26.1425C15.6946 25.818 15.9352 25.374 16.0066 24.8892H11.9155C11.989 25.3872 12.2409 25.8416 12.6243 26.1678C13.0077 26.494 13.4966 26.6698 14 26.6625Z"
                fill="#4F4F4F" />
        </svg>
        <svg onclick="myFunction()" class="cursor-pointer ms-4 md:hidden" width="24" height="16" viewBox="0 0 24 16"
             fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.5 1.5H22.5M1.5 8H22.5M1.5 14.5H22.5" stroke="#2E2828" stroke-width="3"
                  stroke-miterlimit="10" stroke-linecap="round" />
        </svg>
        <div class="ms-8 h-[40px] w-[40px] hidden md:block">
            <a href="{{route('company.profile')}}">
                <img class="rounded-md h-[40px] w-[40px]" src="/img/user.png" />
            </a>
        </div>
        <svg class="cursor-pointer hidden md:block" width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M11.998 17L18.998 9H4.99805L11.998 17Z" fill="#4F4F4F" />
        </svg>
    </div>
</nav>
