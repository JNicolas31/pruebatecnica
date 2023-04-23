<!-- 1.- Crea una función que reciba un número entero como parámetro y devuelva si es par o impar. -->
<?php
    
    function numero($num)
    {

        if (($num % 2)==0)
        {
            echo 'Es un numero par';
        }
        else
        {
            echo 'El numero es impar';
        }
    }
?>

<!-- 2.- Crea una función que reciba una cadena de texto y devuelva la cantidad de palabras en ella. -->
<?php
    function palabras($pal)
    {
        echo "Son" . str_word_count($pal,0) . "palabras las que contiene";
    }
?>

<!-- 3.- Crear una función que permita a un usuario actualizar su información personal (nombre, dirección, teléfono) en una base de datos MySQL. -->

<!-- 4.- Crea una función que convierta un número decimal en su equivalente binario. -->
<?php
    function binario($decimal)
    {
        $binario = decbin($decimal);

        echo "La conversión del número es:" . $binario;
    }
?>

<!-- 5.- Crea una función que reciba una cadena de texto y devuelva la versión codificada en Base64. -->
<?php
    function base($cadena)
    {
        $codificado = base64_encode($cadena);

        echo "$cadena en base64 es $codificado";
    }
?>
<!-- 6.- Crea una función que reciba un número entero y devuelva su representación en palabras (por ejemplo, "123" se convertiría en "ciento veintitrés").  -->

<!-- 7.- Crea una función que reciba un arreglo de números y devuelva el promedio de sus valores. -->
<?php
    function promedio($numeros)
    {
        $suma = 0;

        foreach ($numeros as $numero)
        {
            $suma += $numero;
        }

        $elementos = count($numeros);

        $promedio = $suma/ $elementos;

        echo "El promedio es: $promedio";
    }

?>
<!-- 8.- Crea una función que reciba un arreglo de cadenas de texto y devuelva la cadena más larga  -->
<?php
    function cadena($cadena)
    {
        
        $largo = 0;
        
        for ($i = 0; $i < sizeof($cadena); $i++)
        {
            if ($largo < strlen($cadena[$i])) {
                $largo = strlen($cadena[$i]);
            }
        }
        echo "La palabra mas grande es" . $largo;
    }
?>
<!-- 9.- Crea una función que acepte una cadena y devuelva true si la cadena es un correo electrónico válido y false si no lo es.  -->
<?php
    function correo($correo)
    {
        if(filter_var($correo, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
?>
<!-- 10.- Crea una función que acepte un arreglo de cadenas y devuelva un arreglo con las cadenas que contengan al menos una vocal. -->
