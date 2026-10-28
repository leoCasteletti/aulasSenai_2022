//Construa um programa para mostrar somente números impares;

#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){;

    int numero;

    printf("Digite um valor limite: ");
    scanf("%d", &numero);

    int primeironumero = 1;

    while(primeironumero <= numero){
        printf("Numero impar %d\n", primeironumero);
        primeironumero = primeironumero + 2;
    }

    printf("FIM");

    printf("\nBY DEVELOPER ALOY!\n!");
}