<x-app-layout>
    <div>
        <div class="bgfondo w-full h-96 relative " >
            <div class="absolute positionimg">
                <img src="{{ asset('images/contactenos/fto1.png') }}" class="imgbg" alt="">
            </div>
            <div class="absolute txtp">
                <p class="txtp2blog">¿Necesitas</p>
                <p class="txtp3blog">Ayuda?</p>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="py-4 md:py-10 txt-last1 font-bold text-justify">Para consultas sobre representación de ventas, distribución y/o franquicias contáctenos a comercial@ greenmodaperu.com</p>
        <p class="py-4 md:py-10 txt-last1 font-bold text-justify" style="padding-top:0;">
            Horario de atención:
            <br><br>
            Lunes a viernes: 10:00 am - 20:00 pm
            <br>Sábados: 10:00 am - 20:00 pm
            <br>Domingos: 10:00 am - 18:00 pm

        </p>

        <form action="{{route('contacto.store')}}" method="POST" >
            @csrf
            <input type="text" class="form-control w-full"  name="name"  placeholder="Nombres y apellidos*" required>
            @error('name')
                <p><strong>{{$message}}</strong></p>
            @enderror
            <input type="number" class="form-control w-full" name="celular"  placeholder="Celular*" required>
            @error('celular')
            <p><strong>{{$message}}</strong></p>
        @enderror
            <input type="email" class="form-control w-full"  name="correo"  placeholder="Correo*" required>
            @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror
            <textarea class="form-control w-full"  name="mensaje" placeholder="Mensaje*"  style="height: 200px" ngModel></textarea>
            @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
            <div class="text-center spceenviar">
                <button type="submit" class="btn_enviar hover:bg-green-100">Enviar</button>
            </div>    
        </form>

    </div>

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif


</x-app-layout>