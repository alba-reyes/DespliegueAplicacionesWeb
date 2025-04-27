<?php
/**
 * @author Alba Reyes Ojeda
 * @version 1.0.0
 * @internal Nota para desarrollo
 */
class Documentacion {
    /**
     * Suma dos números enteros
     * @param int $a Primer valor
     * @param int $b Segundo valor
     * @return int Resultado
     * @throws InvalidArgumentException
     */
    public static function sumar(int $a, int $b): int {
        if (!is_int($a) || !is_int($b)) {
            throw new InvalidArgumentException("Deben ser enteros");
        }
        return $a + $b;
    }

    /**
     * Convierte texto a mayúsculas
     * @param string $texto Entrada
     * @return string Texto en mayúsculas
     */
    public static function aMayusculas(string $texto): string {
        return strtoupper($texto);
    }
}
