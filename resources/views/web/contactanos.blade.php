<x-app-layout>
    <div class="ovfrhiddn">
        <div class="bgfondo w-full h-96 relative ">
            <div class="absolute positionimg">
                <img src="{{ asset('images/contactenos/fto1.png') }}"
                    class="imgbg animate__animated animate__fadeInRight" alt="">
            </div>
            <div class="absolute txtp">
                <p class="txtp2blog animate__animated animate__fadeInLeft">¿Necesitas</p>
                <p class="txtp3blog animate__animated animate__fadeInLeft">Ayuda?</p>
            </div>
        </div>
    </div>
    <div class="container ovfrhiddn">
        <p class="py-4 md:py-10 txt-last1 font-bold text-justify scrollflow -slide-bottom -opacity">Para consultas sobre
            representación de ventas, distribución y/o franquicias contáctenos a comercial@ greenmodaperu.com</p>
        <p class="py-4 md:py-10 txt-last1 font-bold text-justify scrollflow -slide-bottom -opacity"
            style="padding-top:0;">
            Horario de atención:
            <br><br>
            Lunes a viernes: 10:00 am - 20:00 pm
            <br>Sábados: 10:00 am - 20:00 pm
            <br>Domingos: 10:00 am - 18:00 pm

        </p>

        <form action="{{ route('contacto.store') }}" method="POST">
            @csrf
            <input type="text" class="form-control w-full scrollflow -slide-left -opacity" name="name"
                placeholder="Nombres y apellidos*" required>
            @error('name')
                <p><strong>{{ $message }}</strong></p>
            @enderror
            <input type="number" class="form-control w-full scrollflow -slide-right -opacity" name="celular"
                placeholder="Celular*" required>
            @error('celular')
                <p><strong>{{ $message }}</strong></p>
            @enderror
            <input type="email" class="form-control w-full scrollflow -slide-left -opacity" name="correo"
                placeholder="Correo*" required>
            @error('correo')
                <p><strong>{{ $message }}</strong></p>
            @enderror
            <textarea class="form-control w-full scrollflow -slide-right -opacity" name="mensaje" placeholder="Mensaje*"
                style="height: 200px" ngModel></textarea>
            @error('mensaje')
                <p><strong>{{ $message }}</strong></p>
            @enderror
            <div class="text-center spceenviar">
                <button type="submit"
                    class="btn_enviar hover:bg-green-100 scrollflow -slide-top -opacity">Enviar</button>
            </div>
        </form>

    </div>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif


</x-app-layout>
