#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int numeros[3];

    //DECLARANDO UM PONTEIRO QUE APONTA PARA O MESMO LUGAR QUE O ARRAY/PONTEIRO NÚMEROS
    //printf("%d %d %d\n", &numeros[0], &numeros[1], &numeros[2]);

    int *ponteiro = numeros;

    numeros[0] = 10;
    numeros[1] = 20;
    numeros[2] = 30;

    for(int i = 0; i < 3; i++){
        printf("%d", numeros[0]);

        printf("%d", *(ponteiro+i));
    }
}

//* INDICA QUE É UM PONTEIRO