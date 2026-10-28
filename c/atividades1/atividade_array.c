#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int notas[5]; notas[0] = 1; notas[1] = 4; notas[2] = 7; notas[3] = 5; notas[4] = 10;

    for (int i = 0; i < 5; i++){
        printf("%d", notas[i]);
    }
}