<x-dashboard.layout class="flex flex-col space-y-8">


    <section class="flex flex-col items-center my-8 py-8 px-32 bg-gray-50">
        @if($jobs->first())
            <h1 class="text-2xl font-black p-4 border-4 border-dashed border-white text-black bg-jaune rounded-lg py-4 px-16 text-center z-[20] translate-y-[50%]">All Jobs</h1>
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
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"/>
                                        <circle cx="12" cy="12" r="9"/>
                                        <line x1="12" y1="3" x2="12" y2="7"/>
                                        <line x1="12" y1="21" x2="12" y2="18"/>
                                        <line x1="3" y1="12" x2="7" y2="12"/>
                                        <line x1="21" y1="12" x2="18" y2="12"/>
                                        <line x1="12" y1="12" x2="12" y2="12.01"/>
                                    </svg>
                                    <span class="text-green-700 rounded-full font-bold">{{ $job->skills }}</span>
                                </div>

                                <div class="flex flex-row items-center">

                                    <!-- Code SVG -->


                                    <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                        <svg class="text-yellow-500 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             width="24"
                                             height="24"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        <span class="text-yellow-500">1.5 K</span>
                                    </div>

                                    <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                        <svg class="text-purple-700 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             width="24"
                                             height="24"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <span class="text-purple-700">{{ $job->contract }}</span>
                                    </div>

                                    <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                        <svg class="text-green-700 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                             width="24"
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
                                <a >
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
                                            <p class=" text-gray-700 ">in <span
                                                    class="text-xs text-green-700"> {{ $job->company->industry }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    @if(! $job->applications->pluck('candidat_id')->filter(fn($value) => $value == $candidat->id)->first())
                                        <form action="{{ route('application.store', ['job' => $job->id]) }}"
                                              method="POST">
                                            @csrf

                                            <button
                                                type="submit"
                                                class="bg-green-700 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">
                                                Apply Now
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                     viewBox="0 0 24 24"
                                                     stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                                </svg>
                                                </svg>
                                            </button>
                                        </form>
                                    @else
                                        <p class="text-vert font-medium">Already applied</p>
                                    @endif
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- Card Component -->
                @endforeach
            </div>
        @else
            <p>No jobs available at the moment</p>
        @endif
    </section>
</x-dashboard.layout>
