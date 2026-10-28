#include <stdio.h> //INCLUINDO UMA BIBLIOTECA (UM MONTE DE FUNÇÃO)
#include <stdlib.h>
#include <time.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    //IMPRIME O CABEÇALHO DO JOGO
    printf("***************************************************\n");
    printf("****** Bem vindo ao nosso jogo de advinhacao ******\n");
    printf("***************************************************\n");

    int segundos = time(0);
    srand(segundos);

    int numerogrande = rand();
    int numeropensado = numerogrande % 100;

    int chute;
    int ganhou = 0;

    int tentativas = ganhou + 1;
    double pontos = 1000;

    printf("O numero e: %d", numeropensado);

    while(ganhou == 0){
        //printf("Varialvel numero grande e: %d\n", numerogrande);
        printf("\nTentativa %d\n", tentativas);
        printf("Qual o seu chute? ");
        scanf("%d", &chute);        
        printf("Seu chute foi %d\n", chute);
        tentativas++;
        
    if(chute == 0){
            printf("Nao e permitido o numero 0\n");                           
        } 

            else if(chute < 0){
                printf("Nao e permitido numeros negativos\n");  
                continue;   //UTILIZADO PARA QUANDO QUISERMOS CONTINUAR A EXECUÇÃO DO LOOP SEM QUEBRÁ-LO, COMO O BREAK
            }        
                
            int acertou = (chute == numeropensado);
            int maior = chute > numeropensado;
                        
            if(acertou){
                printf("Parabens, voce acertou! \n");
                printf("Voce acertou na tentativa %d\n", tentativas - 1);
                ganhou = 1;
            } 

            else if(maior){
                printf("Seu chute foi maior que o numero secreto\n");
            }

            else{
                printf("Seu chute foi menor que o numero secreto\n");
        }
        double pontosperdidos = abs(chute - numeropensado) / (double) 2;
        pontos = pontos - pontosperdidos; 
        
    }
    printf("Fim de jogo\n");
    printf("Voce acertou em %d tentativas!\n", tentativas - 1);
    printf("Total de pontos: %.2f\n", pontos);
                
}


//IF VAI SER O MAIOR
//ELSE VAI SER O MENOR
//FOR N TEM ;
//FOR É UMA FUNÇÃO