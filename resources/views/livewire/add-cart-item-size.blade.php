<div x-data>
    <div class="text-xl text-gray-700">
        <p>Talla:</p>
        <select wire:model="size_id"
            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <option value="" selected disabled>Seleccione una talla</option>
            @foreach ($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="text-xl text-gray-700 mt-2">
        <p>Color:</p>
        <select wire:model="color_id"
            class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <option value="" selected disabled>Seleccione un color</option>
            @foreach ($colors as $color)
                <option class="capitalize" value="{{ $color->id }}">{{ __($color->name) }}</option>
            @endforeach
        </select>
    </div>

    <p class="text-gray-700 my-4"> <span class="text-lg font-semibold">Stock disponible: </span>
        @if ($quantity)
            {{ $quantity }}
        @else
            {{ $product->stock }}
        @endif
    </p>

    <div class="flex ">
        <div class="mr-4">
            <x-jet-secondary-button disabled x-bind:disabled="$wire.qty <= 1" wire:loading.attr="disabled"
                wire:target="decrement" wire:click="decrement">
                -
            </x-jet-secondary-button>
            <span class="mx-2 text-gray-700">{{ $qty }}</span>
            <x-jet-secondary-button x-bind:disabled="$wire.qty >= $wire.quantity" wire:loading.attr="disabled"
                wire:target="increment" wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>
        <div class="flex-1">
            <x-button x-bind:disabled="!$wire.quantity" x-bind:disabled="$wire.qty > $wire.quantity"
                wire:click="addItem" wire:loading.attr="disabled" wire:target="addItem" color="orange" class="w-full">
                Agregar al carrito de compras
            </x-button>
        </div>
    </div>
</div>
