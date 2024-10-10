<?php

class Carro extends BusinessObject {

    private $id;
    private $nome;
    private $marca;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setMarca($marca): void {
        $this->marca = $marca;
    }
}
