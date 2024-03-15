<div class="flex-1 flex flex-col overflow-y-auto pb-[20px] lg:bg-white-0">
<div class="flex-1 flex flex-col overflow-y-auto pb-[20px] lg:bg-white-0">
    <section
      class="w-full bg-white-0 px-[19px] py-[32px] rounded-[16px] lg:rounded-br-none lg:rounded-bl-none flex flex-col gap-[27px]"
    >
      <div class="flex flex-col lg:flex-row gap-[4px] justify-between">
        <div class="flex items-center gap-[4px]">
          <a href="{{route('company.scheduler.index')}}"
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
        @if($schedule_count)
            @php
                $unscheduledEmployee = $employees->filter(function ($employee) {
                return $employee->schedulers()->where('published', false)->exists();
                })->first();
            @endphp

            @if ($unscheduledEmployee)
                <p>
                    Scheduled By: {{auth()->user()->name}} | Date Scheduled: {{now()->format('d/m/y')}} | Time: {{now()->format('h:i:s A')}}
                </p>

            @else
                <p>
                    Scheduled By: | Date Scheduled: | Time:
                </p>
            @endif
            @endif
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
            @forelse ($employees as $employee)
            @php
                $schedule = $employee->schedulers->first();
            @endphp

            @if($schedule == null)
                @continue
            @else
            @php
                $days_assigned = $schedule->getUnpublishedSchedulersForEmployee($employee);
                //dd($days_assigned);
            @endphp
            @endif
            <div
            class="flex gap-[24px] items-center flex-1 min-w-fit border-[0.5px] border-[#EDEFF4] text-[13px] font-medium text-[#4F4F4F] py-[16px]"
          >
            <div
              class="flex-1 min-w-[124px] flex items-center gap-[8px] pl-[8px]"
            >
              <img
                src="{{asset('user.jpg')}}"
                alt=""
                class="w-[33px] h-[33px] rounded-full object-cover"
              />

              <p class="font-bold text-[14px] text-[#4F4F4F]">{{$employee->getFullNameAttribute()}}</p>
            </div>
            <p class="flex-1 min-w-[148px] text-center">
              {{$employee->email}}
            </p>
            <p class="flex-1 min-w-[82px] text-center">{{$schedule->role}}</p>
            <p class="flex-1 min-w-[100px] text-center">{{$schedule->start_at->format('h a'). ' - '. $schedule->end_at->format('h a')}}</p>
            <p class="flex-1 min-w-[86px] text-center">{{$schedule->break}}</p>
            <p class="flex-1 min-w-[120px] text-center">{{$schedule->frequency != 'daily' ? $schedule->frequency : $days_assigned}}</p>
            <p class="flex-1 min-w-[160px]">
              {{$schedule->shift_note}}
            </p>
          </div>
            @empty

            @endforelse
        </div>
      </div>

      @if($schedule_count)
      <div class="w-full flex justify-end items-center gap-[14px]">
        <button
          class="flex h-[40px] items-center justify-center px-[33px] border-[0.5px] border-transparent rounded-[4px] font-medium text-[14px] text-[#3984E6]"
        >
          Cancel
        </button>

        <button

          wire:click='publish'
          type="button"
          class="flex h-[40px] items-center justify-center px-[20px] border-[0.5px] border-[#3984E6] rounded-[4px] font-medium text-[14px] text-[#fff] bg-[#3984E6]"
        >
          Confirm Publish
        </button>

      </div>
      <div wire:loading.delay class="text-green-500">
        Publishing Schedules...
    </div>
      @endif
    </section>
  </div>

  <div
      wire:ignore
      id="confirm_publish"
      tabindex="-1"
      aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm"
    >
      <div
        class="flex items-center justify-center gap-[24px] relative w-[calc(100%-48px)] max-w-[482px] rounded-[12px] bg-[#FFFFFF] h-fit max-h-[calc(100%-48px)] py-[60px]"
      >
        <div
          class="w-[80%] max-w-[349px] mx-auto flex flex-col items-center justify-center"
        >
          <svg
            width="132"
            height="133"
            viewBox="0 0 132 133"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_4621_3508)">
              <path
                d="M66 7.83398C54.3968 7.83398 43.0542 11.2747 33.4066 17.7211C23.7589 24.1675 16.2394 33.33 11.7991 44.0499C7.35873 54.7698 6.19694 66.5657 8.4606 77.946C10.7243 89.3262 16.3117 99.7796 24.5164 107.984C32.7211 116.189 43.1745 121.776 54.5547 124.04C65.9349 126.304 77.7308 125.142 88.4508 120.702C99.1707 116.261 108.333 108.742 114.78 99.0941C121.226 89.4464 124.667 78.1038 124.667 66.5007C124.667 50.9413 118.486 36.0192 107.484 25.0171C96.4815 14.0149 81.5594 7.83398 66 7.83398ZM66 117.834C55.8472 117.834 45.9225 114.823 37.4807 109.183C29.039 103.542 22.4595 95.525 18.5742 86.1451C14.6889 76.7651 13.6723 66.4437 15.653 56.486C17.6337 46.5283 22.5228 37.3816 29.7019 30.2025C36.881 23.0234 46.0277 18.1344 55.9854 16.1537C65.9431 14.173 76.2645 15.1895 85.6444 19.0748C95.0244 22.9601 103.042 29.5397 108.682 37.9814C114.323 46.4231 117.333 56.3479 117.333 66.5007C117.333 80.1151 111.925 93.1719 102.298 102.799C92.6713 112.426 79.6145 117.834 66 117.834Z"
                fill="#3984E6"
              />
              <path
                d="M102.667 44.867C101.98 44.1841 101.05 43.8008 100.082 43.8008C99.113 43.8008 98.1837 44.1841 97.4967 44.867L56.7967 85.3837L34.7967 63.3837C34.1257 62.6592 33.1944 62.231 32.2076 62.1931C31.2209 62.1553 30.2595 62.511 29.535 63.182C28.8105 63.853 28.3823 64.7843 28.3445 65.7711C28.3067 66.7578 28.6624 67.7192 29.3334 68.4437L56.7967 95.8337L102.667 50.0737C103.01 49.7328 103.283 49.3273 103.469 48.8805C103.655 48.4337 103.751 47.9544 103.751 47.4704C103.751 46.9863 103.655 46.5071 103.469 46.0602C103.283 45.6134 103.01 45.2079 102.667 44.867Z"
                fill="#3984E6"
              />
            </g>
            <defs>
              <clipPath id="clip0_4621_3508">
                <rect
                  width="132"
                  height="132"
                  fill="white"
                  transform="translate(0 0.5)"
                />
              </clipPath>
            </defs>
          </svg>

          <p class="font-semibold text-[20px] text-[#4F4F4F] text-center">
            Schedule publish successful!
          </p>
          <p class="font-medium text-[14px] text-[#8D8D8D] text-center">
            A copy of this schedule will be sent to your email.
          </p>

          <a href="{{route('company.scheduler.index')}}"
            id="close_modal"
            type="button"
            class="flex h-[50px] w-full items-center justify-center px-[20px] border-[0.5px] border-[#3984E6] rounded-[4px] font-medium text-[14px] text-[#fff] bg-[#3984E6] mt-[32px]"
          >
            Ok
        </a>
        </div>
      </div>
    </div>

    @script
    <script>


    // Event listener to close modal when "Ok" button is clicked
        document.getElementById('close_modal').addEventListener('click', () => {
            document.getElementById('confirm_publish').classList.add('hidden');
        });

        $wire.on('schedulePublished', () => {
            console.log('can you see me');
                // Show the modal
                document.getElementById('confirm_publish').classList.remove('hidden');
        });
    </script>
    @endscript
</div>

