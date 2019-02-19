<?php 

    class Proprietario {
        private $nome;
        private $cpf;
        private $contato;
        
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getCpf() {
            return $this->cpf;
        }
        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }
        public function getContato() {
            return $this->contato;
        }
        public function setContato($contato) {
            $this->contato = $contato;
        }
    }

?>