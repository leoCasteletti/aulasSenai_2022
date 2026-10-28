#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int alunos, alunas;

    printf("Quantos alunos tem na sala? ");
    scanf("%d", &alunos);

    printf("Quantos alunas tem na sala? ");
    scanf("%d", &alunas);

    printf("Ha %d alunos na sala de aula e %d alunas na sala de aula", alunos, alunas);
}