<?php

class OrcamentoExportado implements ConteudoExportado {
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento){
        $this->orcamento = $orcamento;
    }
    public function exportar(): array{
        return [
            "key" => "value",
        ];
    }
}