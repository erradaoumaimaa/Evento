<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>HireMe</title>

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

            <!-- Styles -->
            <script src="https://cdn.tailwindcss.com"></script>

            <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            colors: {
                                // vert: '#008037',
                                // oldvert:'#007F5F',
                                // jaune: '#fde047',
                                // orange: '#ffb700'
                                // purple: '#251048',
                                // red: '#d2142c',
                                // pink: '#e826a0',
                                // yellow: '#f5e10a',
                                // green:'#19a50e'
                            }
                        }
                    }
                }
            </script>

        </head>

        <body>
            <nav class="py-2.5 " style="background-color:#251048 ; color: white;">
                <div class="flex items-center justify-between max-w-screen-xl mx-auto">
                    <div class="flex items-center">

                        <p class="text-2xl font-semibold"><span class="text-4xl font-semibold text-purple-600" style="color:#e826a0">E</span>vento</p>
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

                    <div class="hidden lg:flex items-center space-x-4">
                        <!-- Auth Links -->
                    <div class="flex items-center space-x-5 hidden md:flex">
                        <!-- Register -->
                        <a href="{{route('register')}}"
                           class="flex text-white-600 hover:text-yellow-300 cursor-pointer transition-colors duration-200">
                            <svg
                                class="fill-current h-5 w-5 mr-2 mt-0.5"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                            </svg>
                            Register
                        </a>

                        <!-- Login -->
                        <a href="#"
                        class="flex text-white-600 hover:text-yellow-500 cursor-pointer transition-colors duration-300" >
                         <svg
                             class="fill-current h-5 w-5 mr-2 mt-0.5"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1"
                             width="24"
                             height="24"
                             viewBox="0 0 24 24">
                             <path
                                 d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                         </svg>

                         Login
                     </a>

                    </div>




                      </div>
                    </div>
                </div>

            </nav>

 <!-- welcome section -->
	<section class="bg-cover bg-center py-32 w-full" style="background-image: url('{{ asset('images/evento.jpg') }}');">
		<div class="container mx-auto text-left text-white">
			<div class="flex items-center">
				<div class="w-1/2">
					<h1 class=" text-5xl font-bold mb-6"> <svg class="w-7 h-7" style="color: #e826a0"
                        xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd"/></svg>THE BIGGEST <span style="color:#e826a0">EVENT</span> BOOKING PLATFFORM </h1>
					<p class="text-xl mb-12">Evento creating Moments to Remember </p>
                    
                 
					<a href="{{url('/')}}" class="text-white font-semibold py-4 px-12 rounded-full mt-16" style="background-color: #e826a0">Explore Now 🤩!</a>
                  
				</div>
				<div class="w-1/2 pl-16">
					<img src="{{ asset('images/eventoside.jpg') }}" class="h-64 w-full object-cover rounded-xl" alt="Layout Image">
      </div>
				</div>
			</div>
	</section>
    <div class="  h-screen" >
        <div class="container mx-auto py-16 dark:text-white">
            <div class="text-center">
                <h2 class="font-bold text-2xl md:text-4xl my-4" style = "color: #251048">What is included in the <span style="color : #e826a0">EVENTO </span> Service?</h2>
                <div class="max-w-2xl md:max-w-4xl mx-auto dark:text-gray-900">
                    <p>
                        Our  Service encompasses a comprehensive analysis with over 50 modules, examining more than
                        200 data points. We offer 5 distinct functionalities and support 4 different file formats.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 mx-auto max-w-xl md:max-w-2xl gap-4 my-4">
                <div class="p-4 border flex flex-col items-center rounded max-w-sm "style = "background-color: #251048">
                    <div class="text-4xl font-bold">150<span style = "color:#f5e10a">+</span></div>
                    <div class="text-300 text-uppercase">Features Analyzed</div>
                </div>
                <div class="p-4 border flex flex-col items-center rounded max-w-sm "style = "background-color: #251048">
                    <div class="text-4xl font-bold">60<span style="color:#d2142c">+</span></div>
                    <div class="text-300 text-uppercase">Modules</div>
                </div>
                <div class="p-4 border flex flex-col items-center rounded max-w-sm" style = "background-color: #251048">
                    <div class="text-4xl font-bold">5<span style="color : #e826a0">+</span></div>
                    <div class="text-300 text-uppercase">Functionalities</div>
                </div>
                <div class="p-4 border flex flex-col items-center rounded max-w-sm "style = "background-color: #251048">
                    <div class="text-4xl font-bold">4<span style ="color:#19a50e">+</span></div>
                    <div class="text-300 text-uppercase">File Formats Supported</div>
                </div>
            </div>
        </div>
    </div>

