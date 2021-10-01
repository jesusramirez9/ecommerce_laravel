<x-app-layout>

    <div>
        <div class="bgfondo bgfondoblog w-full  h-96 relative " >
            <div class="absolute positionimg postiimgblog">
                <img src="{{ asset('images/blog/img.png') }}" class="imgbg" alt="">
            </div>
            <div class="absolute txtpblog">
                <p class="txtp1blog">Entérate</p>
                <p class="txtp2blog">De las últimas</p>
                <p class="txtp3blog">Noticias</p>
            </div>
        </div>

    </div>

    <div class="container py-12 lg:py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-white">
            <div>
                <img src="{{ asset('images/inicio/seccion6/im1.png') }}" class="w-full" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4">Neutralizar el carbono: </p>
                    <p class="light text-justify">Las marcas de moda de todo el mundo deben reducir sus emisiones de carbono para hacer su parte a la hora de combatir el cambio climático. La Carta de la industria de la moda para la acción climática de la ONU (2018) – firmada por 43 marcas, ha fijado como objetivo el que estas compañías reduzcan las emisiones en un 30 por ciento para el 2030 y no produzcan emisiones en el 2050. </p>
                    <div class="flex  justify-between items-center mt-6">
                        <p>Junio 19, 2021</p>
                        <a href="{{route('blogdetalle')}}" class="hover:bg-red-400 btn_mas border_btn">Leer más</a>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion6/im2.png') }}" class="w-full" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4">Mejorar la cadena de suministro: </p>
                    <p class="light text-justify">Las compañías deben examinar su cadena de suministro para lograr un futuro más ecológico, y mejorar la transparencia y trazabilidad respecto a los materiales empleados y la fabricación de las prendas; es decir se necesita estableces una relación más estrecha entre proveedores y fabricantes. </p>
                    <div class="flex  justify-between items-center mt-6">
                        <p>Junio 19, 2021</p>
                        <a href="{{route('blogdetalle')}}" class="hover:bg-red-400 btn_mas border_btn">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-white mt-8">
            <div>
                <img src="{{ asset('images/inicio/seccion6/im1.png') }}" class="w-full" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4">Invertir en futuros materiales: </p>
                    <p class="light text-justify">Encontrar alternativas a los materiales que impactan negativamente el medioambiente es esencial. </p>
                    <div class="flex  justify-between items-center mt-6">
                        <p>Junio 19, 2021</p>
                        <a href="{{route('blogdetalle')}}" class="hover:bg-red-400 btn_mas border_btn">Leer más</a>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion6/im2.png') }}" class="w-full" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4">Construir nuevos modelos de negocio: </p>
                    <p class="light text-justify">La economía de moda circular, sistema en el que todos los productos pueden ser reutilizados o completamente descompuestos.</p>
                    <div class="flex  justify-between items-center mt-6">
                        <p>Junio 19, 2021</p>
                        <a href="{{route('blogdetalle')}}" class="hover:bg-red-400 btn_mas border_btn">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-white mt-8">
            <div>
                <img src="{{ asset('images/inicio/seccion6/im1.png') }}" class="w-full" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4">La nueva tendencia en el mundo</p>
                    <p class="light text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid iste aspernatur at deserunt dolorem similique distinctio, iure ex fuga voluptate commodi sint nulla sapiente velit delectus ullam ut eum qui.</p>
                    <div class="flex  justify-between items-center mt-6">
                        <p>Junio 19, 2021</p>
                        <a href="{{route('blogdetalle')}}" class="hover:bg-red-400 btn_mas border_btn">Leer más</a>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion6/im2.png') }}" class="w-full" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4">La nueva tendencia en el mundo</p>
                    <p class="light text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid iste aspernatur at deserunt dolorem similique distinctio, iure ex fuga voluptate commodi sint nulla sapiente velit delectus ullam ut eum qui.</p>
                    <div class="flex  justify-between items-center mt-6">
                        <p>Junio 19, 2021</p>
                        <a href="{{route('blogdetalle')}}" class="hover:bg-red-400 btn_mas border_btn">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>