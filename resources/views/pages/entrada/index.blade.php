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
    <x-caminho>
        <div class="bg-blueGray-300">
            <div class="py-12">
                <div class="my-12 container mx-auto px-4">
                    <div class="mb-12 flex flex-wrap -mx-4 justify-center">
                        <div class="px-4 relative w-full lg:w-8/12 text-center">
                            <h6 class="mb-2 text-lg font-bold uppercase text-blueGray-200">Let's keep in contact</h6>
                            <h2 class="text-4xl font-bold mt-0 mb-1 text-white">Subscribe to our Newsletter</h2>
                            <p class="mt-2 mb-4 text-xl leading-relaxed text-white opacity-75">Join our newsletter and
                                get news in your inbox every week! We hate spam too, so no worries about this.</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4">
                        <div class="mx-auto px-4 relative w-full lg:w-7/12 w-10/12">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full shadow-lg rounded-lg">
                                <div class="px-5 py-3 flex-auto">
                                    <form  class="my-0">
                                        @csrf
                                        <div class="flex flex-wrap -mx-4">
                                            <div class="px-4 relative w-full sm:w-8/12 pt-4">
                                                <div class="relative flex w-full flex-wrap items-stretch mb-3">
                                                    <span class="z-10 h-full flex absolute text-center text-blueGray-300 text-sm items-center w-8 pl-3">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                            <input
                                                            placeholder="Email"
                                                            class="border-blueGray-300 px-3 py-2 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none focus:ring focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200 pl-10 ">
                                                </div>
                                            </div>
                                            <div class="px-4 sm:pl-0 relative w-full sm:w-4/12 text-right pt-4">
                                                <button
                                                    class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-white bg-pink-500 border-pink-500 active:bg-pink-600 active:border-pink-600 text-sm px-6 py-2 shadow hover:shadow-lg rounded-md w-full text-center">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
