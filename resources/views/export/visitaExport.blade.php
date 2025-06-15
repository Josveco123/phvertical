<table>
<thead>
    <tr>
        <th>Nombre</th>
        <th>Razon Social</th>
        <th>Whatsapp</th>
        <th>Ciudad</th>
        <th>Fecha de Visita</th>
    </tr>
</thead>
<tbody>
    @foreach ($visitas as $visita)

    <tr>
        <td>{{$visita->nombre}}</td>
        <td>{{$visita->razon_social}}</td>
        <td>{{$visita->whatsapp}}</td>
        <td>{{$visita->ciudad}}</td>
        <td>{{$visita->fecha_visita}}</td>
    </tr>
    @endforeach
</tbody>
</table>
