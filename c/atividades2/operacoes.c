#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int numero1, numero2;

    printf("Digite o NUMERO 1: ");
    scanf("%d", &numero1);
    printf("Digite o NUMERO 2: ");
    scanf("%d", &numero2);

    printf("SOMA: %d + %d = %d\n", numero1, numero2, numero1 + numero2);
    printf("SUBTRACAO: %d - %d = %d\n", numero1, numero2, numero1 - numero2);
    printf("MULTIPLICACAO: %d X %d = %d\n", numero1, numero2, numero1 * numero2);
    printf("DIVISAO: %d / %d = %d\n", numero1, numero2, numero1 / numero2);   
    printf("MEDIA: %d e %d = %.2f\n", numero1, numero2, (numero1 + numero2) / 2.0);
}