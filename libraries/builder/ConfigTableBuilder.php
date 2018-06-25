<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/ConfigBuilder.php';


class ConfigTableBuilder extends ConfigBuilder{

    function __construct(){
        parent::__construct('pagamento');
    }

    function get_data(){
        // parâmetros básicos de configuração
        $base = parent::get_data();

        // parâmetros específicos de configuração
        $data = array(
            array(
                'nome' => 'mod_pagamento_hab_pagamento', 
                'valor' => true,
                'descricao' => 'Indica se o pagamento está ou não habilitado',
                'admin_only' => 0
            ),
            array(
                'nome' => 'mod_pagamento_pacela_pag', 
                'valor' => 6,
                'descricao' => 'Determina as parcelas possíveis para a realização do pagamento',
                'admin_only' => 0
            )
        );
        
        return array_merge($base, $data);
    }
}
