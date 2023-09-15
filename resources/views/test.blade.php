<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js','resources/css/app.scss','resources/css/style.css'])
    <title>Ejemplo</title>
</head>

<body>

    @isset($paises)
    <?php
        if (isset($ordenar_por)) {
            $columnas_pais = reset($paises);

            if (array_key_exists($ordenar_por, $columnas_pais)) {
                $columna_ordenar = array_column($paises, $ordenar_por);
                array_multisort($columna_ordenar, SORT_DESC, $paises);
            }
        }
    ?>



    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">País</th>
                <th scope="col">Capital</th>
                <th scope="col">Moneda</th>
                <th scope="col">Población</th>
                <th scope="col">Descripción</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($paises as $pais => $info)
                @if ($loop->iteration <= $registros_a_mostrar && $info['poblacion'] >= $población_minima)
                    <tr>
                        <td>{{$pais}}</td>

                        @foreach ($info as $clave => $valor)
                            @if($clave == 'poblacion')
                                <td>{{number_format($valor,0,",",".")}}</td>
                            @else
                                <td>{{$valor}}</td>
                            @endif
                        @endforeach
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    @endisset

</body>

</html>
