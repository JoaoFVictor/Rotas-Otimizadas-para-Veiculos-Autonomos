<?php

namespace DataTransferObject;

class ParametrosDto
{
    public int $tipoDeBusca;
    public int $tamanhoHorizontalMapa;
    public int $tamanhoVerticallMapa;
    public int $pontoInicialX;
    public int $pontoInicialY;
    public int $pontoFinalX;
    public int $pontoFinalY;
    public string $mapa;

    public function __construct(
        int $tipoDeBusca,
        int $tamanhoHorizontalMapa,
        int $tamanhoVerticallMapa,
        int $pontoInicialX,
        int $pontoInicialY,
        int $pontoFinalX,
        int $pontoFinalY,
        string $mapa
    ) {
        $this->tipoDeBusca = $tipoDeBusca;
        $this->tamanhoHorizontalMapa = $tamanhoHorizontalMapa;
        $this->tamanhoVerticallMapa = $tamanhoVerticallMapa;
        $this->pontoInicialX = $pontoInicialX;
        $this->pontoInicialY = $pontoInicialY;
        $this->pontoFinalX = $pontoFinalX;
        $this->pontoFinalY = $pontoFinalY;
        $this->mapa = $mapa;
    }

    public static function tratarEntrada(string $dados): static
    {
        $json = json_decode($dados);
        return new static(
            $json->tipo_de_busca,
            $json->tamanho_horizontal_mapa,
            $json->tamanho_vertical_mapa,
            $json->ponto_inicial_x,
            $json->ponto_inicial_y,
            $json->ponto_final_x,
            $json->ponto_final_y,
            $json->mapa,
        );
    }
}