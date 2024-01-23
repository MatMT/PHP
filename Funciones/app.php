<?php

// Función de multiplicar1
function multiplicar($n1, $n2)
{
    return $n1 * $n2;
}

// Validar que los campos son números
function isNumber($n1, $n2)
{
    if (is_numeric($n1) && is_numeric($n2)) {
        return true;
    } else {
        return false;
    }
}

// Mostrar un error
function mostrarAlerta()
{
    echo "<span>Los datos ingresados no son válidos</span>";
}

function validarCampos()
{
    // Variables
    $num1 = $_POST['num1'] ?? null;
    $num2 = $_POST['num2'] ?? null;

    // Validar si los campos existen
    if (isset($num1) && isset($num2)) {
        if (isNumber($num1, $num2)) {
            // Se imprime el resultado
            echo multiplicar($num1, $num2);
        } else {
            mostrarAlerta();
        }
    }
}
