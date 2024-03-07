
<div class="flex-1 flex flex-col overflow-y-auto pb-[20px] lg:bg-white-0">
    <section
      class="w-full bg-white-0 px-[19px] py-[32px] rounded-[16px] lg:rounded-br-none lg:rounded-bl-none flex flex-col gap-[22px]"
    >
      <div
        class="flex flex-col md:flex-row md:justify-between md:items-center gap-[22px]"
      >
        <p
          class="font-semibold text-[16px] md:text-[20px] text-[#4F4F4F] md:flex md:flex-col"
        >
          Scheduler
          <span
            class="font-medium text-[10px] text-[#1A73E8] hidden md:block"
            >Dashboard</span
          >
        </p>

        <div class="flex gap-[12px] md:gap-[9px]">
          <button
            data-dropdown-toggle="create_schedule_dropdown"
            type="button"
            class="flex items-center justify-center h-[40px] gap-[4px] px-[17px] md:px-[15.5px] text-white-0 font-medium text-[12px] border-[0.5px] border-[#3984E6] rounded-[4px] bg-gradient-to-br from-[#092C86] via-[#092C86] to-[#F828BE]"
          >
            <svg
              width="12"
              height="12"
              viewBox="0 0 12 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M11.8332 6.83366H6.83317V11.8337H5.1665V6.83366H0.166504V5.16699H5.1665V0.166992H6.83317V5.16699H11.8332V6.83366Z"
                fill="white"
              />
            </svg>

            Create Schedule
          </button>


          <div
            id="create_schedule_dropdown"
            class="z-10 hidden bg-white-0 divide-y divide-gray-100 rounded-lg shadow w-44"
          >
            <ul class="py-2 text-sm text-gray-700">
              <li>
                <button
                  data-modal-target="create_schedule"
                  data-modal-toggle="create_schedule"
                  type="button"
                  class="block px-4 py-2"
                >
                  Individual Schedule
                </button>
              </li>
              <li>
                <button type="button" class="block px-4 py-2">
                  Bulk Schedule
                </button>
              </li>
            </ul>
          </div>

          <a
            href="{{route('company.scheduler.publish')}}"
            class="flex items-center justify-center h-[40px] gap-[4px] px-[17px] md:px-[15.5px] text-white-0 font-medium text-[12px] md:text-[14px] border-[0.5px] border-[#3984E6] rounded-[4px] bg-[#3984E6]"
          >
            Publish
          </a>
        </div>
      </div>

      <div
        class="flex flex-col md:flex-row gap-[22px] md:gap-[20px] lg:gap-[100px] xl:gap-[145px]"
      >
        <div class="flex gap-[12px]">
          <div class="group relative flex items-center h-[40px]">
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
              placeholder="Search employee"
              class="outline-none pl-[36px] pr-[10px] border-[1px] border-[#EDEFF4] rounded-[4px] font-monteserrat font-medium text-[12px] lg:text-[14px] placeholder:text-[#8C8C8C] w-[164px] lg:w-[180px] h-full"
            />
          </div>

          <button
            id="filterDropdown"
            data-dropdown-toggle="filterMenuDropdown"
            class="w-[40px] lg:w-fit h-[40px] flex items-center justify-center gap-[4px] rounded-[4px] border-[1px] border-[#EDEFF4] lg:px-[15px]"
            type="button"
          >
            <p class="font-medium text-[12px] hidden lg:block">Filter By</p>

            <svg
              class="lg:hidden"
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M18.4375 6.5625H1.5625C1.31386 6.5625 1.0754 6.46373 0.899587 6.28791C0.723772 6.1121 0.625 5.87364 0.625 5.625C0.625 5.37636 0.723772 5.1379 0.899587 4.96209C1.0754 4.78627 1.31386 4.6875 1.5625 4.6875H18.4375C18.6861 4.6875 18.9246 4.78627 19.1004 4.96209C19.2762 5.1379 19.375 5.37636 19.375 5.625C19.375 5.87364 19.2762 6.1121 19.1004 6.28791C18.9246 6.46373 18.6861 6.5625 18.4375 6.5625ZM15.3125 10.9375H4.6875C4.43886 10.9375 4.2004 10.8387 4.02459 10.6629C3.84877 10.4871 3.75 10.2486 3.75 10C3.75 9.75136 3.84877 9.5129 4.02459 9.33709C4.2004 9.16127 4.43886 9.0625 4.6875 9.0625H15.3125C15.5611 9.0625 15.7996 9.16127 15.9754 9.33709C16.1512 9.5129 16.25 9.75136 16.25 10C16.25 10.2486 16.1512 10.4871 15.9754 10.6629C15.7996 10.8387 15.5611 10.9375 15.3125 10.9375ZM11.5625 15.3125H8.4375C8.18886 15.3125 7.9504 15.2137 7.77459 15.0379C7.59877 14.8621 7.5 14.6236 7.5 14.375C7.5 14.1264 7.59877 13.8879 7.77459 13.7121C7.9504 13.5363 8.18886 13.4375 8.4375 13.4375H11.5625C11.8111 13.4375 12.0496 13.5363 12.2254 13.7121C12.4012 13.8879 12.5 14.1264 12.5 14.375C12.5 14.6236 12.4012 14.8621 12.2254 15.0379C12.0496 15.2137 11.8111 15.3125 11.5625 15.3125Z"
                fill="#2E2828"
              />
            </svg>

            <svg
              class="hidden lg:block"
              width="10"
              height="6"
              viewBox="0 0 10 6"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M4.9987 5.33333L9.66537 0H0.332031L4.9987 5.33333Z"
                fill="#80868C"
              />
            </svg>
          </button>


          <div id="filterMenuDropdown" class="z-10 hidden shadow w-44">
            <ul
              class="py-2 bg-white-0 text-[14px] text-[#4F4F4F] font-medium"
              aria-labelledby="filterDropdown"
            >
              <li>
                <a href="#" class="block px-4 py-2">Day</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2">Week</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2">Month</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2">Role</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="flex md:flex-1 justify-between items-center">
          <div
            class="flex h-[40px] items-center px-[8px] rounded-[4px] border-[0.5px] border-[#3984E6] bg-[#OD3984E6]"
          >
          <button
          class="w-[20px] md:w-[22px] h-[20px] md:h-[22px] flex items-center justify-center"
          wire:click='goToPreviousWeek'
        >
          <svg
            width="7"
            height="14"
            viewBox="0 0 7 14"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M7.44569e-07 7L7 0.874999L7 13.125L7.44569e-07 7Z"
              fill="#3984E6"
            />
          </svg>
        </button>

        <p class="font-medium text-[12px] text-[#3984E6]">
            {{$startsAt->format('M d')}} - {{$startsAt->clone()->addDays(6)->format('M d')}}, {{$startsAt->format('Y')}}
        </p>

        <button
          class="w-[20px] h-[20px] flex items-center justify-center" wire:click='goToNextWeek'
        >
          <svg
            width="7"
            height="14"
            viewBox="0 0 7 14"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M7 7L-5.35465e-07 0.874999L0 13.125L7 7Z"
              fill="#3984E6"
            />
          </svg>
        </button>
          </div>

          <p
            class="text-[11px] md:text-[12px] lg:text-[14px] font-medium text-[#8C8C8C] flex flex-col lg:flex-row lg:gap-[2px] items-end"
          >
            Amount Scheduled:
            <span class="font-semibold text-[#3984E6]">{{floor($amount_scheduled / 60).':'.($amount_scheduled % 60)}}HRS</span>
          </p>
        </div>
      </div>

      <div class="flex flex-col gap-[12px] lg:gap-0">
        <!-- data heading -->
        <div
          class="flex-1 h-fit flex border-[1px] lg:border-[0.5px] border-[#EDEFF4] rounded-[10px] lg:rounded-none lg:bg-[#FAFAFA]"
        >
          <div
            class="flex-1 py-[16px] lg:py-[10px] hidden lg:flex flex-col items-center justify-center text-[14px] font-medium lg:font-semibold text-[#80868C] lg:text-[#4F4F4F]"
          >
            <p class="w-fit flex flex-col lg:items-start">Employees ({{$employees->count()}})</p>
          </div>
        @foreach($monthGrid->first() as $day)

        <button
        class="flex-1 py-[16px] lg:py-[10px] flex flex-col items-center justify-center text-[14px] lg:text-[12px] font-medium lg:font-semibold text-[#80868C] lg:text-[#A7A7A7] hover:bg-[#3984E61A]"
      >
        <p class="w-fit flex flex-col lg:items-start">
          <span
            >{{ $day->format('l') }}

              </span
          >
          <span
            class="lg:font-medium lg:text-[24px] lg:text-[#A7A7A7] lg:leading-none lg:justify-self-start"
            >{{ $day->format('j') }}</span
          >
        </p>
      </button>
        @endforeach

        </div>

        <!-- data cells -->
        <div class="flex flex-col gap-[8px] lg:gap-0" id="data-cells">
          <!-- data row -->
          @forelse ($employees as $user)
          @php
                $schedules = $user['schedulers'];
                $totalTime = $schedules->sum(function ($schedule) {
                $start = \Carbon\Carbon::parse($schedule->start_at);
                $end = \Carbon\Carbon::parse($schedule->end_at);
                return $end->diffInMinutes($start);
            });


            $hours = floor($totalTime / 60);
            $minutes = $totalTime % 60;


            $totalScheduledTime = $hours.':'.$minutes;
            @endphp
          <div id="data-row"
            class="flex-1 h-fit flex lg:border-b-[0.5px] lg:border-b-[#EDEFF4]"
          >

            <div id="desktop-cells"
              class="flex-1 hidden lg:flex lg:flex-col py-[7px] px-[2px] border-[0.5px] border-r-[#EDEFF4]"
            >
              <div class="flex items-center justify-center gap-[4px]">
                <img
                  src="{{asset('user.jpg')}}"
                  class="w-[28px] h-[28px] object-cover rounded-full shrink-0"
                  alt=""
                />

                <div class="font-medium leading-tight">
                  <p class="font-semibold text-[13px] text-[#4F4F4F]">
                    {{$user->getFullNameAttribute()}}
                  </p>
                  <p class="text-[10px] text-[#3984E6]">{{$totalScheduledTime}}Hrs</p>
                  <p
                    class="flex items-center gap-[4px] text-[8px] text-[#80868C] whitespace-nowrap"
                  >
                    <svg
                      width="12"
                      height="8"
                      viewBox="0 0 12 8"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0.205078 4.70504L3.00008 7.50004L3.70508 6.79004L0.915078 4.00004M11.1201 0.790039L5.83008 6.08504L3.75008 4.00004L3.03508 4.70504L5.83008 7.50004L11.8301 1.50004M9.00008 1.50004L8.29508 0.790039L5.12008 3.96504L5.83008 4.67004L9.00008 1.50004Z"
                        fill="#40AD93"
                      />
                    </svg>

                    Delivered via Email
                  </p>
                </div>
              </div>
            </div>
            @php
            $start = today()->startOfWeek()->subDay();
        //dd($start);
        @endphp

        @foreach($monthGrid->first() as $day)
         @php
            $todayEvents = collect($user['schedulers'])
            ->filter(function ($event) use ($day) {
            return $event['start_at']->isSameDay($day);
            });


        @endphp
        @forelse ($todayEvents as $event)

            <div
              id="row-1-1"
              ondrop="drop(event)"
              ondragover="allowDrop(event)"
              class="flex-1 hidden lg:flex lg:flex-col py-[7px] px-[2px] border-[0.5px] border-r-[#EDEFF4] relative"

            >
              <button
                id="user1-shift1"
                draggable="true"
                ondragstart="drag(event)"
                class="group w-full flex flex-col items-center justify-center py-[6px] text-[10px] text-[#4F4F4F] border-[1px] border-[{{$event['role_colour']}}] bg-[{{$event['role_colour']}}] relative"
              >
              <span class="font-bold">{{$event['start_at']->format('h a')}} -
                {{$event['end_at']->format('h a')}}</span>
            <span class="font-medium">{{$event['role']}}</span>

                <!-- actions overlay -->
                <div
                  class="absolute top-0 bottom-0 right-0 left-0 bg-[#FBF0E9] hidden group-hover:flex items-center justify-center gap-[8px] transition-all"
                >

                  <div
                  class="cursor-pointer"
                  type='button'
                  wire:click="$dispatch('openEditModal', { id: {{ $event['id'] }}, date: '{{$day}}' })"
                  >
                    <svg
                      width="16"
                      height="15"
                      viewBox="0 0 16 15"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M9.71667 5L10.5 5.78333L2.93333 13.3333H2.16667V12.5667L9.71667 5ZM12.7167 0C12.5083 0 12.2917 0.0833333 12.1333 0.241667L10.6083 1.76667L13.7333 4.89167L15.2583 3.36667C15.5833 3.04167 15.5833 2.5 15.2583 2.19167L13.3083 0.241667C13.1417 0.075 12.9333 0 12.7167 0ZM9.71667 2.65833L0.5 11.875V15H3.625L12.8417 5.78333L9.71667 2.65833Z"
                        fill="#4F4F4F"
                      />
                    </svg>
                  </div>

                  <div class="cursor-pointer" type='button'>
                    <svg
                      width="14"
                      height="17"
                      viewBox="0 0 14 17"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M13.2748 5.16667L8.6665 0.558333C8.54941 0.44109 8.39054 0.375146 8.22484 0.375H6.1665C5.55872 0.375 4.97582 0.616443 4.54605 1.04621C4.11628 1.47598 3.87484 2.05888 3.87484 2.66667V3.70833H2.83317C2.22538 3.70833 1.64249 3.94978 1.21272 4.37955C0.782947 4.80932 0.541504 5.39221 0.541504 6V14.3333C0.541504 14.9411 0.782947 15.524 1.21272 15.9538C1.64249 16.3836 2.22538 16.625 2.83317 16.625H8.6665C9.27429 16.625 9.85719 16.3836 10.287 15.9538C10.7167 15.524 10.9582 14.9411 10.9582 14.3333V13.2917H11.1665C11.7743 13.2917 12.3572 13.0502 12.787 12.6205C13.2167 12.1907 13.4582 11.6078 13.4582 11V5.58333C13.4516 5.42634 13.3862 5.27757 13.2748 5.16667ZM8.87484 2.50833L11.3248 4.95833H8.87484V2.50833ZM9.70817 14.3333C9.70817 14.6096 9.59842 14.8746 9.40307 15.0699C9.20772 15.2653 8.94277 15.375 8.6665 15.375H2.83317C2.5569 15.375 2.29195 15.2653 2.0966 15.0699C1.90125 14.8746 1.7915 14.6096 1.7915 14.3333V6C1.7915 5.72373 1.90125 5.45878 2.0966 5.26343C2.29195 5.06808 2.5569 4.95833 2.83317 4.95833H3.87484V11C3.87484 11.6078 4.11628 12.1907 4.54605 12.6205C4.97582 13.0502 5.55872 13.2917 6.1665 13.2917H9.70817V14.3333ZM11.1665 12.0417H6.1665C5.89024 12.0417 5.62529 11.9319 5.42993 11.7366C5.23458 11.5412 5.12484 11.2763 5.12484 11V2.66667C5.12484 2.3904 5.23458 2.12545 5.42993 1.9301C5.62529 1.73475 5.89024 1.625 6.1665 1.625H7.62484V5.58333C7.627 5.74842 7.69354 5.90614 7.81028 6.02289C7.92703 6.13963 8.08475 6.20617 8.24984 6.20833H12.2082V11C12.2082 11.2763 12.0984 11.5412 11.9031 11.7366C11.7077 11.9319 11.4428 12.0417 11.1665 12.0417Z"
                        fill="#4F4F4F"
                      />
                    </svg>
                  </div>

                  <div class="cursor-pointer" type='button'
                  wire:click="$dispatch('openDeleteModal', { id: {{ $event['id'] }} })"
                  >
                    <svg
                      width="14"
                      height="15"
                      viewBox="0 0 14 15"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M2.8335 15C2.37516 15 1.98266 14.8367 1.656 14.51C1.32933 14.1833 1.16627 13.7911 1.16683 13.3333V2.5H0.333496V0.833333H4.50016V0H9.50016V0.833333H13.6668V2.5H12.8335V13.3333C12.8335 13.7917 12.6702 14.1842 12.3435 14.5108C12.0168 14.8375 11.6246 15.0006 11.1668 15H2.8335ZM11.1668 2.5H2.8335V13.3333H11.1668V2.5ZM4.50016 11.6667H6.16683V4.16667H4.50016V11.6667ZM7.8335 11.6667H9.50016V4.16667H7.8335V11.6667Z"
                        fill="#4F4F4F"
                      />
                    </svg>
                  </div>
                </div>
              </button>
            </div>
            @empty
                <div
                    id="row-1-2"
                    ondrop="drop(event)"
                    ondragover="allowDrop(event)"
                    class="group flex-1 hidden lg:flex lg:flex-col py-[7px] px-[2px] border-[0.5px] border-r-[#EDEFF4] relative"
            >

              <div
                class="absolute top-0 bottom-0 right-0 left-0 bg-[#FBF0E9] hidden group-hover:flex items-center justify-center gap-[8px] transition-all"

              >
                <div
                  {{-- data-modal-target="create_schedule_direct"
                  data-modal-toggle="create_schedule_direct" --}}
                  wire:click="onDayClick({{$user}}, '{{$day}}')"

                  type="button"
                  class="cursor-pointer"


                >
                  <svg
                    width="10"
                    height="11"
                    viewBox="0 0 10 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M5.625 4.875V0.5H4.375V4.875H0V6.125H4.375V10.5H5.625V6.125H10V4.875H5.625Z"
                      fill="#4F4F4F"
                    />
                  </svg>
                </div>
              </div>
            </div>

            @endforelse
            @endforeach


          </div>
          @empty
