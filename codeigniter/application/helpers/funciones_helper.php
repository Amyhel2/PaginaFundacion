<?php
function formatearFecha($fecha)
{
    //2024-06-24 21:37:22
    $dia=substr($fecha,8,2);
    $mes=substr($fecha,5,2);
    $anio=substr($fecha,0,4);

    $fechaformateada=$dia."/".$mes."/".$anio;
    return $fechaformateada;
}

function estado($nota)
{
    if($nota>=61)
    {
        $estado="APROBADO";
    }
    else
    {
        $estado="REPROBADO";
    }
    return $estado;
}
?>