<!-- component -->
<x-app-layout>
    @section('assets')
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    @endsection
    <div class=" bg-blue-50">
        <main class="pt-14 bg-light-blue">
            <div class="container flex justify-center items-start my-2">
                <div class="w-full  my-1">
                    <ul class="flex flex-col text-xs md:text-base">
                        <li class="bg-white my-2 shadow-lg brdcordion" x-data="accordion(1)">
                            <div @click="handleClick()"
                                class="grid grid-cols-12  justify-between items-center font-semibold p-3 cursor-pointer">

                                <div class="col-span-11">
                                    <div class="txtmrron text-sm ">
                                        <span class="w-9 h-9  bg-greend rounded-full text-circl txtrosa mx-2 p-2">
                                            01</span>¿Dónde
                                        ingreso mi código promocional?
                                    </div>
                                </div>

                                <div class="col-span-1 justify-self-end">
                                    <div :class="handleRotate()"
                                        class="h-6 w-6 fill-current transform transition-transform duration-500">
                                        <img src="{{ asset('images/preguntasfrecuentes/mas.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div x-ref="tab" :style="handleToggle()"
                                class=" overflow-hidden max-h-0 duration-500 transition-all">
                                <p class="px-3 pt-3 pb-8 text-gray-900 mx-2 md:mx-12">
                                    Puedes ingresar tu código promocional en las siguientes ventanas
                                    Al momento de navegar por tu carrito
                                    Al momento de hacer el checkout
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg brdcordion" x-data="accordion(2)">
                            <div @click="handleClick()"
                                class="grid grid-cols-12 justify-between items-center font-semibold p-3 cursor-pointer">

                                <div class="col-span-11">
                                    <div class="txtmrron text-sm">
                                        <span class="w-9 h-9  bg-greend rounded-full text-circl txtrosa mx-2 p-2">
                                            02</span>¿Es necesario registrarse para comprar a través de
                                        greenmodaperu.com?
                                    </div>
                                </div>
                                <div class="col-span-1 justify-self-end">
                                    <div :class="handleRotate()"
                                        class="h-6 w-6 fill-current transform transition-transform duration-500">
                                        <img src="{{ asset('images/preguntasfrecuentes/mas.png') }}" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class=" overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                :style="handleToggle()">
                                <p class="px-3 pt-3 pb-8 text-gray-900 mx-2 md:mx-12">
                                    No es necesario, puedes realizar tu compra como invitado. Sin embargo, te sugerimos
                                    registrarte para que te puedas beneficiar de una compra rápida y personalizada.
                                    Después de la primera compra, tus datos de envío estarán guardados para que puedan
                                    aparecer automáticamente en un siguiente pedido.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg brdcordion" x-data="accordion(3)">
                            <div @click="handleClick()"
                                class="grid grid-cols-12 justify-between items-center font-semibold p-3 cursor-pointer">
                                <div class="col-span-11">
                                    <div class="txtmrron text-sm">
                                        <span class="w-9 h-9  bg-greend rounded-full text-circl txtrosa mx-2 p-2">
                                            03</span>¿Es seguro comprar en greenmodaperu.com?
                                    </div>
                                </div>
                                <div class="col-span-1 justify-self-end">
                                    <div :class="handleRotate()"
                                        class="h-6 w-6 fill-current transform transition-transform duration-500">
                                        <img src="{{ asset('images/preguntasfrecuentes/mas.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class=" overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                :style="handleToggle()">
                                <p class="px-3 pt-3 pb-8 text-gray-900 mx-2 md:mx-12">
                                    En Green nos preocupamos por la seguridad de tus datos y por la protección de la
                                    privacidad de nuestros clientes. Por esta razón, te garantizamos que todos tus datos
                                    están vigilados bajo los estándares más altos de seguridad.
                                    Toda la información que ingreses queda automáticamente protegida por un certificado
                                    SSL (Secure Sockets Layer) que garantiza una transacción 100% segura. Este sistema
                                    encripta los datos suministrados y evita su uso desautorizado.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg brdcordion" x-data="accordion(4)">
                            <div @click="handleClick()"
                                class="grid grid-cols-12 justify-between items-center font-semibold p-3 cursor-pointer">

                                <div class="col-span-11">
                                    <div class="txtmrron text-sm">
                                        <span class="w-9 h-9  bg-greend rounded-full text-circl txtrosa mx-2 p-2">
                                            04</span>No tengo una tarjeta de crédito o débito para pagar. ¿Aceptan pagos
                                        en
                                        efectivo?
                                    </div>
                                </div>
                                <div class="col-span-1 justify-self-end">
                                    <div :class="handleRotate()"
                                        class="h-6 w-6 fill-current transform transition-transform duration-500">
                                        <img src="{{ asset('images/preguntasfrecuentes/mas.png') }}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class=" overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                :style="handleToggle()">
                                <p class="px-3 pt-3 pb-8 text-gray-900 mx-2 md:mx-12">
                                    En el momento del CHECKOUT, selecciona la opción PAGOEFECTIVO, que te permitirá
                                    hacer el pago en agentes autorizados desde Bancos hasta Grifos afiliados. Sólo
                                    válido para Perú.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg brdcordion" x-data="accordion(5)">
                            <div @click="handleClick()"
                                class="grid grid-cols-12 justify-between items-center font-semibold p-3 cursor-pointer">

                                <div class="col-span-11">
                                    <div class="txtmrron text-sm">
                                        <span class="w-9 h-9  bg-greend rounded-full text-circl txtrosa mx-2 p-2">
                                            05</span>¿Los productos tienen garantía?
                                    </div>
                                </div>

                                <div class="col-span-1 justify-self-end">
                                    <div :class="handleRotate()"
                                        class="h-6 w-6 fill-current transform transition-transform duration-500">
                                        <img src="{{ asset('images/preguntasfrecuentes/mas.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class=" overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                :style="handleToggle()">
                                <p class="px-3 pt-3 pb-8 text-gray-900 mx-2 md:mx-12">
                                    Sí, todos los productos Green tienen garantía por 90 días desde la fecha de
                                    confirmación. La garantía aplica para cualquier falla de fábrica, la cual será
                                    evaluada a detalle por nuestros expertos. Para cualquier duda sobre este tema
                                    escríbenos a nuestro chat online o a comercial@greenmodaperu.com
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg brdcordion" x-data="accordion(6)">
                            <div @click="handleClick()"
                                class="grid grid-cols-12 justify-between items-center font-semibold p-3 cursor-pointer">
                                <div class="col-span-11">
                                    <div class="txtmrron text-sm">
                                        <span class="w-9 h-9  bg-greend rounded-full text-circl txtrosa mx-2 p-2">
                                            06</span>¿Cómo hago para tener más información sobre representación,
                                        distribución o
                                        franquicias de la marca?
                                    </div>
                                </div>
                                <div class="col-span-1 justify-self-end">
                                    <div :class="handleRotate()"
                                        class="h-6 w-6 fill-current transform transition-transform duration-500">
                                        <img src="{{ asset('images/preguntasfrecuentes/mas.png') }}" alt="">
                                    </div>

                                </div>

                            </div>
                            <div class=" overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                :style="handleToggle()">
                                <p class="px-3 pt-3 pb-8 text-gray-900 mx-2 md:mx-12">
                                    Para consultas sobre representación, distribución o franquicias por favor mándanos
                                    un correo a comercial@greenmodaperu.com con tu propuesta y perfil comercial.
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg brdcordion" x-data="accordion(7)">
                            <div @click="handleClick()"
                                class="grid grid-cols-12 justify-between items-center font-semibold p-3 cursor-pointer">
                                <div class="col-span-11">
                                    <div class="txtmrron text-sm">
                                        <span class="w-9 h-9  bg-greend rounded-full text-circl txtrosa mx-2 p-2">
                                            07</span>¿Cómo hago para tener más información sobre compras al por mayor?
                                    </div>
                                </div>
                                <div class="col-span-1 justify-self-end">
                                    <div :class="handleRotate()"
                                        class="h-6 w-6 fill-current transform transition-transform duration-500">
                                        <img src="{{ asset('images/preguntasfrecuentes/mas.png') }}" alt="">
                                    </div>

                                </div>

                            </div>
                            <div class=" overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                :style="handleToggle()">
                                <p class="px-3 pt-3 pb-8 text-gray-900 mx-2 md:mx-12">
                                    Para mayor información sobre compras al por mayor por favor mándanos un correo a
                                    comercial@greenmodaperu.com con los datos de tu tienda
                                </p>
                            </div>
                        </li>
                        <li class="bg-white my-2 shadow-lg brdcordion" x-data="accordion(8)">
                            <div @click="handleClick()"
                                class="grid grid-cols-12 justify-between items-center font-semibold p-3 cursor-pointer">
                                <div class="col-span-11">
                                    <div class="txtmrron text-sm">
                                        <span class="w-9 h-9  bg-greend rounded-full text-circl txtrosa mx-2 p-2">
                                            08</span>Tengo una pregunta que no está aquí. ¿Cómo puedo preguntar?
                                    </div>
                                </div>
                                <div class="col-span-1 justify-self-end">
                                    <div :class="handleRotate()"
                                        class="h-6 w-6 fill-current transform transition-transform duration-500">
                                        <img src="{{ asset('images/preguntasfrecuentes/mas.png') }}" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class=" overflow-hidden max-h-0 duration-500 transition-all" x-ref="tab"
                                :style="handleToggle()">
                                <p class="px-3 pt-3 pb-8 text-gray-900 mx-2 md:mx-12">
                                    Si hay algo en lo que necesitas ayuda y no está incluido en las Preguntas
                                    frecuentes, no dudes en contactarnos a través del formulario o a nuestro correo
                                    electrónico comercial@greenmodaperu.com
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
    @push('script')
        <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('accordion', {
                    tab: 0
                });

                Alpine.data('accordion', (idx) => ({
                    init() {
                        this.idx = idx;
                    },
                    idx: -1,
                    handleClick() {
                        this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                    },
                    handleRotate() {
                        return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                    },
                    handleToggle() {
                        return this.$store.accordion.tab === this.idx ?
                            `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                    }
                }));
            })
        </script>
    @endpush



</x-app-layout>
