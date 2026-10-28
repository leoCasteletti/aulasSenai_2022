#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    float bandeira_1 = 1.80, bandeira_2 = 2.30, kmrodados, taxaMinima;
    int escolhabandeira, desconto;

    printf("Digite o numero da bandeira (1 ou 2): ");
    scanf("%d", &escolhabandeira);

    if(escolhabandeira == 1){        
        printf("Digite a kilometragem rodada: ");
        scanf("%f", &kmrodados);        
            
        if(kmrodados < taxaMinima){
            printf("O valor da corrida eh: %.2f\n", taxaMinima);
        }

        if(kmrodados > taxaMinima){
            float resultadobandeira1 = kmrodados * bandeira_2;
            printf("O valor da corrida eh: %.2f\n", resultadobandeira1);
            printf("Deseja aplicar desconto? (1-Sim ou 2-Nao) ");
            scanf("%d", &desconto);

            if(desconto == 1){
                printf("Desconto de 30%% aplicado, valor resultante de R$%.2f" , (resultadobandeira1 * 70) / 100);
            }
        }
    } 

    if(escolhabandeira == 2){        
        printf("Digite a kilometragem rodada: ");
        scanf("%f", &kmrodados);        
            
        if(kmrodados < taxaMinima){
            printf("O valor da corrida eh: %.2f\n", taxaMinima);
        }

        if(kmrodados > taxaMinima){
            float resultadobandeira2 = kmrodados * bandeira_2;
            printf("O valor da corrida eh: %.2f\n", resultadobandeira2);
            printf("Deseja aplicar desconto? (1-Sim ou 2-Nao) ");
            scanf("%d", &desconto);

            if(desconto == 1){
                printf("Desconto de 30%% aplicado, valor resultante de R$%.2f" , (resultadobandeira2 * 70) / 100);
            }
        }
    }
}