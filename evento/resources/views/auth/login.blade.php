<x-layout class="">
    <div class="px-4 py-2 mx-2 flex flex-row justify-start ">
        <a href="{{url('/')}}" class=" text-2xl font-medium rounded-full text-green-700 hover:bg-yellow-500 hover:text-green-700 float-right">
            <svg class="m-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <g>
                    <path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z">
                    </path>
                </g>
            </svg>
        </a>
    </div>
    <main class="antialiased bg-gradient-to-br mt--4">
    <div class="container px-20 mx-2 mt--8">
        <div
            class="flex flex-col text-center md:text-left md:flex-row h-screen justify-evenly md:items-center"
        >
            <div class="flex flex-col w-full">
                <div>
                    <svg
                        class="w-20 h-20 mx-auto md:float-left fill-stroke text-green-800"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                        ></path>
                    </svg>
                </div>
                <h1 class="text-5xl text-green-800 font-bold">Welcome Back 👋</h1>
                <p class="w-5/12 mx-auto md:mx-0 text-gray-500">
                    Got Talent ? Find your dream
                    <div class="flex mt-8">
                        <img class="border-2 border-white rounded-full h-16 w-16 -mr-6" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                        <img class="border-2 border-white rounded-full h-16 w-16 -mr-6" src="https://randomuser.me/api/portraits/women/31.jpg" alt="">
                        <img class="border-2 border-white rounded-full h-16 w-16 -mr-6" src="https://randomuser.me/api/portraits/men/33.jpg" alt="">
                        <img class="border-2 border-white rounded-full h-16 w-16 -mr-6" src="https://randomuser.me/api/portraits/women/32.jpg" alt="">
                        <img class="border-2 border-white rounded-full h-16 w-16 -mr-6" src="https://randomuser.me/api/portraits/men/44.jpg" alt="">
                        <img class="border-2 border-white rounded-full h-16 w-16 -mr-6" src="https://randomuser.me/api/portraits/women/42.jpg" alt="">
                        <span class="flex items-center justify-center bg-white text-sm text-gray-800 font-semibold border-2 border-gray-200 rounded-full h-16 w-16">+999</span>
                    </div>
                </p>
            </div>
            <div class="w-full md:w-full lg:w-9/12 mx-auto md:mx-0 ">
                <div class="bg-white p-10 flex flex-col w-full shadow-xl rounded-xl antialiased bg-gradient-to-br from-green-500 to-white">
                    <h2 class="text-2xl font-bold text-white text-left mb-5">
                        Sigin
                    </h2>
                    <form action="{{ route('login') }}" method="POST" class="w-full">
                        @csrf

                        <div id="input" class="flex flex-col w-full my-5">
                            <label for="email" class="text-white mb-2"
                            >Email</label
                            >
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Please insert your email"
                                class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"
                            />
                        </div>
                        <div id="input" class="flex flex-col w-full my-5">
                            <label for="password" class="text-white mb-2"
                            >Password</label
                            >
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Please insert your password"
                                class="appearance-none border-2 border-gray-100 rounded-lg px-4 py-3 placeholder-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:shadow-lg"
                            />
                        </div>
                        <div id="button" class="flex flex-col w-full my-5">
                            <button
                                type="submit"
                                class="w-full py-4 bg-green-600 rounded-lg text-green-100"
                            >
                                <div class="flex flex-row items-center justify-center">
                                    <div class="mr-2">
                                        <svg
                                            class="w-6 h-6"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="font-bold">Sigin</div>
                                </div>
                            </button>
                            <div class="flex justify-evenly mt-5">
                                <a
                                    href="#"
                                    class="w-full text-center font-medium text-green-700"
                                >Recover password!</a
                                >
                                <a
                                    href="#"
                                    class="w-full text-center font-medium text-green-700"
                                >Singup!</a
                                >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </main>
</x-layout>
