<div class="px-4 py-2 my-4 bg-white-0 rounded-lg" x-data="{ open: false }">
    <div class="flex justify-between items-center">
        <span class="text-base font-semibold text-black-10">Create Employee Manually</span>
        <button type="button" onclick="toggleManualUpload()" class="bg-gray-50 rounded" @click="open = ! open">
            <svg class="hidden" id="manual_upload_open" width="24" height="24" viewBox="0 0 24 24"
                 fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19 10.1701C19.0005 10.3195 18.9675 10.4671 18.9035 10.6021C18.8395 10.737 18.746 10.856 18.63 10.9501L12.63 15.7801C12.4511 15.9272 12.2266 16.0076 11.995 16.0076C11.7634 16.0076 11.5389 15.9272 11.36 15.7801L5.36 10.7801C5.15578 10.6103 5.02736 10.3664 5.00298 10.102C4.9786 9.83758 5.06026 9.5743 5.23 9.37008C5.39974 9.16586 5.64365 9.03744 5.90808 9.01306C6.1725 8.98868 6.43578 9.07034 6.64 9.24008L12 13.7101L17.36 9.39008C17.5068 9.2678 17.6855 9.19012 17.8751 9.16624C18.0646 9.14236 18.257 9.17328 18.4296 9.25533C18.6021 9.33739 18.7475 9.46715 18.8486 9.62926C18.9497 9.79137 19.0022 9.97905 19 10.1701Z"
                    fill="#828282" />
            </svg>
            <svg id="manual_upload_close" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.17 5.00021C10.3194 4.9997 10.467 5.03268 10.602 5.0967C10.737 5.16073 10.8559 5.25419 10.95 5.37021L15.78 11.3702C15.9271 11.5491 16.0075 11.7736 16.0075 12.0052C16.0075 12.2368 15.9271 12.4613 15.78 12.6402L10.78 18.6402C10.6103 18.8444 10.3664 18.9729 10.1019 18.9972C9.8375 19.0216 9.57422 18.94 9.37 18.7702C9.16578 18.6005 9.03736 18.3566 9.01298 18.0921C8.9886 17.8277 9.07026 17.5644 9.24 17.3602L13.71 12.0002L9.39 6.64021C9.26772 6.49343 9.19004 6.31469 9.16616 6.12514C9.14228 5.93559 9.1732 5.74316 9.25525 5.57064C9.33731 5.39811 9.46707 5.2527 9.62918 5.15161C9.79129 5.05052 9.97896 4.99798 10.17 5.00021Z"
                    fill="#828282" />
            </svg>
        </button>
    </div>

    {{-- Manual Upload --}}
    <div class="flex justify-center hidden " id="manual_upload" x-show="open">
        <div class="md:w-[40%]">
            @csrf
            <div id="manual_upload_container">

            </div>
            <div id="myBladeContainer" class="w-full px-4 flex justify-end mt-2">
                <button id="addEmployeeButton" type="button"
                        class="text-[#1A73E8] text-sm font-semibold underline">
                    + Add another employee
                </button>
            </div>
        </div>
    </div>

</div>

