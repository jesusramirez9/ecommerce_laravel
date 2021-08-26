<div class="container py-8 grid lg:grid-cols-2 xl:grid-cols-5  gap-6">
    <div class="order-2 lg:order-1 lg:col-span-1 xl:col-span-3">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="mb-4">
                <x-jet-label value="Nombre de contácto">
                </x-jet-label>
                <x-jet-input wire:model.defer="contact" type="text" placeholder="Ingrese el nombre de la persona que recibirá el producto"
                    class="w-full"></x-jet-input>
                    <x-jet-input-error for="contact"></x-jet-input-error>
            </div>
            <div>
                <x-jet-label value="Teléfono de contácto">
                </x-jet-label>

                <x-jet-input wire:model.defer="phone" type="text" placeholder="Ingrese un número de teléfono de contácto" class="w-full">
                </x-jet-input>
                <x-jet-input-error for="phone"></x-jet-input-error>

            </div>
        </div>

        <div x-data="{ envio_type: @entangle('envio_type') }">
            <p class="mt-6 mb-3 text-lg text-gray-700 font-semibold">Envíos</p>

            <label class="bg-white rounded-lg shadow px-6 py-4 flex items-center mb-4">
                <input x-model="envio_type" name="envio_type" value="1" type="radio" name="envio" class="text-gray-600">
                <span class="ml-2 text-gray-700">
                    Recojo en tienda (Calle False 123)
                </span>
                <span class="font-semibold text-gray-700 ml-auto">
                    Gratis
                </span>
            </label>

            <div class="bg-white rounded-lg shadow">

                <label class=" px-6 py-4 flex items-center">
                    <input x-model="envio_type"  name="envio_type" value="2" type="radio" name="envio" class="text-gray-600">
                    <span class="ml-2 text-gray-700">
                        Envío a domicilio
                    </span>
                </label>
                <div class=" grid grid-cols-2 gap-6 hidden px-6 pb-6" :class="{ 'hidden': envio_type != 2 }">
                    {{-- departamentoss --}}
                    <div>
                        <x-jet-label value="Departamento" />
                        <select
                            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            wire:model="department_id">
                            <option value="" disabled selected>Seleccione un Departamento</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach

                        </select>
                        <x-jet-input-error for="department_id"></x-jet-input-error>
                    </div>
                    {{-- ciudades --}}
                    <div>
                        <x-jet-label value="Ciudad" />
                        <select
                            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            wire:model="city_id">
                            <option value="" disabled selected>Seleccione una Ciudad</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach

                        </select>
                        <x-jet-input-error for="city_id"></x-jet-input-error>
                    </div>
                    {{-- Distritos --}}
                    <div>
                        <x-jet-label value="Distritos" />
                        <select
                            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            wire:model="district_id">
                            <option value="" disabled selected>Seleccione una Ciudad</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach

                        </select>
                        <x-jet-input-error for="district_id"></x-jet-input-error>
                    </div>

                    <div>
                        <x-jet-label value="Dirección" />
                        <x-jet-input class="w-full" wire:model="address" type="text" />
                        <x-jet-input-error for="address"></x-jet-input-error>
                    </div>
                    <div class="col-span-2">
                        <x-jet-label value="Referencia" />
                        <x-jet-input class="w-full" wire:model="references" type="text" />
                        <x-jet-input-error for="references"></x-jet-input-error>
                    </div>
                </div>

            </div>

        </div>
        <div>
            <x-jet-button
            wire:loading.attr="disabled"
            wire:target="create_order"
            class="mt-6 mb-4" wire:click="create_order">
                Continuar con la compra
            </x-jet-button>

            <hr>

            <p class="text-sm text-gray-700 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius voluptates atque nihil nisi qui in
                voluptatum minus ratione? Cumque impedit aut tempora minima architecto ad? Nostrum quidem atque corporis
                aspernatur. <a href="" class="font-semibold text-orange-700">Políticas y privacidad</a>
            </p>

        </div>

    </div>

    <div class="order-1 lg:order-2 lg:col-span-1 xl:col-span-2">
        <div class="bg-white rounded-lg shadow p-6">
            <ul>
                @forelse (Cart::content() as $item)
                    <li class="flex p-2 border-b border-gray-200">
                        <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">
                        <article class="flex-1">
                            <h1 class="font-bold">{{ $item->name }}</h1>
                            <div class="flex">
                                <p>Cant: {{ $item->qty }}</p>
                                @isset($item->options['color'])
                                    <p class="mx-2">- Color: {{ __($item->options['color']) }}</p>
                                @endisset
                                @isset($item->options['size'])
                                    <p> - {{ $item->options['size'] }}</p>
                                @endisset
                            </div>

                            <p>USD {{ $item->price }}</p>
                        </article>
                    </li>
                @empty
                    <li class="py-6 px-4">
                        <p class="text-center text-gray-700">
                            No tiene agregado ningún item en el carrito
                        </p>
                    </li>
                @endforelse
            </ul>

            <hr class="mt-4 mb-3">
            <div class="text-gray-700">
                <p class="flex justify-between items-center">
                    Subtotal
                    <span class="font-semibold">{{ Cart::subtotal() }} USD</span>
                </p>
                <p class="flex justify-between items-center">
                    Envío
                    <span class="font-semibold">
                        @if ($envio_type == 1 || $shipping_cost == 0)
                            Gratis
                        @else
                            {{$shipping_cost}} USD
                        @endif
                    </span>
                </p>
                <hr class="mt-4 mb-3">
                <p class="flex justify-between items-center font-semibold">
                    <span class="text-lg">Total</span>
                    @if ($envio_type == 1)
                    {{ Cart::subTotal() }} USD
                    @else
                    {{ Cart::subTotal() + $shipping_cost}} USD
                    @endif

                </p>
            </div>
        </div>
    </div>
</div>
