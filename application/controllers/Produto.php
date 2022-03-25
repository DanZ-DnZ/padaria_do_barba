<?php 
    class Produto extends CI_Controller{
        public function index(){
            $this->load->model("produtomodel");

            $produtos = $this->produtomodel->selecionarTodos();

            $tabela = '';

            foreach($produtos as $item){
                $tabela = $tabela. "
                    <tr>
                        <td>". $item -> produto ."</td>
                        <td>". $item-> perecivel ."</td>
                        <td>". $item -> valor ."</td>
                        <td>". $item->tipo ."</td>
                    </tr>

                    ";
            }
        }
    }
?>
