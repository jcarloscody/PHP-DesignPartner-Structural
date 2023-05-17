<?php

class RegistroOrcamento {

    private HttpAdapter $http;

    public function __construct(HttpAdaper $http){
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento){
        if(!$orcamento->estadoAtual instanceof Finalizado){
            throw new Exception("Error Processing Request", 1);
        }
        $this->http->post("url", [
            'valor'=>$orcamento->valor
        ]);
    }
}