<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/MenuBuilder.php';


class MenuTableBuilder extends MenuBuilder{

    function __construct(){
        parent::__construct('pagamento');
    }

    function get_data(){
        // páginas básicas: index e edit
        //$base = parent::get_data();

        // páginas extras: funcionalidades adicionais do módulo
        $data = array(
            array(
                'label'  => 'Pagamento', 
                'link'   => $this->mod_name,
                'name'   => $this->prefix.'pagamento',
                'module' => $this->mod_name
            )
        );

        return array_merge($data);
    }
}
