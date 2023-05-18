<?php

interface ArquivoExportado {
    public function salvar(ConteudoExportado $conteudoExportado): string;
}