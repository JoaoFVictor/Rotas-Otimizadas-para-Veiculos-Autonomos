#include <bits/stdc++.h>
#include "BuscaEmLargura.h"
#include "AlgoritimosBuscaAbstrato.h"

using std::cout; using std::vector; using std::accumulate;

extern "C"{
    typedef struct ParametrosAlgoritimo {
        unsigned tipoDeBusca;
        unsigned tamanhoHorizontalMapa;
        unsigned tamanhoVerticallMapa;
        unsigned pontoInicialX;
        unsigned pontoInicialY;
        unsigned pontoFinalX;
        unsigned pontoFinalY;
    } ParametrosAlgoritimo;

    enum tipoDeBusca
    {
        buscaEmLargura = 0
    };

    const char * calcularRota(ParametrosAlgoritimo parametros, char * mapa)
    {
        AlgoritimosBuscaAbstrato * algoritimo;

        switch(parametros.tipoDeBusca)
        {
            case buscaEmLargura:
                algoritimo = new BuscaEmLargura;
                break;
            default:
                return mapa;
                break;
        }

        algoritimo->setMapa(mapa, parametros.tamanhoHorizontalMapa, parametros.tamanhoVerticallMapa);
        const char * rota = algoritimo->calcularRota(parametros.pontoInicialX, parametros.pontoInicialY, parametros.pontoFinalX, parametros.pontoFinalY);
        delete algoritimo;

        return rota;
    }
}