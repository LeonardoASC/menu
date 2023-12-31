 <!-- component -->
 <style>
     /* Compiled dark classes from Tailwind */
     .dark .dark\:divide-gray-700> :not([hidden])~ :not([hidden]) {
         border-color: rgba(55, 65, 81);
     }

     .dark .dark\:bg-gray-50 {
         background-color: rgba(249, 250, 251);
     }

     .dark .dark\:bg-gray-100 {
         background-color: rgba(243, 244, 246);
     }

     .dark .dark\:bg-gray-600 {
         background-color: rgba(75, 85, 99);
     }

     .dark .dark\:bg-gray-700 {
         background-color: rgba(55, 65, 81);
     }

     .dark .dark\:bg-gray-800 {
         background-color: rgba(31, 41, 55);
     }

     .dark .dark\:bg-gray-900 {
         background-color: rgba(17, 24, 39);
     }

     .dark .dark\:bg-red-700 {
         background-color: rgba(185, 28, 28);
     }

     .dark .dark\:bg-green-700 {
         background-color: rgba(4, 120, 87);
     }

     .dark .dark\:hover\:bg-gray-200:hover {
         background-color: rgba(229, 231, 235);
     }

     .dark .dark\:hover\:bg-gray-600:hover {
         background-color: rgba(75, 85, 99);
     }

     .dark .dark\:hover\:bg-gray-700:hover {
         background-color: rgba(55, 65, 81);
     }

     .dark .dark\:hover\:bg-gray-900:hover {
         background-color: rgba(17, 24, 39);
     }

     .dark .dark\:border-gray-100 {
         border-color: rgba(243, 244, 246);
     }

     .dark .dark\:border-gray-400 {
         border-color: rgba(156, 163, 175);
     }

     .dark .dark\:border-gray-500 {
         border-color: rgba(107, 114, 128);
     }

     .dark .dark\:border-gray-600 {
         border-color: rgba(75, 85, 99);
     }

     .dark .dark\:border-gray-700 {
         border-color: rgba(55, 65, 81);
     }

     .dark .dark\:border-gray-900 {
         border-color: rgba(17, 24, 39);
     }

     .dark .dark\:hover\:border-gray-800:hover {
         border-color: rgba(31, 41, 55);
     }

     .dark .dark\:text-white {
         color: rgba(255, 255, 255);
     }

     .dark .dark\:text-gray-50 {
         color: rgba(249, 250, 251);
     }

     .dark .dark\:text-gray-100 {
         color: rgba(243, 244, 246);
     }

     .dark .dark\:text-gray-200 {
         color: rgba(229, 231, 235);
     }

     .dark .dark\:text-gray-400 {
         color: rgba(156, 163, 175);
     }

     .dark .dark\:text-gray-500 {
         color: rgba(107, 114, 128);
     }

     .dark .dark\:text-gray-700 {
         color: rgba(55, 65, 81);
     }

     .dark .dark\:text-gray-800 {
         color: rgba(31, 41, 55);
     }

     .dark .dark\:text-red-100 {
         color: rgba(254, 226, 226);
     }

     .dark .dark\:text-green-100 {
         color: rgba(209, 250, 229);
     }

     .dark .dark\:text-blue-400 {
         color: rgba(96, 165, 250);
     }

     .dark .group:hover .dark\:group-hover\:text-gray-500 {
         color: rgba(107, 114, 128);
     }

     .dark .group:focus .dark\:group-focus\:text-gray-700 {
         color: rgba(55, 65, 81);
     }

     .dark .dark\:hover\:text-gray-100:hover {
         color: rgba(243, 244, 246);
     }

     .dark .dark\:hover\:text-blue-500:hover {
         color: rgba(59, 130, 246);
     }

     /* Custom style */
     .header-right {
         width: calc(100% - 3.5rem);
     }

     .sidebar:hover {
         width: 16rem;
     }

     @media only screen and (min-width: 768px) {
         .header-right {
             width: calc(100% - 16rem);
         }
     }
 </style>

 <!-- Header -->
 <div class="fixed w-full flex items-center justify-between h-14 text-white z-10 ">
     <div
         class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-gray-800 dark:bg-gray-800 border-none">
         <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden"
             src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
         <span class="hidden md:block">{{ auth()->user()->name }}</span>
     </div>
     <div class="flex justify-between items-center w-full h-14 bg-gray-800 dark:bg-gray-800 header-right">
         <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
             <button class="outline-none focus:outline-none bg-white">
                 <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                     <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                 </svg>
             </button>
             <input type="search" name="" id="" placeholder="Search"
                 class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
         </div>
         <ul class="flex items-center">
             <li>
                 <button aria-hidden="true" @click="toggleTheme"
                     class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-gray-200 hover:bg-gray-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none">
                     <svg x-show="isDark" width="24" height="24"
                         class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                     </svg>
                     <svg x-show="!isDark" width="24" height="24"
                         class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                     </svg>
                 </button>
             </li>
             <li>
                 <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
             </li>
             <li>
                 <a class="flex items-center mr-4 hover:text-gray-100" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                     <span class="inline-flex mr-1">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                             </path>
                         </svg>
                     </span>
                     Sair
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
             </li>
         </ul>
     </div>
 </div>
 <!-- ./Header -->
 <!-- Sidebar -->
 <div
     class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-gray-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
     <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
         <ul class="flex flex-col py-4 space-y-1">
             <li class="px-5 hidden md:block">
                 <div class="flex flex-row items-center h-8">
                     <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Principal</div>
                 </div>
             </li>
             <li>
                 <a href="{{ route('administrativa.index') }}"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                     <span class="inline-flex justify-center items-center ml-4">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                             </path>
                         </svg>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('pedido.index') }}"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                     <span class="inline-flex justify-center items-center ml-4">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="#ffffff"
                             viewBox="0 0 256 256">
                             <path
                                 d="M227.32,28.68a16,16,0,0,0-15.66-4.08l-.15,0L19.57,82.84a16,16,0,0,0-2.42,29.84l85.62,40.55,40.55,85.62A15.86,15.86,0,0,0,157.74,248q.69,0,1.38-.06a15.88,15.88,0,0,0,14-11.51l58.2-191.94c0-.05,0-.1,0-.15A16,16,0,0,0,227.32,28.68ZM157.83,231.85l-.05.14L118.42,148.9l47.24-47.25a8,8,0,0,0-11.31-11.31L107.1,137.58,24,98.22l.14,0L216,40Z">
                             </path>
                         </svg>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Pedidos/Entregas</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('honorario.index') }}"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                     <span class="inline-flex justify-center items-center ml-4">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                             </path>
                         </svg>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Honorários</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('mensagem') }}"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                     <span class="inline-flex justify-center items-center ml-4">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                             </path>
                         </svg>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate text-red-700">Mensagens</span>
                 </a>
             </li>
             <li>
                 <a href="{{ route('mesa.index') }}"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                     <span class="inline-flex justify-center items-center ml-4">
                         <svg xmlns="http://www.w3.org/2000/svg" version="1.0" class="w-5 h-5"
                             viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                             <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#ffffff"
                                 stroke="none">
                                 <path
                                     d="M2250 4794 c-395 -18 -677 -45 -990 -96 -211 -35 -240 -47 -240 -103 0 -29 40 -75 65 -75 9 0 80 11 158 24 755 130 1688 140 2482 25 519 -74 949 -213 1140 -367 108 -86 129 -164 71 -252 -223 -337 -1704 -580 -2986 -490 -781 55 -1439 221 -1695 428 -137 110 -137 204 0 315 78 63 267 154 430 208 72 23 139 50 149 60 24 23 25 73 1 99 -27 30 -70 25 -223 -26 -310 -103 -520 -240 -585 -382 -21 -44 -22 -62 -22 -267 l0 -220 28 -57 c90 -183 416 -350 899 -462 338 -78 778 -136 1143 -151 83 -3 174 -8 202 -11 l52 -5 3 -704 3 -704 22 -22 c29 -29 77 -29 106 0 l22 22 3 704 3 705 69 0 70 0 0 -972 c0 -535 -4 -978 -8 -984 -13 -20 -54 -36 -77 -30 -49 12 -55 29 -55 149 0 141 -10 181 -50 197 -24 10 -36 10 -60 0 -34 -14 -50 -56 -50 -131 l0 -45 -52 -13 c-218 -55 -438 -204 -508 -343 -87 -175 16 -321 291 -412 417 -138 1037 -73 1241 129 59 59 81 105 81 172 0 168 -244 377 -525 450 l-68 17 0 907 0 908 53 5 c28 3 115 8 192 11 163 7 421 29 585 50 193 25 474 76 497 91 48 30 34 116 -21 130 -14 3 -73 -3 -133 -15 -441 -83 -832 -115 -1398 -116 -533 0 -888 26 -1295 96 -625 106 -1051 285 -1110 465 -21 63 -10 68 55 23 306 -209 944 -360 1780 -421 94 -6 348 -12 565 -12 217 0 472 6 565 12 835 61 1473 212 1780 421 32 22 61 38 63 36 11 -11 -11 -77 -38 -113 -68 -95 -235 -186 -493 -271 -102 -34 -127 -54 -127 -101 0 -33 38 -70 71 -70 45 0 292 91 407 149 94 48 198 127 251 191 72 87 81 124 81 351 0 218 -11 263 -82 344 -238 270 -912 462 -1883 535 -141 11 -765 20 -905 14z m110 -3819 c36 -73 119 -125 203 -125 60 0 141 43 178 93 16 22 29 46 29 54 0 24 25 25 91 3 159 -54 321 -168 360 -254 20 -46 17 -60 -24 -103 -53 -57 -182 -107 -357 -140 -130 -24 -427 -24 -560 0 -227 41 -390 125 -390 201 0 89 166 224 360 292 36 13 70 23 77 23 6 1 21 -19 33 -44z" />
                             </g>
                         </svg>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Mesas</span>
                 </a>
             </li>
             <li>
                 @can('cadastrar produto')
                     <a href="{{ route('role.index') }}"
                         class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                         <span class="inline-flex justify-center items-center ml-4">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffff"
                                 viewBox="0 0 256 256">
                                 <path
                                     d="M108,112a4,4,0,0,1,4-4h32a4,4,0,0,1,0,8H112A4,4,0,0,1,108,112ZM228,72V200a12,12,0,0,1-12,12H40a12,12,0,0,1-12-12V72A12,12,0,0,1,40,60H84V48a20,20,0,0,1,20-20h48a20,20,0,0,1,20,20V60h44A12,12,0,0,1,228,72ZM92,60h72V48a12,12,0,0,0-12-12H104A12,12,0,0,0,92,48ZM36,72v44a188,188,0,0,0,92,24,188,188,0,0,0,92-24V72a4,4,0,0,0-4-4H40A4,4,0,0,0,36,72ZM220,200V125.1A196.06,196.06,0,0,1,128,148a196,196,0,0,1-92-22.9V200a4,4,0,0,0,4,4H216A4,4,0,0,0,220,200Z">
                                 </path>
                             </svg>
                         </span>
                         <span class="ml-2 text-sm tracking-wide truncate">Cargo</span>

                     </a>
                 @endcan
             </li>
             <li>
                 @can('cadastrar produto')
                     <a href="{{ route('usuario.index') }}"
                         class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                         <span class="inline-flex justify-center items-center ml-4">
                             <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="#ffffff"
                                 viewBox="0 0 256 256">
                                 <path
                                     d="M148,80a4,4,0,0,1,4-4h96a4,4,0,0,1,0,8H152A4,4,0,0,1,148,80Zm100,44H152a4,4,0,0,0,0,8h96a4,4,0,0,0,0-8Zm0,48H176a4,4,0,0,0,0,8h72a4,4,0,0,0,0-8ZM147.87,191a4,4,0,0,1-2.87,4.87,3.87,3.87,0,0,1-1,.13,4,4,0,0,1-3.87-3c-6.71-26.08-32-45-60.13-45s-53.41,18.92-60.13,45a4,4,0,1,1-7.74-2c5.92-23,24.57-41.14,47.52-48a44,44,0,1,1,40.7,0C123.3,149.86,142,168,147.87,191ZM80,140a36,36,0,1,0-36-36A36,36,0,0,0,80,140Z">
                                 </path>
                             </svg>
                         </span>
                         <span class="ml-2 text-sm tracking-wide truncate">Usuarios</span>

                     </a>
                 @endcan
             </li>
             <li>
                 @can('cadastrar produto')
                     <a href="{{ route('produto.index') }}"
                         class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                         <span class="inline-flex justify-center items-center ml-4">

                             <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512">
                                 <path
                                     d="M322 416c0 35.35-20.65 64-56 64H134c-35.35 0-56-28.65-56-64M336 336c17.67 0 32 17.91 32 40h0c0 22.09-14.33 40-32 40H64c-17.67 0-32-17.91-32-40h0c0-22.09 14.33-40 32-40"
                                     fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                     stroke-width="20" />
                                 <path
                                     d="M344 336H179.31a8 8 0 00-5.65 2.34l-26.83 26.83a4 4 0 01-5.66 0l-26.83-26.83a8 8 0 00-5.65-2.34H56a24 24 0 01-24-24h0a24 24 0 0124-24h288a24 24 0 0124 24h0a24 24 0 01-24 24zM64 276v-.22c0-55 45-83.78 100-83.78h72c55 0 100 29 100 84v-.22M241 112l7.44 63.97"
                                     fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                     stroke-width="20" />
                                 <path d="M256 480h139.31a32 32 0 0031.91-29.61L463 112" fill="none"
                                     stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                     stroke-width="20" />
                                 <path fill="none" stroke="currentColor" stroke-linecap="round"
                                     stroke-linejoin="round" stroke-width="20" d="M368 112l16-64 47-16" />
                                 <path fill="none" stroke="currentColor" stroke-linecap="round"
                                     stroke-miterlimit="10" stroke-width="20" d="M224 112h256" />
                             </svg>
                         </span>
                         <span class="ml-2 text-sm tracking-wide truncate">Produtos</span>

                     </a>
                 @endcan
             </li>

             <li>
                 @can('cadastrar produto')
                     <a href="{{ route('categoria.index') }}"
                         class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                         <span class="inline-flex justify-center items-center ml-4">

                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#ffffff"
                                 viewBox="0 0 256 256">
                                 <path
                                     d="M159.11,142.13a38,38,0,1,0-46.22,0A65.75,65.75,0,0,0,83.2,164.4a6,6,0,0,0,9.6,7.2,54,54,0,0,1,86.4,0,6,6,0,0,0,9.6-7.2A65.75,65.75,0,0,0,159.11,142.13ZM110,112a26,26,0,1,1,26,26A26,26,0,0,1,110,112Zm98-86H64A14,14,0,0,0,50,40V66H32a6,6,0,0,0,0,12H50v44H32a6,6,0,0,0,0,12H50v44H32a6,6,0,0,0,0,12H50v26a14,14,0,0,0,14,14H208a14,14,0,0,0,14-14V40A14,14,0,0,0,208,26Zm2,190a2,2,0,0,1-2,2H64a2,2,0,0,1-2-2V40a2,2,0,0,1,2-2H208a2,2,0,0,1,2,2Z">
                                 </path>
                             </svg>
                         </span>
                         <span class="ml-2 text-sm tracking-wide truncate">Categoria</span>

                     </a>
                 @endcan
             </li>
             <li class="px-5 hidden md:block">
                 <div class="flex flex-row items-center mt-5 h-8">
                     <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Configurações</div>
                 </div>
             </li>
             <li>
                 <a href="#"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                     <span class="inline-flex justify-center items-center ml-4">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                         </svg>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Perfil</span>
                 </a>
             </li>
             <li>
                 <a href="#"
                     class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-gray-500 dark:hover:border-gray-800 pr-6">
                     <span class="inline-flex justify-center items-center ml-4">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                             </path>
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                         </svg>
                     </span>
                     <span class="ml-2 text-sm tracking-wide truncate">Configurações</span>
                 </a>
             </li>
         </ul>
         <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">DayerMenu @2023</p>
     </div>
 </div>
 <!-- ./Sidebar -->
 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
 <script>
     const setup = () => {
         const getTheme = () => {
             if (window.localStorage.getItem('dark')) {
                 return JSON.parse(window.localStorage.getItem('dark'))
             }
             return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
         }

         const setTheme = (value) => {
             window.localStorage.setItem('dark', value)
         }

         return {
             loading: true,
             isDark: getTheme(),
             toggleTheme() {
                 this.isDark = !this.isDark
                 setTheme(this.isDark)
             },
         }
     }
 </script>
