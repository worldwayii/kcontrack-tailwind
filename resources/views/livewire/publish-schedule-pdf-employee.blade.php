<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet"/>

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kcontrack</title>
  </head>

  <body class="bg-white-20 font-montserrat relative flex flex-col h-screen">
    <nav
      class="sticky top-0 left-0 right-0 w-full flex px-[14px] md:px-[35px] py-[11px] md:py-[18px] justify-between md:justify-start md:gap-[35px] items-center bg-white-0 md:bg-transparent shadow-[0px_3px_8px_0px_#00000024] md:shadow-none z-20"
    >
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
                    <img src="{{ asset('img/icon_holder.png') }}" class="w-[17px] h-[17px] object-cover rounded-full"/>
            </div>

            <p class="text-[14px] font-semibold text-[#80868C] hidden lg:block">

            </p>
          </button>


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
            <img src="{{ asset('img/logo_place_holder.jpg') }}" class="w-[40px] h-[40px] object-cover rounded-[8px]"/>
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

<div class="flex-1 flex flex-col overflow-y-auto pb-[20px] lg:bg-white-0">
    <div class="flex-1 flex flex-col overflow-y-auto pb-[20px] lg:bg-white-0">
        <section
          class="w-full bg-white-0 px-[19px] py-[32px] rounded-[16px] lg:rounded-br-none lg:rounded-bl-none flex flex-col gap-[27px]"
        >
          <div class="flex flex-col lg:flex-row gap-[4px] justify-between">
            <div class="flex items-center gap-[4px]">
              <a href=""
                class="flex items-center justify-center w-[38px] h-[38px] rounded-[8px] bg-[#F2F2F2] shrink-0"
              >
                <svg
                  width="7"
                  height="14"
                  viewBox="0 0 7 14"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M5.83001 13.9993C5.68062 13.9998 5.53301 13.9668 5.39803 13.9028C5.26305 13.8388 5.14413 13.7453 5.05001 13.6293L0.220011 7.6293C0.0729294 7.45037 -0.00747681 7.22592 -0.00747681 6.9943C-0.00747681 6.76267 0.0729294 6.53823 0.220011 6.3593L5.22001 0.359299C5.38975 0.155083 5.63366 0.0266581 5.89809 0.00227838C6.16251 -0.0221014 6.4258 0.0595606 6.63001 0.229299C6.83423 0.399038 6.96265 0.642949 6.98703 0.907376C7.01141 1.1718 6.92975 1.43508 6.76001 1.6393L2.29001 6.9993L6.61001 12.3593C6.73229 12.5061 6.80997 12.6848 6.83385 12.8744C6.85773 13.0639 6.82681 13.2563 6.74476 13.4289C6.6627 13.6014 6.53294 13.7468 6.37083 13.8479C6.20872 13.949 6.02105 14.0015 5.83001 13.9993Z"
                    fill="#828282"
                  />
                </svg>
            </a>

              <p class="text-[20px] font-semibold text-[#4F4F4F]">
                Summary - Individual Schedule
              </p>
            </div>

            <div
              class="bg-[#3984E61A] w-fit rounded-[4px] px-[9px] py-[10px] text-[#3984E6] text-[12px] font-semibold"
            >

                    <p>
                        Scheduled By: {{$user->company->first_name}} | Date Scheduled: {{now()->format('d/m/y')}} | Time: {{now()->format('h:i:s A')}}
                    </p>

            </div>
          </div>

          <div class="flex flex-col overflow-x-auto no-scrollbar">
            <div
              class="flex gap-[24px] items-center flex-1 min-w-fit py-[16px] bg-[#EDF0F6] border-[0.5px] border-[#EDF0F6] font-semibold text-[14px] text-[#4F4F4F]"
            >
              <p class="flex-1 min-w-[124px] text-center">Employee</p>
              <p class="flex-1 min-w-[148px] text-center">Email Address</p>
              <p class="flex-1 min-w-[82px] text-center">Job Role</p>
              <p class="flex-1 min-w-[100px] text-center">Time Frame</p>
              <p class="flex-1 min-w-[86px] text-center">Breaks</p>
              <p class="flex-1 min-w-[120px] text-center">Days Assigned</p>
              <p class="flex-1 min-w-[160px] text-center">Shift Note</p>
            </div>

            <div class="flex flex-col gap-[4px]">
                @php
                    $itemCount = 0;
                @endphp
                @forelse ($employee->schedulers->where('published', false) as $index => $schedule)

                <div
                class="flex gap-[24px] items-center flex-1 min-w-fit border-[0.5px] border-[#EDEFF4] text-[13px] font-medium text-[#4F4F4F] py-[16px]"
              >
                <div
                  class="flex-1 min-w-[124px] flex items-center gap-[8px] pl-[8px]"
                >

                  <p class="font-bold text-[14px] text-[#4F4F4F]">{{$employee->getFullNameAttribute()}}</p>
                </div>
                <p class="flex-1 min-w-[148px] text-center">
                  {{$employee->email}}
                </p>
                <p class="flex-1 min-w-[82px] text-center">{{$schedule->role}}</p>
                <p class="flex-1 min-w-[100px] text-center">{{$schedule->start_at->format('h a'). ' - '. $schedule->end_at->format('h a')}}</p>
                <p class="flex-1 min-w-[86px] text-center">{{$schedule->break}}</p>
                <p class="flex-1 min-w-[120px] text-center">{{$schedule->start_at->format('l')}}</p>
                <p class="flex-1 min-w-[160px]">
                  {{$schedule->shift_note}}
                </p>
              </div>
              @php
                $itemCount++;
              @endphp

              @if ($itemCount % 8 == 0)
                  @pageBreak
              @endif

                @empty

                @endforelse
            </div>
          </div>
        </section>
      </div>
    </div>
</body>
</html>
