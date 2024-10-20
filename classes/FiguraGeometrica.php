<?php
    class FiguraGeometrica{
        public $tipoFigura;
        public $lado1;
        public function __construct($tipoFigura,$lado1){
            $this->setTipoFigura($tipoFigura);
            $this->setLado1($lado1);
        }
        public function setTipoFigura($tipoFigura){
            $this->tipoFigura = $tipoFigura;
        }
        public function setLado1($lado1){
            $this->lado1 = $lado1;
        }
        public function getTipoFigura(){
            return $this->tipoFigura;
        }
        public function getLado1(){
            return $this->lado1;
        }
        public function calcularArea(){
            //de ser sobreescrit si es necessari
        }
        function __destruct(){
            echo "La figura " . $this->tipoFigura . " ha sido destruida.";
        }
    }