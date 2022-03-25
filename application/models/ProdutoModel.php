<?php 

    class ProdutoModel extends CI_Model{
        
        public function selecionarTodos(){

            $consulta = $this->db->query("SELECT * FROM produto");

            return $consulta->result();
        }
    }
?>