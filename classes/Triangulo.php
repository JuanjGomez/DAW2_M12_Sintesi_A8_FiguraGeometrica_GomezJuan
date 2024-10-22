<?php
    require_once 'FiguraGeometrica.php';
    class Triangulo extends FiguraGeometrica{
        public $lado2;
        public $lado3;
        public function __construct($tipoFigura, $lado1, $lado2, $lado3){
            parent::__construct($tipoFigura, $lado1);
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
        }
        public function calcularArea(){
            $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
            return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
        }
        public function calcularPerimetro(){
            return $this->lado1 + $this->lado2 + $this->lado3;
        }
        public function __tostring(){
            return "<h3><strong>CALCULOS</strong></h3>" .
            "<p><strong>Figura: </strong>" . $this->tipoFigura . "</p>" . 
            "<p><strong>Cateto A: </strong> " . $this->lado1 . " </p>" . 
            "<p><strong>Cateto B: </strong> " . $this->lado2 . " </p>" . 
            "<p><strong>Cateto C: </strong> " . $this->lado3 . " </p>" . 
            "<h3><strong>RESULTADOS</strong></h3>" . 
            "<div id='separacion'>" .
                "<p><strong>Area: </strong> ". $this->calcularArea(). "</p>" . 
                "<p><strong>Perimetro: </strong> " . $this->calcularPerimetro() . "</p>" .
            "</div>";
        }
    }