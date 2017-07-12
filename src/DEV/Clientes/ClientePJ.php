<?php
namespace DEV\Clientes;

use DEV\Clientes\Interfaces\ClienteInterface;

class ClientePJ extends ClienteAbstract implements ClienteInterface {
    
    public function __construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau) {
         
        parent::__construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau);
        $this->tipo = 2;
    }
    
}