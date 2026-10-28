#include <stdio.h> //INCLUINDO UMA BIBLIOTECA (UM MONTE DE FUNÃ‡ÃƒO)
#define NUMERO_DE_TENTATIVAS 5 //

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    //IMPRIME O CABEÇALHO DO JOGO
    printf("*****************************************\n");
    printf("* Bem vindo ao nosso jogo de advinhacao *\n");
    printf("*****************************************\n");

    int numeropensado = 42;
    int chute;
    int acertou = (chute == numeropensado);
    int maior = chute > numeropensado;
    int menor = chute < numeropensado;

    for (int i = 1; i <= NUMERO_DE_TENTATIVAS; i++){
        printf("\nQual o seu chute? ");
        scanf("%d", &chute);
        printf("Tentaiva %d de %d\n", i, NUMERO_DE_TENTATIVAS);     

        int acertou = (chute == numeropensado);
        //printf("Acertou: %d\n" , acertou);  //PARA ELE DAR O 0(FALSE) OU 1(TRUE), EXIBE DE ACORDO COM O VALOR QUE VOCÊ COLOCOU      

        if(chute == 0){
            printf("Nao e permitido o numero 0\n");
            i--; //NÃO SOMA NO INCREMENTO SE EU COLOCAR O NÚMERO INVÁLIDO              
        } 

            else if(chute < 0){
                printf("Nao e permitido numeros negativos\n");                
                i--; //NÃO SOMA NO INCREMENTO SE EU COLOCAR O NÚMERO INVÁLIDO
            }   

            else if(acertou){
                printf("Parabens, voce acertou! \n");
                break; //PARAR DE EXECUTAR O FOR
            } 

            else if(maior){
                printf("Seu chute foi maior que o numero secreto\n");
            }

            else{
                printf("Seu chute foi menor que o numero secreto\n");
        }
    }   
                
}


//IF VAI SER O MAIOR
//ELSE VAI SER O MENOR
//FOR N TEM ;
//FOR É UMA FUNÇÃO