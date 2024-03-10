<div
                id="edit_modal"

                tabindex="-1"
                aria-hidden="true"
                class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 bottom-0 z-50 flex justify-center items-center backdrop-blur-sm"
               >
                <div
                  class="flex flex-col gap-[24px] relative w-[calc(100%-48px)] max-w-[372px] p-[24px] rounded-[16px] bg-[#F9F9F9] border-[1px] border-[#C7C7C7] h-fit max-h-[calc(100%-48px)] overflow-y-auto no-scrollbar"
                >
                  <div class="w-full flex items-center justify-between">
                    <p class="font-semibold text-[20px] text-[#4F4F4F]">
                      Edit Schedule
                    </p>

                    <button data-modal-toggle="edit_modal" wire:click="$dispatch('alert')">
                      <svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M1.33333 1.33301L14.6667 14.6663M1.33333 14.6663L14.6667 1.33301"
                          stroke="#828282"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </button>
                  </div>

                        @livewire('edit-schedule')

                    </div>
                </div>
