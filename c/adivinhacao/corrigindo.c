#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    // imprime o cabecalho do nosso jogo
    printf("**\n");
    printf("* Bem vindo ao nosso jogo de adivinhacao *\n");
    printf("**\n");

    int segundos = time(0);
    srand(segundos);

    int numerogrande = rand();

    int numerosecreto = numerogrande % 100;
    int chute;
    int tentativas = 1;
    
    double pontos = 1000;

    int acertou = 0;

    int numerodetentativas = 5;

    for(int i = 1; i <= numerodetentativas; i++) {
    //for(int i = 1; i <= NUMERO_DE_TENTATIVAS; i++) {
        //printf("Tentativa %d de %d\n", i, NUMERO_DE_TENTATIVAS);
        printf("Tentativa %d\n", tentativas);
        printf("Qual e o seu chute?");

        scanf("%d", &chute);
        printf("Seu chute foi %d\n", chute);

        if(chute < 0) {
            printf("Voce nao pode chutar numeros negativos\n");
            //i--;

            continue;
        }

           acertou = (chute == numerogrande);
        int maior = chute > numerosecreto;

        if(acertou) {
            //printf("Parabens! Voce acertou!\n");
            //printf("Jogue de novo, voce e um bom jogador!!\n");

            break;
        }

        else if(maior) {
                printf("Seu chute foi maior que o numero secreto\n");
        }

        else {
            printf("Seu chute foi menor que o numero secreto\n");
        }
        tentativas++;

        double pontosperdidos = abs(chute - numerosecreto) / (double) 2;
        pontos = pontos - pontosperdidos;
        }

    printf("Fim de jogo.\n");

    if(acertou){
        printf("você ganhou\n");
        printf ("você acertou em %d tentativas!\n", tentativas);
        printf("total de pontos: %.1f\n", pontos);
    } else{
        printf("Você perdeu! tente de novo");
    }

}