<div class="w-screen h-screen flex justify-center bg-gray-100">
    <div class="w-full mx-auto">
        <!-- Default -->
        <div class="bg-white px-6 py-4 my-1 w-[95%] mx-auto shadow rounded-md flex items-center">
            <div class="w-full text-center mx-auto">
                <button type="button"
                    class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                    Home
                </button>
                <a href="{{ route('produto.index') }}">
                    <button type="button" class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                </a>
                <button type="button"
                    class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                    Produto
                </button>
                <a href="{{ route('categoria.index') }}">
                    <button type="button"
                    class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                    Categoria
                </button>
            </a>
                <button type="button"
                    class="border border-yellow-500 bg-yellow-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                    Warning
                </button>
                <button type="button"
                    class="border border-teal-500 bg-teal-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-teal-600 focus:outline-none focus:shadow-outline">
                    Info
                </button>
                <button type="button"
                    class="border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                    Dark
                </button>
                <button type="button"
                    class="border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline">
                    Light
                </button>
            </div>
        </div>
        <!-- End Default -->
    </div>
</div>
