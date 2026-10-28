//Construa um programa para mostrar somente números pares;

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){;

    int numero;

    printf("Digite um valor limite: ");
    scanf("%d", &numero);

    int primeironumero = 0;

    while(primeironumero <= numero){
        printf("Numero par %d\n", primeironumero);
        primeironumero = primeironumero + 2;
    }

    printf("FIM");

    printf("\nBY DEVELOPER ALOY!\n!");
}