<x-app-layout>

    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
            <div>
                <!-- Place somewhere in the <body> of your page -->
                <div class="flexslider">
                    <ul class="slides">

                        @foreach ($product->images as $image)
                            <li data-thumb="{{ Storage::url($image->url) }}">
                                <img src="{{ Storage::url($image->url) }}" />
                            </li>
                        @endforeach

                    </ul>
                </div>

                <div class="-mt-10 text-gray-700">
                    <h2 class="font-bold text-lg">Descripción</h2>
                    {!! $product->description !!}
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold text-trueGray-700">{{ $product->name }}</h1>
                <div class="flex">
                    <p class="text-trueGray-700">Marca: <a
                            class="underline capitalize hover:text-orange-500">{{ $product->brand->name }}</a></p>
                    <p class="text-trueGray-700 mx-6">5<i class="fa fa-star text-sm text-yellow-400"></i></p>
                    <a class="underline hover:text-orange-600" href="">39 reseñas</a>
                </div>
                <p class="text-2xl my-4 font-semibold text-gray-700">USD {{ $product->price }}</p>
                <div class="bg-white rounded-lg shadow-lg mb-6 ">
                    <div class="flex p-4 items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-greenLime-600">
                            <i class="fas fa-truck text-sm text-white"></i>
                        </span>
                        <div class="ml-4">
                            <p class="text-lg font-semibold text-greenLime-600">Se hace envíos a todo el Perú</p>
                            <p>Recíbelo el {{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</p>
                        </div>
                    </div>
                </div>
                @if ($product->subcategory->size)
                    @livewire('add-cart-item-size', ['product' => $product])
                @elseif($product->subcategory->color)
                    @livewire('add-cart-item-color', ['product' => $product])
                @else
                    @livewire('add-cart-item', ['product' => $product])
                @endif
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
        </script>
    @endpush
</x-app-layout>
