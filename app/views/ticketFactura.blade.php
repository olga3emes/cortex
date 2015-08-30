
<table style="width: 50%">
    <tr>
        <td colspan="5" style="text-align: center"><img style="margin: 0 auto; width: 15%;" src="{{URL::asset('images/logo.png')}}"></td>
    </tr>
    <tr>
        <td colspan="5" style="text-align: center">C/ Las Cabezas de San Juan</td>
    </tr>
    <tr>

        <td colspan="5" style="text-align: center">Dos Hermanas</td>

    </tr>
    <tr>

        <td  colspan="5" style="text-align: center">Sevilla</td>

    </tr>
    <tr>

        <td colspan="5" style="text-align: center">Tlfn: +34 955 677 264</td>

    </tr>
    <tr>
        <td colspan="5" style="text-align: center">Fecha: {{Tools::formatearFecha($cita->fecha)}}</td>


    </tr>
    <tr>
        <td colspan="5" style="text-align:center; padding-bottom: 5%; padding-top: 5%;">Cliente:{{' '.$cita->cliente}}</td>

    </tr>
    <tr>
        <td style="text-align:right">Servicio___</td>
        <td>{{$servicioActual->nombre}}</td>
        <td></td>
        <td></td>
        <td style="text-align:left ">{{Tools::precioConIva($servicioActual->precio,$servicioActual->iva)}}€</td>
    </tr>
    @if(isset($ofertaActual))
    <tr>
        <td style="text-align:right">Oferta ____</td>
        <td>{{$ofertaActual->nombre}}</td>
        <td></td>
        <td></td>
        <td style="text-align:left ">-{{round(Tools::precioConIva($servicioActual->precio,$servicioActual->iva)*($ofertaActual->porcentaje/100),2)}}</td>
    </tr>
    @endif

    @foreach($productosTickets as $pticket)
    <tr>
        <td style="text-align:right">Producto __ </td>

        <td>{{Producto::encontrarProducto($pticket)->nombre}}</td>
        <td></td>
        <td>x{{$pticket->cantidad}}</td>
        <td  style="text-align:left ">{{round($pticket->cantidad*Tools::precioConIva($pticket->precio,$pticket->iva),2).'€'}}</td>
    </tr>
        @if(Oferta::encontrarOferta($pticket)!='')
    <tr>
        <td style="text-align:right">Oferta ____</td>
        <td>{{Oferta::encontrarOferta($pticket)->nombre}}</td>
        <td></td>
        <td></td>
        <td  style="text-align:left ">-{{round((Tools::precioConIva($pticket->precio,$pticket->iva)*$pticket->cantidad)*(Oferta::encontrarOferta($pticket)->porcentaje/100),2)}}</td>
    </tr>
        @endif

    @endforeach
    <tr>
        <td colspan="5" style="text-align:center ">--------------------------------------------------------------------------------------------------------</td>

    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align:right ">Total con IVA.........</td>
        <td style="text-align:left ">{{$ticket->total}}€</td>

    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td style="text-align:right ">Total sin IVA..........</td>
        <td style="text-align:left ">{{(Tools::precioQuitarIva($ticket->total,$ticket->iva))}}€</td>

    </tr>
    <tr>
        <td colspan="5" style="padding-bottom: 5%;"></td>
    </tr>
    <tr>

        <td colspan="5" style="text-align: center">IVA INCLUIDO</td>

    </tr>

    <tr>

        <td colspan="5" style="text-align: center">¡Gracias por su visita!</td>

    </tr>
</table>
</div>