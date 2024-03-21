<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>kontrack</title>
</head>

<body
    class="w-full h-screen bg-[#F0F3FF] font-montserrat relative overflow-hidden"
>
<div class="w-full max-w-[1188px] h-full mx-auto flex flex-1">
    <div
        class="flex-1 max-w-[450px] h-full flex flex-col gap-[24px] py-[40px] px-[16px] md:px-[32px]"
    >
        <div class="flex flex-col">
            <p class="font-bold text-[24px] text-[#2E2828] leading-[29px]">
                Find out more about Kontrack
            </p>
            <p class="font-medium text-[20px] text-[#80868C] leading-[24px]">
                Schedule a Demo Today
            </p>
        </div>

        <form
            class="w-full flex flex-col gap-[12px] px-[17px] py-[22.5px] overflow-y-auto no-scrollbar"
        >
            <div class="flex flex-col gap-[4px]">
                <label for="name" class="font-semibold text-[12px] text-[#4F4F4F]"
                >Full name</label
                >
                <input
                    id="name"
                    type="text"
                    placeholder="Enter your name"
                    class="font-medium text-[12px] placeholder:text-[#A7A7A7] h-[50px] flex items-center px-[24px] border-[1px] border-[#E6E6E6] bg-white-0 rounded-[8px]"
                />
            </div>

            <div class="flex flex-col gap-[4px]">
                <label for="email" class="font-semibold text-[12px] text-[#4F4F4F]"
                >Email (company domain)</label
                >
                <input
                    id="email"
                    type="email"
                    placeholder="Enter your company email"
                    class="font-medium text-[12px] placeholder:text-[#A7A7A7] h-[50px] flex items-center px-[24px] border-[1px] border-[#E6E6E6] bg-white-0 rounded-[8px]"
                />
            </div>

            <div class="flex flex-col gap-[4px]">
                <label for="job" class="font-semibold text-[12px] text-[#4F4F4F]"
                >Job Title</label
                >
                <input
                    id="job"
                    type="text"
                    placeholder="What is your job title"
                    class="font-medium text-[12px] placeholder:text-[#A7A7A7] h-[50px] flex items-center px-[24px] border-[1px] border-[#E6E6E6] bg-white-0 rounded-[8px]"
                />
            </div>

            <div class="flex flex-col gap-[4px]">
                <label for="size" class="font-semibold text-[12px] text-[#4F4F4F]"
                >Employee Size</label
                >
                <select
                    id="size"
                    class="font-medium text-[12px] placeholder:text-[#A7A7A7] h-[50px] flex items-center px-[24px] border-[1px] border-[#E6E6E6] bg-white-0 rounded-[8px]"
                >
                    <option selected>-Select your employee size-</option>
                    <option value="1-10">1 - 10</option>
                    <option value="10-50">10 - 50</option>
                    <option value="50-100">50 - 100</option>
                    <option value="100-500">100 - 500</option>
                </select>
            </div>

            <div class="flex flex-col gap-[4px]">
                <label
                    for="service"
                    class="font-semibold text-[12px] text-[#4F4F4F]"
                >What service are you interested in?</label
                >
                <select
                    id="service"
                    class="font-medium text-[12px] placeholder:text-[#A7A7A7] h-[50px] flex items-center px-[24px] border-[1px] border-[#E6E6E6] bg-white-0 rounded-[8px]"
                >
                    <option selected>-Select-</option>
                    <option value="1-10">Sales</option>
                    <option value="10-50">Marketing</option>
                    <option value="50-100">Technology</option>
                </select>
            </div>

            <div class="flex flex-col gap-[4px]">
                <label
                    for="comments"
                    class="font-semibold text-[12px] text-[#4F4F4F]"
                >Any other comments (optional)</label
                >
                <input
                    id="comments"
                    type="text"
                    placeholder="Type comments here"
                    class="font-medium text-[12px] placeholder:text-[#A7A7A7] h-[50px] flex items-center px-[24px] border-[1px] border-[#E6E6E6] bg-white-0 rounded-[8px]"
                />
            </div>

            <button
                class="w-full h-[56px] mt-[12px] flex items-center justify-center rounded-[8px] bg-[#092C86] font-semibold text-[16px] text-white-0 flex-shrink-0"
            >
                Submit
            </button>
        </form>
    </div>
    <div class="flex-1 hidden md:flex items-center justify-center">
        <img
            src="./assets/demo.svg"
            class="h-[393px] aspect-[464/393]"
            alt=""
        />
    </div>
</div>
</body>
</html>
