@props(['size' => 35, 'color' => 'gray'])
@php
    switch ($color) {
        case 'gray':
           
            $col = "#374151";

            break;
        case 'white':
        $col = "#FFFFFF";
            break;
        default:
        $col = "gray";
            break;
    }    
@endphp

<img src="{{asset('images/inicio/seccion1/icono3.png')}}" class="bols_clr"   x="0px" y="0px" width="{{$size}}" height="{{$size}}" >

