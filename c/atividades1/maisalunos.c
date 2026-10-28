#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){    
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int alunos, alunas;

    printf("Digite a quantidade de alunos: ");
    scanf("%d", &alunos);

    printf("Digite a quantidade de alunas: ");
    scanf("%d", &alunas);

    if(alunos > alunas){
        printf("Existem mais alunos do que alunas.");
    } else { 
        printf("Existem mais alunos do que alunas.");
    }
}