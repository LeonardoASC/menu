<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    @vite('resources/css/app.css')

</head>

<body>
    
    <p>Administrador?</p>
    <a href="{{route('login')}}" class="text-blue-700">-clique aqui-</a>
    <div class="pb-12 flex justify-center flex-col items-center">
        <div class="flex w-full h-32 justify-center items-center">
            <svg width="90" height="90" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16 2C8.27813 2 2 8.27812 2 16C2 23.7219 8.27813 30 16 30C23.7219 30 30 23.7219 30 16C30 8.27812 23.7219 2 16 2Z"
                    fill="#edce1f" />
                <path
                    d="M9.86884 19.6502C9.56272 19.1867 10.3327 18.4853 10.0195 17.8963C9.83897 17.5567 9.54389 17.345 9.18952 17.3006C8.84941 17.2579 8.49905 17.3824 8.27573 17.6257C7.92315 18.0094 7.86832 18.5317 7.93652 18.7165C7.96148 18.7842 8.00071 18.8027 8.02879 18.8067C8.22083 18.832 8.32889 18.3391 8.39519 18.2364C8.57851 17.9535 8.99476 17.8679 9.28223 18.0538C9.82731 18.4064 9.35467 18.9762 9.39545 19.4574C9.43513 19.926 9.72709 20.1144 9.98919 20.1342C10.2442 20.1438 10.4225 20.0022 10.4675 19.8988C10.5754 19.6519 10.1207 20.0315 9.86884 19.6502Z"
                    fill="black" />
                <path
                    d="M21.2577 15.3958C21.1147 15.3761 20.9585 15.3765 20.7959 15.3958C20.6725 15.2401 20.5619 14.9879 20.4995 14.6936C20.3885 14.17 20.4001 13.7907 20.7099 13.7414C21.0197 13.6922 21.1694 14.009 21.2804 14.5326C21.3549 14.8846 21.3406 15.208 21.2577 15.3958Z"
                    fill="black" />
                <path
                    d="M17.8646 15.7074C17.8769 15.8259 17.8812 15.9459 17.8777 16.0564C18.1775 16.074 18.3898 16.2163 18.4463 16.3067C18.4753 16.3533 18.4637 16.3837 18.4544 16.3977C18.4233 16.446 18.3568 16.4386 18.2175 16.4229C18.0958 16.4093 17.9648 16.3973 17.8286 16.4035C17.7545 16.6308 17.5348 16.6521 17.3804 16.484C17.2726 16.5168 17.0608 16.6521 16.9976 16.5051C16.9971 16.4322 17.0734 16.3261 17.2115 16.2325C17.1172 16.0526 17.054 15.8601 17.0167 15.6607C16.8209 15.696 16.6447 15.7508 16.5066 15.7938C16.4418 15.814 16.1853 15.9299 16.1552 15.7993C16.1351 15.7091 16.2755 15.5604 16.424 15.453C16.5898 15.3353 16.7738 15.2516 16.9646 15.2033C16.9605 14.9193 17.0329 14.7211 17.2393 14.6883C17.4951 14.6476 17.6537 14.8446 17.7634 15.2093C18.0726 15.2952 18.3814 15.5082 18.5177 15.7284C18.5707 15.8138 18.581 15.8798 18.5466 15.9146C18.4609 16.0034 17.9862 15.7459 17.8646 15.7074Z"
                    fill="black" />
                <path
                    d="M19.8977 16.9838C20.0938 17.0788 20.3096 17.0414 20.38 16.9002C20.4504 16.7589 20.3484 16.5675 20.1522 16.4725C19.9561 16.3775 19.7404 16.4149 19.6699 16.5561C19.5995 16.6973 19.7016 16.8887 19.8977 16.9838Z"
                    fill="black" />
                <path
                    d="M20.8632 16.2824C20.8667 16.0664 20.9991 15.8939 21.1583 15.8965C21.3174 15.8996 21.4435 16.0765 21.44 16.2921C21.4364 16.5077 21.304 16.6802 21.1449 16.6775C20.9857 16.6749 20.8596 16.498 20.8632 16.2824Z"
                    fill="black" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M25.1785 18.9281C25.1772 18.9236 25.1816 18.9392 25.1785 18.9281C25.4981 18.9281 26 19.2907 26 20.1667C26 21.0384 25.6336 22.0257 25.5471 22.2449C24.2273 25.3671 21.0772 27.1051 17.3248 26.9951C13.8266 26.8926 10.8432 25.0705 9.53762 22.1001C8.7482 22.101 7.93426 21.7582 7.31556 21.217C6.66343 20.6468 6.26137 19.9089 6.18292 19.1393C6.12185 18.5401 6.19629 17.9826 6.38662 17.4964L5.65337 16.883C2.29777 14.0864 12.7929 2.57165 16.1494 5.46156C16.1663 5.47608 17.2914 6.56551 17.2941 6.56815C18.9125 5.88985 23.2489 4.5984 23.2537 7.60479C23.2555 8.60315 22.611 9.76738 21.5782 10.8238C22.7718 11.9164 22.457 13.4685 22.6471 14.8925L23.0616 15.006C23.8519 15.2247 24.414 15.5164 24.6891 15.8015C24.9641 16.0862 25.1005 16.3621 25.15 16.6855C25.1963 16.9464 25.1901 17.4071 24.8415 17.9223C24.967 18.2547 25.0816 18.5861 25.1785 18.9281ZM9.47834 21.2901C9.59557 21.2927 9.71191 21.2852 9.82602 21.2659C11.0523 21.0595 11.3732 19.7448 11.1713 18.4538C10.9431 16.9961 9.94414 16.4822 9.26616 16.4457C9.07761 16.436 8.90243 16.4527 8.75801 16.4813C7.5478 16.722 6.86447 17.7384 6.99908 19.0584C7.12077 20.253 8.3448 21.2601 9.47834 21.2901ZM6.73743 16.8395C7.14351 16.2574 7.80722 15.8363 8.56054 15.6915C9.51934 13.151 11.1205 10.8102 13.2396 9.19934C14.8122 7.90443 16.5082 6.97559 16.5082 6.97559C16.5082 6.97559 15.5949 5.93016 15.319 5.85316C13.622 5.40084 9.95707 7.89563 7.61689 11.1921C6.67012 12.5257 5.3146 14.8876 5.96272 16.1025C6.04251 16.253 6.49494 16.6397 6.73743 16.8395ZM20.4955 20.7066C20.4981 20.7339 20.4812 20.7621 20.4567 20.7722C20.4567 20.7722 19.0931 21.3983 16.9272 20.737C17.0051 21.3862 17.7924 21.6322 18.3425 21.7213C21.0263 22.1771 23.5355 20.6622 24.1002 20.2807C24.1972 20.2152 24.099 20.3836 24.0815 20.4083C23.3901 21.2887 21.5314 22.3082 19.1132 22.3078C18.0585 22.3073 17.0044 21.9408 16.6174 21.3772C16.017 20.5029 16.5876 19.2265 17.5883 19.3593C19.2798 19.5479 21.0139 19.4062 22.5798 18.6888C23.9451 18.0631 24.4608 17.375 24.3833 16.8175C24.263 15.9535 22.9821 15.8184 22.3346 15.6084C22.0529 15.5164 21.9138 15.4429 21.8822 14.9198C21.8684 14.6914 21.8282 13.8946 21.8135 13.565C21.7877 12.9882 21.7172 12.1993 21.2216 11.8737C21.0923 11.7887 20.9488 11.7478 20.7977 11.7399C20.6772 11.7341 20.6057 11.7507 20.5673 11.7596C20.5587 11.7616 20.5517 11.7632 20.5463 11.7641C20.2786 11.809 20.1146 11.9444 19.9212 12.1041C19.9101 12.1133 19.8988 12.1226 19.8875 12.1319C19.2692 12.6406 18.7472 12.7237 18.1664 12.6991C17.9855 12.6915 17.7991 12.6735 17.6024 12.6544C17.4215 12.6369 17.232 12.6185 17.0302 12.6067L16.7837 12.5926C15.8111 12.5433 14.768 13.3723 14.5946 14.5497C14.4009 15.864 15.1355 16.669 15.6132 17.1925C15.7313 17.3219 15.8337 17.434 15.9025 17.5325C15.9466 17.5919 15.9979 17.6755 15.9979 17.7551C15.9979 17.8502 15.9354 17.9254 15.8744 17.9896C14.8821 18.9968 14.5648 20.5971 14.9388 21.9307C14.9856 22.097 15.0448 22.2563 15.1148 22.4085C15.9921 24.4321 18.7138 25.3746 21.3722 24.5174C23.2354 23.9167 24.8816 22.465 25.2168 20.4624C25.2966 19.9406 25.1794 19.7391 25.0198 19.6418C24.8509 19.5393 24.6485 19.5749 24.6485 19.5749C24.6485 19.5749 24.5562 18.9515 24.295 18.3848C23.5199 18.9884 22.5223 19.4126 21.7627 19.6277C20.5458 19.9724 19.2312 20.1065 17.9737 19.944C17.4636 19.8781 17.1209 19.8338 16.974 20.3049C18.6514 20.9112 20.4268 20.6516 20.4268 20.6516C20.4611 20.6481 20.4919 20.6727 20.4955 20.7066ZM15.656 8.94062C14.7386 9.40394 13.7143 10.2289 12.8825 11.178C12.8531 11.2119 12.8968 11.2585 12.9329 11.2326C13.6514 10.7165 14.6365 10.2369 15.927 9.92622C17.3725 9.57818 18.7642 9.72426 19.6142 9.91654C19.657 9.92622 19.6837 9.85362 19.6459 9.8325C19.0842 9.52142 18.2221 9.31022 17.6106 9.30582C17.5807 9.30538 17.5638 9.27106 17.5816 9.2473C17.6872 9.10694 17.8321 8.96834 17.9645 8.86802C17.9939 8.84514 17.9761 8.79807 17.9386 8.80026C17.1779 8.84638 15.4402 9.63869 15.4465 9.60986C15.491 9.39866 15.6314 9.1197 15.7041 8.98946C15.7215 8.95866 15.6876 8.92478 15.656 8.94062Z"
                    fill="black" />
            </svg>
        </div>
        <div class="w-[80%] h-px my-2 bg-black"></div>
        <div class="min-h-[40vh] w-full flex justify-center items-center flex-col">
            <div class="flex justify-center my-5">
                <h1 class="text-2xl font-semibold text-primary">Bem Vindo</h1>
            </div>
            <h2 class="text-md font-semibold text-zinc-700 my-2 w-4/5 text-center">Coloque seu CPF para gerar uma
                comanda
            </h2>

            <div class="w-4/5 h-full flex flex-col gap-3 bg-white rounded-xl shadow-md p-4">
                <form method="post" action="{{ route('cliente.store') }}"
                    class="flex flex-col items-center justify-between w-full gap-4">
                    @csrf
                    <div class="flex justify-center flex-col w-full">
                        <p class="text-sm text-[#d8a390] px-2 font-semibold">Nome</p>
                        <input placeholder="ex: Leonardo Augusto"
                            class="bg-gray-50 py-2 border border-gray-200 rounded-md px-2 text-sm" type="text"
                            id="name" name="nome" value="{{ $cliente->nome ?? old('nome') }}">
                        <p class="text-xs  text-gray-500">
                            {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                        </p>
                        <p class="text-sm text-[#d8a390] px-2 font-semibold mt-2">CPF</p>
                        <input placeholder="ex: 10000000000"
                            class="bg-gray-50 py-2 border border-gray-200 rounded-md px-2 text-sm" type="number"
                            id="name" pattern="[0-9]*" name="cpf" value="{{ $cliente->cpf ?? old('cpf') }}">
                        <p class="text-xs  text-gray-500">
                            {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}
                        </p>
                    </div>
                    <div class="w-full">
                        <button class="w-full py-2 rounded-md bg-[#edce1f] shadow-sm text-sm text-white font-semibold"
                            type="submit">
                            Gerar Comanda
                        </button>
                    </div>


                    <div class="flex flex-col">
                        <label class="text-xs" for="opcoes">Selecione o numero da Mesa:</label>
                        <select class="text-xs" id="opcoes" name="mesa">
                            <option class="text-zinc-400 w-6">-- Selecione --</option>
                            @foreach ($mesas as $mesa)
                                <option class="" value="{{ $mesa->id }}">
                                    {{ $mesa->id }}
                                </option>
                            @endforeach
                        </select>
                        <p class="text-xs  text-gray-500">
                            {{ $errors->has('mesa') ? $errors->first('mesa') : '' }}
                        </p>
                    </div>
                </form>
            </div>




            <div class="text-center w-3/5">
                <p class="text-xs my-3 text-gray-500">Ao efetuar o pagamento da
                    comanda o seu CPF sera retirado do sistema!</p>
            </div>
        </div>



        <div class="flex h-full w-full items-center justify-center mb-5">
            <div class="w-1/3 h-px my-2 bg-black"></div>
            <div class="px-4">Ou</div>
            <div class="w-1/3 h-px my-2 bg-black"></div>
          </div>

        <button
            class="bg-white border shadow-sm mb-2 rounded-md text-black w-[80%] p-2 flex flex-row justify-center gap-2 items-center hover:bg-gray-100 duration-100 ease-in-out">
            <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="#EA4335 " d="M5.26620003,9.76452941 C6.19878754,6.93863203 8.85444915,4.90909091 12,4.90909091 C13.6909091,4.90909091 15.2181818,5.50909091 16.4181818,6.49090909 L19.9090909,3 C17.7818182,1.14545455 15.0545455,0 12,0 C7.27006974,0 3.1977497,2.69829785 1.23999023,6.65002441 L5.26620003,9.76452941 Z"/>
                <path fill="#34A853" d="M16.0407269,18.0125889 C14.9509167,18.7163016 13.5660892,19.0909091 12,19.0909091 C8.86648613,19.0909091 6.21911939,17.076871 5.27698177,14.2678769 L1.23746264,17.3349879 C3.19279051,21.2936293 7.26500293,24 12,24 C14.9328362,24 17.7353462,22.9573905 19.834192,20.9995801 L16.0407269,18.0125889 Z"/>
                <path fill="#4A90E2" d="M19.834192,20.9995801 C22.0291676,18.9520994 23.4545455,15.903663 23.4545455,12 C23.4545455,11.2909091 23.3454545,10.5272727 23.1818182,9.81818182 L12,9.81818182 L12,14.4545455 L18.4363636,14.4545455 C18.1187732,16.013626 17.2662994,17.2212117 16.0407269,18.0125889 L19.834192,20.9995801 Z"/>
                <path fill="#FBBC05" d="M5.27698177,14.2678769 C5.03832634,13.556323 4.90909091,12.7937589 4.90909091,12 C4.90909091,11.2182781 5.03443647,10.4668121 5.26620003,9.76452941 L1.23999023,6.65002441 C0.43658717,8.26043162 0,10.0753848 0,12 C0,13.9195484 0.444780743,15.7301709 1.23746264,17.3349879 L5.27698177,14.2678769 Z"/>
            </svg>

            Continuar com o Google
        </button>

        <button
            class="bg-blue-600 text-white w-[80%] p-2 flex flex-row justify-center gap-2 items-center hover:bg-blue-700 duration-100 ease-in-out border shadow-sm mb-2 rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="w-5" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                <path
                    d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6c44.2 0 82.1 3.3 93.2 4.8v107.9z"
                    fill="currentColor" />
            </svg>
            Continuar com o Facebook
        </button>

    </div>


</body>

</html>
