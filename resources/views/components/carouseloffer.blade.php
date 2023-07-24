<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
{{-- <script>
    var cont = 0;
    function loopSlider() {
        var xx = setInterval(function() {
            switch (cont) {
                case 0: {
                    $("#slider-1").fadeOut(400);
                    $("#slider-2").delay(400).fadeIn(400);
                    $("#sButton1").removeClass("bg-amber-950");
                    $("#sButton2").addClass("bg-amber-950");
                    cont = 1;
                    break;
                }
                case 1: {
                    $("#slider-2").fadeOut(400);
                    $("#slider-1").delay(400).fadeIn(400);
                    $("#sButton2").removeClass("bg-amber-950");
                    $("#sButton1").addClass("bg-amber-950");
                    cont = 0;
                    break;
                }
            }
        }, 80000);

    }

    function reinitLoop(time) {
        clearInterval(xx);
        setTimeout(loopSlider(), time);
    }



    function sliderButton1() {

        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-amber-950");
        $("#sButton1").addClass("bg-amber-950");
        reinitLoop(4000);
        cont = 0
    }

    function sliderButton2() {
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-amber-950");
        $("#sButton2").addClass("bg-amber-950");
        reinitLoop(4000);
        cont = 1
    }

    $(window).ready(function() {
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-amber-950");
        loopSlider();
    });

</script> --}}

{{-- <div class="sliderAx h-auto">
    <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-center  h-auto text-white py-5 px-10 object-fill"
            style="background-image: url(https://d1csarkz8obe9u.cloudfront.net/posterpreviews/healthy-food-menu-design-template-3eafff80bf11d994246d7f542241b17e_screen.jpg?ts=1674703869)">
            <div class="md:w-1/2">
                <p class="font-bold text-sm uppercase">-</p>
                <p class="text-3xl font-bold">-</p>
                <p class="text-2xl mb-10 leading-none">-</p>
                <a href="#"
                    class="bg-amber-950 py-2 px-4 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-950">Contact
                    us</a>
            </div>
        </div>
        <br>
    </div> --}}

    <div class="sliderAx h-auto rounded-lg">
        <div id="slider-1" class="container mx-auto rounded-lg">
            <div class="bg-contain bg-center h-auto text-white py-5 px-10 rounded-lg"
                style="background-image: url('https://d1csarkz8obe9u.cloudfront.net/posterpreviews/healthy-food-menu-design-template-3eafff80bf11d994246d7f542241b17e_screen.jpg?ts=1674703869');">
                <div class="md:w-1/2">
                    <p class="font-bold text-sm uppercase">-</p>
                    <p class="text-3xl font-bold">-</p>
                    <p class="text-2xl mb-10 leading-none">-</p>
                    <a href="#"
                        class="bg-amber-950 py-2 px-4 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-950">Contact
                        us</a>
                </div>
            </div>
            <br>
        </div>
    </div>


    {{-- <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-5 px-10 object-fill"
            style="background-image: url(https://d1csarkz8obe9u.cloudfront.net/posterpreviews/cocktail-party-facebook-cover-template-design-9209fc11df8af892adb9c384cf86e25f_screen.jpg?ts=1584461313)">

            <p class="font-bold text-sm uppercase">-</p>
            <p class="text-3xl font-bold">-</p>
            <p class="text-2xl mb-10 leading-none">-</p>
            <a href="#"
                class="bg-amber-950 py-2 px-4 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-950">Contact
                us</a>

        </div>
        <br>
    </div> --}}

    <div id="slider-2" class="container mx-auto">
        <div class="bg-contain bg-center h-auto text-white py-5 px-10"
            style="background-image: url('https://d1csarkz8obe9u.cloudfront.net/posterpreviews/cocktail-party-facebook-cover-template-design-9209fc11df8af892adb9c384cf86e25f_screen.jpg?ts=1584461313');">

            <p class="font-bold text-sm uppercase">-</p>
            <p class="text-3xl font-bold">-</p>
            <p class="text-2xl mb-10 leading-none">-</p>
            <a href="#"
                class="bg-amber-950 py-2 px-4 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-950">Contact
                us</a>

        </div>
        <br>
    </div>

</div>
<div class="flex justify-between w-10 mx-auto ">
    <button id="sButton1" onclick="sliderButton1()" class="bg-amber-400 rounded-full w-4 pb-2 "></button>
    <button id="sButton2" onclick="sliderButton2() " class="bg-amber-400 rounded-full w-4 p-2"></button>
</div>


