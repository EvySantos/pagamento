<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pagamento extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('PagamentoModel', 'pagamento');
        $this->menu_itens = $this->pagamento->get_menu_itens();
    }

    /**
     * Página inicial do módulo; exibe sua funcionalidade principal. Além desta, um
     * módulo pode ter outras páginas, de acordo com sua finalidade. O importante é
     * lembrar que um módulo deve estar focado em fazer, bem feito e de forma flexível, 
     * apenas uma tarefa.
     */

     
    public function index(){
        
        $data['cartao'] = $this->pagamento->setPagamento();
        $data['boleto'] = $this->pagamento->setPagamento();
        $html =  $this->load->view('pagamentoview', $data);
        $this->show($html);
       
       
    }

    /**
     * Página de configuração do conteúdo exibido nas páginas de funcionalidades do módulo
     */
    public function edit(){
        $html = 'module pages content editor';
        $this->show($html);

    }


}