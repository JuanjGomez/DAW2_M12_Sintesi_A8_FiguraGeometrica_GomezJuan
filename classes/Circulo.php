<?php
    require_once './FiguraGeometrica.php';
    class Circulo extends FiguraGeometrica{
        public function __construct($tipoFigura,$lado1){
            parent::__construct($tipoFigura,$lado1);
        }
        public function calcularArea(){
            return pi() * pow($this->lado1, 2);
        }
        public function calcularPerimetro(){
            return 2 * pi() * $this->lado1;
        }
        public function __tostring(){
            return "<p><strong>Figura: </strong>" . $this->tipoFigura . "</p>" .
            "<p><strong>Radio: </strong>". $this->lado1. "</p>".
            "<h3><strong>RESULTADOS</strong></h3>" .
            "<p><strong>Área: </strong>". $this->calcularArea(). "</p>".
            "<p><strong>Perímetro: </strong>". $this->calcularPerimetro(). "</p>";
        }
    }