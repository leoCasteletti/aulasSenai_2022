#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    float bandeira_1 = 1.80, bandeira_2 = 2.30, kmrodados, taxaMinima;
    int escolhabandeira;

    printf("Digite o numero da bandeira (1 ou 2): ");
    scanf("%d", &escolhabandeira);

    if(escolhabandeira == 1){        
        printf("Digite a kilometragem rodada: ");
        scanf("%f", &kmrodados);        
            
        if(kmrodados < taxaMinima){
            printf("O valor da corrida eh: %.2f", taxaMinima);
        }

        if(kmrodados > taxaMinima){
            printf("O valor da corrida eh: %.2f", kmrodados * bandeira_1);
        }
    } 

    if(escolhabandeira == 2){        
        printf("Digite a kilometragem rodada: ");
        scanf("%f", &kmrodados);        
            
        if(kmrodados < taxaMinima){
            printf("O valor da corrida eh: %.2f", taxaMinima);
        }

        if(kmrodados > taxaMinima){
            printf("O valor da corrida eh: %.2f", kmrodados * bandeira_2);
        }
    }    
}