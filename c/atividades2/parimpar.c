#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int numero;

    printf("Digite um numero inteiro: ");
    scanf("%d", &numero);

    if(numero %2 == 0){
        printf("Numero %d eh par", numero);
    } else {
        printf("Numero %d eh impar", numero);
    }
}