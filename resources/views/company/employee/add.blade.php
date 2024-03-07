@extends('layouts.new.layout')

@section('meta-title', 'Add Employee | CSV')
@section('page-title', 'Add Employee | CSV')
@livewireScripts
@section('content')
    <div
        class="flex-1 flex flex-col gap-[14px] lg:gap-[20px] overflow-y-auto md:px-[24px] lg:px-[36px] pb-[24px] md:py-[24px]"
    >
        <div
            class="w-full flex items-center gap-[28px] bg-white-0 px-[10px] md:px-[24px] py-[12px] rounded-[8px] md:rounded-[16px]"
        >
            <a
                href="#"
                class="w-[32px] md:w-[38px] h-[32px] md:h-[38px] flex items-center justify-center rounded-[8px] bg-[#F2F2F2]"
            >
                <svg
                    width="7"
                    height="14"
                    viewBox="0 0 7 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M5.82992 13.9998C5.68053 14.0003 5.53292 13.9673 5.39794 13.9033C5.26296 13.8393 5.14404 13.7458 5.04992 13.6298L0.21992 7.62979C0.0728379 7.45086 -0.00756836 7.22641 -0.00756836 6.99479C-0.00756836 6.76316 0.0728379 6.53872 0.21992 6.35979L5.21992 0.359788C5.38966 0.155571 5.63357 0.0271464 5.898 0.00276666C6.16242 -0.0216131 6.4257 0.0600489 6.62992 0.229787C6.83414 0.399526 6.96256 0.643437 6.98694 0.907864C7.01132 1.17229 6.92966 1.43557 6.75992 1.63979L2.28992 6.99979L6.60992 12.3598C6.7322 12.5066 6.80988 12.6853 6.83376 12.8749C6.85764 13.0644 6.82672 13.2568 6.74467 13.4294C6.66261 13.6019 6.53285 13.7473 6.37074 13.8484C6.20863 13.9495 6.02095 14.002 5.82992 13.9998Z"
                        fill="#828282"
                    />
                </svg>
            </a>

            <div class="flex flex-col gap-[4px]">
                <p
                    class="font-semibold text-[17px] md:text-[20px] text-[#4F4F4F] leading-none"
                >
                    Add employee
                </p>
                <p
                    class="font-medium text-[10px] md:text-[12px] text-[#8D8D8D] leading-none"
                >
                    Upload employees using CSV or input them manually.
                </p>
            </div>
        </div>

        <div
            data-accordion="collapse"
            data-active-classes="bg-transparent text-[#4F4F4F]"
            data-inactive-classes="bg-transparent text-[#4F4F4F]"
            id="accordion-upload-employee"
            class="w-full flex flex-1 flex-col gap-[42px] md:gap-[28px]"
        >
            <div
                class="w-full flex flex-col gap-[20px] py-[16px] px-[16px] md:px-[24px] bg-white-0 rounded-[16px]"
            >
                <button
                    id="accordion-collapse-upload-csv-heading"
                    type="button"
                    aria-expanded="true"
                    data-accordion-target="#accordion-collapse-upload-csv-body"
                    aria-controls="accordion-collapse-upload-csv-body"
                    class="flex w-full items-center justify-between text-[14px] md:text-[16px] font-semibold text-[#4F4F4F] bg-transparent outline-none"
                >
                    <span>Upload CSV</span>

                    <span
                        class="w-[28px] h-[28px] flex items-center justify-center bg-[#F2F2F2] rounded-[4px]"
                    >
                <svg
                    data-accordion-icon
                    width="15"
                    height="7"
                    viewBox="0 0 15 7"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="rotate-[-90deg]"
                >
                  <path
                      d="M14.205 1.17008C14.2055 1.31947 14.1725 1.46708 14.1085 1.60206C14.0445 1.73704 13.951 1.85596 13.835 1.95008L7.83499 6.78008C7.65606 6.92716 7.43161 7.00757 7.19999 7.00757C6.96836 7.00757 6.74392 6.92716 6.56499 6.78008L0.564988 1.78008C0.360771 1.61034 0.232346 1.36643 0.207967 1.102C0.183587 0.837577 0.265249 0.574296 0.434987 0.37008C0.604726 0.165863 0.848637 0.0374388 1.11306 0.0130591C1.37749 -0.0113206 1.64077 0.070341 1.84499 0.240079L7.20499 4.71008L12.565 0.390079C12.7118 0.267796 12.8905 0.190119 13.0801 0.16624C13.2696 0.14236 13.462 0.173277 13.6346 0.255333C13.8071 0.337389 13.9525 0.467149 14.0536 0.629259C14.1547 0.791369 14.2072 0.979045 14.205 1.17008Z"
                      fill="#828282"
                  />
                </svg>
              </span>
                </button>
                <div
                    id="accordion-collapse-upload-csv-body"
                    class="hidden"
                    aria-labelledby="accordion-collapse-upload-csv-heading"
                >
                    <div class="w-full max-w-[90%] mx-auto flex flex-col gap-[8px]">
                        <div
                            class="group w-full h-[107px] relative flex gap-[16px] items-center justify-center border-[1px] border-[#E6E6E6] hover:border-[#3984E6] rounded-[8px] border-dashed cursor-pointer hover:bg-[#3984E617] text-[#8D8D8D] hover:text-[#3984E6] transition-all"
                        >
                            <svg
                                width="40"
                                height="29"
                                viewBox="0 0 40 29"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M18.455 28.1666H10.58C7.92579 28.1666 5.65779 27.2697 3.77596 25.476C1.89412 23.6822 0.95379 21.4898 0.954957 18.8989C0.954957 16.678 1.64037 14.6992 3.01121 12.9624C4.38204 11.2256 6.17579 10.1152 8.39246 9.63117C9.12162 7.01172 10.58 4.89054 12.7675 3.26763C14.955 1.64471 17.4341 0.833252 20.205 0.833252C23.6175 0.833252 26.5125 1.99378 28.8902 4.31484C31.2679 6.63589 32.4561 9.46147 32.455 12.7916C34.4675 13.0194 36.1375 13.8667 37.4652 15.3336C38.7929 16.8005 39.4561 18.5156 39.455 20.4791C39.455 22.6145 38.689 24.4299 37.1572 25.9253C35.6254 27.4206 33.7663 28.1677 31.58 28.1666H21.955V15.952L24.755 18.5999L27.205 16.2083L20.205 9.37492L13.205 16.2083L15.655 18.5999L18.455 15.952V28.1666Z"
                                    fill="#E6E6E6"
                                />
                            </svg>

                            <p class="font-semibold text-[12px] leading-none">
                                Select a CSV file to upload <br />
                                <span
                                    class="font-regular text-[#A7A7A7] group-hover:text-[#3984E6]"
                                >or drag and drop it here</span
                                >
                            </p>

                            <label
                                for="upload-csv"
                                class="w-full h-full absolute left-0 right-0 bottom-0 top-0 cursor-pointer"
                            ></label>
                            <input id="upload-csv" class="hidden" type="file" />
                        </div>

                        <p
                            class="font-medium text-[12px] text-[#A7A7A7] text-center leading-none"
                        >
                            File must be in CSV format
                        </p>

                        <div
                            class="w-full bg-[#FAFAFA] border-[0.7px] border-[#E6E6E6] rounded-[8px] px-[24px] py-[12px] md:py-[24px] flex flex-col gap-[24px] border-dashed"
                        >
                            <div class="w-full flex items-center justify-between">
                                <div class="flex items-center gap-[12px]">
                                    <svg
                                        width="32"
                                        height="33"
                                        viewBox="0 0 32 33"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M28.781 4.90507H18.651V2.51807L2 5.08807V27.6151L18.651 30.4831V26.9451H28.781C29.0878 26.9606 29.3883 26.854 29.6167 26.6487C29.8451 26.4433 29.9829 26.1558 30 25.8491V6.00007C29.9827 5.69353 29.8448 5.4063 29.6164 5.20113C29.388 4.99596 29.0876 4.88952 28.781 4.90507ZM28.941 26.0311H18.617L18.6 24.1421H21.087V21.9421H18.581L18.569 20.6421H21.087V18.4421H18.55L18.538 17.1421H21.087V14.9421H18.53V13.6421H21.087V11.4421H18.53V10.1421H21.087V7.94207H18.53V5.94207H28.941V26.0311Z"
                                            fill="#20744A"
                                        />
                                        <path
                                            d="M22.4871 7.93896H26.8101V10.139H22.4871V7.93896ZM22.4871 11.44H26.8101V13.64H22.4871V11.44ZM22.4871 14.941H26.8101V17.141H22.4871V14.941ZM22.4871 18.442H26.8101V20.642H22.4871V18.442ZM22.4871 21.943H26.8101V24.143H22.4871V21.943Z"
                                            fill="#20744A"
                                        />
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M6.34709 11.1729L8.49309 11.0499L9.84209 14.7589L11.4361 10.8969L13.5821 10.7739L10.9761 16.0399L13.5821 21.3189L11.3131 21.1659L9.78109 17.1419L8.24809 21.0129L6.16309 20.8289L8.58509 16.1659L6.34709 11.1729Z"
                                            fill="white"
                                        />
                                    </svg>

                                    <div class="font-semibold text-[12px]">
                                        <p class="text-[#4F4F4F]">File name.csv</p>
                                        <p class="text-[#C4C4C4]">15 MB</p>
                                    </div>
                                </div>

                                <button
                                    class="w-[24px] h-[24px] flex items-center justify-center"
                                >
                                    <svg
                                        width="13"
                                        height="13"
                                        viewBox="0 0 13 13"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M7.5605 6.5L12.5 1.5605L11.4395 0.5L6.5 5.4395L1.5605 0.5L0.5 1.5605L5.4395 6.5L0.5 11.4395L1.5605 12.5L6.5 7.5605L11.4395 12.5L12.5 11.4395L7.5605 6.5Z"
                                            fill="#828282"
                                        />
                                    </svg>
                                </button>
                            </div>

                            <div class="w-full flex items-center gap-[12px]">
                                <div class="flex-1 h-[5px] bg-[#F4F4F4] rounded-full">
                                    <div
                                        class="w-[70%] h-full rounded-full bg-[#3984E6]"
                                    ></div>
                                </div>

                                <p class="font-semibold text-[12px] text-[#C4C4C4]">70%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="w-full flex flex-col gap-[20px] py-[16px] px-[16px] md:px-[24px] bg-white-0 rounded-[16px]"
            >
                <button
                    id="accordion-collapse-upload-form-heading"
                    type="button"
                    aria-expanded="true"
                    data-accordion-target="#accordion-collapse-upload-form-body"
                    aria-controls="accordion-collapse-upload-form-body"
                    class="flex w-full items-center justify-between text-[14px] md:text-[16px] font-semibold text-[#4F4F4F] bg-transparent outline-none"
                >
                    <span>Upload Employee Manually</span>

                    <span
                        class="w-[28px] h-[28px] flex items-center justify-center bg-[#F2F2F2] rounded-[4px]"
                    >
                <svg
                    data-accordion-icon
                    width="15"
                    height="7"
                    viewBox="0 0 15 7"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="rotate-[-90deg]"
                >
                  <path
                      d="M14.205 1.17008C14.2055 1.31947 14.1725 1.46708 14.1085 1.60206C14.0445 1.73704 13.951 1.85596 13.835 1.95008L7.83499 6.78008C7.65606 6.92716 7.43161 7.00757 7.19999 7.00757C6.96836 7.00757 6.74392 6.92716 6.56499 6.78008L0.564988 1.78008C0.360771 1.61034 0.232346 1.36643 0.207967 1.102C0.183587 0.837577 0.265249 0.574296 0.434987 0.37008C0.604726 0.165863 0.848637 0.0374388 1.11306 0.0130591C1.37749 -0.0113206 1.64077 0.070341 1.84499 0.240079L7.20499 4.71008L12.565 0.390079C12.7118 0.267796 12.8905 0.190119 13.0801 0.16624C13.2696 0.14236 13.462 0.173277 13.6346 0.255333C13.8071 0.337389 13.9525 0.467149 14.0536 0.629259C14.1547 0.791369 14.2072 0.979045 14.205 1.17008Z"
                      fill="#828282"
                  />
                </svg>
              </span>
                </button>

                <div
                    id="accordion-collapse-upload-form-body"
                    class="hidden"
                    aria-labelledby="accordion-collapse-upload-form-heading"
                >
                    <div class="w-full flex flex-col gap-[16px]">
                        <div
                            id="accordion-upload-employee-form"
                            class="w-full max-w-[520px] mx-auto flex flex-col gap-[12px]"
                            data-form-group-parent="employee-form-group"
                        >
                            <div
                                class="flex flex-col w-full border-[1px] border-[#E6E6E6] border-dashed rounded-t-[12px] has-[.hidden]:rounded-b-[12px] has-[.hidden]:border-transparent overflow-hidden bg-[#FAFAFA] transition-all"
                            >
                                <button
                                    onclick="handleToggle(this)"
                                    id="accordion-upload-form-heading-1"
                                    type="button"
                                    aria-expanded="true"
                                    data-form-accordion-target="accordion-upload-form-1"
                                    aria-controls="accordion-upload-form-1"
                                    class="w-full flex items-center justify-between text-[14px] text-[#4F4F4F] font-semibold p-[14px] rounded-t-[12px] bg-[#F0F0F0]"
                                >
                                    <span>Employee Information 1</span>

                                    <svg
                                        data-accordion-icon
                                        width="15"
                                        height="9"
                                        viewBox="0 0 15 9"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="rotate-[-90deg]"
                                    >
                                        <path
                                            d="M0.807831 1.05781C0.865877 0.999697 0.934808 0.953598 1.01068 0.922145C1.08656 0.890693 1.16788 0.874504 1.25002 0.874504C1.33215 0.874504 1.41348 0.890693 1.48936 0.922145C1.56523 0.953598 1.63416 0.999698 1.69221 1.05781L7.50002 6.8664L13.3078 1.05781C13.4251 0.940533 13.5842 0.874649 13.75 0.874649C13.9159 0.874649 14.0749 0.940533 14.1922 1.05781C14.3095 1.17508 14.3754 1.33414 14.3754 1.5C14.3754 1.66585 14.3095 1.82491 14.1922 1.94218L7.94221 8.19218C7.88416 8.25029 7.81523 8.29639 7.73936 8.32785C7.66348 8.3593 7.58215 8.37549 7.50002 8.37549C7.41788 8.37549 7.33656 8.3593 7.26068 8.32785C7.18481 8.29639 7.11588 8.25029 7.05783 8.19218L0.807831 1.94218C0.74972 1.88414 0.703621 1.81521 0.672168 1.73933C0.640715 1.66346 0.624528 1.58213 0.624528 1.5C0.624528 1.41786 0.640715 1.33653 0.672168 1.26066C0.703622 1.18478 0.74972 1.11585 0.807831 1.05781Z"
                                            fill="#828282"
                                        />
                                    </svg>
                                </button>

                                <div
                                    id="accordion-upload-form-1"
                                    class="block"
                                    aria-labelledby="accordion-upload-form-heading-1"
                                >
                                    <div
                                        class="w-full px-[16px] md:px-[28px] py-[8px] pb-[30px] flex flex-col gap-[8px]"
                                    >
                                        <div class="w-full flex items-center gap-[30px]">
                                            <div class="flex-1 flex flex-col h-fit gap-[4px]">
                                                <label
                                                    for="lastname"
                                                    class="font-semibold text-[12px] text-[#4F4F4F]"
                                                >Last Name</label
                                                >

                                                <input
                                                    id="lastname"
                                                    type="text"
                                                    class="h-[50px] w-full flex items-center rounded-[8px] border-[1px] border-[#E6E6E6] bg-white-0 px-[24px] text-[12px] font-medium placeholder:text-[#A7A7A7]"
                                                    placeholder="Enter your lastname"
                                                />
                                            </div>

                                            <div class="flex-1 flex flex-col h-fit gap-[4px]">
                                                <label
                                                    for="firstname"
                                                    class="font-semibold text-[12px] text-[#4F4F4F]"
                                                >First Name</label
                                                >

                                                <input
                                                    id="firstname"
                                                    type="text"
                                                    class="h-[50px] w-full flex items-center rounded-[8px] border-[1px] border-[#E6E6E6] bg-white-0 px-[24px] text-[12px] font-medium placeholder:text-[#A7A7A7]"
                                                    placeholder="Enter your firstname"
                                                />
                                            </div>
                                        </div>

                                        <div class="w-full flex items-center gap-[30px]">
                                            <div class="flex-1 flex flex-col h-fit gap-[4px]">
                                                <label
                                                    for="phonenumber"
                                                    class="font-semibold text-[12px] text-[#4F4F4F]"
                                                >Employee Phone number</label
                                                >

                                                <input
                                                    id="phonenumber"
                                                    type="text"
                                                    class="h-[50px] w-full flex items-center rounded-[8px] border-[1px] border-[#E6E6E6] bg-white-0 px-[24px] text-[12px] font-medium placeholder:text-[#A7A7A7]"
                                                    placeholder="Enter phone number"
                                                />
                                            </div>
                                        </div>

                                        <div class="w-full flex items-center gap-[30px]">
                                            <div class="flex-1 flex flex-col h-fit gap-[4px]">
                                                <label
                                                    for="email"
                                                    class="font-semibold text-[12px] text-[#4F4F4F]"
                                                >Employee Email Address</label
                                                >

                                                <input
                                                    id="email"
                                                    type="email"
                                                    class="h-[50px] w-full flex items-center rounded-[8px] border-[1px] border-[#E6E6E6] bg-white-0 px-[24px] text-[12px] font-medium placeholder:text-[#A7A7A7]"
                                                    placeholder="Enter email"
                                                />
                                            </div>
                                        </div>

                                        <div class="w-full flex items-center gap-[30px]">
                                            <div class="flex-1 flex flex-col h-fit gap-[4px]">
                                                <label
                                                    for="position"
                                                    class="font-semibold text-[12px] text-[#4F4F4F]"
                                                >Employee Position/ Job Role</label
                                                >

                                                <select
                                                    id="position"
                                                    class="h-[50px] w-full flex items-center rounded-[8px] border-[1px] border-[#E6E6E6] bg-white-0 text-[12px] font-medium placeholder:text-[#A7A7A7] px-[24px]"
                                                >
                                                    <option selected>Enter Job Role</option>
                                                    <option value="chef">Chef</option>
                                                    <option value="cleaner">Cleaner</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="w-full flex items-center gap-[30px]">
                                            <div class="flex-1 flex flex-col h-fit gap-[4px]">
                                                <label
                                                    for="pay"
                                                    class="font-semibold text-[12px] text-[#4F4F4F]"
                                                >Select Hourly Pay</label
                                                >

                                                <select
                                                    id="pay"
                                                    class="h-[50px] w-full flex items-center rounded-[8px] border-[1px] border-[#E6E6E6] bg-white-0 text-[12px] font-medium placeholder:text-[#A7A7A7] px-[24px]"
                                                >
                                                    <option selected>Enter range</option>
                                                    <option value="10$ / hr">10$ / hr</option>
                                                    <option value="20$ / hr">20$ / hr</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full max-w-[520px] mx-auto flex justify-end">
                            <button
                                data-form-group-target="employee-form-group"
                                class="font-semibold text-[14px] text-[#1A73E8] border-b-[1px] border-b-[#1A73E8]"
                            >
                                + Add another employee
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full flex items-center justify-center mt-auto">
                <button
                    disabled
                    class="w-full max-w-[346px] h-[50px] flex items-center justify-center rounded-[4px] bg-[#3984E6] disabled:bg-[#E0E0E0] text-[16px] font-semibold text-white-0"
                >
                    Done
                </button>
            </div>
        </div>
    </div>
@endsection



