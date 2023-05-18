<?php

class PedidoExportado implements ConteudoExportado {
    private Pedido $pedido;

    public function __construct(Pedido $pedido){
        $this->pedido = $pedido;
    }
    public function exportar(): array{
        return [
            "key" => "value",
        ];
    }
}