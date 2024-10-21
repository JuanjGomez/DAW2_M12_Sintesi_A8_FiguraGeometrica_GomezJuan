<?php
    require_once './FiguraGeometrica.php';
    class Cuadrado extends FiguraGeometrica {
        public function __construct($tipoFigura,$lado1) {
            parent::__construct($tipoFigura,$lado1);
        }
        public function calcularArea() {
            return $this->lado1 * $this->lado1;
        }
        public function calcularPerimetro() {
            return 4 * $this->lado1;
        }
        public function __toString() {
            return "<p><strong>Figura:</strong> " . $this->tipoFigura . "</p>" .
            "<p><strong>Lado:</strong> " . $this->lado1 . "</p>" .
            "<h3><strong>Resultados:</strong>" . "</h3>" . 
            "<p><strong>Área:</strong> " . $this->calcularArea() . "</p>" .
            "<p><strong>Perímetro:</strong> " . $this->calcularPerimetro() . "</p>";
        }
    }