<x-app-layout>
    <!-- Pricing -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight ">Plan</h2>
            <p class="mt-1 text-gray-600 ">Select a plan for durian orchard maintenance.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-5 gap-6 lg:items-center">

            <!-- Card -->
            <div class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8">
                <p class="mb-3">
                    <span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xl uppercase font-semibold bg-blue-100 text-blue-800 ">
                        ช่วงหลังเก็บเกี่ยว
                    </span>
                </p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            รดน้ำทุก 3 วัน
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            ใส่ปุ๋ยทุกเดือน
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            พ่นยาทุก 15 วัน

                        </span>
                    </li>
                </ul>
                <form action="{{ route('plans.create') }}" method="POST">
                    @csrf
                    <input name="number" value="1" type="hidden">
                    <button type="submit"
                        class="w-full cursor-pointer mt-5 inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4">
                        Select
                    </button>
                </form>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8">
                <p class="mb-3"><span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xl uppercase font-semibold bg-blue-100 text-blue-800 ">
                        ช่วงคุมน้ำ </span></p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            รดน้ำทุก 7 วัน
                        </span>
                    </li>

                    <li class="flex space-x-2 invisible">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            ใส่ปุ๋ยทุกเดือน
                        </span>
                    </li>

                    <li class="flex space-x-2 invisible">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            พ่นยาทุก 15 วัน

                        </span>
                    </li>
                </ul>


                <form action="{{ route('plans.create') }}" method="POST">
                    @csrf
                    <input name="number" value="2" type="hidden">
                    <button type="submit"
                        class="w-full cursor-pointer mt-5 inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4">
                        Select
                    </button>
                </form>
            </div>
            <!-- End Card --> <!-- Card -->
            <div class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8">
                <p class="mb-3"><span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xl uppercase font-semibold bg-blue-100 text-blue-800 ">
                        ช่วงผลิดอก </span></p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            รดน้ำทุก 2 วัน
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            ใส่ปุ๋ยทุก 15 วัน
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            พ่นยาทุก 7 วัน

                        </span>
                    </li>
                </ul>


                <form action="{{ route('plans.create') }}" method="POST">
                    @csrf
                    <input name="number" value="3" type="hidden">
                    <button type="submit"
                        class="w-full cursor-pointer mt-5 inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4">
                        Select
                    </button>
                </form>
            </div>
            <!-- End Card --> <!-- Card -->
            <div class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8">
                <p class="mb-3"><span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xl uppercase font-semibold bg-blue-100 text-blue-800 ">
                        ช่วงดอกบาน </span></p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            รดน้ำทุก 4 วัน
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            ใส่ปุ๋ยทุก 15 วัน
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            พ่นยาทุก 15 วัน

                        </span>
                    </li>
                </ul>

                <form action="{{ route('plans.create') }}" method="POST">
                    @csrf
                    <input name="number" value="4" type="hidden">
                    <button type="submit"
                        class="w-full cursor-pointer mt-5 inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4">
                        Select
                    </button>
                </form>
            </div>
            <!-- End Card -->
            <!-- Card -->
            <div class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8">
                <p class="mb-3"><span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xl uppercase font-semibold bg-blue-100 text-blue-800 ">
                        ช่วงออกผล </span></p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            รดน้ำทุก 2 วัน
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            ใส่ปุ๋ยทุก 7 วัน
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 text-lg">
                            พ่นยาทุก 7 วัน

                        </span>
                    </li>
                </ul>

                <form action="{{ route('plans.create') }}" method="POST">
                    @csrf
                    <input name="number" value="5" type="hidden">
                    <button type="submit"
                        class="w-full cursor-pointer mt-5 inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4">
                        Select
                    </button>
                </form>
            </div>
            <!-- End Card -->
            {{-- <!-- Card -->
            <div class="flex flex-col border-2 border-blue-600 text-center shadow-xl rounded-xl p-8">
                <p class="mb-3"><span
                        class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs uppercase font-semibold bg-blue-100 text-blue-800 ">Most
                        popular</span></p>
                <h4 class="font-medium text-lg text-gray-800 ">Startup</h4>
                <span class="mt-5 font-bold text-5xl text-gray-800 ">
                    <span class="font-bold text-2xl -mr-2">$</span>
                    39
                </span>
                <p class="mt-2 text-sm text-gray-500">All the basics for starting a new business</p>

                <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 ">
                            2 users
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 ">
                            Plan features
                        </span>
                    </li>

                    <li class="flex space-x-2">
                        <svg class="flex-shrink-0 h-5 w-5 text-blue-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5219 4.0949C11.7604 3.81436 12.181 3.78025 12.4617 4.01871C12.7422 4.25717 12.7763 4.6779 12.5378 4.95844L6.87116 11.6251C6.62896 11.91 6.1998 11.94 5.9203 11.6916L2.9203 9.02494C2.64511 8.78033 2.62032 8.35894 2.86493 8.08375C3.10955 7.80856 3.53092 7.78378 3.80611 8.02839L6.29667 10.2423L11.5219 4.0949Z"
                                fill="currentColor" />
                        </svg>
                        <span class="text-gray-800 ">
                            Product support
                        </span>
                    </li>
                </ul>

                <a
                    class="mt-5 inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 href="https://github.com/htmlstreamofficial/preline/tree/main/examples/html">
                    Sign up
                </a>
            </div>
            <!-- End Card --> --}}

        </div>
        <!-- End Grid -->

    </div>
</x-app-layout>

