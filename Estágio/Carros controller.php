<?php

class Carros extends Secured_CI_Controller {

    public function index() {


        $carroDAO = new CarroDAO();

        if ($this->input->post()) {
            $carro = new Carro;
            $carro->setNome($this->input->post('nome'));
            $carro->setMarca($this->input->post('marca'));

            $carroDAO->insert($carro);

            redirect('carros/index');
        }

        $this->data['carros'] = $carroDAO->getAll();
        
        $this->render('carros/index', "Cadastro e Listagem de dados");
    }

    
    
    function primeiroMandamento() {

        $this->data['minha_variavel'] = "Oi, eu sou a Elisângela!";

        $this->data['var2'] = "Eu gosto de açaí com: ";

        //ATRIBUINDO VALORES AO ARRAY 'FRUTAS'
        $this->data['frutas'] = array("chocolate branco", "chocoball", "kiwi", "uva");

        foreach ($this->data ['frutas'] as &$fruta) {
            $fruta = strtoupper($fruta);
        }

        $this->render('carros/index', "Cadastro e Listagem de dados");
    }
}
