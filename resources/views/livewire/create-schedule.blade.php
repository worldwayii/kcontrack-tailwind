

   <form action="" class="flex flex-col gap-[24px]" wire:submit.prevent="create" wire:ignore>
    @error('conflict')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
     <div class="flex flex-col gap-[12px]">
       <div class="w-full flex flex-col gap-[2px]">
         <label
           for="employee"
           class="text-[12px] font-semibold text-[#4F4F4F]"
         >
           Select Employee
         </label>

         <select
           id="employee"
           class="w-full h-[40px] px-[24px] flex items-center bg-[#FFFFFF] border-[0.7px] border-[#E6E6E6] text-[#A7A7A7] font-medium text-[11px] rounded-[8px] @error('employee') border-red-500 @enderror" wire:model.live='employee'
         >
           <option selected>Select</option>
           @forelse ($employees as $employee)
           <option value="{{$employee->uuid}}">{{$employee->getFullNameAttribute()}}</option>
           @empty

           @endforelse

         </select>
        @error('employee')
            <div class="text-sm text-red-600">{{ $message }}</div>
        @enderror
       </div>

       <div class="w-full flex gap-[12px] justify-between">
         <div class="h-fit flex-1 flex flex-col gap-[2px]">
           <label
             id="time"
             class="text-[12px] font-semibold text-[#4F4F4F]"
           >
             Time Frame
           </label>

           <div class="flex w-full gap-[8px]">
             <div class="flex-1 h-[40px] flex items-center bg-[#FFFFFF]">
               <select
                 id="time"
                 class="w-full h-[40px] px-[12px] flex items-center bg-[#FFFFFF] border-[0.7px] border-[#E6E6E6] text-[#A7A7A7] font-medium text-[11px] rounded-[8px] @error('start_at') border-red-500 @enderror" wire:model='start_at'
               >
                 <option selected>Select</option>
                 <option value="0:00">0:00AM</option>
                 <option value="1:00">1:00AM</option>
                 <option value="2:00">2:00AM</option>
                 <option value="3:00">3:00AM</option>
                 <option value="4:00">4:00AM</option>
                 <option value="5:00">5:00AM</option>
               </select>

             </div>

             <div class="flex-1 h-[40px] flex items-center bg-[#FFFFFF]">
               <select
                 id="time"
                 class="w-full h-[40px] px-[12px] flex items-center bg-[#FFFFFF] border-[0.7px] border-[#E6E6E6] text-[#A7A7A7] font-medium text-[11px] rounded-[8px] @error('end_at') border-red-500 @enderror" wire:model='end_at'
               >
                 <option selected>Select</option>
                 <option value="0:00">0:00AM</option>
                 <option value="1:00">1:00AM</option>
                 <option value="2:00">2:00AM</option>
                 <option value="3:00">3:00AM</option>
                 <option value="4:00">4:00AM</option>
               </select>
             </div>
           </div>
            @error('start_at')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
            @error('end_at')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
         </div>

         <div class="w-[92px] flex flex-col gap-[2px]">
           <label
             for="breaks"
             class="text-[12px] font-semibold text-[#4F4F4F]"
           >
             Breaks
           </label>

           <select
             id="breaks"
             class="w-full h-[40px] px-[12px] flex items-center bg-[#FFFFFF] border-[0.7px] border-[#E6E6E6] text-[#A7A7A7] font-medium text-[11px] rounded-[8px] @error('break') border-red-500 @enderror" wire:model='break'
           >
             <option selected>Select</option>
             <option value="10 mins">10 mins</option>
             <option value="20 mins">20 mins</option>
             <option value="30 mins">30 mins</option>
             <option value="40 mins">40 mins</option>
             <option value="50 mins">50 mins</option>
           </select>
           @error('break')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
         </div>
       </div>

       <div class="w-full flex flex-col gap-[2px]">
         <label id="role" class="text-[12px] font-semibold text-[#4F4F4F]">
           Role Selection
         </label>

         <div class="flex gap-[8px] w-full h-[40px]">
           <select
             id="role"
             class="flex-1 h-[40px] px-[24px] flex items-center bg-[#FFFFFF] border-[0.7px] border-[#E6E6E6] text-[#A7A7A7] font-medium text-[11px] rounded-[8px] @error('role') border-red-500 @enderror" wire:model='role'
           >
             <option selected>Select</option>
             <option value="Barista">Barista</option>
             <option value="Salesperson">Sales Person</option>
             <option value="Chef">Chef</option>
             <option value="Cashier">Cashier</option>
             <option value="Cleaner">Cleaner</option>
           </select>
           @error('role')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
           <div onmouseover="keep()" onmouseout="leave()" class="relative">
            <select
            class="absolute hidden"
            wire:model='role_colour'
            id="role-color-element"
          >
            <option value="#F8DAD7" selected>#F8DAD7</option>
            <option value="#d9e3fc">#d9e3fc</option>
            <option value="#DAF5EE">#DAF5EE</option>
            <option value="#fbf0e9">#fbf0e9</option>
            <option value="#f8e4f8">#f8e4f8</option>
            <option value="#fbf0e9">#fbf0e9</option>
          </select>
             <div
               class="flex items-center gap-[8px] w-[100%] h-[40px] justify-center bg-[#FFF] border-[0.7px] border-[#E6E6E6] rounded-[8px] px-[11px]"
             >
               <div>
                 <div
                   id="roleColor"
                   class="w-[27px] h-[27px] bg-[#F8DAD7] border-[#DEA59F] border-[1px] rounded-[4px] @error('role_colour') border-red-500 @enderror"
                 >
                </div>
               </div>
               <div
                 onmouseover="keep()"
                 onmouseout="leave()"
                 class="cursor-pointer"
               >
                 <svg
                   xmlns="http://www.w3.org/2000/svg"
                   width="21"
                   height="21"
                   viewBox="0 0 21 21"
                   fill="none"
                 >
                   <path
                     d="M3.80783 7.5583C3.86588 7.50019 3.93481 7.45409 4.01068 7.42263C4.08656 7.39118 4.16788 7.37499 4.25002 7.37499C4.33215 7.37499 4.41348 7.39118 4.48936 7.42263C4.56523 7.45409 4.63416 7.50019 4.69221 7.5583L10.5 13.3669L16.3078 7.5583C16.4251 7.44102 16.5842 7.37514 16.75 7.37514C16.9159 7.37514 17.0749 7.44102 17.1922 7.5583C17.3095 7.67557 17.3754 7.83463 17.3754 8.00048C17.3754 8.16634 17.3095 8.3254 17.1922 8.44267L10.9422 14.6927C10.8842 14.7508 10.8152 14.7969 10.7394 14.8283C10.6635 14.8598 10.5822 14.876 10.5 14.876C10.4179 14.876 10.3366 14.8598 10.2607 14.8283C10.1848 14.7969 10.1159 14.7508 10.0578 14.6927L3.80783 8.44267C3.74972 8.38463 3.70362 8.3157 3.67217 8.23982C3.64072 8.16395 3.62453 8.08262 3.62453 8.00048C3.62453 7.91835 3.64072 7.83702 3.67217 7.76115C3.70362 7.68527 3.74972 7.61634 3.80783 7.5583Z"
                     fill="#828282"
                   />
                 </svg>
               </div>
             </div>

             <div
               id="showColor"
               style="visibility: hidden"
               class="overflow-hidden h-[0px] absolute bg-[#fff] rounded-[8px] border-[0.5px] border-[#EDEFF4] grid grid-cols-3 gap-[4px] px-[4px] py-[7px]"
             >
               <div
                 onclick="changeRole(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #8c9fce; background: #d9e3fc"
               ></div>
               <div
                 onclick="changeRole(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #7AB6A7; background: #DAF5EE"
               ></div>
               <div
                 onclick="changeRole(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #DEA59F; background: #F8DAD7"
               ></div>
               <div
                 onclick="changeRole(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px] border-[#E3C1AA]"
                 style="border-color: #e3c1aa; background: #fbf0e9"
               ></div>
               <div
                 onclick="changeRole(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #b37bb3; background: #f8e4f8"
               ></div>
               <div
                 onclick="changeRole(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #b37bb3; background: #fbf0e9"
               ></div>
             </div>
           </div>
         </div>
       </div>

       <div class="w-full flex flex-col gap-[2px]" id="assignment">
         <label
           id="shift"
           class="text-[12px] font-semibold text-[#4F4F4F]"
         >
           Assign Days
         </label>

         <ul
           class="w-full text-[12px] font-semibold text-[#4F4F4F] bg-white-0 border-[0.5px] border-[#EDEFF4]"
         >
           <li
             data-checkbox-subselection-target="daily-selection"
             class="w-full flex flex-col border-[0.5px] border-[#EDEFF4]"
           >
             <div class="flex items-center ps-3">
               <input
                 id="daily"
                 type="radio"
                 value="daily"
                 name="schedule_list_options"
                 wire:model='frequency'
                 class="w-[16px] h-[16px] text-blue-600 bg-white-0 border-[5px] border-[#D9D9D9] focus:ring-2 @error('frequency') border-red-500 @enderror"
               />
               <label
                 for="daily"
                 class="w-full py-3 ms-2 text-[12px] font-semibold text-[#4F4F4F]"
                 >Daily
               </label>
             </div>
             <div
               id="daily-selection"
               class="w-full py-[14px] px-[22px] border-[0.5px] border-[#EDEFF4] flex-col hidden"
             >
               <div class="flex flex-col gap-[4px]">
                 <p class="font-semibold text-[12px] text-[#4F4F4F]">
                   Select Days:
                 </p>

                 <ul class="h-fit flex-1 flex justify-between">
                   <li class="">
                     <label
                       for="M"
                       class="w-[32px] h-[32px] border-[0.7px] border-[#E6E6E6] flex items-center justify-center text-[12px] font-semibold text-[#4F4F4F] rounded-[8px] relative has-[:checked]:text-white-0 has-[:checked]:bg-gradient-to-br has-[:checked]:from-[#092C86] has-[:checked]:via-[#092C86] has-[:checked]:to-[#F828BE]"
                     >
                       M
                       <input
                         type="checkbox"
                         id="M"
                         value="{{date('d/m/Y', strtotime('monday this week'))}}"
                         wire:model='date'
                         class="absolute top-0 left-0 right-0 bottom-0 z-10 invisible @error('date') border-red-500 @enderror"
                       />
                     </label>
                   </li>
                   <li class="">
                     <label
                       for="T"
                       class="w-[32px] h-[32px] border-[0.7px] border-[#E6E6E6] flex items-center justify-center text-[12px] font-semibold text-[#4F4F4F] rounded-[8px] relative has-[:checked]:text-white-0 has-[:checked]:bg-gradient-to-br has-[:checked]:from-[#092C86] has-[:checked]:via-[#092C86] has-[:checked]:to-[#F828BE]"
                     >
                       T
                       <input
                         type="checkbox"
                         id="T"
                         value="{{date('d/m/Y', strtotime('tuesday this week'))}}"
                         wire:model.live='date'
                         class="absolute top-0 left-0 right-0 bottom-0 z-10 invisible @error('date') border-red-500 @enderror"
                       />
                     </label>
                   </li>
                   <li class="">
                     <label
                       for="W"
                       class="w-[32px] h-[32px] border-[0.7px] border-[#E6E6E6] flex items-center justify-center text-[12px] font-semibold text-[#4F4F4F] rounded-[8px] relative has-[:checked]:text-white-0 has-[:checked]:bg-gradient-to-br has-[:checked]:from-[#092C86] has-[:checked]:via-[#092C86] has-[:checked]:to-[#F828BE]"
                     >
                       W
                       <input
                         type="checkbox"
                         id="W"
                         value="{{date('d/m/Y', strtotime('wednesday this week'))}}"
                         wire:model.live='date'
                         class="absolute top-0 left-0 right-0 bottom-0 z-10 invisible @error('date') border-red-500 @enderror"
                       />
                     </label>
                   </li>
                   <li class="">
                     <label
                       for="Thu"
                       class="w-[32px] h-[32px] border-[0.7px] border-[#E6E6E6] flex items-center justify-center text-[12px] font-semibold text-[#4F4F4F] rounded-[8px] relative has-[:checked]:text-white-0 has-[:checked]:bg-gradient-to-br has-[:checked]:from-[#092C86] has-[:checked]:via-[#092C86] has-[:checked]:to-[#F828BE]"
                     >
                       T
                       <input
                         type="checkbox"
                         id="Thu"
                         value="{{date('d/m/Y', strtotime('thursday this week'))}}"
                         wire:model='date'
                         class="absolute top-0 left-0 right-0 bottom-0 z-10 invisible @error('date') border-red-500 @enderror"
                       />
                     </label>
                   </li>
                   <li class="">
                     <label
                       for="F"
                       class="w-[32px] h-[32px] border-[0.7px] border-[#E6E6E6] flex items-center justify-center text-[12px] font-semibold text-[#4F4F4F] rounded-[8px] relative has-[:checked]:text-white-0 has-[:checked]:bg-gradient-to-br has-[:checked]:from-[#092C86] has-[:checked]:via-[#092C86] has-[:checked]:to-[#F828BE]"
                     >
                       F
                       <input
                         type="checkbox"
                         id="F"
                         value="{{date('d/m/Y', strtotime('friday this week'))}}"
                         wire:model='date'
                         class="absolute top-0 left-0 right-0 bottom-0 z-10 invisible @error('date') border-red-500 @enderror"
                       />
                     </label>
                   </li>
                   <li class="">
                     <label
                       for="S"
                       class="w-[32px] h-[32px] border-[0.7px] border-[#E6E6E6] flex items-center justify-center text-[12px] font-semibold text-[#4F4F4F] rounded-[8px] relative has-[:checked]:text-white-0 has-[:checked]:bg-gradient-to-br has-[:checked]:from-[#092C86] has-[:checked]:via-[#092C86] has-[:checked]:to-[#F828BE]"
                     >
                       S
                       <input
                         type="checkbox"
                         id="S"
                         value="{{date('d/m/Y', strtotime('saturday this week'))}}"
                         wire:model='date'
                         class="absolute top-0 left-0 right-0 bottom-0 z-10 invisible @error('date') border-red-500 @enderror"
                       />
                     </label>
                   </li>
                   <li class="">
                     <label
                       for="Sun"
                       class="w-[32px] h-[32px] border-[0.7px] border-[#E6E6E6] flex items-center justify-center text-[12px] font-semibold text-[#4F4F4F] rounded-[8px] relative has-[:checked]:text-white-0 has-[:checked]:bg-gradient-to-br has-[:checked]:from-[#092C86] has-[:checked]:via-[#092C86] has-[:checked]:to-[#F828BE]"
                     >
                       S
                       <input
                         type="checkbox"
                         id="Sun"
                         value="{{date('d/m/Y', strtotime('sunday'))}}"
                         wire:model='date'
                         class="absolute top-0 left-0 right-0 bottom-0 z-10 invisible @error('date') border-red-500 @enderror"
                       />
                     </label>
                   </li>
                 </ul>
               </div>
             </div>
           </li>

                <li
                  data-checkbox-subselection-target="biweekly-selection"
                  class="w-full flex flex-col border-[0.5px] border-[#EDEFF4]"
                >
                  <div class="flex items-center ps-3">
                    <input
                      id="biweekly"
                      type="radio"
                      value="biweekly"
                      wire:model='frequency'
                      name="schedule_list_options"
                      class="w-[16px] h-[16px] text-blue-600 bg-white-0 border-[5px] border-[#D9D9D9] focus:ring-2"
                    />
                    <label
                      for="biweekly"
                      class="w-full py-3 ms-2 text-[12px] font-semibold text-[#4F4F4F]"
                      >Bi-Weekly
                    </label>
                  </div>
                  <!-- calender form component -->
                  <div
                    id="biweekly-selection"
                    data-calender-element="biweekly-calender"
                    class="w-full py-[14px] px-[22px] border-[0.5px] border-[#EDEFF4] flex-col relative hidden"
                  >
                    <!-- months list display -->
                    <div
                      data-calender-months="biweekly-calender"
                      class="absolute top-0 bottom-0 left-0 right-0 bg-white-0 hidden grid-cols-3 gap-2 w-full h-full items-center justify-center text-center z-10"
                    ></div>

                    <div class="flex flex-col gap-[8px] mx-auto relative">
                      <div
                        class="w-full flex items-center justify-center gap-[12px] font-semibold text-[12px] text-[#4F4F4F]"
                      >
                        <!-- previous year button -->
                        <div
                          data-calender-prev-year="biweekly-calender"
                          class="w-[16px] h-[16px] flex items-center justify-center cursor-pointer"
                        >
                          <svg
                            width="5"
                            height="8"
                            viewBox="0 0 5 8"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M1.74846e-07 4L5 0L5 8L1.74846e-07 4Z"
                              fill="#80868C"
                            />
                          </svg>
                        </div>

                        <p>
                          <!-- month display and picker -->
                          <span
                            data-calender-month-picker="biweekly-calender"
                            class="cursor-pointer"
                          >
                            January
                          </span>

                          <!-- year display -->
                          <span data-calender-year="biweekly-calender">
                            2024
                          </span>
                        </p>

                        <!-- next year button -->
                        <div
                          data-calender-next-year="biweekly-calender"
                          class="w-[16px] h-[16px] flex items-center justify-center cursor-pointer"
                        >
                          <svg
                            width="5"
                            height="8"
                            viewBox="0 0 5 8"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 4L-3.49691e-07 0L0 8L5 4Z"
                              fill="#80868C"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>

                    <!-- calender days -->
                    <div
                      data-calender-days="biweekly-calender"
                      class="grid grid-cols-7 text-[14px] text-[#222730]"
                    ></div>
                  </div>
                </li>
                <li
                  data-checkbox-subselection-target="monthly-selection"
                  class="w-full flex flex-col border-[0.5px] border-[#EDEFF4]"
                >
                  <div class="flex items-center ps-3">
                    <input
                      id="monthly"
                      type="radio"
                      value="monthly"
                      wire:model='frequency'
                      name="schedule_list_options"
                      class="w-[16px] h-[16px] text-blue-600 bg-white-0 border-[5px] border-[#D9D9D9] focus:ring-2"
                    />
                    <label
                      for="monthly"
                      class="w-full py-3 ms-2 text-[12px] font-semibold text-[#4F4F4F]"
                      >Monthly
                    </label>
                  </div>
                  <!-- calender form component -->
                  <div
                    id="monthly-selection"
                    data-calender-element="monthly-calender"
                    class="w-full py-[14px] px-[22px] border-[0.5px] border-[#EDEFF4] flex-col relative hidden"
                  >
                    <!-- months list display -->
                    <div
                      data-calender-months="monthly-calender"
                      class="absolute top-0 bottom-0 left-0 right-0 bg-white-0 hidden grid-cols-3 gap-2 w-full h-full items-center justify-center text-center z-10"
                    ></div>

                    <div class="flex flex-col gap-[8px] mx-auto relative">
                      <div
                        class="w-full flex items-center justify-center gap-[12px] font-semibold text-[12px] text-[#4F4F4F]"
                      >
                        <!-- previous year button -->
                        <div
                          data-calender-prev-year="monthly-calender"
                          class="w-[16px] h-[16px] flex items-center justify-center cursor-pointer"
                        >
                          <svg
                            width="5"
                            height="8"
                            viewBox="0 0 5 8"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M1.74846e-07 4L5 0L5 8L1.74846e-07 4Z"
                              fill="#80868C"
                            />
                          </svg>
                        </div>

                        <p>
                          <!-- month display and picker -->
                          <span
                            data-calender-month-picker="monthly-calender"
                            class="cursor-pointer"
                          >
                            January
                          </span>

                          <!-- year display -->
                          <span data-calender-year="monthly-calender">
                            2024
                          </span>
                        </p>

                        <!-- next year button -->
                        <div
                          data-calender-next-year="monthly-calender"
                          class="w-[16px] h-[16px] flex items-center justify-center cursor-pointer"
                        >
                          <svg
                            width="5"
                            height="8"
                            viewBox="0 0 5 8"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 4L-3.49691e-07 0L0 8L5 4Z"
                              fill="#80868C"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>

                    <!-- calender days -->
                    <div
                      data-calender-days="monthly-calender"
                      class="grid grid-cols-7 text-[14px] text-[#222730]"
                    ></div>
                  </div>
                </li>
                <li
                  data-checkbox-subselection-target="customise-selection"
                  class="w-full flex flex-col border-[0.5px] border-[#EDEFF4]"
                >
                  <div class="flex items-center ps-3">
                    <input
                      id="customise"
                      type="radio"
                      value="customised"
                      wire:model='frequency'
                      name="schedule_list_options"
                      class="w-[16px] h-[16px] text-blue-600 bg-white-0 border-[5px] border-[#D9D9D9] focus:ring-2"
                    />
                    <label
                      for="customise"
                      class="w-full py-3 ms-2 text-[12px] font-semibold text-[#4F4F4F]"
                      >Customise
                    </label>
                  </div>
                  <!-- calender form component -->
                  <div
                    id="customise-selection"
                    data-calender-element="customise-calender"
                    class="w-full py-[14px] px-[22px] border-[0.5px] border-[#EDEFF4] flex-col relative hidden"
                  >
                    <!-- months list display -->
                    <div
                      data-calender-months="customise-calender"
                      class="absolute top-0 bottom-0 left-0 right-0 bg-white-0 hidden grid-cols-3 gap-2 w-full h-full items-center justify-center text-center z-10"
                    ></div>

                    <div class="flex flex-col gap-[8px] mx-auto relative">
                      <div
                        class="w-full flex items-center justify-center gap-[12px] font-semibold text-[12px] text-[#4F4F4F]"
                      >
                        <!-- previous year button -->
                        <div
                          data-calender-prev-year="customise-calender"
                          class="w-[16px] h-[16px] flex items-center justify-center cursor-pointer"
                        >
                          <svg
                            width="5"
                            height="8"
                            viewBox="0 0 5 8"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M1.74846e-07 4L5 0L5 8L1.74846e-07 4Z"
                              fill="#80868C"
                            />
                          </svg>
                        </div>

                        <p>
                          <!-- month display and picker -->
                          <span
                            data-calender-month-picker="customise-calender"
                            class="cursor-pointer"
                          >
                            January
                          </span>

                          <!-- year display -->
                          <span data-calender-year="customise-calender">
                            2024
                          </span>
                        </p>

                        <!-- next year button -->
                        <div
                          data-calender-next-year="customise-calender"
                          class="w-[16px] h-[16px] flex items-center justify-center cursor-pointer"
                        >
                          <svg
                            width="5"
                            height="8"
                            viewBox="0 0 5 8"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 4L-3.49691e-07 0L0 8L5 4Z"
                              fill="#80868C"
                            />
                          </svg>
                        </div>
                      </div>
                    </div>

                    <!-- calender days -->
                    <div
                      data-calender-days="customise-calender"
                      class="grid grid-cols-7 text-[14px] text-[#222730]"
                    ></div>
                  </div>
                </li>
         </ul>
         @error('date')
            <div class="text-sm text-red-600">{{ $message }}</div>
        @enderror
       </div>

       <div class="w-full flex flex-col gap-[2px]">
         <label
           id="shift"
           class="text-[12px] font-semibold text-[#4F4F4F]"
         >
           Shift Notes:
         </label>

         <textarea
           id="shift"
           rows="4"
           class="w-full px-[24px] py-[10px] border-[0.7px] border-[#E6E6E6] text-[#A7A7A7] font-medium text-[11px] rounded-[8px] bg-[#FFFFFF] @error('shift_note') border-red-500 @enderror" wire:model='shift_note'
         ></textarea>
         @error('shift_note')
            <div class="text-sm text-red-600">{{ $message }}</div>
        @enderror
       </div>
     </div>

     <button
       class="w-full h-[50px] flex items-center justify-center bg-[#3984E6] text-[16px] font-semibold text-white-0 rounded-[4px]"
     >
       Save
     </button>
   </form>
   @script
   <script>
       $wire.on('alert', () => {
           console.log('can you see me');
               // Show the modal
               document.getElementById('create_schedule').classList.add('hidden');
               document.querySelector("body > div[modal-backdrop]")?.remove()
       });
   </script>
   @endscript



