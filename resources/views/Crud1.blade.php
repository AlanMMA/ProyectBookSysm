<!DOCTYPE html>
<html lang= "{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-3">¿Que deseas consultar?</h1>

    <div class="p-5 table-responsive">
        <table class="table table-dark">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Nombre del libro</th>
                <th scope="col">Año de creación</th>
                <th scope="col">Genero</th>
                <th scope="col">Observaciones</th>
                <th scope="col">Id del autor</th>
            </thead>
            <tbody>
                @foreach ($datos as $item)
    <tr class="table-active">
      <th scope="row">{{$item-> ID_Libro}}</th>
      <th>{{$item-> Nombre}}</th>
      <th>{{$item-> año}}</th>
      <th>{{$item-> categoria}}</th>
      <th>{{$item-> Observaciones}}</th>
      <th>{{$item-> ID_Autor}}</th>
    </tr>
    @endforeach
</tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>