#ifndef BUSCA_EM_LARGURA_H_INCLUDED
#define BUSCA_EM_LARGURA_H_INCLUDED
#include "AlgoritimosBuscaAbstrato.h"

class BuscaEmLargura : public AlgoritimosBuscaAbstrato
{
    public:
        void setMapa(char * caminhoMapa, int tamanhoHorizontalMapa, int tamanhoVerticallMapa);
        const char * calcularRota(int pontoInicialX, int pontoInicialY, int pontoFinalX, int pontoFinalY);
};

#endif