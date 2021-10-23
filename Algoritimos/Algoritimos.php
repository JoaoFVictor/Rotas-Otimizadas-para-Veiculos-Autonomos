<?php

namespace Algoritimos;
require_once 'Cabecalhos.php';
require_once __DIR__.'/../DataTransferObject/ParametrosDto.php';

use FFI;
use FFI\CData;
use DataTransferObject\ParametrosDto;

class Algoritimos
{
    private const CAMINHO_ARQUIVO_BIBLIOTECA = __DIR__.'/../bibliotecas/algoritimos.so';

    public function calcularRota(ParametrosDto $parametrosDto): string
    {
        $cabecalho = new Cabecalhos();
        var_dump($parametrosDto);
        $mapa = &$parametrosDto->mapa;

        $ffi = FFI::cdef($cabecalho(), self::CAMINHO_ARQUIVO_BIBLIOTECA);
        $structAlgoritimo = $this->setStructAlgoritimo($ffi, $parametrosDto);
        return $ffi->calcularRota($structAlgoritimo, $mapa);
    }

    private function setStructAlgoritimo(FFI $ffi, ParametrosDto $dados): CData
    {
        $algoritimo = $ffi->new('ParametrosAlgoritimo');
        $algoritimo->tipoDeBusca = $dados->tipoDeBusca;
        $algoritimo->tamanhoHorizontalMapa = $dados->tamanhoHorizontalMapa;
        $algoritimo->tamanhoVerticallMapa = $dados->tamanhoVerticallMapa;
        $algoritimo->pontoInicialX = $dados->pontoInicialX;
        $algoritimo->pontoInicialY = $dados->pontoInicialY;
        $algoritimo->pontoFinalX = $dados->pontoFinalX;
        $algoritimo->pontoFinalY = $dados->pontoFinalY;

        return $algoritimo;
    }
}