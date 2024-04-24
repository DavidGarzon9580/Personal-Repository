<?php

// Ejercicio 1: Programa para multiplicar 3 números
$num1 = 5; // Primer número
$num2 = 10; // Segundo número
$num3 = 3; // Tercer número
$resultado = $num1 * $num2 * $num3; // Multiplicación de los tres números
echo "1. El resultado de la multiplicación es: " . $resultado . "<br>";

// Ejercicio 2: Programa para calcular el cuadrado de un número
$numero = 7; // Número para calcular el cuadrado
$cuadrado = $numero * $numero; // Calcula el cuadrado
echo "2. El cuadrado de " . $numero . " es: " . $cuadrado . "<br>";

// Ejercicio 3: Programa para calcular la distancia recorrida en un movimiento rectilíneo
$velocidad = 60; // Velocidad en Km/h
$tiempo = 2; // Tiempo en horas
$distancia = $velocidad * $tiempo; // Fórmula de distancia
echo "3. La distancia recorrida es: " . $distancia . " Km<br>";

// Ejercicio 4: Programa para calcular la edad de una persona
$anio_actual = 2024; // Año actual
$anio_nacimiento = 1995; // Año de nacimiento
$edad = $anio_actual - $anio_nacimiento; // Cálculo de la edad
echo "4. La edad es: " . $edad . " años<br>";

// Ejercicio 5: Programa para calcular el 20% de un número
$numero = 100; // Número de entrada
$porcentaje = 20; // Porcentaje a calcular
$porcentaje_calculado = ($porcentaje / 100) * $numero; // Cálculo del porcentaje
echo "5. El 20% de " . $numero . " es: " . $porcentaje_calculado . "<br>";

// Ejercicio 6: Programa para calcular el 30%, el 60% y el 90% de cualquier número
$numero = 200; // Número de entrada
$porcentaje_30 = ($numero * 30) / 100; // Cálculo del 30%
$porcentaje_60 = ($numero * 60) / 100; // Cálculo del 60%
$porcentaje_90 = ($numero * 90) / 100; // Cálculo del 90%
echo " 6. ". "<br>";
echo "   - " . "   El 30% de " . $numero . " es: " . $porcentaje_30 . "<br>";
echo "   - " . "   El 60% de " . $numero . " es: " . $porcentaje_60 . "<br>";
echo "   - " . "   El 90% de " . $numero . " es: " . $porcentaje_90 . "<br>";

// Ejercicio 7: Programa para calcular el área de un cuadrado
$lado = 5; // Longitud del lado del cuadrado
$area = $lado * $lado; // Fórmula del área
echo "7. El área del cuadrado es: " . $area . "<br>";

// Ejercicio 8: Programa para calcular el promedio de 5 números
$numeros = array(10, 15, 20, 25, 30); // Lista de números
$suma = array_sum($numeros); // Suma de los números
$promedio = $suma / count($numeros); // Cálculo del promedio
echo "8. El promedio de los números es: " . $promedio . "<br>";

// Ejercicio 9: Programa para calcular el precio total con IVA de una compra
$valor_unitario = 50; // Valor unitario del producto
$cantidad = 3; // Cantidad de productos
$subtotal = $valor_unitario * $cantidad; // Subtotal sin IVA
$iva = ($subtotal * 16) / 100; // Cálculo del IVA
$total = $subtotal + $iva; // Total a pagar con IVA
echo "9. El total a pagar con IVA es: " . $total . "<br>";

// Ejercicio 10: Programa para calcular el salario neto de un empleado
$salario_diario = 100; // Salario diario del empleado
$dias_trabajados = 20; // Días trabajados en el mes
$pension = ($salario_diario * $dias_trabajados * 10) / 100; // Descuento por pensión
$salud = ($salario_diario * $dias_trabajados * 15) / 100; // Descuento por salud
$salario_neto = ($salario_diario * $dias_trabajados) - $pension - $salud; // Salario neto
echo "10. El salario neto a pagar es: " . $salario_neto . "<br>";

// Ejercicio 11: Programa para calcular la raíz cuadrada de un número (sin usar función)
$numero = 25; // Número para calcular la raíz cuadrada
$raiz_cuadrada = sqrt($numero); // Cálculo de la raíz cuadrada
echo "11. La raíz cuadrada de " . $numero . " es: " . $raiz_cuadrada . "<br>";

// Ejercicio 12: Calcular la hipotenusa con el Teorema de Pitágoras (sin usar funciones)
$cateto1 = 3; // Longitud del primer cateto
$cateto2 = 4; // Longitud del segundo cateto
$hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2)); // Cálculo de la hipotenusa
echo "12. La hipotenusa es: " . $hipotenusa . "<br>";

// Ejercicio 13: Solicitar tiempo en segundos y transformar a horas y minutos
$segundos = 7200; // Tiempo en segundos
$horas = floor($segundos / 3600); // Cálculo de las horas
$minutos = floor(($segundos % 3600) / 60); // Cálculo de los minutos
echo "13. El tiempo de " . $segundos . " segundos es: " . $horas . " horas y " . $minutos . " minutos<br>";

// Ejercicio 14: Solicitar al usuario una distancia en metros y transformar a km, cm y mm
$distancia_metros = 2500; // Distancia en metros
$distancia_km = $distancia_metros / 1000; // Conversión a kilómetros
$distancia_cm = $distancia_metros * 100; // Conversión a centímetros
$distancia_mm = $distancia_metros * 1000; // Conversión a milímetros
echo "14. La distancia de " . $distancia_metros . " metros es:<br>";
echo "   - " . $distancia_km . " kilómetros<br>";
echo "   - " . $distancia_cm . " centímetros<br>";
echo "   - " . $distancia_mm . " milímetros<br>";

?>