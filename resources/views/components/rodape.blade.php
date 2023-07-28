{{-- <div class="min-h-screen flex flex-col justify-between">
    <div class="bg-gray-50 text-black py-[3%] fixed bottom-0 left-0 w-full border-t border-gray-300 rounded-t-2xl drop-shadow-2xl flex justify-around items-center">
        <!-- Conteúdo da div que ficará fixa no final da tela -->
        <a href="{{ route('cardapio.index') }}" class="flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#e0cdc7" viewBox="0 0 256 256">
                <path d="M240,208H224V115.55a16,16,0,0,0-5.17-11.78l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,115.55l.11-.1L128,40l79.9,75.43.11.1V208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48ZM144,208H112V160h32Z"></path>
            </svg>
            <p class="text-gray-700">Início</p>
        </a>
        <a href="{{ route('pedido.index') }}" class="flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#e0cdc7" viewBox="0 0 256 256">
                <path d="M227.32,28.68a16,16,0,0,0-15.66-4.08l-.15,0L19.57,82.84a16,16,0,0,0-2.42,29.84l85.62,40.55,40.55,85.62A15.86,15.86,0,0,0,157.74,248q.69,0,1.38-.06a15.88,15.88,0,0,0,14-11.51l58.2-191.94c0-.05,0-.1,0-.15A16,16,0,0,0,227.32,28.68ZM157.83,231.85l-.05.14L118.42,148.9l47.24-47.25a8,8,0,0,0-11.31-11.31L107.1,137.58,24,98.22l.14,0L216,40Z"></path>
            </svg>
            <p class="text-gray-700">Carrinho</p>
        </a>
        <a href="{{ route('comanda.index') }}" class="flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#e0cdc7" viewBox="0 0 256 256">
                <path d="M168,152a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,152Zm-8-40H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm56-64V216a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V48A16,16,0,0,1,56,32H92.26a47.92,47.92,0,0,1,71.48,0H200A16,16,0,0,1,216,48ZM96,64h64a32,32,0,0,0-64,0ZM200,48H173.25A47.93,47.93,0,0,1,176,64v8a8,8,0,0,1-8,8H88a8,8,0,0,1-8-8V64a47.93,47.93,0,0,1,2.75-16H56V216H200Z"></path>
            </svg>
            <p class="text-gray-700">Comanda</p>
        </a>
    </div>
</div> --}}

<div class="min-h-screen flex flex-col justify-between">
    <div
        class="bg-gray-50 text-black py-[1%] fixed bottom-0 left-0 w-full border-t border-gray-300 rounded-t-2xl drop-shadow-2xl flex justify-around items-center">
        <!-- Conteúdo da div que ficará fixa no final da tela -->
        <a href="{{ route('cardapio.index') }}" class="flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="@if (request()->routeIs('cardapio.index')) #451A03 @else #A1A1AA @endif" viewBox="0 0 256 256">
                <path d="M240,208H224V115.55a16,16,0,0,0-5.17-11.78l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,115.55l.11-.1L128,40l79.9,75.43.11.1V208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48ZM144,208H112V160h32Z"></path>
            </svg>
            <p class="@if (request()->routeIs('cardapio.index')) text-amber-950 @else text-zinc-400 @endif">Início</p>
        </a>
        <a href="{{ route('pedido.index') }}" class="flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="@if (request()->routeIs('pedido.index')) #451A03 @else #A1A1AA @endif" viewBox="0 0 256 256">
                <path d="M227.32,28.68a16,16,0,0,0-15.66-4.08l-.15,0L19.57,82.84a16,16,0,0,0-2.42,29.84l85.62,40.55,40.55,85.62A15.86,15.86,0,0,0,157.74,248q.69,0,1.38-.06a15.88,15.88,0,0,0,14-11.51l58.2-191.94c0-.05,0-.1,0-.15A16,16,0,0,0,227.32,28.68ZM157.83,231.85l-.05.14L118.42,148.9l47.24-47.25a8,8,0,0,0-11.31-11.31L107.1,137.58,24,98.22l.14,0L216,40Z"></path>
            </svg>
            <p class="@if (request()->routeIs('pedido.index')) text-amber-950 @else text-zinc-400 @endif">Pedidos</p>
        </a>
        <a href="{{ route('comanda.index') }}" class="flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="@if (request()->routeIs('comanda.index')) #451A03 @else #A1A1AA @endif" viewBox="0 0 256 256">
                <path d="M168,152a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h64A8,8,0,0,1,168,152Zm-8-40H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16Zm56-64V216a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V48A16,16,0,0,1,56,32H92.26a47.92,47.92,0,0,1,71.48,0H200A16,16,0,0,1,216,48ZM96,64h64a32,32,0,0,0-64,0ZM200,48H173.25A47.93,47.93,0,0,1,176,64v8a8,8,0,0,1-8,8H88a8,8,0,0,1-8-8V64a47.93,47.93,0,0,1,2.75-16H56V216H200Z"></path>
            </svg>
            <p class="@if (request()->routeIs('comanda.index')) text-amber-950 @else text-zinc-400 @endif">Comanda</p>
        </a>
        {{-- @dd(Session()->all()) --}}

    </div>

</div>




