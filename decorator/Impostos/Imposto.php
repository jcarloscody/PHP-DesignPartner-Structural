<?php


abstract class Imposto
{
    public ?Imposto $imposto;

    public function __construct(?Imposto $imposto)
    {
        $this->imposto = $imposto;
    }

   abstract protected function realizaCalculaImposto(Orcamento $orcamento): float;
   
    public function calculaImposto(Orcamento $orcamento): float{
        return $this->realizaCalculaImposto($orcamento) + $this->calculaOutroImposto($orcamento);
    }

    private function calculaOutroImposto(Orcamento $orcamento){
        //logica
    }
}