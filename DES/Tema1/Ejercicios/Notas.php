<?php
/*
// 1) Array Asociativo de alumnos con sus notas


funciones
calcularMedia($alumno)
notaMaxima($alumno)
estaAprobado($alumno) = "Todas Notas > 5"

php notas.php calcularMedia Ana
*/

$notas = [
"Ana" => ["Matemáticas" => 8, "Lengua" => 7, "Historia" => 4],
"Juan" => ["Matemáticas" => 6, "Lengua" => 5, "Historia" => 9],
"Maria" => ["Matemáticas" => 9, "Lengua" =>7, "Historia" => 8],
"Pedro" => ["Matemáticas" => 4, "Lengua" =>5, "Historia" => 6],
"Lucia" => ["Matemáticas" => 10, "Lengua" =>9, "Historia" => 10],
"Carlos" => ["Matemáticas" => 3, "Lengua" =>4, "Historia" => 2],
];


function calcularMedia($alumno, $notas) {
    return round(array_sum($alumno) / count($alumno));
    //foreach ($notas[$alumno] as $nota) {
    //    $suma += $nota;
    //}
    //return $suma / count($notas[$alumno]);
}

function notaMaxima($alumno, $notas) {
    return max($notas[$alumno]);
}

function estaAprobado($alumno, $notas) {
    foreach ($notas[$alumno] as $nota) {
        if ($nota < 5) {
            return false;
        }
    }
    return true;
}

function mejorAlumno($notas) {
    $mejor = "";
    $maxMedia = 0;
    foreach ($notas as $alumno => $notasAlumno) {
        $media = calcularMedia($notasAlumno, $notas);
        if ($media > $maxMedia) {
            $maxMedia = $media;
            $mejor = $alumno;
        }
    }
    return $mejor;
}

/*
$a = $argv[1];
$b = $argv[2];
if ($a == "Media") {
echo "Media de $a: " . calcularMedia($b, $notas) . "\n";
}if ($a == "Maxima") {
echo "Nota Máxima de $a: " . notaMaxima($b, $notas) . "\n";
}if ($a == "Aprobado") {
echo "$b está aprobado: " . (estaAprobado($b, $notas) ? "Sí" : "No") . "\n";
}
*/

foreach ($notas as $alumno => $notasAlumno) {
    echo "Alumno: " . $alumno . "\n";
    echo "Media: " . calcularMedia($notasAlumno, $notas) . "\n";
    echo "Nota Máxima: " . notaMaxima($alumno, $notas) . "\n";
    echo "Aprobado: " . (estaAprobado($alumno, $notas) ? "Sí" : "No") . "\n";
    echo "-----------------------\n";
}
echo "Mejor alumno: " . mejorAlumno($notas) . "\n";

?>