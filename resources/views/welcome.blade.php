<x-app-layout>
    <div class="webrp   ">
        <div class="bgfondo w-full hr_welcomeini  relative ">
            <div class="absolute positionimg posinicio">
                <img src="{{ asset('images/inicio/seccion1/Modelo.png') }}" class="imginicio" alt="">
            </div>
            <div class="absolute txtp txtp_welcome">
                <p class="txtp1blog">Una moda</p>
                <p class="txtp31blog">Totalmente</p>
                <p class="txtp31blog mb-5">Exclusiva</p>
                <a class="btn_ctlgoini border_btn" href="/categories/moda" class="cursor-pointer hover:bg-green-100 ">Ver
                    Catálogo</a>
            </div>
            <div class="carousel-indicators">
                <button class="bg-green-700"></button>
                <button></button>
                <button></button>
            </div>
        </div>
    </div>
    <div class="mobirp bg_rpfondo">
        <div class="text-center">
            <p class="sec1_titlerp">Una moda</p>
            <p class="ptctinirp">Totalmente</p>
            <p class="ptctinirp mb-5">Exclusiva</p>
            <a class="btn_rpctlgo border_btn" href="/categories/moda" class=" cursor-pointer hover:bg-green-100">Ver
                Catálogo</a>
        </div>
    </div>

    {{-- <div class="container py-8 ">
        @foreach ($categories as $category)
            <section class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-gray-700">
                        {{ $category->name }}
                    </h1>
                    <a class="text-orange-500 ml-2 font-semibold hover:text-orange-400 hover:underline"
                        href="{{ route('categories.show', $category) }}">Ver más</a>
                </div>
                @livewire('category-products', ['category' => $category])
            </section>
        @endforeach
    </div> --}}
    <div class="container">
        <div class="text-center py-4 md:py-8 my-4">
            <p class="text-xl md:text-2xl lg:text-4xl verdegreen font-bold">La colección más vista</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 font-bold">
            <div>
                <img src="{{ asset('images/inicio/seccion2/F1.jpg') }}" class="w-full" alt="">
                <p class="titl_product text-xl">Chompa Ipsum lorm</p>
                <p class="price_prodc text-xl">S/70.00</p>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion2/F2.jpg') }}" class="w-full" alt="">
                <p class="titl_product text-xl">Chompa Ipsum lorm</p>
                <p class="price_prodc text-xl">S/70.00</p>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion2/F3.jpg') }}" class="w-full" alt="">
                <p class="titl_product text-xl">Chompa Ipsum lorm</p>
                <p class="price_prodc text-xl">S/70.00</p>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion2/F4.jpg') }}" class="w-full" alt="">
                <p class="titl_product text-xl">Chompa Ipsum lorm</p>
                <p class="price_prodc text-xl">S/70.00</p>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion2/F5.jpg') }}" class="w-full" alt="">
                <p class="titl_product text-xl">Chompa Ipsum lorm</p>
                <p class="price_prodc text-xl">S/70.00</p>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion2/F6.jpg') }}" class="w-full" alt="">
                <p class="titl_product text-xl">Chompa Ipsum lorm</p>
                <p class="price_prodc text-xl">S/70.00</p>
            </div>
        </div>
    </div>
    <div class="bg-inisec3 mt-8">
        <div class="relative">
            <div class="absolute sec3_abs">
                <p class="text-2xl colorbeigh font-semibold anio_sec3">2021</p>
                <p class="text-4xl colorbeigh font-bold letrspace colec_wb">Colección</p>
                <p class="text-4xl colorbeigh font-bold letrspace invierno_wb">Invierno</p>
                <p
                    class="lg:pt-4 lg:pb-6 md:text-xl lg:text-2xl xl:text-3xl leading-4 colorbeigh font-base mb-3 txt_sasd">
                    Lo que tú necesitas, lúcete,<br> exclusivamente para ti</p>
                <a class="btn_vrmssec3 border_btn cursor-pointer hover:bg-green-400" href="/categories/moda">Ver más</a>
            </div>
            <img src="{{ asset('images/inicio/seccion3/slider.png') }}" class="w-full" alt="">

        </div>
    </div>
    <div class="bg-inisec3rp mt-8">
        <div class="bg_brown1">
            <div class="text-center p-8 ">
                <p class="text-2xl colorbeigh font-semibold">2021</p>
                <p class="text-4xl colorbeigh font-bold letrspace">Colleción</p>
                <p class="text-4xl colorbeigh font-bold letrspace">Invierno</p>
                <p class="mt-4 mb-6 md:text-xl lg:text-2xl xl:text-3xl leading-4 colorbeigh font-semibold ">Lo que tú
                    necesitas, lúcete,<br> exclusivamente para ti</p>
                <a class="btn_vrmssec3 border_btn">Ver más</a>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion3/modelo.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container lg:mt-8 p-0 md:p-2">
        <div class="text-center py-4 md:py-8 ">
            <p class="text-xl md:text-2xl lg:text-4xl colorbrown font-bold">¡Llegaron las ofertas!</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 colorbeigh lg:mt-8">
            <div>
                <div class="relative">
                    <div class="absolute sec4_img1">
                        <p class="sm:text-2xl lg:text-4xl font-bold porcntcn">50%</p>
                        <p class="dctoo_sa">DSCTO</p>
                        <img src="{{ asset('images/inicio/seccion4/icon-c.png') }}" alt="">
                        <p class="mt-2 lg:text-2xl leading-4 dscrip_dsc">En bufandas <br> mujeres y<br> hombres.</p>
                    </div>
                    <img src="{{ asset('images/inicio/seccion4/oferta-1.jpg') }}" class="w-full" alt="">
                </div>

            </div>
            <div>
                <div class="relative">
                    <div class="absolute sec4_img2">
                        <p class="sm:text-2xl lg:text-4xl font-bold porcntcn">50%</p>
                        <p class="dctoo_sa">DSCTO</p>
                        <img src="{{ asset('images/inicio/seccion4/iconc.png') }}" alt="">
                        <p class="mt-2 lg:text-2xl leading-4 dscrip_dsc">En chompas<br> mujeres y<br> hombres</p>
                    </div>
                    <img src="{{ asset('images/inicio/seccion4/oferta-2.jpg') }}" class="w-full" alt="">
                </div>

            </div>
        </div>
        <div class="mt-6">
            <div class="relative colorbeigh">
                <div class="absolute sec4_img3">
                    <p class="sm:text-2xl md:text-7xl porcentaje3 font-bold porcntcndfs">30%</p>
                    <p class="dscto md:text-4xl dsctlg">DSCTO</p>
                    <img src="{{ asset('images/inicio/seccion4/iconso.png') }}" class="img_sec43" alt="">
                    <p class="dessec4 md:text-2xl mt-2 luctlh">Lúcete en cada<br> viaje junto a tu<br> pareja</p>
                </div>
                <img src="{{ asset('images/inicio/seccion4/oferta-3.jpg') }}" class="w-full " alt="">
            </div>
        </div>
    </div>



    <div class="bg_prodctrose mt-8 mb-8">
        <div class="container">
            <div class="text-center md:flex items-center justify-between py-3">
                <p class="productrelacionado my-4 md:my-8 text-2xl lg:text-5xl">Productos más vendidos</p>
                <a href="" class="btn_vr_ms border_btn ">Ver más</a>
            </div>
            <div class="glider-contain">
                <div class="prelacionado">
                    <div class="mx-4">
                        <a href="https://greenmodaperu.com/categories/moda">
                            <img src="{{ asset('images/inicio/seccion5/chompa3.png') }}" alt="">
                            {{-- <p class="titl_product">Chompa Ipsum lorm</p>
                        <p class="price_prodc">S/70.00</p> --}}</a>
                    </div>
                    <div class="mx-4">
                        <a href="https://greenmodaperu.com/categories/moda">
                            <img src="{{ asset('images/inicio/seccion5/chompa2.png') }}" alt="">
                            {{-- <p class="titl_product">Chompa Ipsum lorm</p>
                        <p class="price_prodc">S/70.00</p> --}}</a>
                    </div>
                    <div class="mx-4">
                        <a href="https://greenmodaperu.com/categories/moda"> <img
                                src="{{ asset('images/inicio/seccion5/chompa1.png') }}" alt="">
                            {{-- <p class="titl_product">Chompa Ipsum lorm</p>
                        <p class="price_prodc">S/70.00</p> --}}</a>
                    </div>
                    <div class="mx-4">
                        <a href="https://greenmodaperu.com/categories/moda"><img
                                src="{{ asset('images/inicio/seccion5/chompa3.png') }}" alt="">
                            {{-- <p class="titl_product">Chompa Ipsum lorm</p>
                        <p class="price_prodc">S/70.00</p> --}}</a>
                    </div>
                    <div class="mx-4">
                        <a href="https://greenmodaperu.com/categories/moda"><img
                                src="{{ asset('images/inicio/seccion5/chompa2.png') }}" alt="">
                            {{-- <p class="titl_product">Chompa Ipsum lorm</p>
                        <p class="price_prodc">S/70.00</p> --}}</a>
                    </div>
                    <div class="mx-4">
                        <a href="https://greenmodaperu.com/categories/moda"> <img
                                src="{{ asset('images/inicio/seccion5/chompa1.png') }}" alt="">
                            {{-- <p class="titl_product">Chompa Ipsum lorm</p>
                        <p class="price_prodc">S/70.00</p> --}}</a>
                    </div>
                </div>
                <button aria-label="Previous" class="glider-prev glid-img1"></button>
                <button aria-label="Next" class="glider-next glid-img2"></button>
            </div>
        </div>
    </div>
    <div class="container pb-12 ">
        <div class="text-center py-4 md:py-8 ">
            <p class="text-xl md:text-2xl lg:text-4xl coloryell font-bold">Noticias Recientes</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-white lg:mt-8">
            <div>
                <img src="{{ asset('images/inicio/seccion6/im1.png') }}" class="w-full" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4">¡La moda sostenible no es una tendencia es nuestra esperanza!</p>
                    <p class="light text-justify">Es deber de todos cuidar nuestro planeta con acciones concretas y nuestro rubro, las confecciones no es la excepción, por ello todos los involucrados en la cadena de valor deben de sumar esfuerzos para poder disminuir el impacto que tienen nuestras actividades en el medio ambiente. Por ello en Green nos enfocamos en buscar materias primas</p>
                    <div class="flex  justify-between items-center mt-6">
                        <p>Junio 19, 2021</p>
                        <a href="{{ route('blogdetalle') }}" class="hover:bg-red-400 btn_mas border_btn">Leer
                            más</a>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/inicio/seccion6/im2.png') }}" class="w-full" alt="">
                <div class="mt-3 p-6 bg-blog">
                    <p class="text-2xl font-bold pb-4">La moda en tiempos de pandemia: ¡La comodidad se impone!</p>
                    <p class="light text-justify">En estos tiempos del auge del home office y el homeschooling, toman protagonismo las prendas que se adaptan a la vida hogareña, siendo la comodidad y funcionalidad las características pilares de estos nuevos tiempos, la moda ahora invita a elegir prendas holgadas y suaves al tacto, funcionales y que otorguen libertad de movimiento, en este nuevo contexto tenemos a:</p>
                    <div class="flex  justify-between items-center mt-6">
                        <p>Junio 19, 2021</p>
                        <a href="{{ route('blogdetalle') }}" class="hover:bg-red-400 btn_mas border_btn">Leer
                            más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            livewire.on('glider', function(id) {

                new Glider(document.querySelector('.glider-' + id), {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToScroll: 2.5,
                                slidesToShow: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToScroll: 3.5,
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToScroll: 4.5,
                                slidesToShow: 4,
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToScroll: 5.5,
                                slidesToShow: 5,
                            }
                        }

                    ]
                });

            });
            new Glider(document.querySelector('.prelacionado'), {
                slidesToShow: 3,
                slidesToScroll: 1,
                draggable: true,
                dots: '.dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                },
                responsive: [{
                        // screens greater than >= 775px
                        breakpoint: 768,
                        settings: {
                            // Set to `auto` and provide item width to adjust to viewport
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            itemWidth: 150,
                            duration: 1.5
                        }
                    },

                    {
                        // screens greater than >= 1024px
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 1.5,
                            arrows: {
                                prev: '.glider-prev',
                                next: '.glider-next'
                            },

                        }
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 0.25,
                            arrows: false
                        }
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 320,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            itemWidth: 150,
                            duration: 0.25,
                            arrows: false
                        }
                    }

                ]
            });
        </script>
    @endpush


</x-app-layout>
