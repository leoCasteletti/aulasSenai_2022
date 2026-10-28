#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int lado;

    printf("Digite o lado do quadrado em cm: ");
    scanf("%d", &lado);
    printf("A area do quadrado eh: %d\n", lado * lado);
    printf("O perimetro do quadrado: %d", lado * 4);
}