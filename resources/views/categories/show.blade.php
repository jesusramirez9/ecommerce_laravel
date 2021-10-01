<x-app-layout>
    <div>
        <div class="bgfondo  bgfondocategory w-full h-96 relative ">
            <div class="absolute positionimg">
                <img src="{{ asset('images/catalogo/img.png') }}" class="imgbg imgcategry" alt="">
            </div>
            <div class="absolute txtp txtpcategory">
                <p class="txtp3blog txtp1title">Temporada 2021</p>
                <p class="txtp2blog txtp2title">Acabados de calidad </p>
                <p class="txtp2blog txtp2title">¡Lo que tú necesitas! </p>

            </div>
        </div>
    </div>
    <div class="container  pt-6 md:pt-14 pb-14">
        {{-- <figure class="mb-4">
            <img class="w-full h-80 object-cover object-center"  src="{{Storage::url($category->image)}}" alt="">
        </figure> --}}

        @livewire('category-filter', ['category' => $category])
    </div>
   
</x-app-layout>