<x-app-layout>
    <div>
        <div class="bgfondo bgfondoprguntfe  w-full h-96 relative ">
            <div class="absolute positionimg">
                <img src="{{ asset('images/tiemposdeentrega/img.png') }}" class="imgbg" alt="">
            </div>
            <div class="absolute txtp txtpprguntafre">
                <p class="txtp2blog">Libro de</p>
                <p class="txtp2blog">Reclamaciones</p>
            </div>
        </div>
    </div>
    <div class="mt-14 container">

        <p class="ylowwsa text-xl lg:text-2xl xl:text-3xl mb-14">¿Quieres presentar tu reclamo o requerimiento por correo
            electrónico? <br>Lee los siguientes pasos:</p>

        <div class="label">
            <div class="flex md:items-center">
                <div class="w-9 h-9  text-left font-bold rounded-full text-green-700 ">
                    01.
                </div>
                <div class=" md:flex   marron font-medium">
                    <div>
                        Descarga el archivo excel
                    </div>
                    <div>
                    <button class="colorrosita bgreclamvrd font-semibold "><span class=""><i class="fas fa-download"></i></span> Libro de reclamaciones</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="label">
            <div class="flex">
                <div class="w-9 h-9  text-left font-bold rounded-full text-green-700 ">
                    02.
                </div>
                <div class="  marron font-medium">
                    Guarda el archivo descargado en tu computadora.
                </div>
            </div>
        </div>
        <div class="label">
            <div class="flex">
                <div class="w-9 h-9  text-left font-bold rounded-full text-green-700 ">
                    03.
                </div>
                <div class="  marron font-medium">
                    Completa todos los campos obligatorios del formulario.
                </div>
            </div>
        </div>
        <div class="label">
            <div class="flex">
                <div class="w-9 h-9  text-left font-bold rounded-full text-green-700 ">
                    04.
                </div>
                <div class=" marron font-medium">
                    Una vez finalizado, guarda el archivo y envíanos tu reclamo a nuestro correo: <br> <span
                        class="vrdbld">green@green.pe</span> Al momento de adjuntar el archivo excel, deberás
                    colocar <br> <span class="vrdbldvrdbld">“REQUERIMIENTO”</span> (Depende de tu situación) - <span
                        class="vrdbld">NOMBRES Y APELLIDOS.</span>
                </div>
            </div>
        </div>
        <div class="label">
            <div class="flex">
                <div class="w-9 h-9  text-left font-bold rounded-full text-green-700 ">
                    05.
                </div>
                <div class=" marron font-medium">
                    De conformidad y en cumplimiento del <span class="vrdbld">D.S. 011-2011 PCM</span> , el
                    plazo de atención del reclamo es de <br> <span class="vrdbld">30 días</span> calendario
                    desde su presentación, el cual podrá extenderse excepcionalmente de acuerdo <br> a la complejidad
                    del requerimiento.
                </div>
            </div>
        </div>
        <div class="label">
            <div class="flex">
                <div class="w-9 h-9  text-left font-bold rounded-full text-green-700 ">
                    06.
                </div>
                <div class="  marron font-medium">
                    Nos comunicaremos contigo para confirmar la recepción de tu reclamo.
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-6 mt-6 md:mt-10 pb-12">
            <div class="md:col-span-2  lg:col-span-1 bg-greend">
                <div class="flex justify-center py-14">
                    <img src="{{ asset('images/reclamaciones/icon_.png') }}" class=" h-24" alt="">
                </div>
            </div>
            <div class="md:col-span-4 lg:col-span-5 bg-bord-greend">
                <div class="mx-6 py-7">
                    <p class=" mb-2 font-base text-justify">
                        Green SAC, con RUC 88598982, propietario de la marca GREEN – looks different, con domicilio
                        Calle Sao Paulo 120, Lince, Lima 15084 - Perú.
                    <p class="mb-2">
                        <span class="vrdbld"> RECLAMO:</span> Disconformidad relacionada a los productos o
                        servicios.

                    <p class="mb-2">
                        <span class="vrdbld">QUEJA:</span> Disconformidad no relacionada a los productos o
                        servicios o malestar o descontento
                        respecto a la atención a los clientes.
                    </p>
                    <p>
                        La formulación del reclamo no impide acudir a otras vías de solución de controversias ni es
                        requisito previo para interponer una denuncia ante el INDECOPI.
                    </p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
