#ifndef ALGORITIMOS_H_INCLUDED
#define ALGORITIMOS_H_INCLUDED

class AlgoritimosBuscaAbstrato
{
    public:
        virtual void setMapa(char * caminhoMapa, int tamanhoHorizontalMapa, int tamanhoVerticallMapa) = 0;
        virtual const char * calcularRota(int pontoInicialX, int pontoInicialY, int pontoFinalX, int pontoFinalY) = 0;
};

#endif