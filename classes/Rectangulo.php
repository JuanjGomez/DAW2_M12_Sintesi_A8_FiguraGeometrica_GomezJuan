<?php
    require_once 'FiguraGeometrica.php';
    class Rectangulo extends FiguraGeometrica {
        public $lado2;
        public function __construct($tipoFigura,$lado1, $lado2) {
            parent::__construct($tipoFigura,$lado1);
            $this->lado2 = $lado2;
        }
        public function calcularArea() {
            return $this->lado1 * $this->lado2;
        }
        public function calcularPerimetro() {
            return 2 * ($this->lado1 + $this->lado2);
        }
        public function __tostring(){
            return "<h3><strong>CALCULOS</strong></h3>" .
            "<p><strong>Figura: </strong>" . $this->tipoFigura . "</p>" .
            "<p><strong>Base: </strong>". $this->lado1. "</p>".
            "<p><strong>Altura: </strong>". $this->lado2. "</p>".
            "<h3><strong>RESULTADOS</strong></h3>" .
            "<p><strong>Area: </strong>". $this->calcularArea(). "</p>".
            "<p><strong>Perimetro: </strong>". $this->calcularPerimetro(). "</p>";
        }
    }