<x-app-layout>
    <div class="ovfrhiddn">
        <div class="bgfondo bgfondoconocenos  w-full h-96 relative ">
            <div class="absolute positionimg">
                <img src="{{ asset('images/conocenos/foto1.png') }}" class="imgbg 
                animate__animated animate__fadeInRight" alt="">
            </div>
            <div class="absolute txtp txtpconocenos">
                <p class="txtp3blog animate__animated animate__fadeInLeft">Nuestra</p>
                <p class="txtp3blog animate__animated animate__fadeInLeft">Historia</p>
            </div>
        </div>
    </div>
    <div class="container mt-10 ovfrhiddn">
        <p class="txt-lasted text-gray-700 text-justify scrollflow -slide-top -opacity">
            Green, es una marca de ropa para damas y caballeros, creada con la finalidad de brindar una opción diferente a las convencionales del mercado; nuestra tienda on line presenta colecciones pequeñas pero exclusivas y personalizables de ser requerido por el cliente; contamos con más de 20 años de experiencia atendiendo a diversas marcas y diseñadores del medio en nuestro taller textil por ello tenemos el mejor soporte de garantía y experiencia necesaria para llevar a cabo esta nueva aventura de ser una marca propia, de diseño independiente que promueve la reducción de residuos, uso de tecnologías limpias y respetuosas con el medio ambiente y con un claro enfoque verde, se parte de nuestro enfoque, se Green!
        </p>

        <div class="grid grid-cols-1 md:grid-cols-6 gap-6 mt-10">
            <div class="col-span-4 md:col-span-2">
                <img src="{{ asset('images/conocenos/img1.jpg') }}" class="w-full scrollflow -slide-right -opacity" alt="">
            </div>
            <div class="col-span-4">
                <img src="{{ asset('images/conocenos/img2.jpg') }}" class="w-full h-100 scrollflow -slide-left -opacity" alt="">
            </div>
        </div>
        <div class="mt-10">

        </div>
        {{-- <p class="mt-10 txt-lasted text-gray-700 text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, voluptatem illum distinctio assumenda quae,
            nostrum fugit sapiente veniam cupiditate perferendis at similique quo pariatur, unde eaque nesciunt
            inventore adipisci modi! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio tempore
            eveniet expedita est facere consectetur. Consectetur porro sapiente impedit vel culpa blanditiis dolorem est
            nobis quis quidem corporis, omnis adipisci! Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Eligendi cumque doloremque voluptas, laboriosam quasi temporibus a, rerum consequatur quia porro autem nemo
            ullam magni, necessitatibus sunt cum possimus laborum veritatis!
        </p> --}}

        <div class="mt-10">
            <img src="{{ asset('images/conocenos/img3.jpg') }}" class="w-full scrollflow -slide-top -opacity" alt="">
        </div>
        {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
            <div>
                <div class="text-center bg-grilla py-4">
                    <p class="text-white text-xl xl:text-3xl font-bold">Nuestra Misión</p>
                </div>
                <div class="bg-grilladiv mt-4">
                    <p class="txt-lasted px-6 py-8  text-gray-700 text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Exercitationem, reprehenderit dolorum asperiores veniam, laudantium debitis mollitia repellat
                        placeat deleniti inventore ex quo numquam consequuntur veritatis architecto aut ducimus fuga
                        quaerat. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum harum voluptate modi
                        necessitatibus porro sint, deserunt recusandae eius quisquam ad reiciendis beatae minima
                        adipisci fugiat corrupti, quo laudantium, hic omnis!</p>
                </div>
            </div>
            <div>
                <div class="text-center bg-grilla py-4">
                    <p class="text-white text-xl xl:text-3xl font-bold">Nuestra Visión</p>
                </div>
                <div class="bg-grilladiv mt-4">
                    <p class="txt-lasted px-6 py-8 text-gray-700 text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Exercitationem, reprehenderit dolorum asperiores veniam, laudantium debitis mollitia repellat
                        placeat deleniti inventore ex quo numquam consequuntur veritatis architecto aut ducimus fuga
                        quaerat. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum harum voluptate modi
                        necessitatibus porro sint, deserunt recusandae eius quisquam ad reiciendis beatae minima
                        adipisci fugiat corrupti, quo laudantium, hic omnis!</p>
                </div>
            </div>
        </div> --}}

    </div>
    <div class=" grid grid-cols-1 md:grid-cols-3 pt-16 mt-10 ovfrhiddn">
       <div>
        <img src="{{ asset('images/conocenos/img4.jpg') }}" class="w-full scrollflow -slide-right -opacity" alt="">
       </div>
       <div>
        <img src="{{ asset('images/conocenos/img5.jpg') }}" class="w-full scrollflow -slide-top -opacity" alt="">
       </div>
       <div>
        <img src="{{ asset('images/conocenos/img6.jpg') }}" class="w-full scrollflow -slide-left -opacity" alt="">
       </div>
    </div>
</x-app-layout>
