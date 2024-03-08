<x-dashboard.layout class="flex flex-col space-y-8">

    <section class="flex flex-col items-center my-8 py-8 px-32 bg-gray-50">
        @if($companies->first())
            <h1 class="text-2xl font-black p-4 border-4 border-dashed border-white text-black bg-jaune rounded-lg py-4 px-16 text-center z-[20] translate-y-[50%]">
                All Comapnies</h1>
            <div class="grid grid-cols-3 gap-8 flex-wrap w-full border-4 border-dashed border-jaune rounded-lg p-10 ">
                @foreach($companies as $company)
                    <!-- Card Component -->
                    <div class=" flex items-center justify-center dark:bg-white">

                        <!-- Company card -->
                        <div
                            class="relative w-full max-w-2xl my-2 flex flex-col items-start space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 px-4 py-8 border-2 border-dashed border-yellow-400 dark:border-yellow-400 shadow-lg rounded-lg">

                            <span
                                class="absolute text-xs font-medium top-0 left-0 rounded-br-lg rounded-tl-lg px-2 py-1 bg-primary-100  dark:text-black border-black-400 dark:border-yellow-400 border-b-2 border-r-2 border-dashed ">
                                {{ $company->industry }}
                            </span>

                            <div class="w-full flex justify-center sm:justify-start sm:w-auto">
                                <img class="object-cover w-20 h-20 mt-3 mr-3 rounded-full"
                                src="{{ $company->user->image_url ? asset('storage/' . $company->user->image_url ) : asset('images/company.jpg') }}">
                            </div>

                            <div class="w-full sm:w-auto flex flex-col items-center sm:items-start">

                                <p class="font-display mb-2 text-2xl font-semibold dark:text-green-700"
                                   itemprop="author">
                                    {{ $company->user->name }}
                                </p>

                                <div class="mb-4 md:text-lg text-black-400">
                                    <p>{{ $company->description }}</p>
                                </div>

                                <div class="flex gap-4">


                                    <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                        <svg class="text-purple-700 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        <span class="text-xs text-purple-700">Morocco</span>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Card Component -->
                @endforeach
            </div>
        @else
            <p>No companies available at the moment</p>
        @endif
    </section>
</x-dashboard.layout>
