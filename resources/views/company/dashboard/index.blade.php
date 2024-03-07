@extends('layouts.new.layout')

@section('meta-title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<div
    id="invite_employee"
    tabindex="-1"
    aria-hidden="true"
    class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 bottom-0 z-50 justify-center items-center w-full md:inset-0 h-full backdrop-blur-sm"
    >
        <div
            class="flex flex-col gap-[24px] relative w-[calc(100%-48px)] max-w-[542px] p-[24px] rounded-[16px] bg-[#F9F9F9] border-[1px] border-[#C7C7C7] h-fit max-h-[calc(100%-48px)] overflow-y-auto no-scrollbar"
        >
            <div class="w-full flex items-center justify-between">
                <p
                    class="font-semibold text-[16px] md:text-[24px] text-[#4F4F4F] leading-none flex flex-col gap-[2px]"
                >
                    Invite Employee
                    <span
                        class="font-regular text-[10px] md:text-[12px] text-[#828282] leading-none"
                    >Invite employees using their email or phone numbers.
            </span>
                </p>

                <button data-modal-toggle="invite_employee">
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

            <div class="w-full flex flex-col">
                <label
                    class="font-medium text-[14px] md:text-[16px] text-[#4F4F4F]"
                    for="email"
                >Enter Staff Email or Phone number</label
                >

                <div class="flex-1 h-fit flex gap-[8px]">
                    <input
                        type="text"
                        placeholder="Email, or phone number(separate using commas)"
                        class="h-[56px] flex-1 bg-white-0 flex items-center px-[16px] rounded-[5px] border-[0.5px] border-[#C7C7C7] text-[9px] font-light placeholder:text-[#8D8D8D]"
                    />

                    <button
                        class="h-[56px] flex items-center justify-center px-[16px] border-[0.5px] border-[#3984E6] bg-[#3984E6] text-[16px] font-semibold text-white-0 rounded-[5px]"
                    >
                        Invite
                    </button>
                </div>
            </div>

            <div class="w-full flex flex-col gap-[8px]">
                <div class="w-full flex items-center justify-between">
                    <p class="text-[12px] font-medium text-[#4F4F4F]">
                        Select employees <span class="text-[#3984E6]">(205)</span>
                    </p>

                    <div class="flex items-center gap-[8px]">
                        <label
                            for="select_all"
                            class="text-[12px] font-medium text-[#4F4F4F]"
                        >Select all</label
                        >

                        <input
                            class="w-[15px] h-[15px] rounded-[2px] border-[2px]"
                            type="checkbox"
                            id="select_all"
                        />
                    </div>
                </div>

                <div
                    class="w-full flex flex-col gap-[8px] bg-white-0 rounded-[4px] py-[8px] px-[15px] md:px-[20px]"
                >
                    <!-- data row -->
                    <div class="w-full flex items-center justify-between py-[6px]">
                        <div
                            class="flex items-center gap-[4px] font-medium text-[13px] text-[#4F4F4F]"
                        >
                            <img
                                src="../assets/user2.jpg"
                                class="w-[28px] h-[28px] rounded-full object-cover"
                                alt=""
                            />

                            <p>Shelly.kobe@joyconsult.com</p>
                        </div>

                        <button
                            data-dropdown-toggle="share-1"
                            class="w-[24px] h-[24px] flex items-center justify-center"
                        >
                            <svg
                                width="18"
                                height="5"
                                viewBox="0 0 18 5"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M2 0.5C0.9 0.5 0 1.4 0 2.5C0 3.6 0.9 4.5 2 4.5C3.1 4.5 4 3.6 4 2.5C4 1.4 3.1 0.5 2 0.5ZM16 0.5C14.9 0.5 14 1.4 14 2.5C14 3.6 14.9 4.5 16 4.5C17.1 4.5 18 3.6 18 2.5C18 1.4 17.1 0.5 16 0.5ZM9 0.5C7.9 0.5 7 1.4 7 2.5C7 3.6 7.9 4.5 9 4.5C10.1 4.5 11 3.6 11 2.5C11 1.4 10.1 0.5 9 0.5Z"
                                    fill="#80868C"
                                />
                            </svg>
                        </button>

                        <div
                            id="share-1"
                            class="z-10 hidden bg-white-0 divide-y divide-gray-100 rounded-lg shadow w-44"
                        >
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Invite</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Remove</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- data row -->
                    <div class="w-full flex items-center justify-between py-[6px]">
                        <div
                            class="flex items-center gap-[4px] font-medium text-[13px] text-[#4F4F4F]"
                        >
                            <img
                                src="../assets/user3.jpg"
                                class="w-[28px] h-[28px] rounded-full object-cover"
                                alt=""
                            />

                            <p>Shelly.kobe@joyconsult.com</p>
                        </div>

                        <button
                            data-dropdown-toggle="share-2"
                            class="w-[24px] h-[24px] flex items-center justify-center"
                        >
                            <svg
                                width="18"
                                height="5"
                                viewBox="0 0 18 5"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M2 0.5C0.9 0.5 0 1.4 0 2.5C0 3.6 0.9 4.5 2 4.5C3.1 4.5 4 3.6 4 2.5C4 1.4 3.1 0.5 2 0.5ZM16 0.5C14.9 0.5 14 1.4 14 2.5C14 3.6 14.9 4.5 16 4.5C17.1 4.5 18 3.6 18 2.5C18 1.4 17.1 0.5 16 0.5ZM9 0.5C7.9 0.5 7 1.4 7 2.5C7 3.6 7.9 4.5 9 4.5C10.1 4.5 11 3.6 11 2.5C11 1.4 10.1 0.5 9 0.5Z"
                                    fill="#80868C"
                                />
                            </svg>
                        </button>

                        <div
                            id="share-2"
                            class="z-10 hidden bg-white-0 divide-y divide-gray-100 rounded-lg shadow w-44"
                        >
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Invite</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Remove</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- data row -->
                    <div class="w-full flex items-center justify-between py-[6px]">
                        <div
                            class="flex items-center gap-[4px] font-medium text-[13px] text-[#4F4F4F]"
                        >
                            <img
                                src="../assets/user1.jpg"
                                class="w-[28px] h-[28px] rounded-full object-cover"
                                alt=""
                            />

                            <p>Shelly.kobe@joyconsult.com</p>
                        </div>

                        <button
                            data-dropdown-toggle="share-3"
                            class="w-[24px] h-[24px] flex items-center justify-center"
                        >
                            <svg
                                width="18"
                                height="5"
                                viewBox="0 0 18 5"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M2 0.5C0.9 0.5 0 1.4 0 2.5C0 3.6 0.9 4.5 2 4.5C3.1 4.5 4 3.6 4 2.5C4 1.4 3.1 0.5 2 0.5ZM16 0.5C14.9 0.5 14 1.4 14 2.5C14 3.6 14.9 4.5 16 4.5C17.1 4.5 18 3.6 18 2.5C18 1.4 17.1 0.5 16 0.5ZM9 0.5C7.9 0.5 7 1.4 7 2.5C7 3.6 7.9 4.5 9 4.5C10.1 4.5 11 3.6 11 2.5C11 1.4 10.1 0.5 9 0.5Z"
                                    fill="#80868C"
                                />
                            </svg>
                        </button>

                        <div
                            id="share-3"
                            class="z-10 hidden bg-white-0 divide-y divide-gray-100 rounded-lg shadow w-44"
                        >
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Invite</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Remove</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- data row -->
                    <div class="w-full flex items-center justify-between py-[6px]">
                        <div
                            class="flex items-center gap-[4px] font-medium text-[13px] text-[#4F4F4F]"
                        >
                            <img
                                src="../assets/user.jpg"
                                class="w-[28px] h-[28px] rounded-full object-cover"
                                alt=""
                            />

                            <p>Shelly.kobe@joyconsult.com</p>
                        </div>

                        <button
                            data-dropdown-toggle="share-4"
                            class="w-[24px] h-[24px] flex items-center justify-center"
                        >
                            <svg
                                width="18"
                                height="5"
                                viewBox="0 0 18 5"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M2 0.5C0.9 0.5 0 1.4 0 2.5C0 3.6 0.9 4.5 2 4.5C3.1 4.5 4 3.6 4 2.5C4 1.4 3.1 0.5 2 0.5ZM16 0.5C14.9 0.5 14 1.4 14 2.5C14 3.6 14.9 4.5 16 4.5C17.1 4.5 18 3.6 18 2.5C18 1.4 17.1 0.5 16 0.5ZM9 0.5C7.9 0.5 7 1.4 7 2.5C7 3.6 7.9 4.5 9 4.5C10.1 4.5 11 3.6 11 2.5C11 1.4 10.1 0.5 9 0.5Z"
                                    fill="#80868C"
                                />
                            </svg>
                        </button>

                        <div
                            id="share-4"
                            class="z-10 hidden bg-white-0 divide-y divide-gray-100 rounded-lg shadow w-44"
                        >
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Invite</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Remove</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- data row -->
                    <div class="w-full flex items-center justify-between py-[6px]">
                        <div
                            class="flex items-center gap-[4px] font-medium text-[13px] text-[#4F4F4F]"
                        >
                            <img
                                src="../assets/user4.jpg"
                                class="w-[28px] h-[28px] rounded-full object-cover"
                                alt=""
                            />

                            <p>Shelly.kobe@joyconsult.com</p>
                        </div>

                        <button
                            data-dropdown-toggle="share-5"
                            class="w-[24px] h-[24px] flex items-center justify-center"
                        >
                            <svg
                                width="18"
                                height="5"
                                viewBox="0 0 18 5"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M2 0.5C0.9 0.5 0 1.4 0 2.5C0 3.6 0.9 4.5 2 4.5C3.1 4.5 4 3.6 4 2.5C4 1.4 3.1 0.5 2 0.5ZM16 0.5C14.9 0.5 14 1.4 14 2.5C14 3.6 14.9 4.5 16 4.5C17.1 4.5 18 3.6 18 2.5C18 1.4 17.1 0.5 16 0.5ZM9 0.5C7.9 0.5 7 1.4 7 2.5C7 3.6 7.9 4.5 9 4.5C10.1 4.5 11 3.6 11 2.5C11 1.4 10.1 0.5 9 0.5Z"
                                    fill="#80868C"
                                />
                            </svg>
                        </button>

                        <div
                            id="share-5"
                            class="z-10 hidden bg-white-0 divide-y divide-gray-100 rounded-lg shadow w-44"
                        >
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Invite</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100"
                                    >Remove</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button
                    class="w-full h-[47px] bg-[#3984E6] flex items-center justify-center rounded-[4px] font-semibold text-[16px] text-white-0"
                >
                    Invite
                </button>
            </div>
        </div>
    </div>

@endsection