@endforelse




        </div>
      </div>

      <button
        class="flex lg:hidden items-center gap-[2.5px] border-[0.5px] border-[#3984E6] rounded-[4px] bg-[#3984E60D] h-[40px] w-fit px-[10px] text-[12px] font-semibold text-[#3984E6]"
      >
        <svg
          width="12"
          height="12"
          viewBox="0 0 12 12"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M11.8332 6.83366H6.83317V11.8337H5.1665V6.83366H0.166504V5.16699H5.1665V0.166992H6.83317V5.16699H11.8332V6.83366Z"
            fill="#3984E6"
          />
        </svg>

        Add Employees
      </button>
    </section>

    <section class="px-[17px] bg-white-0">
      <div
        class="flex flex-col gap-[10px] py-[21px] lg:px-[16px] lg:bg-[#FAFAFA]"
      >
        <p class="font-semibold text-[14px] text-[#80868C]">
          Employee role indicators
        </p>

        <div class="flex flex-col gap-[4px]">
          <p
            class="flex items-center gap-[10px] font-medium text-[12px] text-[#80868C]"
          >
            <span
              class="w-[12px] h-[12px] border-[1px] border-[#8C9FCE] bg-[#D9E3FC]"
            ></span>

            Barista
          </p>

          <p
            class="flex items-center gap-[10px] font-medium text-[12px] text-[#80868C]"
          >
            <span
              class="w-[12px] h-[12px] border-[1px] border-[#7AB6A7] bg-[#DAF5EE]"
            ></span>

            Salesperson
          </p>

          <p
            class="flex items-center gap-[10px] font-medium text-[12px] text-[#80868C]"
          >
            <span
              class="w-[12px] h-[12px] border-[1px] border-[#DEA59F] bg-[#F8DAD7]"
            ></span>

            Chef
          </p>

          <p
            class="flex items-center gap-[10px] font-medium text-[12px] text-[#80868C]"
          >
            <span
              class="w-[12px] h-[12px] border-[1px] border-[#E3C1AA] bg-[#FBF0E9]"
            ></span>

            Cashier
          </p>

          <p
            class="flex items-center gap-[10px] font-medium text-[12px] text-[#80868C]"
          >
            <span
              class="w-[12px] h-[12px] border-[1px] border-[#B37BB3] bg-[#F8E4F8]"
            ></span>

            Cleaner
          </p>
        </div>
      </div>
    </section>
                {{-- create schedule from grid modal --}}
                    @include('includes.create-schedule-direct')
                {{-- end create schedule from grid modal --}}

                {{-- Edit schedule from grid modal --}}
                    @include('includes.edit-schedule')
                {{-- end Edit schedule from grid modal --}}

                {{-- Delete Confirmation Modal --}}
                    @livewire('delete-schedule')
                {{-- end Delete Confirmation --}}
  </div>

  @script
  <script>

       $wire.on('openDirectModal', () => {
        document.getElementById('create_schedule_direct').classList.remove('hidden');
        document.querySelector("body > div[modal-backdrop]")?.add();
       });

       $wire.on('alert', () => {
           console.log('can you see me');
               // Show the modal
               document.getElementById('create_schedule_direct').classList.add('hidden');
               document.getElementById('delete_modal').classList.add('hidden');
               document.getElementById('edit_modal').classList.add('hidden');
               document.querySelector("body > div[modal-backdrop]")?.remove();
       });

       $wire.on('openDeleteModal', () => {
            console.log('can you see me on open delete modal');
            document.getElementById('delete_modal').classList.remove('hidden');
            document.querySelector("body > div[modal-backdrop]")?.add();
        });

        $wire.on('openEditModal', () => {
            console.log('can you see me on open Edit modal');
            document.getElementById('edit_modal').classList.remove('hidden');
            document.querySelector("body > div[modal-backdrop]")?.add();
        });

  </script>
  @endscript



