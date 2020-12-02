<h1>Vista alumnos</h1>
@foreach($alumnos as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nombre}}</td>
    </tr>
    @endforeach()