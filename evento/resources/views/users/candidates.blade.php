<x-dashboard.layoutCompany class="flex flex-col space-y-8">

    <section class="flex flex-col mx-8">
        @foreach($jobs as $job)
            <div class="flex items-start my-8 py-8 px-32 bg-gray-50 space-y-2">

                <div class="transition-all duration-150 flex w-full h-fit px-4 py-6 md:w-1/2 lg:w-1/3">
                    <h1 class="bg-orange py-2 rounded-l-lg text-white font-black text-4xl flex justify-center items-center"><span class="inline-block rotate-[-90deg]">Job</span></h1>
                    <div class="flex flex-col items-stretch min-h-full pb-4 transition-all duration-150 bg-white rounded-r-lg shadow-lg hover:shadow-2xl">
                        <div class="md:flex-shrink-0">
                           <img  src="{{ Auth::user()->image_url ? asset('storage/' . Auth::user()->image_url) : 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}" alt="User Image"

                             />
                        </div>

                        <div class="flex items-center justify-between px-4 py-2 overflow-hidden">
                            <div class="flex items-center justify-between px-1 py-2 overflow-hidden">
                                <svg class="text-green-700 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="12" cy="12" r="9" />
                                    <line x1="12" y1="3" x2="12" y2="7" />
                                    <line x1="12" y1="21" x2="12" y2="18" />
                                    <line x1="3" y1="12" x2="7" y2="12" />
                                    <line x1="21" y1="12" x2="18" y2="12" />
                                    <line x1="12" y1="12" x2="12" y2="12.01" />
                                </svg>
                                <span class="text-green-700 rounded-full font-bold">{{ $job->skills }}</span>
                            </div>

                            <div class="flex flex-row items-center">
                                <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                    <svg class="text-yellow-500 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <span class="text-yellow-500">1.5k</span>
                                </div>

                                <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                    <svg class="text-purple-700 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-purple-700">{{ $job->contract }}</span>
                                </div>

                                <div class="text-xs font-medium text-gray-500 flex flex-row items-center mr-2">
                                    <svg class="text-green-700 w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span class="text-xs text-green-700">{{ $job->location }}</span>
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-300" />
                        <div class="flex flex-wrap items-center flex-1 px-4 py-1 text-center mx-auto">
                            <a href="#">
                                <h2 class="text-2xl font-bold tracking-normal text-black-800">{{ $job->title }}</h2>
                            </a>
                        </div>
                        <hr class="border-gray-300" />
                        <p class="flex flex-row flex-wrap w-full px-4 py-2 overflow-hidden text-sm text-justify text-black-700">
                            {{ $job->description }}
                        </p>
                        <hr class="border-gray-300" />
                    </div>
                </div>

                @if($job->applications->first())
                <div class="grid grid-cols-3 gap-8 flex-wrap w-full rounded-lg p-10 border-4 border-dashed border-orange">
                @foreach($job->applications as $application)

                        <!-- Card Component -->
                        <div class="w-full">
                            <div class="relative mt-16 mb-32 max-w-lg mx-auto mt-24">
                                <div class="rounded overflow-hidden shadow-md bg-white w-full">
                                    <div class="absolute -mt-20 w-full flex justify-center">
                                        <div class="h-32 w-32">
                                            <img src="{{ asset('storage/' . $application->candidat->user->image_url) }}" class="rounded-full object-cover h-full w-full shadow-md" />                                        </div>
                                    </div>
                                    <div class="px-6 mt-16">
                                        <h1 class="font-bold text-3xl text-center mb-1">{{ $application->candidat->user->name }}</h1>
                                        <p class="text-green-700 text-sm text-center">{{ $application->candidat->current_position }} </p>
                                        <p class="text-center text-gray-600 text-base pt-3 font-normal">
                                            {{ $application->candidat->about_section }}

                                        </p>
                                        <div class="w-full flex justify-center pt-5 pb-5">
                                            <div class="flex flex-col items-center mx-5">
                                                <svg class="text-green-600 w-7 h-7 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                </svg>
                                                <span>{{ $application->candidat->contact_info }}</span>
                                            </div>
                                            <div class="flex flex-col items-center mx-5">
                                                <svg class="text-red-600 w-7 h-7 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                                </svg>
                                                <span>{{ $application->candidat->user->email }}</span>
                                            </div>
                                            @if($application->candidat->cv)
                                            <a href="{{ 'cv/' . $application->candidat->id . '/download' }}" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center mx-5 ">
                                                <svg class="text-purple-600 w-7 h-7 mr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                    <line x1="12" y1="11" x2="12" y2="17" />
                                                    <polyline points="9 14 12 17 15 14" />
                                                </svg>
                                                <span>CV</span>
                                            </a>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
                @else
                    <h1 class="text-center w-full h-full flex items-center justify-center text-3xl font-black border-4 border-dashed border-orange"><span>No Applicants at the moment</span></h1>
                @endif
            </div>
            </div>
        @endforeach
    </section>
</x-dashboard.layoutCompany>
