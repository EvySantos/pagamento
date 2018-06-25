<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/TableBuilder.php';

class PagamentoTableBuilder extends TableBuilder{

    public function __construct(){
        parent::__construct('pagamento');
    }

    function get_fields(){
        $fields['nome'] = array('type' => 'VARCHAR', 'constraint' =>  60);
        $fields['numcartao'] = array('type' => 'VARCHAR', 'constraint' => 12);
        $fields['dtval'] = array('type' => 'VARCHAR', 'constraint' =>  8);
        $fields['codseg'] = array('type' => 'VARCHAR', 'constraint' =>  4);
        $fields['cpf'] = array('type' => 'VARCHAR', 'constraint' =>  11);
        $fields['email'] = array('type' => 'VARCHAR', 'constraint' =>  50);

        return $fields;
    }

    function get_data(){
        // para inserir um registro na tabela jumbotron...
        $data[] = array(
            
        );

        return $data;
    }

}