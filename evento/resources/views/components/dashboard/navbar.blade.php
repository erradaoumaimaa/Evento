@props(['color', 'text'])

<nav class="py-2.5 dark:bg-{{$color ?? 'vert'}} text-white">
    <div class="flex items-center justify-between max-w-screen-xl mx-auto">
        <div class="flex items-center">

            <p class="text-2xl font-semibold text-{{ $text ?? '' }}"><span class="text-4xl font-semibold text-{{ $text ?? 'text-white' }}">H</span>ireme</p>
        </div>

        <div class="lg:hidden">
            <button data-collapse-toggle="mobile-menu" type="button"
                    class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        {{ $slot }}


        <!-- Profile dropdown -->
        <div class="relative ml-3">
            <div>
                <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img  class="object-cover w-8 h-8 rounded-full " src="{{ Auth::user()->image_url ? asset('storage/' . Auth::user()->image_url) : 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}" alt="User Image">
                </button>

            </div>
       
        </div>
    </div>

</nav>
