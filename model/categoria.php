<?php

class Cliente {
    private $id;
    private $nome;
    private $cpf;

    public function __construct($id,$nome, $cpf) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    //SET
    public function setId($id) {
        $this->id = $id;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    //GET
    public function getNome() {
        return $this->nome;
    }
    public function getId() {
        return $this->id;
    }

    public function getCpf(){
        return $this->cpf;
    }
}

class Livro {
    private $id;
    private $nome;
    private $descricao;

    public function __construct($id,$nome,$descricao) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    //SET
    public function setId($id) {
        $this->id = $id;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    //GET
    public function getNome() {
        return $this->nome;
    }
    public function getId() {
        return $this->id;
    }
    public function getDescricao() {
        return $this->descricao;
    }
}

class Vestuario {
    private $id;
    private $nome;
    private $unidade;

    public function __construct($id,$nome, $unidade) {
        $this->id = $id;
        $this->nome = $nome;
        $this->unidade = $unidade;
    }

    //SET
    public function setId($id) {
        $this->id = $id;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setUnidade($unidade) {
        $this->unidade = $unidade;
    }

    //GET
    public function getNome() {
        return $this->nome;
    }
    public function getId() {
        return $this->id;
    }
    public function getUnidade() {
        return $this->unidade;
    }
}