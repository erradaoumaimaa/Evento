<x-layout>
    <x-dashboard.navbar color="white" text="black" />


    <div class="flex flex-col h-screen bg-gray-200">

        <div class="flex-1 flex flex-wrap">
            <x-dashboard.sidebar />


            <div class="flex-1 p-4 w-full md:w-1/2">



                <div class="mt-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">


                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-700">Name</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-700">Email</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-700">Archive</th>
                            <!-- Corrected column heading -->
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach($candidats as $candidat)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <!-- Removed unnecessary div and corrected class placement -->
                                        <div class="relative h-10 w-10">
                                            <img
                                                class="h-full w-full rounded-full object-cover object-center"
                                                src="{{ asset('storage/' . $candidat->user->image_url) }}"
                                                alt=""
                                            />
                                            <span
                                                class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                                        </div>
                                        <div class="text-sm">
                                            <div class="font-medium text-gray-700">{{ $candidat->user->name }}</div>
                                            <div class="text-green-700">{{ $candidat->title }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                              <span class="inline-flex items-center gap-1 rounded-full px-2 py-1 text-xs font-semibold text-black">
                                {{ $candidat->user->email }}
                              </span>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('candidat.delete', ['candidat' => $candidat->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">
                                            <svg class="text-red-600 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24"
                                                 height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>