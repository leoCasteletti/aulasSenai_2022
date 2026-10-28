//7- Crie um programa de sua escolha que utilize if

#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#define NUMERO_DE_TENTATIVAS 5

int main(){
    printf("      P  /_\\  P                             \n");
    printf("     /_\\_|_|_/_\\                           \n");
    printf(" n_n | ||. .|| | n_n         Bem vindo ao    \n");
    printf(" |_|_|nnnn nnnn|_|_|     Jogo de Adivinhação!\n");
    printf("|" "  |  |_|  |"  " |                        \n");
    printf("|_____| ' _ ' |_____|                        \n");
    printf("      \\__|_|__/                             \n");

    int segundos = time(0);
    srand(segundos);

    int numerogrande = rand();
    int numeropensado = numerogrande % 100;

    int chute;
    
    int tentativas = 1;
    double pontos = 1000;

    int acertou = 0;

    int nivel;
    printf("Qual o nivel de dificuldade");
    printf("(1) Facil (2) Medio (3) Dificil\n\n");
    printf("Escolha:");
    scanf("%d", &nivel);

    int numerodetentativas;
      
    if(nivel == 1){
        numerodetentativas = 20;
    }
    else if (nivel == 2){
        numerodetentativas = 15;
    }
    else {
        numerodetentativas = 6;
    }

    printf("O numero e: %d\n", numeropensado);

    for (int i = 1; i <= numerodetentativas; i++){
        printf("Tentativa %d de %d\n", i, numerodetentativas); 
        printf("Qual o seu chute? ");
        scanf("%d", &chute);        
        printf("Seu chute foi %d\n", chute);
        
    if(chute == 0){
            printf("Numero nao permitido\n");                                
        } 

            else if(chute < 0){
                printf("Nao e permitido numeros negativos\n");  
                continue;
            }        
                
            acertou = (chute == numeropensado);
            int maior = chute > numeropensado;
                        
            if(acertou){                
            break;
            } 

            else if(maior){
                printf("Seu chute foi maior que o numero secreto\n");
            }

            else{
                printf("Seu chute foi menor que o numero secreto\n");
        }
        tentativas++;

        double pontosperdidos = abs(chute - numeropensado) / (double) 2;
        pontos = pontos - pontosperdidos; 
    }

    printf("Fim de jogo\n");

    if(acertou){
        printf("Voce ganhou!\n");

        printf("             OOOOOOOOOOO                \n");              
        printf("         OOOOOOOOOOOOOOOOOOO            \n");        
        printf("      OOOOOO  OOOOOOOOO  OOOOOO         \n");      
        printf("    OOOOOO      OOOOO      OOOOOO       \n");
        printf("  OOOOOOOO  #   OOOOO  #   OOOOOOOO     \n");
        printf(" OOOOOOOOOO    OOOOOOO    OOOOOOOOOO    \n");
        printf("OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO   \n");
        printf("OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO   \n");
        printf("OOOO  OOOOOOOOOOOOOOOOOOOOOOOOO  OOOO   \n");
        printf(" OOOO  OOOOOOOOOOOOOOOOOOOOOOO  OOOO    \n");
        printf("  OOOO   OOOOOOOOOOOOOOOOOOOO  OOOO     \n");
        printf("    OOOOO   OOOOOOOOOOOOOOO   OOOO      \n");
        printf("      OOOOOO   OOOOOOOOO   OOOOOO       \n"); 
        printf("         OOOOOO         OOOOOO          \n");
        printf("             OOOOOOOOOOOO               \n");


        printf("Voce acertou em %d tentativa(as)!\n", tentativas);
        printf("Total de pontos: %.2f\n", pontos);
    } else {
        printf("Voce perdeu! Tente de novo!\n");

        printf("       \\|/ ____ \\|/    \n");
        printf("        @~/ ,. \\~@      \n");
        printf("       /_( \\__/ )_\\    \n");
        printf("          \\__U_/        \n");

    }    

    printf("\nBY DEVELOPER ALOY!\n!");
                
}