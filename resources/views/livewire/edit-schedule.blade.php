<form action="" class="flex flex-col gap-[24px]" wire:submit.prevent="update" wire:ignore>
    @error('conflict')
        <div class="text-sm text-red-600">{{ $message }}</div>
    @enderror
     <div class="flex flex-col gap-[12px]">

       <div class="w-full flex gap-[12px] justify-between">
         <div class="h-fit flex-1 flex flex-col gap-[2px]">
           <label
             id="timee"
             class="text-[12px] font-semibold text-[#4F4F4F]"
           >
             Time Frame
           </label>

           <div class="flex w-full gap-[8px]">
             <div class="flex-1 h-[40px] flex items-center bg-[#FFFFFF]">
               <select
                 id="timee"
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
                 id="timee"
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
             for="breakse"
             class="text-[12px] font-semibold text-[#4F4F4F]"
           >
             Breaks
           </label>

           <select
             id="breakse"
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
         <label id="rolee" class="text-[12px] font-semibold text-[#4F4F4F]">
           Role Selection
         </label>

         <div class="flex gap-[8px] w-full h-[40px]">
           <select
             id="rolee"
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
           <div onmouseover="keepe()" onmouseout="leavee()" class="relative">
            <select
            class="absolute hidden"
            wire:model='role_colour'
            id="role-color-elemente"
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
                   id="roleColore"
                   class="w-[27px] h-[27px] bg-[#F8DAD7] border-[#DEA59F] border-[1px] rounded-[4px] @error('role_colour') border-red-500 @enderror"
                 >
                </div>
               </div>
               <div
                 onmouseover="keepe()"
                 onmouseout="leavee()"
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
               id="showColore"
               style="visibility: hidden"
               class="overflow-hidden h-[0px] absolute bg-[#fff] rounded-[8px] border-[0.5px] border-[#EDEFF4] grid grid-cols-3 gap-[4px] px-[4px] py-[7px]"
             >
               <div
                 onclick="changeRolee(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #8c9fce; background: #d9e3fc"
               ></div>
               <div
                 onclick="changeRolee(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #7AB6A7; background: #DAF5EE"
               ></div>
               <div
                 onclick="changeRolee(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #DEA59F; background: #F8DAD7"
               ></div>
               <div
                 onclick="changeRolee(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px] border-[#E3C1AA]"
                 style="border-color: #e3c1aa; background: #fbf0e9"
               ></div>
               <div
                 onclick="changeRolee(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #b37bb3; background: #f8e4f8"
               ></div>
               <div
                 onclick="changeRolee(this)"
                 class="w-[20px] cursor-pointer h-[20px] rounded border-[1px]"
                 style="border-color: #b37bb3; background: #fbf0e9"
               ></div>
             </div>
           </div>
         </div>
       </div>


       <div class="w-full flex flex-col gap-[2px]">
         <label
           id="shifte"
           class="text-[12px] font-semibold text-[#4F4F4F]"
         >
           Shift Notes:
         </label>

         <textarea
           id="shifte"
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
       Update
     </button>
   </form>
