<?php
    require_once './FiguraGeometrica.php';
    class Triangulo extends FiguraGeometrica{
        public $lado2;
        public $lado3;
        public function __construct($tipoFigura, $lado1, $lado2, $lado3){
            parent::__construct($tipoFigura, $lado1);
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
        }
        
    }