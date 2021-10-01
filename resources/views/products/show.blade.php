<x-app-layout>

    <div class="container  py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-24">
            <div>
                <!-- Place somewhere in the <body> of your page -->
                <div class="mt-24 md:mt-0 mb-3">
                    <p class="titl_cata"> Catalogo / <span class="tipo_catalog">{{ $product->name }}</span> </p>
                </div>


                <div class="flexslider">
                    <ul class="slides">

                        @foreach ($product->images as $image)
                        
                            <li class="" data-thumb="{{ Storage::url($image->url) }}">
                                <img class="" src="{{ Storage::url($image->url) }}" />
                            </li>
                            
                        @endforeach

                    </ul>
                   
                </div>

                {{-- <div class="-mt-10 text-gray-700">
                    <h2 class="font-bold text-lg">Descripción</h2>
                    {!! $product->description !!}
                </div>
                <div class="mt-10 text-gray-700">
                    <h2 class="font-bold text-lg">Especificaciones</h2>
                    {!! $product->specification !!}
                </div> --}}
            </div>
            <div class="-mt-8 md:mt-12">
                <h1 class="text-xl font-bold  title_product">{{ $product->name }}</h1>
                {{-- <div class="flex">
                    <p class="text-trueGray-700">Marca: <a
                            class="underline capitalize hover:text-orange-500">{{ $product->brand->name }}</a></p>
                    <p class="text-trueGray-700 mx-6">5<i class="fa fa-star text-sm text-yellow-400"></i></p>
                    <a class="underline hover:text-orange-600" href="">39 reseñas</a>
                </div> --}}
                <p class="text-2xl my-4 font-semibold price_produc">S/ {{ $product->price }}</p>
                <hr class=" mb-4 hrgreen">
                {{-- <div class="bg-white rounded-lg shadow-lg mb-6 ">
                    <div class="flex p-4 items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-greenLime-600">
                            <i class="fas fa-truck text-sm text-white"></i>
                        </span>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-greenLime-600">Se hace envíos a todo el Perú</p>
                            <p>Recíbelo el {{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</p>
                        </div>
                    </div>
                </div> --}}

                @if ($product->subcategory->size)
                    @livewire('add-cart-item-size', ['product' => $product])
                @elseif($product->subcategory->color)
                    @livewire('add-cart-item-color', ['product' => $product])

                @else
                    @livewire('add-cart-item', ['product' => $product])
                @endif

                <div class="bg-detalledeliv mt-4">
                    <div class="flex">
                        <div>
                            <img src="{{ asset('images/catalogoproductos/checkm.png') }}" alt="">
                        </div>
                        <div class="ml-3">
                            <h1 class="detalledeliv">Compra satisfactoria</h1>
                            <p class="mt-1 detalledelivp">Aquí irá un texto sobre el titular, el cual <br> leerá el
                                usuario. <a class="underline detalledeliv">Leer más</a> </p>
                        </div>
                    </div>
                    <div class="flex mt-4">
                        <div>
                            <img src="{{ asset('images/catalogoproductos/fast.png') }}" alt="">
                        </div>
                        <div class="ml-3">
                            <h1 class="detalledeliv">Delivery a todo el Perú</h1>
                        </div>
                    </div>
                    <div class="flex mt-4">
                        <div>
                            <img src="{{ asset('images/catalogoproductos/cards.png') }}" alt="">
                        </div>
                        <div class="ml-3">
                            <h1 class="detalledeliv">Paga en línea de manera segura</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="">
            <div class="mt-0 md:mt-8">
                <div class="mytabs">
                    <input type="radio" name="mytabs" id="tabfree" checked="checked">
                    <label for="tabfree" class=" underlinetxt">Descripción</label>
                    <div class="tab">

                        <p>{!! $product->description !!}</p>
                    </div>

                    <input type="radio" name="mytabs" id="tabsilver">
                    <label for="tabsilver" class=" underlinetxt">Especificaciones</label>
                    <div class="tab">

                        <p>{!! $product->specification !!}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="text-center py-4 md:py-8 ">
                <p class="text-xl md:text-2xl lg:text-4xl verdegreen font-bold">Productos relacionados</p>
            </div>
          
            <div class="glider-contain">
                <div class="prelacionado">
                    <div class="mx-4">
                        <img src="{{ asset('images/catalogoproductos/ch1.jpg') }}" alt="">
                        <p class="titl_product lg:text-left">Chompa Ipsum lorm</p>
                        <p class="price_prodc lg:text-left">S/70.00</p>
                    </div>
                    <div class="mx-4">
                        <img src="{{ asset('images/catalogoproductos/ch2.jpg') }}" alt="">
                        <p class="titl_product lg:text-left">Chompa Ipsum lorm</p>
                        <p class="price_prodc lg:text-left">S/70.00</p>
                    </div>
                    <div class="mx-4">
                        <img src="{{ asset('images/catalogoproductos/ch3.jpg') }}" alt="">
                        <p class="titl_product lg:text-left">Chompa Ipsum lorm</p>
                        <p class="price_prodc lg:text-left">S/70.00</p>
                    </div>
                    <div class="mx-4">
                        <img src="{{ asset('images/catalogoproductos/ch1.jpg') }}" alt="">
                        <p class="titl_product lg:text-left">Chompa Ipsum lorm</p>
                        <p class="price_prodc lg:text-left">S/70.00</p>
                    </div>
                    <div class="mx-4">
                        <img src="{{ asset('images/catalogoproductos/ch2.jpg') }}" alt="">
                        <p class="titl_product lg:text-left">Chompa Ipsum lorm</p>
                        <p class="price_prodc lg:text-left">S/70.00</p>
                    </div>
                    <div class="mx-4">
                        <img src="{{ asset('images/catalogoproductos/ch3.jpg') }}" alt="">
                        <p class="titl_product lg:text-left">Chompa Ipsum lorm</p>
                        <p class="price_prodc lg:text-left">S/70.00</p>
                    </div>
                </div>
                <button aria-label="Previous" class="glider-prev glid-img1"></button>
                <button aria-label="Next" class="glider-next glid-img2"></button>
            </div>
        </div>



    </div>
    @push('script')
        <script>
            // Can also be used with $(document).ready()
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
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
