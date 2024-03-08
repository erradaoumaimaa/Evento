<!-- nav -->
<div class="py-2.5 dark:bg-{{$color ?? 'vert'}} text-white" id="sideNav">
    <nav lass="py-2.5 dark:bg-{{$color ?? 'vert'}} text-white">
        <a class="block text-black-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-green-500 hover:to-yellow-500 hover:text-white"
           href="{{ route('admin') }}">
            <i class="fas fa-home mr-2"></i>Dashboard
        </a>
        <a class="block text-black-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-green-500 hover:to-yellow-500 hover:text-white"
           href="{{ route('admin.companies') }}">
            <i class="fas fa-file-alt mr-2"></i>Companies
        </a>
        <a class="block text-black-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-green-500 hover:to-yellow-500 hover:text-white"
           href="{{ route('admin.candidats') }}">
            <i class="fas fa-users mr-2"></i>Applicants
        </a>
        <a class="block text-black-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-green-500 hover:to-yellow-500 hover:text-white"
           href="{{ route('admin.jobs') }}">
            <i class="fas fa-users mr-2"></i>Jobs
        </a>


    </nav>

    <!-- Ítem de Cerrar Sesión -->
    <a class="block text-black-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-green-500 hover:to-yellow-500 hover:text-white mt-auto"
       href="{{ route('logout') }}">
        <i class="fas fa-sign-out-alt mr-2"></i>Log out
    </a>


</div>
