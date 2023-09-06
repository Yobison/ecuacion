<?php

Class Ec2g {
    private $coefA;
    private $coefB;
    private $coefC;

    function __construct($p_coefA, $p_coefB, $p_coefC) {
        $this->coefA = $p_coefA;
        $this->coefB = $p_coefB;
        $this->coefC = $p_coefC;
    }

    function segundoGrado() {
        $interiorRaiz = ($this->coefB * $this->coefB) - (4 * ($this->coefA * $this->coefC));
        $raizCuadrada = 0;
        if ($this->coefA == 0) {
            return "No tiene solución";
        }
        else if ($interiorRaiz < 0) {
            echo "No tiene solución real.";
        }
        else if ($interiorRaiz > 0) {
            $raizCuadrada = sqrt($interiorRaiz);
            $solucion1 = ($raizCuadrada - ($this->coefB))  / (2 * ($this->coefA));
            $solucion2 = (-($this->coefB) - $raizCuadrada) / (2 * ($this->coefA));
            return "Tiene dos soluciones: " . $solucion1 . " y " . $solucion2;
        }
        else {
            return "La solución es: " . (-($this->coefB) / (2 * $this->coefA));
        }
    }
}

$mi_ecuacion = new Ec2g($_POST['numeroA'], $_POST['numeroB'], $_POST['numeroC']);

echo "La ecuación " . $_POST['numeroA'] . "x² +" . $_POST['numeroB'] . "x+" . $_POST['numeroC'] . " = 0: <br>";

echo $mi_ecuacion->segundoGrado();

?>