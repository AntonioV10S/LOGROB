<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
</head>
<body>

    <h2>Agregar Producto</h2>

    <form action="{{url('productos')}}" method="post">
        @csrf
        <div>
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" name="nombre" required>
        </div>
        <br>

        <div>
        <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
        <input type="date" name="fecha_vencimiento" required>
        </div>
        <br>

       <div>
       <label for="precio">Precio:</label>
       <input type="number" name="precio" step="0.01" required>
       </div>
        <br>

        <div>
        <label for="cantidad_stock">Cantidad en Stock:</label>
        <input type="number" id="cantidad_stock" name="cantidad_stock" required>
        </div>
        <br>


        <button type="submit">Agregar Producto</button>
    </form>

    <table border="2px">
        <thead>
            <tr>
                <th>Item</th>
                <th>Nombre del Producto</th>
                <th>Fecha de Vnecimiento</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->fecha_vencimiento}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->cantidad_stock}}</td>
                <td>{{$item->estado}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>



</body>
</html>

