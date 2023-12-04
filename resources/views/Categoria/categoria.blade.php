<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>

</head>

<body>

    <form action="{{url('categorias')}}" method = 'post'>
        @csrf
        <div>
            <label >Descripcion</label>
            <input type="text" name="descripcion">
        </div>
        <button type='submit' class="btn btn-primary">Guardar</button>
    </form>

</body>
<a href="{{url('productos')}}">Ir a Productos</a>
</html>
