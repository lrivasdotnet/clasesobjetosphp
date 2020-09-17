<?php
    class claseTablaMultiplicar{
        private $numeroTabla;
        private $resultado;

        function __construct(){
            $this->numeroTabla = 1;
            $this->resultado = "";
        }

        //Setter
        public function establecerNumeroTabla($valor){
          $this->numeroTabla = $valor;
        }

        //Getter
        public function obtenerNumeroTabla(){
          return $this->numeroTabla;
        }

        public function obtenerResultado(){
          return $this->resultado;
        }

        public function generarTabla(){
            //5x1=5, 5x2=10 ...
            $this->resultado = "
            <table style='width:400px;'>
            ";
            for($i=1;$i<=10;$i++){
                $this->resultado .= "
                <tr>
                  <td>". $this->numeroTabla ."</td>
                  <td>X</td>
                  <td>". $i ."</td>
                  <td>=</td>
                  <td>". ($this->numeroTabla * $i) ."</td>
                </tr>
                ";
            }
            $this->resultado .= "</table>";
        }
    }
?>
