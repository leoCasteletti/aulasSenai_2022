#include <stdio.h>
#include <stdlib.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int celsius;

    printf("Digite a temperatura em GRAUS CELSIUS: ");
    scanf("%d", &celsius);

    printf("A temperatura em FAHREINHEIT eh: %.2f", celsius * 1.8 + 32);
}