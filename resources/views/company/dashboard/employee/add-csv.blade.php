@extends('layouts.company-dashboard')

@section('meta-title', 'Add Employee | CSV')
@section('page-title', 'Add Employee | CSV')

@section('content')
<form class=" w-[100vw] md:w-[90vw] min-h-[90vh] md:me-[2vw] flex flex-col justify-between ">
    <div>

        <div class="flex space-x-4 p-2 bg-white-0 rounded-xl">
            <button class="py-2 px-4 bg-gray-50 rounded-lg">
                <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.83004 14C5.68065 14.0005 5.53304 13.9676 5.39806 13.9035C5.26308 13.8395 5.14416 13.7461 5.05004 13.63L0.220042 7.63003C0.07296 7.4511 -0.00744629 7.22666 -0.00744629 6.99503C-0.00744629 6.76341 0.07296 6.53896 0.220042 6.36003L5.22004 0.360032C5.38978 0.155815 5.63369 0.0273905 5.89812 0.0030108C6.16254 -0.0213689 6.42583 0.060293 6.63004 0.230032C6.83426 0.39977 6.96268 0.643682 6.98706 0.908108C7.01144 1.17253 6.92978 1.43581 6.76004 1.64003L2.29004 7.00003L6.61004 12.36C6.73233 12.5068 6.81 12.6856 6.83388 12.8751C6.85776 13.0647 6.82684 13.2571 6.74479 13.4296C6.66273 13.6021 6.53297 13.7475 6.37086 13.8486C6.20875 13.9497 6.02108 14.0023 5.83004 14Z"
                        fill="#828282" />
                </svg>
            </button>
            <div class="flex flex-col">
                        <span class="md:text-xl text-base text-black-10 font-semibold">
                            Add employee
                        </span>
                <span class="text-[#8D8D8D] md:text-xs text-[10px]">
                            Upload employees using CSV or input them manually.
                        </span>
            </div>

        </div>
        <div class="px-4 py-2 my-4 bg-white-0 rounded-xl">
            <input class="hidden" id="file" type="file" accept=".csv" />

            <div class="flex justify-between items-center">
                <span class="text-base font-semibold text-black-10">Upload CSV</span>
                <button class="bg-gray-50 rounded">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 10.1701C19.0005 10.3195 18.9675 10.4671 18.9035 10.6021C18.8395 10.737 18.746 10.856 18.63 10.9501L12.63 15.7801C12.4511 15.9272 12.2266 16.0076 11.995 16.0076C11.7634 16.0076 11.5389 15.9272 11.36 15.7801L5.36 10.7801C5.15578 10.6103 5.02736 10.3664 5.00298 10.102C4.9786 9.83758 5.06026 9.5743 5.23 9.37008C5.39974 9.16586 5.64365 9.03744 5.90808 9.01306C6.1725 8.98868 6.43578 9.07034 6.64 9.24008L12 13.7101L17.36 9.39008C17.5068 9.2678 17.6855 9.19012 17.8751 9.16624C18.0646 9.14236 18.257 9.17328 18.4296 9.25533C18.6021 9.33739 18.7475 9.46715 18.8486 9.62926C18.9497 9.79137 19.0022 9.97905 19 10.1701Z"
                            fill="#828282" />
                    </svg>
                </button>
            </div>
            <div onclick="openFolder()" id="csv-dropzone"
                 class=" group hover:bg-[#3984E620] hover:border-[#3984E6] flex cursor-pointer items-center justify-center border-dotted rounded-lg mt-4 py-4 border">
                <div class="flex space-x-2 items-center">
                    <svg width="59" height="59" viewBox="0 0 59 59" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.0834 48.8334H16.2084C12.5431 48.8334 9.41108 47.5647 6.81236 45.0272C4.21363 42.4897 2.91508 39.3883 2.91669 35.723C2.91669 32.5813 3.86322 29.782 5.75627 27.3251C7.64933 24.8681 10.1264 23.2973 13.1875 22.6126C14.1945 18.907 16.2084 15.9063 19.2292 13.6105C22.25 11.3147 25.6736 10.1667 29.5 10.1667C34.2125 10.1667 38.2105 11.8085 41.4939 15.0919C44.7774 18.3754 46.4183 22.3725 46.4167 27.0834C49.1959 27.4056 51.5022 28.6043 53.3356 30.6794C55.1691 32.7545 56.085 35.1809 56.0834 37.9584C56.0834 40.9792 55.0257 43.5474 52.9103 45.6628C50.7949 47.7781 48.2276 48.835 45.2084 48.8334H31.9167V31.5542L35.7834 35.3001L39.1667 31.9167L29.5 22.2501L19.8334 31.9167L23.2167 35.3001L27.0834 31.5542V48.8334Z"
                            fill="#E6E6E6" />
                    </svg>
                    <div class="flex flex-col ">
                                <span class="text-[#8D8D8D] group-hover:text-[#3984E6]  md:text-sm text-xs font-medium">Select a
                                    CSV file to upload</span>
                        <span class="text-[#A7A7A7] group-hover:text-[#3984E6] md:text-sm text-xs font-medium">or drag and
                                    drop it here</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <span class="text-center text-[#A7A7A7] text-xs font-medium">File must be in CSV format</span>
            </div>
            <div class="border border-dotted rounded-lg bg-[#FAFAFA] p-4 mt-4">
                <div class="flex items-center justify-between">
                    <div class="flex space-x-2 items-center">
                        <svg width="32" height="33" viewBox="0 0 32 33" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M28.781 4.90507H18.651V2.51807L2 5.08807V27.6151L18.651 30.4831V26.9451H28.781C29.0878 26.9606 29.3883 26.854 29.6167 26.6487C29.8451 26.4433 29.9829 26.1558 30 25.8491V6.00007C29.9827 5.69353 29.8448 5.4063 29.6164 5.20113C29.388 4.99596 29.0876 4.88952 28.781 4.90507ZM28.941 26.0311H18.617L18.6 24.1421H21.087V21.9421H18.581L18.569 20.6421H21.087V18.4421H18.55L18.538 17.1421H21.087V14.9421H18.53V13.6421H21.087V11.4421H18.53V10.1421H21.087V7.94207H18.53V5.94207H28.941V26.0311Z"
                                  fill="#20744A" />
                            <path
                                d="M22.4871 7.93896H26.8101V10.139H22.4871V7.93896ZM22.4871 11.44H26.8101V13.64H22.4871V11.44ZM22.4871 14.941H26.8101V17.141H22.4871V14.941ZM22.4871 18.442H26.8101V20.642H22.4871V18.442ZM22.4871 21.943H26.8101V24.143H22.4871V21.943Z"
                                fill="#20744A" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.34696 11.1729L8.49296 11.0499L9.84196 14.7589L11.436 10.8969L13.582 10.7739L10.976 16.0399L13.582 21.3189L11.313 21.1659L9.78096 17.1419L8.24796 21.0129L6.16296 20.8289L8.58496 16.1659L6.34696 11.1729Z"
                                  fill="white" />
                        </svg>
                        <div class="flex flex-col">
                            <span class="text-black-10 text-xs font-semibold">File name.csv</span>
                            <span class="text-[#C4C4C4] text-xs font-semibold">15 MB</span>
                        </div>
                    </div>
                    <button>
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.0605 12.5L18 7.5605L16.9395 6.5L12 11.4395L7.0605 6.5L6 7.5605L10.9395 12.5L6 17.4395L7.0605 18.5L12 13.5605L16.9395 18.5L18 17.4395L13.0605 12.5Z"
                                fill="#828282" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <div class="h-1 w-[95%] bg-[#F4F4F4]">
                        <div  class="h-1 w-[95%] bg-[#3984E6]"></div>
                    </div>
                    <span>70%</span>
                </div>
            </div>
        </div>
        <div class="px-4 py-2 my-4 bg-white-0 rounded-lg">
            <div class="flex justify-between items-center">
                <span class="text-base font-semibold text-black-10">Upload Employee Manually</span>
                <button class="bg-gray-50 rounded">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.17 5.00021C10.3194 4.9997 10.467 5.03268 10.602 5.0967C10.737 5.16073 10.8559 5.25419 10.95 5.37021L15.78 11.3702C15.9271 11.5491 16.0075 11.7736 16.0075 12.0052C16.0075 12.2368 15.9271 12.4613 15.78 12.6402L10.78 18.6402C10.6103 18.8444 10.3664 18.9729 10.1019 18.9972C9.8375 19.0216 9.57422 18.94 9.37 18.7702C9.16578 18.6005 9.03736 18.3566 9.01298 18.0921C8.9886 17.8277 9.07026 17.5644 9.24 17.3602L13.71 12.0002L9.39 6.64021C9.26772 6.49343 9.19004 6.31469 9.16616 6.12514C9.14228 5.93559 9.1732 5.74316 9.25525 5.57064C9.33731 5.39811 9.46707 5.2527 9.62918 5.15161C9.79129 5.05052 9.97896 4.99798 10.17 5.00021Z"
                            fill="#828282" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <button class="bg-[#3984E6] text-white-0 py-1 md:w-[25%] w-[90%] rounded my-4">Import</button>
    </div>
</form>

@endsection

<script>
    function myFunction() {
        var element = document.getElementById("mobile_nav");
        element.classList.toggle("hidden");
        console.log({ element })
    }
    function openFolder() {
        let btn = document.getElementById("file");
        btn.click()

    }

    const csvDropzone = document.getElementById("csv-dropzone");

    csvDropzone.addEventListener("drop", function (event) {
        event.preventDefault();
        const csvFile = event.dataTransfer.files[0];

        csvDropzone.addEventListener("dragover", function (event) {
            event.preventDefault();
            csvDropzone.classList.add("border-[#3984E6]");
        });

        csvDropzone.addEventListener("dragleave", function (event) {
            event.preventDefault();
            csvDropzone.classList.remove("border-[#3984E6]");
        });

        if (csvFile.type === "text/csv" ||
            csvFile.type === "application/vnd.ms-excel") {
            alert("csv file has been selected");
            // this is where you handle the draggable part
            // handleCsvFile(csvFile);
        } else {
            alert("Please drop a CSV file.");
        }
    });
</script>
