<?php

class Veiculo {
    private $placa;
    private $tipo;
    private $marca;
    private $modelo;


	public function getPlaca() {
		return $this->placa;
	}
	public function setPlaca($placa) {
		$this->placa = $placa;
    }
    
    public function getTipo() {
		return $this->tipo;
	}
	public function setTipo($tipo) {
		$this->tipo = $tipo;
    }
    
    public function getMarca() {
		return $this->marca;
	}
	public function setmMaca($marca) {
		$this->marca = $marca;
    }
    
    public function getModelo() {
		return $this->modelo;
	}
	public function setModelo($modelo) {
		$this->modelo = $modelo;
	}
}

?>