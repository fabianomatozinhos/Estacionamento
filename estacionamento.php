<?php

class Estacionamento {
    
	private $dataEntrada;
	private $horaEntrada;
	private $dataSaida;
	private $horaSaida;
	private $numVagas;
    private $valor;
    
	public function getEntrada() {
		return $this->dataEntrada.' - '.$this->horaEntrada;
	}
	public function setEntrada($data, $hora) {
		$this->dataEntrada = $data;	
		$this->horaEntrada = $hora;	
	}
	public function getSaida() {
		return $this->dataSaida.' - '.$this->horaSaida;
	}
	public function setSaida($data, $hora) {
		$this->dataSaida = $data;	
		$this->horaSaida = $hora;	
	}
	public function getVagas() {
		return $this->numVagas;
	}
	public function setVagas($numVagas) {
		$this->numVagas = $numVagas;
	}
	public function getValor() {
		return $this->valor;
	}
	public function setValor($valor) {
		$this->valor = $valor;
	}
}

