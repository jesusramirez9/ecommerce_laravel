<x-app-layout>
    <div class="container ovfrhiddn">
        <p
            class="py-4 lg:py-12 text-center text-xl lg:text-4xl xl:text-5xl font-bold verdegreen animate__animated animate__fadeInDown">
            La nueva tendencia en el mundo</p>
        <div>
            <img src="{{ asset('images/blogdetalle/img4.jpg') }}" class="w-full animate__animated animate__fadeInDown"
                alt="">
        </div>
        <p class="py-6 txt-last text-justify scrollflow -slide-bottom -opacity">Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Eaque at maiores accusantium adipisci dolor ullam,
            tempore et excepturi, reprehenderit ab quam mollitia animi enim minus nisi in corrupti ad nobis! Lorem ipsum
            dolor sit, amet consectetur adipisicing elit. Adipisci id modi veritatis cumque </p>
        <p class="pb-6 txt-last text-justify scrollflow -slide-bottom -opacity">Lorem ipsum dolor sit, amet consectetur
            adipisicing elit. Debitis esse deserunt est in, nesciunt ipsum rerum
            maxime fugit maiores amet eligendi! Quod sapiente dicta labore ad nostrum eaque blanditiis cupiditate!</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <img src="{{ asset('images/blogdetalle/img1.jpg') }}" alt=""
                    class="w-full scrollflow -slide-right -opacity
                ">
            </div>
            <div>
                <img src="{{ asset('images/blogdetalle/img2.jpg') }}" alt=""
                    class="w-full scrollflow -slide-left -opacity">
            </div>
        </div>

        <p class="py-6 txt-last text-justify scrollflow -slide-bottom -opacity">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Enim iusto maiores amet quasi, perspiciatis ad ea
            nulla hic consectetur modi ab reprehenderit earum, commodi dicta fuga repellat sequi exercitationem
            veritatis.</p>
        <p class="pb-6 txt-last text-justify scrollflow -slide-bottom -opacity">Lorem ipsum dolor, sit amet consectetur
            adipisicing elit. Perferendis tempore error excepturi obcaecati
            similique, in laboriosam pariatur necessitatibus accusantium culpa, nisi ad. Error dolores et, natus laborum
            repellendus excepturi tempora.</p>
        <div>
            <img src="{{ asset('images/blogdetalle/img3.jpg') }}" alt=""
                class="w-full scrollflow -slide-bottom -opacity">
        </div>
        <div class="md:flex items-center justify-between py-6">
            <div class="mt-2 md:mt-0">
                <p class="verdegreen font-semibold scrollflow -slide-right -opacity"> Junio 19, 2021</p>
            </div>
            <div class="mt-2 md:mt-0 scrollflow -slide-bottom -opacity">
                <a href=""
                    class="verdegreen font-semibold btn_volver hover:bg-red-300 border_btn scrollflow -slide-bottom -opacity">Volver</a>
            </div>
            <div class="flex mt-2 md:mt-0">
                <img src="{{ asset('images/blogdetalle/Icono.png') }}" alt=""
                    class="mr-4 scrollflow -slide-left -opacity
               "> <a href=""
                    class="verdegreen font-semibold border_btn scrollflow -slide-left -opacity
               ">Compartir</a>
            </div>
        </div>
        <hr class="hrtxt mb-8">
        <p class="text-center text-xl lg:text-4xl xl:text-5xl font-bold txtamarilo scrollflow -slide-bottom -opacity">
            Más noticias</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-white mt-8 pb-8">
            <div>
                <img src="{{ asset('images/inicio/seccion6/im1.png') }}"
                    class="w-full scrollflow -slide-right -opacity" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4 scrollflow -slide-right -opacity">La nueva tendencia en el mundo
                    </p>
                    <p class="light text-justify scrollflow -slide-right -opacity">Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit. Aliquid iste aspernatur at deserunt dolorem similique distinctio,
                        iure ex fuga voluptate commodi sint nulla sapiente velit delectus ullam ut eum qui.</p>
                    <div class="flex  justify-between items-center mt-6">
                        <p class="scrollflow -slide-right -opacity
                        ">Junio 19, 2021</p>
                        <a href="{{ route('blogdetalle') }}"
                            class="hover:bg-red-400 btn_mas border_btn scrollflow -slide-right -opacity">Leer más</a>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion6/im2.png') }}"
                    class="w-full scrollflow -slide-left -opacity" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4 scrollflow -slide-left -opacity">La nueva tendencia en el mundo
                    </p>
                    <p class="light text-justify scrollflow -slide-left -opacity">Lorem, ipsum dolor sit amet
                        consectetur adipisicing elit. Aliquid iste aspernatur at deserunt dolorem similique distinctio,
                        iure ex fuga voluptate commodi sint nulla sapiente velit delectus ullam ut eum qui.</p>
                    <div class="flex  justify-between items-center mt-6">
                        <p class="scrollflow -slide-left -opacity">Junio 19, 2021</p>
                        <a href="{{ route('blogdetalle') }}"
                            class="hover:bg-red-400 btn_mas border_btn scrollflow -slide-left -opacity">Leer más</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
