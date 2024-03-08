<header class="w-full">
    <!-- Navbar -->
    <nav
        class="flex justify-between items-center py-4 backdrop-blur-md shadow-md top-0 left-0 right-0 z-10 px-8 md:m-8 bg-vert rounded-lg">
        <!-- Logo Container -->
        <div class="flex items-center">
            <!-- Logo -->
            <a class="cursor-pointer">
                <h3 class="text-4xl font-black text-white">
                    HireMe
                </h3>
            </a>
        </div>

        <form action="" method="GET" class="flex">
            <input type="text" name="" id="" class="py-2 px-4 rounded-l">
            <button type="submit" class="bg-gray-200 w-8 px-2 rounded-r">
                <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M3.624,15a8.03,8.03,0,0,0,10.619.659l5.318,5.318a1,1,0,0,0,1.414-1.414l-5.318-5.318A8.04,8.04,0,0,0,3.624,3.624,8.042,8.042,0,0,0,3.624,15Zm1.414-9.96a6.043,6.043,0,1,1-1.77,4.274A6,6,0,0,1,5.038,5.038ZM4.622,9.311a1,1,0,0,1,2,0A2.692,2.692,0,0,0,9.311,12a1,1,0,0,1,0,2A4.7,4.7,0,0,1,4.622,9.311Z"></path>
                    </g>
                </svg>
            </button>
        </form>

        <div id="profile" class="w-16 relative bg-[url('{{ asset('storage/' . auth()->user()->image_url) }}')] bg-cover bg-no-repeat rounded-full w-16 h-16 border-2 border-white">

            <div id="profile-menu" class="absolute bottom-0 right-0 translate-y-[90%] bg-gray-300 p-2 rounded-lg w-32 space-y-2 hidden">
                <a href="{{ route(RoleHelper::getRole()) }}"
                   class="flex text-gray-600 cursor-pointer transition-colors duration-300 text-black text-sm">

                    Dashboard
                </a>

                <a href="{{ route('logout') }}"
                   class="flex text-gray-600 cursor-pointer transition-colors duration-300 text-black text-sm">

                    Logout
                </a>
            </div>
        </div>

        <!-- Hamberger Menu -->
        <button
            class="w-10 h-10 md:hidden justify-self-end rounded-full hover:bg-gray-100">
            <svg
                class="mx-auto"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                version="1.1"
                width="24"
                height="24"
                viewBox="0 0 24 24">
                <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
            </svg>
        </button>
    </nav>

    @push('scripts')
        <script src="/js/app.js"></script>
    @endpush
</header>
