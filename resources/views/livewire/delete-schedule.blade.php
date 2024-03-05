<div
                wire:ignore
                id="delete_modal"
                tabindex="-1"
                aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm"
              >
                <div
                  class="flex items-center justify-center gap-[24px] relative w-[calc(100%-48px)] max-w-[482px] rounded-[12px] bg-[#FFFFFF] h-fit max-h-[calc(100%-48px)] py-[60px]"
                >
                  <div
                    class="w-[50%] max-w-[349px] mx-auto flex flex-col items-center justify-center"
                  >
                    <p class="font-semibold text-[20px] text-[#4F4F4F] text-center">
                      This Schedule Will Be Permanently Deleted!
                    </p>

                    <button
                      type="button"
                      wire:click="delete"
                      class="flex h-[50px] w-full items-center justify-center px-[20px] border-[0.5px] border-[#3984E6] rounded-[4px] font-medium text-[14px] text-[#fff] bg-[#ff0000] mt-[32px]"
                    >
                      Contimue
                    </button>

                    <button
                      wire:click="$dispatch('alert')"
                      type="button"
                      class="flex h-[50px] w-full items-center justify-center px-[20px] border-[0.5px] border-[#3984E6] rounded-[4px] font-medium text-[14px] text-[#fff] bg-[#3984E6] mt-[32px]"
                    >
                      Cancel
                    </button>
                  </div>
                </div>
              </div>

