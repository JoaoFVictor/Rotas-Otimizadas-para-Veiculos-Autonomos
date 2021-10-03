#include "BuscaEmLargura.h"
#include <bits/stdc++.h>

using namespace std;

int** mapa;

void BuscaEmLargura::setMapa(char * caminhoMapa, int tamanhoHorizontalMapa, int tamanhoVerticallMapa)
{
    mapa = new int*[tamanhoHorizontalMapa];
    for(int i = 0; i < tamanhoHorizontalMapa; i++)
    {
        mapa[i] = new int[tamanhoVerticallMapa];
    }

    for(int i = 0; i < tamanhoHorizontalMapa; i++)
    {
        for(int j = 0; j < tamanhoVerticallMapa; j++)
        {
            mapa[i][j] = *(caminhoMapa + (tamanhoVerticallMapa * i + j)) - '0';
        }
    }
}

const char * BuscaEmLargura::calcularRota(int pontoInicialX, int pontoInicialY, int pontoFinalX, int pontoFinalY)
{
    return "nada por enquanto.";
}
