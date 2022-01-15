<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="<!-- CSS only -->">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>    
    <table>
        <tr>
            <th>
                <a href="{{route('prueba.index')}} ">Clientes</a>
            </th>
            <th>
                -
            </th>
            <th><a href="{{route('select_productos')}} ">Productos</a> </th>
        </tr>
    </table>
    @yield('content')
    <h4>footer</h4>
</body>
</html>