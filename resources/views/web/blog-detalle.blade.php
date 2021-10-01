<x-app-layout>
    <div class="container">
        <p class="py-4 lg:py-12 text-center text-xl lg:text-4xl xl:text-5xl font-bold verdegreen">La nueva tendencia en el mundo</p>
        <div>
            <img src="{{ asset('images/blogdetalle/img4.jpg') }}" class="w-full" alt="">
        </div>
        <p class="py-6 txt-last text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque at maiores accusantium adipisci dolor ullam,
            tempore et excepturi, reprehenderit ab quam mollitia animi enim minus nisi in corrupti ad nobis! Lorem ipsum
            dolor sit, amet consectetur adipisicing elit. Adipisci id modi veritatis cumque </p>
        <p class="pb-6 txt-last text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis esse deserunt est in, nesciunt ipsum rerum
            maxime fugit maiores amet eligendi! Quod sapiente dicta labore ad nostrum eaque blanditiis cupiditate!</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <img src="{{ asset('images/blogdetalle/img1.jpg') }}" alt="" class="w-full">
            </div>
            <div>
                <img src="{{ asset('images/blogdetalle/img2.jpg') }}" alt="" class="w-full">
            </div>
        </div>

        <p class="py-6 txt-last text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim iusto maiores amet quasi, perspiciatis ad ea
            nulla hic consectetur modi ab reprehenderit earum, commodi dicta fuga repellat sequi exercitationem
            veritatis.</p>
        <p class="pb-6 txt-last text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis tempore error excepturi obcaecati
            similique, in laboriosam pariatur necessitatibus accusantium culpa, nisi ad. Error dolores et, natus laborum
            repellendus excepturi tempora.</p>
        <div>
            <img src="{{ asset('images/blogdetalle/img3.jpg') }}" alt="" class="w-full">
        </div>
        <div class="md:flex items-center justify-between py-6">
            <div class="mt-2 md:mt-0">
               <p class="verdegreen font-semibold"> Junio 19, 2021</p>
            </div>
            <div class="mt-2 md:mt-0">
                <a href="" class="verdegreen font-semibold btn_volver hover:bg-red-300 border_btn">Volver</a>
            </div>
            <div class="flex mt-2 md:mt-0">
               <img src="{{ asset('images/blogdetalle/Icono.png') }}" alt="" class="mr-4"> <a href="" class="verdegreen font-semibold border_btn">Compartir</a>
            </div>
        </div>
        <hr class="hrtxt mb-8">
        <p class="text-center text-xl lg:text-4xl xl:text-5xl font-bold txtamarilo">Más noticias</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-white mt-8 pb-8">
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
