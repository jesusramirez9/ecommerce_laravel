<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="shortcut icon" href="{{ asset('images/terminosycondiciones/Iso.png') }}" type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- fontawesone --}}
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    {{-- glider --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- FLEXslider --}}
    <link rel="stylesheet" href="{{ asset('vendor/flexSlider/flexslider.css') }}">
    {{--Animate css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @stack('link')
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    {{-- glider --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
        integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- flexslider --}}
    <script src="{{ asset('vendor/flexSlider/jquery.flexslider-min.js') }}"></script>
</head>

<body class="font-sans antialiased ">
    <x-jet-banner />

    <div class="min-h-screen bg-white">
        @livewire('navigation')


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <div class="bg-pago ovfrhiddn">
            <div class="container py-4 flex justify-between items-center">
                <div class=" metodopago_rps verdegreen text-xl md:text-2xl lg:text-3xl font-bold scrollflow -slide-right -opacity">
                    Métodos de pago
                </div>
                <div>
                    <img src="{{ asset('images/inicio/seccion6/mastercard.png') }}" class="scrollflow -slide-right -opacity" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/inicio/seccion6/visa.png') }}" class="scrollflow -slide-right -opacity" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/inicio/seccion6/diners.png') }}" class="scrollflow -slide-left -opacity" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/inicio/seccion6/american.png') }}" class="scrollflow -slide-left -opacity" alt="">
                </div>
            </div>
        </div>
        <footer class="bg-footer ovfrhiddn">
            <div class="container ">
                <div
                    class="grid grid-cols-1 text-center lg:text-left md:grid-cols-2 lg:grid-cols-4 text-lg py-8 text-white  ">
                    <div>
                        <p class="mb-3 font-bold scrollflow -slide-right -opacity">SERVICIO AL CLIENTE</p>
                        <ul class="font-normal scrollflow -slide-right -opacity">
                            <li><a href="{{ route('preguntasfrecuentes') }}"
                                    class="folink  {{ request()->is('preguntas-frecuentes') ? 'active' : '' }}">Preguntas
                                    Frecuentes</a> </li>
                            <li><a href="{{ route('terminoscondiciones') }}"
                                    class="folink {{ request()->is('terminos-condiciones') ? 'active' : '' }}">Términos
                                    y Condiciones</a> </li>
                            <li><a href="{{ route('cambiosdevoluciones') }}"
                                    class="folink {{ request()->is('cambios-devoluciones') ? 'active' : '' }}">Cambios
                                    y Devoluciones</a> </li>
                            <li><a href="{{ route('tiempoentrega') }}"
                                    class="folink {{ request()->is('tiempos-entrega') ? 'active' : '' }}">Tiempos de
                                    Entrega</a> </li>
                        </ul>
                    </div>
                    <div>
                        <p class="mb-3 font-bold scrollflow -slide-right -opacity">MI CUENTA</p>
                        <ul class="font-normal scrollflow -slide-right -opacity">
                            <li><a href="{{ route('profile.show') }}"
                                    class="folink {{ request()->is('login') ? 'active' : '' }}">Mis datos</a> </li>
                            <li><a href="{{ route('orders.index') }}"
                                    class="folink {{ request()->is('orders') ? 'active' : '' }}">Mis Pedidos</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="mb-3 font-bold scrollflow -slide-left -opacity">NOSOTROS</p>
                        <ul class="font-normal scrollflow -slide-left -opacity">
                            <li><a href="{{ route('conocenos') }}"
                                    class="folink {{ request()->is('conocenos') ? 'active' : '' }}">Conócenos</a>
                            </li>
                            <li><a href="{{ route('contacto') }}"
                                    class="folink {{ request()->is('contactanos') ? 'active' : '' }}">Contáctenos</a>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <p class="mb-3 font-bold scrollflow -slide-left -opacity">REDES SOCIALES</p>
                        <div class="flex justify-center lg:justify-start scrollflow -slide-left -opacity">
                            <a href="https://www.facebook.com/Green-Look-Different-106485678456661" target="blank"><img
                                    src="{{ asset('images/inicio/seccion6/faceboock.png') }}" alt=""></a>
                            <a href="https://www.instagram.com/green_peru_moda1/?hl=es" class="ml-3"><img
                                    src="{{ asset('images/inicio/seccion6/instagram.png') }}" alt=""></a>
                        </div>
                        <a href="{{ route('reclamacion') }}" class="scrollflow -slide-left -opacity">
                            <div class="flex justify-center lg:justify-start  mt-5">

                                <img src="{{ asset('images/inicio/seccion6/libro.png') }}" class="scrollflow -slide-left -opacity" alt="">
                                <p class="ml-4 font-normal text-left scrollflow -slide-left -opacity">
                                    Libro de <br> reclamaciones
                                </p>

                            </div>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="web_foot">
                    <div class="flex justify-between py-5 text-white ">
                        <div class="text-sm scrollflow -slide-right -opacity">
                            © Green, Todos los derechos Reservados.
                        </div>
                        <div class="text-sm scrollflow -slide-left -opacity">
                            Diseñado por Katana Studio
                        </div>
                    </div>
                </div>

                <div class="pdt_foot text-white text-center rp_foot">
                    <div class="text-sm scrollflow -slide-right -opacity">
                        © Green, Todos los derechos Reservados.
                    </div>
                    <div class="text-sm scrollflow -slide-left -opacity" >
                        Diseñado por Katana Studio
                    </div>
                </div>
            </div>

        </footer>
        <div class="bg-pago py-2 posfixd foot_sharp_usr ovfrhiddn">
            <div class="container flex justify-between">

                <div class="mx-4 ">
                    <a href="{{ route('shopping-cart') }}">
                        @livewire('dropdown-cart')
                    </a>

                </div>
                <div class="mx-4">
                    <div class="mx-6 relative ">
                        @auth
                            <x-jet-dropdown margintop="m56" align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>

                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('orders.index') }}">
                                        Mis ordenes
                                    </x-jet-dropdown-link>
                                    @role('admin')
                                    <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                        Administrador
                                    </x-jet-dropdown-link>
                                    @endrole


                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                                                  this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        @else
                            <x-jet-dropdown margintop="m32" align="right" width="48">
                                <x-slot name="trigger">
                                    <i class="fas fa-user-circle text-white text-3xl cursor-pointer filt_imggriss"></i>
                                </x-slot>
                                <x-slot name="content">
                                    <x-jet-dropdown-link href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </x-jet-dropdown-link>

                                </x-slot>
                            </x-jet-dropdown>
                        @endauth

                    </div>
                </div>
            </div>
        </div>


    </div>

    @stack('modals')

    @livewireScripts
    <script>
        function dropdown() {
            return {
                open: false,
                show() {
                    if (this.open) {
                        //se cierra el menu
                        this.open = false;
                        document.getElementsByTagName('html')[0].style.overflow = "auto"
                    } else {
                        //Esta abriendo el menu
                        this.open = true;
                        document.getElementsByTagName('html')[0].style.overflow = "hidden"
                    }

                },
                close() {
                    this.open = false;
                    document.getElementsByTagName('html')[0].style.overflow = "auto"
                }
            }
        }
    </script>
    @stack('script')
    <script src="{{ asset('plugin/scrollflow/eskju.jquery.scrollflow.min.js') }}"></script>
</body>

</html>
