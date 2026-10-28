#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){
    int numero1;
    int numero2;

    printf("Digite o NUMERO 1: ");
    scanf("%d", &numero1);
    printf("Digite o NUMERO 2: ");
    scanf("%d", &numero2);

    printf("SOMA: %d + %d = %d\n", numero1, numero2, numero1 + numero2);
    printf("SUBTRACAO: %d - %d = %d\n", numero1, numero2, numero1 - numero2);
    printf("MULTIPLICACAO: %d X %d = %d\n", numero1, numero2, numero1 * numero2);
    printf("DIVISAO: %d / %d = %d\n", numero1, numero2, numero1 / numero2);

    printf("\nBY DEVELOPER ALOY!\n!");

}