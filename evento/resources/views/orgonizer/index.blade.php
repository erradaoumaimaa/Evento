<x-dashboard.layout class="flex flex-col space-y-8">

    <div class="py-24 bg-[url('{{ asset('images/hero.png') }}')] bg-contain bg-no-repeat bg-center">
        <div class="dark:bg-transparent">
            <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
                <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                    <h1
                        class="text-4xl sm:text-2xl md:text-3xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-black font-black leading-10 bg-white py-8">
                        Discover more companies are using  <span class="text-yellow-800 dark:text-yellow-300">Hireme</span> to make hiring easy !

                    </h1>

                </div>
                <div class="flex w-11/12 md:w-8/12 xl:w-6/12">
                    <form action="" method="GET" class="flex rounded-md w-full">
                        <input type="text" name="search"
                               class="w-full p-3 rounded-md rounded-r-none border-2 placeholder-current dark:text-gray-700 dark:border-jaune"
                               placeholder="Enter a job title, skills, contract type, location " />
                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 bg-jaune text-black text-lg font-semibold py-3 px-6 rounded-r-md">
                            <span>Find</span>
                            <svg class="text-whie-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                 viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                 xml:space="preserve">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="wrapper translate-y-[50%]">--}}
{{--        <div class="marquee">--}}
{{--            <p>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat, ante eu bibendum tincidunt, sem lacus vehicula augue, ut suscipit.--}}
{{--            </p>--}}
{{--            <p>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat, ante eu bibendum tincidunt, sem lacus vehicula augue, ut suscipit.--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}


    <section class="flex flex-col items-center my-8 py-8 px-32 bg-gray-50">
        @if($jobs->first())
            <h1 class="text-2xl font-black p-4 border-4 border-dashed border-white text-black bg-jaune rounded-lg py-4 px-16 text-center z-[20] translate-y-[50%]">{{ request('search') ? 'Search Results' : 'Featured Jobs' }}</h1>
        <div class="flex flex-row flex-wrap w-full border-4 border-dashed border-jaune rounded-lg p-10 ">
            @foreach($jobs as $job)
                <!-- Card Component -->
                <div
                    class="transition-all duration-150 flex w-full px-4 py-6 md:w-1/2 lg:w-1/3"
                >
                    <div
                        class="w-full flex flex-col items-stretch min-h-full pb-4 mb-6 transition-all duration-150 bg-white rounded-lg shadow-lg hover:shadow-2xl rounded-lg"
                    >
                        <div
                            class="md:flex-shrink-0 md:h-56 bg-[url('{{ asset('images/hiring.png') }}')] bg-cover bg-no-repeat bg-center rounded-t-lg">
                        </div>

                        <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                            <div class="flex items-center justify-between px-1 py-2 overflow-hidden">
                                <svg class="text-green-700 w-4 h-4 mr-1"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                    <circle cx="12" cy="12" r="9"/>
                                    <line x1="12" y1="3" x2="12" y2="7"/>
                                    <line x1="12" y1="21" x2="12" y2="18"/>
                                    <line x1="3" y1="12" x2="7" y2="12"/>
                                    <line x1="21" y1="12" x2="18" y2="12"/>
                                    <line x1="12" y1="12" x2="12" y2="12.01"/>
                                </svg>
                                <span class="text-green-700 rounded-full font-bold">Full-Time</span>
                            </div>

                            <div class="flex flex-row items-center">

                                <!-- Code SVG -->


                                <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                    <svg class="text-yellow-500 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    <span class="text-yellow-500">1.5K</span>
                                </div>

                                <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                    <svg class="text-purple-700 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="text-purple-700">{{ $job->contract }}</span>
                                </div>

                                <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                    <svg class="text-green-700 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span class="text-xs text-green-700">{{ $job->location }}</span>
                                </div>


                            </div>
                        </div>

                        <hr class="border-gray-300"/>
                        <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                            <a>
                                <h2 class="text-2xl font-bold tracking-normal text-black-800">
                                    {{ $job->title }}
                                </h2>
                            </a>
                        </div>
                        <hr class="border-gray-300"/>
                        <p
                            class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-black-700"
                        >
                            {{ $job->description }}
                        </p>
                        <hr class="border-gray-300"/>
                        <section class="px-4 py-2 mt-2">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center flex-1">
                                    <img
                                        class="object-cover h-10 rounded-full"
                                        src="{{ $job->company->user->image_url ? asset('storage/' . $job->company->user->image_url) : 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}"
                                        alt="Avatar"
                                    />
                                    <div class="flex flex-col mx-2">
                                        <a href="" class="font-semibold text-black-700 ">
                                            {{ $job->company->user->name }}
                                        </a>
                                        <p class=" text-gray-700 ">in <span class="text-xs text-green-700"> {{ $job->company->industry }}</span></p>
                                    </div>
                                </div>
                                <form action="{{ route('application.store', ['job' => $job->id]) }}" method="POST">
                                    @csrf

                                    <button
                                        type="submit"
                                        class="bg-green-700 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">
                                        Apply Now
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                             stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- Card Component -->
            @endforeach
        </div>
        <a href="{{ route('candidat.jobs') }}" class="mx-auto px-4 py-2 mt-8 bg-vert text-white rounded-lg">View more</a>
        @else
            <p>No jobs available at the moment</p>
        @endif
    </section>


    <div class="2xl:mx-auto 2xl:container mx-4 py-16">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="w-full relative flex items-center justify-center bg-[url('{{ asset('images/news.jpg') }}')] bg-cover bg-no-repeat bg-center">
{{--            <img src="{{ asset('images/news.jpg') }}" alt="dining" class="w-full h-full absolute z-0 hidden xl:block" />--}}

            <div class="bg-green-800 bg-opacity-[98%] md:my-16 lg:py-16 py-10 w-full md:mx-24 md:px-12 px-4 flex flex-col items-center justify-center relative z-40">
                <h1 class="text-4xl font-semibold leading-9 text-white text-center">Subscribe to our newsletter!</h1>
                <p class="text-base leading-normal text-center text-white mt-6">
                    Subscribe to stay in the loop.  We'll keep you updated with the best new jobs.
                </p>
                <form action="{{ route('candidat.newsletter') }}" method="POST" class="sm:border border-white flex-col sm:flex-row flex items-center lg:w-5/12 w-full mt-12 space-y-4 sm:space-y-0">
                    @csrf

                    <input name="email" class="border border-white sm:border-transparent text-base w-full font-medium leading-none text-white p-4 focus:outline-none bg-transparent placeholder-white" placeholder="Email Address" />
                    <button type="submit" class="focus:outline-none focus:ring-offset-2 focus:ring border border-white sm:border-transparent w-full sm:w-auto bg-white py-4 px-6 hover:bg-opacity-75">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</x-dashboard.layout>
