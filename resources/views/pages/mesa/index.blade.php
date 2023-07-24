<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')


</head>

<body>
    @dd($mesas->comandas)
    <!-- component -->
    <div class="rounded-lg overflow-hidden shadow-lg bg-white min-h-64 lg:w-1/4 sm:w-1/2 md:w-1/3">
        <p class=" text-gray-600 mb-2 text-2xl font-thin px-4 pt-3 ">Mesas</p>
        <div class="px-2 ">
            <svg class="absolute z-50 m-1 text-blue-400" width="24" height="24" viewBox="0 0 24 24"
                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.71 14H15.5L20.49 19L19 20.49L14 15.5V14.71L13.73 14.43C12.59 15.41 11.11 16 9.5 16C5.90997 16 3 13.09 3 9.5C3 5.90997 5.90997 3 9.5 3C13.09 3 16 5.90997 16 9.5C16 11.11 15.41 12.59 14.43 13.73L14.71 14ZM5 9.5C5 11.99 7.01001 14 9.5 14C11.99 14 14 11.99 14 9.5C14 7.01001 11.99 5 9.5 5C7.01001 5 5 7.01001 5 9.5Z"
                    fill="black" fill-opacity="0.54" />
            </svg>
            <input type="text" class="pl-8 p-1 bg-gray-200 w-full rounded relative"
                placeholder="Search teams or members">
        </div>
        <table class="w-full ">
            <tr>
                {{-- cyan-500 --}}

                @foreach ($mesas as $mesa)
                    <td class="flex justify-between px-2 py-2 w-full items-center">
                        <p class="flex text-gray-700">

                            <span class="relative flex h-6 w-6 mx-2">
                                <span
                                    class=" {{ $mesa->status === 'ativo' ? 'animate-ping ' : ' ' }} absolute inline-flex h-full w-full rounded-full {{ $mesa->status === 'ativo' ? 'bg-green-400 ' : ' bg-gray-500' }} opacity-75"></span>
                                <span
                                    class="relative inline-flex rounded-full h-6 w-6 {{ $mesa->status === 'ativo' ? 'bg-green-400 ' : ' bg-gray-500' }}"></span>
                            </span>
                            Mesa N°{{ $mesa->id }}.
                        </p>
                        <a href="">
                            <button class="transition ease-in-out delay-150 bg-gradient-to-r from-cyan-500 to-blue-500 hover:-translate-y-1 hover:scale-110 hover:from-from-indigo-500 hover:via-purple-500 hover:to-pink-500 duration-300 px-2 py-1 text-white font-semibold rounded-md ...">
                                Ver
                              </button>
                        </a>
                    </td>
                @endforeach
        </table>
        <div class="bg-gray-300 flex flex-row-reverse px-2 py-3">



            <button class="py-2 px-4 rounded text-gray-600">Cancel</button>
        </div>
    </div>

    {{-- abrir pro lado mais sobre as mesas --}}

    {{-- <div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <!--
          Background backdrop, show/hide based on slide-over state.

          Entering: "ease-in-out duration-500"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-500"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 overflow-hidden">
          <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
              <!--
                Slide-over panel, show/hide based on slide-over state.

                Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                  From: "translate-x-full"
                  To: "translate-x-0"
                Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                  From: "translate-x-0"
                  To: "translate-x-full"
              -->
              <div class="pointer-events-auto relative w-screen max-w-md">
                <!--
                  Close button, show/hide based on slide-over state.

                  Entering: "ease-in-out duration-500"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "ease-in-out duration-500"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4">
                  <button type="button" class="rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                    <span class="sr-only">Close panel</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>

                <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl">
                  <div class="px-4 sm:px-6">
                    <h2 class="text-base font-semibold leading-6 text-gray-900" id="slide-over-title">Panel title</h2>
                  </div>
                  <div class="relative mt-6 flex-1 px-4 sm:px-6">
                    <p>Comandas ativas</p>
                    <p>Pedidos realizados</p>
                    <p>Pedidos entregues</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

</body>

</html>
