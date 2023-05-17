<?php


$registrarOrc = new RegistroOrcamento(new CurlHttpAdapter());
$registrarOrc->registrar(new Orcamento());
