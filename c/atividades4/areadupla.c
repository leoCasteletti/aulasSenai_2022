#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    float base1, altura1, base2, altura2;

    printf("Digite a base do primeiro retangulo em cm: ");
    scanf("%f", &base1);

    printf("Digite a altura do primeiro retangulo em cm: ");
    scanf("%f", &altura1);

    printf("Digite a base do segundo retangulo em cm: ");
    scanf("%f", &base2);

    printf("Digite a altura do segundo retangulo em cm: ");
    scanf("%f", &altura2);

    float area1 = base1 * altura1;
    float area2 = base2 * altura2;

    printf("A area do primeiro retangulo: %.2f cm\n", area1);
    printf("A area do segundo retangulo: %.2f cm\n", area2);

    if(area1 > area2){
        printf("A area do primeiro retangulo eh maior que a area do segundo retangulo\n");
    } else if(area2 > area1) {
        printf("A area do segundo retangulo eh maior que a area do primeiro retangulo\n");
    } else if(area1 == area2){
        printf("Areas iguais\n");
    } else {
        printf("Areas iguais\n");
    }
}