<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/util/CI_Object.php';


class PagamentoData extends CI_Object{

    public function __construct($id){
        parent::__construct();
        $this->load_data($id);
    }

    private function load_data($id){
        $rs = $this->db->get_where('config', array('id' => $id));

        foreach ($rs->row() as $key => $value) {
            $this->$key = $value;
        }

        $this->{'habilitado'} = $this->modconfig->mod_pagamento_hab_pagamento;
        $this->{'parcela'} = $this->modconfig->mod_pagamento_pacela_pag;
    }
}