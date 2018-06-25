<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH . 'libraries/util/CI_Object.php';

class PagamentoComponent extends CI_Object {

    private $data;
    private $cartao;
    private $boleto;

    public function __construct(PagamentoData $data){
        parent::__construct();
        $this->data = $data;
        $this->cartao = $data->habilitado;
        $this->boleto = $data->parcela;
    }

    public function getHTML(){
        return ;
    }


    public function inserirCartao($dados){
        
        if($habilitado) {

        $pagamento = $this->db->get('pagamento');
        $pagamento = $pagamento->result();
        $id = 0;

        foreach($pagamento as $index) {
            if(is_null($index->id)) {
                $id = 0; 
             } else {
                $id = $index->id;
             }
        }
        $id = $id + 1;
        $rs = "INSERT into pagamento (id, nome, numcartao, dtval, codseg, cpf, email) values ('".$id."', '" .$dados['nome'] . "', '". $dados['numcartao'] . "', '". $dados['dtval']."', '".$dados['codseg']."', '000', 'example@example.com')";
        $this->db->query($rs);
        
        }
        
    }

    public function inserirBoleto($dados){
        
        if($habilitado){ 

        $pagamento = $this->db->get('pagamento');
        $pagamento = $pagamento->result();
        $id = 0;

        foreach($pagamento as $index) {
            if(is_null($index->id)) {
                $id = 0; 
             } else {
                $id = $index->id;
             }
        }
        $id = $id + 1;
        $rs = "INSERT into pagamento (id, nome, numcartao, dtval, codseg, cpf, email) values ('".$id."', '" .$dados['nome'] . "', '000', '0', '000', '".$dados['cpf']."', '".$dados['email']."')";
        $this->db->query($rs);
        }

    }
}