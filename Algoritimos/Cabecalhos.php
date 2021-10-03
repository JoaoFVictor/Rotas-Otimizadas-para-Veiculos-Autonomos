<?php

namespace Algoritimos;

class Cabecalhos{
    public function __invoke(): string
    {
        return "
        typedef struct ParametrosAlgoritimo {
            unsigned tipoDeBusca;
            unsigned tamanhoHorizontalMapa;
            unsigned tamanhoVerticallMapa;
            unsigned pontoInicialX;
            unsigned pontoInicialY;
            unsigned pontoFinalX;
            unsigned pontoFinalY;
        } ParametrosAlgoritimo;
        
            const char * calcularRota(ParametrosAlgoritimo parametro, char * mapa);
        ";
    }
}