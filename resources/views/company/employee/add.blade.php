@extends('layouts.company-dashboard')

@section('meta-title', 'Add Employee | CSV')
@section('page-title', 'Add Employee | CSV')
@livewireScripts
@section('content')
    <div class=" w-[100vw] md:w-[90vw] min-h-[90vh] md:me-[2vw] flex flex-col justify-between ">
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

            <livewire:upload-employers />
            <livewire:create-employers />

        </div>
    </div>
@endsection



