<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH . 'modules/pagamento/libraries/component/pgt/PagamentoComponent.php';
include_once APPPATH . 'modules/pagamento/libraries/component/pgt/PagamentoData.php';

class PagamentoModel extends MY_Model{

    function __construct(){
        parent::__construct('pagamento');
    }

    public function setPagamento(){
        $data = new PagamentoData(1);
        $pagamento = new PagamentoComponent($data);
        
        if(sizeof($_POST) == 0) {

        } else {

            $dados = $this->input->post();

            if($dados['numcartao'] > 0) {
                $pagamento->inserirCartao($dados);
            }
            if($dados['cpf'] > 0) {
                $pagamento->inserirBoleto($dados);
            }

        }
        return $pagamento->getHTML();
    }
}