<script>

    function toggleManualUpload() {

        let element = document.getElementById("manual_upload");
        let close = document.getElementById('manual_upload_close')
        let open = document.getElementById('manual_upload_open')

        element.classList.toggle("hidden");
        close.classList.toggle("hidden");
        open.classList.toggle("hidden");
    }


    document.addEventListener('DOMContentLoaded', function () {

        const manualEmployees = [
            {
                firstname: '',
                lastname: '',
                phone: '',
                email: '',
                category: '',
                rate: 20
            }
        ];

        const addManualEmployee = () => {
            manualEmployees.push({
                firstname: '',
                lastname: '',
                phone: '',
                email: '',
                category: '',
                rate: 20
            });

            renderEmployeeCards();
            toggleEmployeeForm(manualEmployees.length - 1);
        }


        const createEmployeeCard = (employee, index) => {
            return `
        <div>
            <button class="flex justify-between head mt-2 bg-white-20 p-2 rounded items-center w-[100%]" onclick="toggleEmployeeForm(${index})">
                <div class="flex items-center space-x-2">
                    <span class="text-xs text-black-10 font-semibold">Employee information ${index + 1}</span>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 8C0 5.87827 0.842855 3.84344 2.34315 2.34315C3.84344 0.842855 5.87827 0 8 0C10.1217 0 12.1566 0.842855 13.6569 2.34315C15.1571 3.84344 16 5.87827 16 8C16 10.1217 15.1571 12.1566 13.6569 13.6569C12.1566 15.1571 10.1217 16 8 16C5.87827 16 3.84344 15.1571 2.34315 13.6569C0.842855 12.1566 0 10.1217 0 8ZM7.54347 11.424L12.1493 5.66613L11.3173 5.00053L7.38987 9.90827L4.608 7.5904L3.92533 8.4096L7.54347 11.4251V11.424Z"
                            fill="#40AD93" />
                    </svg>
                </div>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.05781 16.692C6.9997 16.634 6.9536 16.5651 6.92215 16.4892C6.89069 16.4133 6.87451 16.332 6.87451 16.2499C6.87451 16.1677 6.89069 16.0864 6.92215 16.0105C6.9536 15.9346 6.9997 15.8657 7.05781 15.8077L12.8664 9.99986L7.05781 4.19205C6.94053 4.07477 6.87465 3.91571 6.87465 3.74986C6.87465 3.58401 6.94053 3.42495 7.05781 3.30767C7.17508 3.1904 7.33414 3.12451 7.5 3.12451C7.66585 3.12451 7.82491 3.1904 7.94218 3.30767L14.1922 9.55767C14.2503 9.61572 14.2964 9.68465 14.3278 9.76052C14.3593 9.8364 14.3755 9.91772 14.3755 9.99986C14.3755 10.082 14.3593 10.1633 14.3278 10.2392C14.2964 10.3151 14.2503 10.384 14.1922 10.442L7.94218 16.692C7.88414 16.7502 7.81521 16.7963 7.73933 16.8277C7.66346 16.8592 7.58213 16.8754 7.5 16.8754C7.41786 16.8754 7.33653 16.8592 7.26066 16.8277C7.18479 16.7963 7.11585 16.7502 7.05781 16.692Z"
                        fill="#828282" />
                </svg>
            </button>
            <div class="w-full mt-2 bg-[#FAFAFA] rounded-lg body ${index === manualEmployees.length - 1 ? '' : 'hidden'}">

                ${createEmployeeForm(employee)}
            </div>
        </div>`;
        };

        const createEmployeeForm = (employee) => {
            return `
        <div class="w-full rounded-t-xl flex justify-between items-center py-2 px-4 bg-[#F0F0F0]">
            <span class="text-black-10 text-sm font-semibold">Employee information  ${employee + 1}</span>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                d="M7.05781 16.692C6.9997 16.634 6.9536 16.5651 6.92215 16.4892C6.89069 16.4133 6.87451 16.332 6.87451 16.2499C6.87451 16.1677 6.89069 16.0864 6.92215 16.0105C6.9536 15.9346 6.9997 15.8657 7.05781 15.8077L12.8664 9.99986L7.05781 4.19205C6.94053 4.07477 6.87465 3.91571 6.87465 3.74986C6.87465 3.58401 6.94053 3.42495 7.05781 3.30767C7.17508 3.1904 7.33414 3.12451 7.5 3.12451C7.66585 3.12451 7.82491 3.1904 7.94218 3.30767L14.1922 9.55767C14.2503 9.61572 14.2964 9.68465 14.3278 9.76052C14.3593 9.8364 14.3755 9.91772 14.3755 9.99986C14.3755 10.082 14.3593 10.1633 14.3278 10.2392C14.2964 10.3151 14.2503 10.384 14.1922 10.442L7.94218 16.692C7.88414 16.7502 7.81521 16.7963 7.73933 16.8277C7.66346 16.8592 7.58213 16.8754 7.5 16.8754C7.41786 16.8754 7.33653 16.8592 7.26066 16.8277C7.18479 16.7963 7.11585 16.7502 7.05781 16.692Z"
                fill="#828282" />
            </svg>
        </div>

            <div class="w-full pb-4">
                <div class="flex justify-between w-full px-4">
                    <div class="w-[45%]">
                        <span class="text-xs text-black-10">Last Name</span>
                        <input class="border p-2 bg-white-0 rounded-lg text-[11px] w-full"
                            placeholder="Enter your lastname" />
                    </div>
                    <div class="w-[45%]">
                        <span class="text-xs text-black-10">First Name</span>
                        <input class="border p-2 bg-white-0 rounded-lg text-[11px] w-full"
                            placeholder="Enter your firstname" />
                    </div>
                </div>
                <div class="w-full px-4">
                    <span class="text-xs text-black-10">Employee Phone number</span>
                    <input class="border p-2 bg-white-0 rounded-lg text-[11px] w-full"
                        placeholder="Enter your lastname" />
                </div>
                <div class="w-full px-4">
                    <span class="text-xs text-black-10">Employee Email Address</span>
                    <input class="border p-2 bg-white-0 rounded-lg text-[11px] w-full"
                        placeholder="Enter your lastname" />
                </div>
                <div class="w-full px-4">
                    <span class="text-black-10 text-xs font-semibold mb-1">Business category</span>
                    <select
                        class=" border p-2 bg-white-0 rounded-lg text-[11px] w-full border-gray-10 bg-white-0  outline-none focus:border-brand-0 border-[0.5px]">
                        <option>Driver</option>
                        <option>Cleaner</option>
                        <option>Care giver</option>
                    </select>
                </div>
                <div class="w-full px-4">
                    <span class="text-black-10 text-xs font-semibold mb-1">Select hourly pay</span>
                    <select
                        class=" border p-2 bg-white-0 rounded-lg text-[11px] w-full border-gray-10 bg-white-0  outline-none focus:border-brand-0 border-[0.5px]">
                        <option>10 $/hr</option>
                        <option>20 $/hr</option>
                        <option>30 $/hr</option>
                    </select>
                </div>
            </div>
        `;
        };

        const toggleEmployeeForm = (index) => {
            event.preventDefault();
            console.log('should open')
            const bodies = document.querySelectorAll('.body');
            bodies.forEach((body, i) => {
                body.classList.toggle('hidden', i !== index);
            });
        };

        const renderEmployeeCards = () => {
            const manualContainer = document.querySelector('#manual_upload_container');
            manualContainer.innerHTML = '';

            manualEmployees.forEach((employee, index) => {
                manualContainer.innerHTML += createEmployeeCard(employee, index);
            });
        };

        // Attach the click event handler using JavaScript
        const addButtonContainer = document.getElementById('myBladeContainer');
        const addButton = addButtonContainer.querySelector('#addEmployeeButton');
        addButton.addEventListener('click', addManualEmployee);

        // Render employee cards initially
        renderEmployeeCards();
    });
</script>
