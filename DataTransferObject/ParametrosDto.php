<?php

namespace DataTransferObject;

class ParametrosDto
{
    private int $tipoDeBusca;
    private int $tamanhoHorizontalMapa;
    private int $tamanhoVerticallMapa;
    private int $pontoInicialX;
    private int $pontoInicialY;
    private int $pontoFinalX;
    private int $pontoFinalY;
    private string $mapa;

    public function tratarEntrada(string $dados): void
    {
        $json = json_decode($dados);
        $this->tipoDeBusca = $json->tipo_de_busca;
        $this->tamanhoHorizontalMapa = $json->tamanho_horizontal_mapa;
        $this->tamanhoVerticallMapa = $json->tamanho_vertical_mapa;
        $this->pontoInicialX = $json->ponto_inicial_x;
        $this->pontoInicialY = $json->ponto_inicial_y;
        $this->pontoFinalX = $json->ponto_final_x;
        $this->pontoFinalY = $json->ponto_final_y;
        $this->mapa = $json->mapa;
    }

    public function getDadosEntradaTratado(): object
    {
        $dto = new \stdClass;
        $dto->tipoDeBusca = $this->tipoDeBusca;
        $dto->tamanhoHorizontalMapa = $this->tamanhoHorizontalMapa;
        $dto->tamanhoVerticallMapa = $this->tamanhoVerticallMapa;
        $dto->pontoInicialX = $this->pontoInicialX;
        $dto->pontoInicialY = $this->pontoInicialY;
        $dto->pontoFinalX = $this->pontoFinalX;
        $dto->pontoFinalY = $this->pontoFinalY;
        $dto->mapa = $this->mapa;

        return $dto;
    }
}