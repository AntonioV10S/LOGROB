<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>

</head>

<body>

    <form action="{{url('productos')}}" method = 'post'>
        @csrf
        <div>
            <label>Categoria</label>
            <select name="autor" >
            @foreach($categoria as $item)
            <option value="{{$item->id}}">{{$item->descripcion}}</option>
            @endforeach
            </select>
     </div>
    </form>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Descripcion</th>
                <th>Nombre del producto</th>
                <th>Fecha de vencimiento</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->fecha_vencimiento}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->cantidad_stock}}</td>
            </tr>
            @endforeach
        </tbody>


</body>

</html>
