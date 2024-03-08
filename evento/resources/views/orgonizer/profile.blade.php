<x-dashboard.layout class="m-10">

    <!-- QUICK INFO -->
    <div class="w-[22%] space-y-2">
        <h1 class="text-2xl text-center p-2 bg-vert text-white rounded-lg">Info</h1>

        <div class="border-4 border-black rounded-lg p-6 flex flex-col items-center gap-4">
            <img src="{{ asset('storage/' . auth()->user()->image_url) }}" alt="" class="w-full rounded-lg">

            <x-dashboard.profile-info name="name" />
            <x-dashboard.profile-info name="email" />
        </div>
    </div>

    <!-- CV -->
    <div class="w-[60%] space-y-2">
        <h1 class="text-2xl text-center p-2 bg-vert text-white rounded-lg">Curricilum Vitae</h1>

        <div class="border-4 border-black rounded-lg p-4">
            @if($cv ?? false)
                <div class="container mx-auto py-10 px-5">
                    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-4 sm:p-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center justify-between gap-4">
                                    <img src="{{ asset('storage/' . $picture) }}" alt="" class="w-16 rounded-full">
                                    <div>
                                        <h2 class="text-2xl font-semibold">{{ $name }}</h2>
                                        <p class="text-sm text-gray-600">{{ $title }}</p>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Email: {{ $email }}</p>
                                    <p class="text-sm text-gray-600">Location: {{ $location }}</p>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Summary</h3>
                                <p class="text-sm leading-relaxed">{{ $summary }}</p>
                            </div>

                            <x-dashboard.cv-section name="experience">
                                @foreach($experiences as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </x-dashboard.cv-section>

                            <x-dashboard.cv-section name="education">
                                @foreach($education as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </x-dashboard.cv-section>

                            <x-dashboard.cv-section name="hard_skills">
                                @foreach($hard_skills as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </x-dashboard.cv-section>

                            <x-dashboard.cv-section name="soft_skills">
                                @foreach($soft_skills as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </x-dashboard.cv-section>

                            <x-dashboard.cv-section name="languages">
                                @foreach($languages as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </x-dashboard.cv-section>

                        </div>
                    </div>
                </div>
            @else
                <p class="text-center">Nothing here yet.</p>
            @endif
        </div>
    </div>

    <!-- ACTIONS MENU -->
    <div class="w-[7.5%] space-y-2">
        <h1 class="text-2xl text-center p-2 bg-vert text-white rounded-lg">Actions</h1>

        <div class="border-4 border-black border-dashed rounded-xl p-4 flex flex-col justify-center space-y-4">

            <!-- EDIT ACTIONS -->
            @if($cv ?? false)
                <a href="{{ route('cv.print') }}" target="_blank" rel="noopener noreferrer" class="w-12 mx-auto text-center transition-all hover:scale-[120%]">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V11C20.6569 11 22 12.3431 22 14V18C22 19.6569 20.6569 21 19 21H5C3.34314 21 2 19.6569 2 18V14C2 12.3431 3.34315 11 5 11V5ZM5 13C4.44772 13 4 13.4477 4 14V18C4 18.5523 4.44772 19 5 19H19C19.5523 19 20 18.5523 20 18V14C20 13.4477 19.5523 13 19 13V15C19 15.5523 18.5523 16 18 16H6C5.44772 16 5 15.5523 5 15V13ZM7 6V12V14H17V12V6H7ZM9 9C9 8.44772 9.44772 8 10 8H14C14.5523 8 15 8.44772 15 9C15 9.55228 14.5523 10 14 10H10C9.44772 10 9 9.55228 9 9ZM9 12C9 11.4477 9.44772 11 10 11H14C14.5523 11 15 11.4477 15 12C15 12.5523 14.5523 13 14 13H10C9.44772 13 9 12.5523 9 12Z" fill="#000000"></path>
                        </g>
                    </svg>
                </a>

                <a href="{{ route('cv.edit') }}" class="w-12 mx-auto text-center transition-all hover:scale-[120%]">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C12 20.4477 12.4477 20 13 20H21C21.5523 20 22 20.4477 22 21C22 21.5523 21.5523 22 21 22H13C12.4477 22 12 21.5523 12 21Z" fill="#323232"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7736 8.09994C22.3834 6.48381 22.315 4.36152 21.113 3.06183C20.5268 2.4281 19.6926 2.0233 18.7477 2.00098C17.7993 1.97858 16.8167 2.34127 15.91 3.09985C15.8868 3.11925 15.8645 3.13969 15.8432 3.16111L2.87446 16.1816C2.31443 16.7438 2 17.5051 2 18.2987V19.9922C2 21.0937 2.89197 22 4.00383 22H5.68265C6.48037 22 7.24524 21.6823 7.80819 21.1171L20.7736 8.09994ZM17.2071 5.79295C16.8166 5.40243 16.1834 5.40243 15.7929 5.79295C15.4024 6.18348 15.4024 6.81664 15.7929 7.20717L16.7929 8.20717C17.1834 8.59769 17.8166 8.59769 18.2071 8.20717C18.5976 7.81664 18.5976 7.18348 18.2071 6.79295L17.2071 5.79295Z" fill="#323232"></path>
                        </g>
                    </svg>
                </a>
                <form action="{{ route('cv.delete') }}" method="POST" class="w-12 mx-auto transition-all hover:scale-[120%]">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="w-full text-center">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M12.0004 9.5L17.0004 14.5M17.0004 9.5L12.0004 14.5M4.50823 13.9546L7.43966 17.7546C7.79218 18.2115 7.96843 18.44 8.18975 18.6047C8.38579 18.7505 8.6069 18.8592 8.84212 18.9253C9.10766 19 9.39623 19 9.97336 19H17.8004C18.9205 19 19.4806 19 19.9084 18.782C20.2847 18.5903 20.5907 18.2843 20.7824 17.908C21.0004 17.4802 21.0004 16.9201 21.0004 15.8V8.2C21.0004 7.0799 21.0004 6.51984 20.7824 6.09202C20.5907 5.71569 20.2847 5.40973 19.9084 5.21799C19.4806 5 18.9205 5 17.8004 5H9.97336C9.39623 5 9.10766 5 8.84212 5.07467C8.6069 5.14081 8.38579 5.2495 8.18975 5.39534C7.96843 5.55998 7.79218 5.78846 7.43966 6.24543L4.50823 10.0454C3.96863 10.7449 3.69883 11.0947 3.59505 11.4804C3.50347 11.8207 3.50347 12.1793 3.59505 12.5196C3.69883 12.9053 3.96863 13.2551 4.50823 13.9546Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </form>

            <!-- ADD ACTIONS -->
            @else
                <a href="{{ route('cv.create') }}" class="w-12 mx-auto text-center transition-all hover:scale-[120%]">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8V11H16C16.5523 11 17 11.4477 17 12C17 12.5523 16.5523 13 16 13H13V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V13H8C7.44771 13 7 12.5523 7 12C7 11.4477 7.44772 11 8 11H11V8Z"
                                fill="#0F0F0F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                                  fill="#0F0F0F"></path>
                        </g>
                    </svg>
                </a>
            @endif
        </div>
    </div>
</x-dashboard.layout>
