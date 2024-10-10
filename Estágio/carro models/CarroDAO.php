<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CarroDAO extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Carrega a biblioteca de banco de dados
    }

    // Método para inserir um novo carro
    public function insert(Carro $carro) {
        $data = [
            'nome' => $carro->getNome(),
            'marca' => $carro->getMarca()
        ];

        return $this->db->insert('carros', $data);
    }

    // Método para buscar um carro pelo ID
    public function getById($id) {
        $query = $this->db->get_where('carros', ['id' => $id]);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $carro = new Carro();
            $carro->setId($row->id);
            $carro->setNome($row->nome);
            $carro->setMarca($row->marca);
            return $carro;
        }
        return null;
    }

    // Método para atualizar um carro
    public function update(Carro $carro) {
        $data = [
            'nome' => $carro->getNome(),
            'marca' => $carro->getMarca()
        ];

        $this->db->where('id', $carro->getId());
        return $this->db->update('carros', $data);
    }

    // Método para deletar um carro
    public function delete($id) {
        return $this->db->delete('carros', ['id' => $id]);
    }

    // Método para listar todos os carros
    public function getAll() {
        $query = $this->db->get('carros');
        $carros = [];

        foreach ($query->result() as $row) {
            $carro = new Carro();
            $carro->setId($row->id);
            $carro->setNome($row->nome);
            $carro->setMarca($row->marca);
            $carros[] = $carro;
        }

        return $carros;
    }
}
