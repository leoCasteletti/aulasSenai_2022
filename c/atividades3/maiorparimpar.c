#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int numero1;
    int numero2;

    printf("Digite um numero inteiro: ");
    scanf("%d", &numero1);
    printf("Digite outro numero inteiro: ");
    scanf("%d", &numero2);    

    if(numero1 > numero2){
        printf("O primeiro número eh maior que o segundo");
        if (numero1 % 2 == 0){
            printf(" e eh par");
        } else {
            printf("e eh impar");
        }
    }
    if(numero2 > numero1){
        printf("O segundo número eh maior que o primeiro");
        if (numero2 % 2 == 0){
            printf(" e eh par");
        } else {
            printf( " e eh impar");
        }
    }

}