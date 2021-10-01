<div>
    @php
        require_once base_path('/vendor/autoload.php');
        
        Lyra\Client::setDefaultUsername('53245831');
        Lyra\Client::setDefaultPassword('testpassword_rMMFIrLkKZi0SGaxj6yHM2Qwk1yXS33epAfDAWiVEY8tE');
        Lyra\Client::setDefaultEndpoint('https://api.micuentaweb.pe');
        Lyra\Client::setDefaultPublicKey("53245831:testpublickey_wxw0RQ0z0huOBb8VoecTvVIMiJbdVLQhtAXmEv3MdNtfC");

        Lyra\Client::setDefaultSHA256Key("fBmPcKxYAStyHYWT6qLsKjv0ekto5maeyUEDGkJZtQ8L3");
        $client = new Lyra\Client();
        
        /**
         * I create a formToken
         */
        $store = [
            'amount' => $order->total*100,
            'currency' => 'PEN',
            'orderId' => uniqid('MyOrderId'),
            'customer' => [
                'email' => 'sample@example.com',
            ],
        ];
        $response = $client->post('V4/Charge/CreatePayment', $store);
        
        /* I check if there are some errors */
        if ($response['status'] != 'SUCCESS') {
            /* an error occurs, I throw an exception */
            display_error($response);
            $error = $response['answer'];
            throw new Exception('error ' . $error['errorCode'] . ': ' . $error['errorMessage']);
        }
        
        /* everything is fine, I extract the formToken */
        $formToken = $response['answer']['formToken'];
        




        // SDK de Mercado Pago

        // require base_path('/vendor/autoload.php');
        
        // Agrega credenciales
        
        // MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));
        
        //Crea un objeto de preferencia
        
        // $preference = new MercadoPago\Preference();
        // $shipments = new MercadoPago\Shipments();
        // $shipments->cost = $order->shipping_cost;
        // $shipments->mode = 'not_specified';
        // $preference->shipments = $shipments;
        
        //Crea un ítem en la preferencia
        
        // foreach ($items as $product) {
        
        //     $item = new MercadoPago\Item();
        //     $item->title = $product->name;
        //     $item->quantity = $product->qty;
        //     $item->unit_price = $product->price;
        
        //     $products[] = $item;
        // }
        
        // $preference->back_urls = [
        //     'success' => route('orders.pay', $order),
        //     'failure' => 'http://www.tu-sitio/failure',
        //     'pending' => 'http://www.tu-sitio/pending',
        // ];
        // $preference->auto_return = 'approved';
        
        // $preference->items = $products;
        // $preference->save();
        
    @endphp

    @push('link')
        <link rel="stylesheet" href="<?php echo $client->getClientEndpoint(); ?>/static/js/krypton-client/V4.0/ext/classic-reset.css">
        <script src="<?php echo $client->getClientEndpoint(); ?>/static/js/krypton-client/V4.0/ext/classic.js">
        </script>

    @endpush

    <div class="md:grid mt-14 md:grid-cols-5 gap-6 container py-8">

        <div class="md:col-span-3 ">
            <div class="bg-white rounded-lg shadow-lg mt-24 md:mt-0 px-4 md:px-6 py-4 mb-6">
                <p class="colorbroywm font-bold uppercase"> <span class="colorverderr font-bold">Número de
                        orden:</span>
                    Orden-{{ $order->id }}</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <div class="grid grid-cols-2 gap-6 text-gray-700">
                    <div>
                        <p class="text-lg colorverderr font-bold uppercase">Envío</p>
                        @if ($order->envio_type == 1)
                            <p class="text-sm colorbroywm font-bold">Los productos deben ser recogidos en tienda</p>
                            <p class="text-sm colorbroywm font-bold">Calle falsa 123</p>
                        @else
                            <p class="text-sm colorbroywm font-bold">Los productos serán enviados a:</p>
                            <p class="text-sm colorbroywm font-bold">{{ $envio->address }}</p>
                            <p class="colorbroywm font-bold">{{ $envio->department }} - {{ $envio->city }} -
                                {{ $envio->district }}</p>
                        @endif
                    </div>

                    <div>
                        <p class="text-lg colorverderr font-bold uppercase">Datos de contacto</p>
                        <p class="text-sm colorverderr font-bold">Persona que recibirá el producto: <span
                                class="colorbroywm font-normal"> {{ $order->contact }}</span></p>
                        <p class="text-sm colorverderr font-bold">Teléfono de contacto: <span
                                class="colorbroywm font-normal">{{ $order->phone }}</span> </p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 mb-6 text-gray-700">
                <p class="text-xl colorverderr font-bold mb-4">Resumen</p>

                <table class="table-auto w-full">
                    <thead>
                        <tr class="colorverderr font-bold">
                            <th></th>
                            <th class="text-xs sm:text-base">Precio</th>
                            <th class="text-xs sm:text-base">Cant</th>
                            <th class="text-xs sm:text-base">total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">

                        @foreach ($items as $item)
                            <tr>
                                <td>
                                    <div class="flex ">
                                        <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}"
                                            alt="">
                                        <article>
                                            <h1 class="font-bold txttitel_resumen">{{ $item->name }}</h1>
                                            <div class="flex text-xs txttitel_resumen">
                                                @isset($item->options->color)
                                                    Color: {{ __($item->options->color) }}
                                                @endisset

                                                @isset($item->options->size)
                                                    - {{ $item->options->size }}
                                                @endisset
                                            </div>
                                        </article>
                                    </div>
                                </td>
                                <td class="text-center colorbroywm font-bold">
                                    S/ {{ $item->price }}
                                </td>
                                <td class="text-center colorbroywm font-bold">
                                    {{ $item->qty }}
                                </td>
                                <td class="text-center colorbroywm font-bold">
                                    S/ {{ $item->price * $item->qty }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>



        </div>
        <div class="md:col-span-2">
            <div class="bg-white rounded-lg shadow-lg px-4 md:px-6 pt-6 ">
                <div class="flex justify-between items-center mb-4">
                    <div class="">
                        <img src=" {{ asset('images/bolsacompra1/visa.jpg') }}"
                        class="h-15 w-20 object-cover" alt="">
                        <img src="{{ asset('images/bolsacompra1/mastercard.jpg') }}" class="h-15 w-20 object-cover"
                            alt="">
                    </div>
                    <div class="">
                        <img src="
                        {{ asset('images/bolsacompra1/american.jpg') }}" class="h-15 w-20 object-cover" alt="">
                        <img src="{{ asset('images/bolsacompra1/diners.jpg') }}" class="h-15 w-20 object-cover"
                            alt="">

                    </div>
                    <div class="colorbroywm ">
                        <p class="mb-1  text-sm font-bold ">
                            Subotal: S/{{ $order->total - $order->shipping_cost }}
                        </p>
                        <p class="mb-3  text-sm font-bold ">
                            Envio: S/{{ $order->shipping_cost }}
                        </p>
                        <p class="mb-3 text-lg font-bold uppercase">
                            Total: S/{{ $order->total }}
                        </p>

                        {{-- <div class="cho-container">
                        </div> --}}

                    </div>
                </div>

                {{-- <div id="paypal-button-container"></div> --}}
                {{-- // cambie estso --}}

                {{-- <x-jet-button wire:loading.attr="disabled" wire:target="create_order" class="mt-6 mb-4 bgvrdff"
                    wire:click="create_order">
                    Realizar pedido
                </x-jet-button> --}}

                <div class="kr-embedded" kr-form-token="<?php echo $formToken; ?>">
                    <!-- payment form fields -->
                    <div class="kr-pan"></div>
                    <div class="kr-expiry"></div>
                    <div class="kr-security-code"></div>

                    <!-- payment form submit button -->
                    <button class="kr-payment-button"></button>

                    <!-- error zone -->
                    <div class="kr-form-error"></div>
                </div>
            </div>

        </div>
        
    </div>

    <script 
    src="<?php echo $client->getClientEndpoint(); ?>/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
        kr-public-key="<?php echo $client->getPublicKey(); ?>"
        kr-post-url-success="{{route('orders.pay', $order)}}">
    </script>

    {{-- <script src="https://sdk.mercadopago.com/js/v2"></script> --}}

    {{-- <script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
            locale: 'es-AR'
        });

        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: '{{ $preference->id }}'
            },
            render: {
                container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                label: 'Pagar',
            }
        });
    </script> --}}
     {{-- @push('script')
        <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}"></script>
        <script>
            paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: "{{ $order->total }}"
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {

                        Livewire.emit('payOrder');

                        // console.log(details);
                        // alert('Transaction completed by ' + details.payer.name.given_name);

                    });
                }
            }).render('#paypal-button-container'); // Display payment options on your web page
        </script>
    @endpush --}}


</div>
