<x-layout>
    <div class="flex flex-col h-screen bg-gray-200">

        <x-dashboard.navbar color="white" text="black" />


        <div class="flex-1 flex flex-wrap">
            <x-dashboard.sidebar />

            <div class="flex-1 p-4 w-full md:w-1/2">

                <div class="mt-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                    <!-- Primer contenedor -->
                    <!-- statistics -->

                    <!-- component -->
                    <!-- This is an example component -->
                    <div class="py-5">
                        <main class="h-full overflow-y-auto">
                            <div class="container  mx-auto grid">


                                <!-- Cards -->
                                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                                    <!-- Card -->
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                        <div
                                            class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                                Applicants
                                            </p>
                                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                                {{ $candidats }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                        <div
                                            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                                            <svg class="text-gray-100 w-5 h-5"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                            </svg>

                                        </div>
                                        <div>
                                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                                Companies
                                            </p>
                                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                                {{ $companies }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                        <div
                                            class="p-3 mr-4 text-puple-500 bg-purple-100 rounded-full dark:text-teal-100 dark:bg-purple-500">
                                            <svg class="text-gray-100 w-5 h-5"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                 stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"/>
                                                <circle cx="12" cy="9" r="6"/>
                                                <polyline points="9 14.2 9 21 12 19 15 21 15 14.2"
                                                          transform="rotate(-30 12 9)"/>
                                                <polyline points="9 14.2 9 21 12 19 15 21 15 14.2"
                                                          transform="rotate(30 12 9)"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                                Offers
                                            </p>
                                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                                {{ $jobs }}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

                                        <div
                                            class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                                            <svg class="text-gray-100 w-5 h-5"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>

                                        </div>
                                        <div>
                                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                                Applications
                                            </p>
                                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                                {{ $applications }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
