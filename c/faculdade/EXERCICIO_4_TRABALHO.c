//Construir um programa em C para calcular o volume de um cubo (Comprimento * Largura* Altura).

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){
    int comprimento, largura, altura;

    printf("Calculando o volume de um CUBO\n\n");

    printf("Digite o COMPRIMENTO: ");
    scanf("%d", &comprimento);

    printf("Digite o LARGURA: ");
    scanf("%d", &largura);

    printf("Digite o ALTURA: ");
    scanf("%d", &altura);

    printf("O volume e: %d metros", largura * altura);

    printf("\nBY DEVELOPER ALOY!\n!");
}