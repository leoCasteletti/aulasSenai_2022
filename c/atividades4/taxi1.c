#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    float bandeira_1 = 1.80, bandeira_2 = 2.30;
    int escolhabandeira, kmrodados;

    printf("Digite o numero da bandeira (1 ou 2): ");
    scanf("%d", &escolhabandeira);

    switch(escolhabandeira){
        case 1:
            printf("Digite a kilometragem rodada: ");
            scanf("%d", &kmrodados);
            printf("O valor da corrida eh: %.2f", bandeira_1 * kmrodados);
            break;    

        default:
            printf("Digite a kilometragem rodada: ");
            scanf("%d", &kmrodados);
            printf("O valor da corrida eh: %.2f", bandeira_2 * kmrodados);
    }
}