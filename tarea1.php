<!DOCTYPE html>
<html>
<body>

<?php
// array for the metrics


$metricas_longitud = array("Milimetros", "Centimetros", "Metros","Kilometros","Pulgadas","Pies", "Yardas","Brazas","Millas Tierra", "Millas Mar");
$metricas_superficie = array("Milimetros&sup2", "Centimetros&sup2", "Metros&sup2","Kilometros&sup2", "Hectareas","Pulgadas&sup2","Pies&sup2", "Yardas&sup2","Acres","Millas&sup2");
$metricas_volumen = array("Milimetros&sup2", "Centimetros&sup2", "Metros&sup2","Kilometros","Pulgadas","Pies", "Yardas","Brazas","Millas Tierra", "Millas Mar");
$metricas_capacidad = array("Milimetros&sup2", "Centimetros&sup2", "Metros&sup2","Kilometros","Pulgadas","Pies", "Yardas","Brazas","Millas Tierra", "Millas Mar");
$metricas_peso = array("Milimetros&sup2", "Centimetros&sup2", "Metros&sup2","Kilometros","Pulgadas","Pies", "Yardas","Brazas","Millas Tierra", "Millas Mar");
$metricas_velocidad_potencia = array("Milimetros&sup2", "Centimetros&sup2", "Metros&sup2","Kilometros","Pulgadas","Pies", "Yardas","Brazas","Millas Tierra", "Millas Mar");

?>

<h1>Conversiones</h1>

<div name="conversores">

<div name=" Longitud">
<form action="conversores.php" method="post">
<table>
<tr>
<td>
<input type="number" name="cantidad_longitud" >
</td>
</tr>

<tr>
<td>
From:
<?php
    $opciones = array("KM", "M", "CM");
    echo createSelectBox($metricas_superficie);
?>
</td>
</tr>

<tr>
<td>
to: 
<?php
    $opciones = array("Milimetros", "Centimetros", "Metros","Kilometros","Pulgadas","Pies", "Yardas","Brazas","Millas Tierra", "Millas Mar");
    echo createSelectBox($opciones);
?>
</td>
</tr>

</table>
<input type="submit">
</form>
</div>

<div name=" Superficie">
</div>

<div name=" Volumen">
</div>

<div name=" Capacidad">
</div>

<div name=" Peso">
</div>

</div>

</body>
</html>


<?php

    function createSelectBox($options){
        $out = '<select>';
        for($idx = 0; $idx <= sizeof($options) - 1 ; $idx++){
            $out .= '<option>' . $options[$idx] . '</option>';
        }
        $out .= '</select>';
        return $out;
    }

?>