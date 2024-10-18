<?php
    class FiguraGeometrica{
        public $tipoFigura;
        public $lado1;
        function getTipoFigura($tipoFigura){
            return $this->tipoFigura;
        }
        function setTipoFigura($tipoFigura){
            $this->tipoFigura = $tipoFigura;
        }
        function getLado1($lado1){
            return $this->lado1;
        }
        function setLado1($lado1){
            $this->lado1 = $lado1;
        }
        public function __construct(){}
        public function calcularArea(){
            //de ser sobreescrit si es necessari
        }
    }