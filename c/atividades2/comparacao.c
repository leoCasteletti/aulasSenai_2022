#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    printf("As idades nao devem ser iguais!\n");

    int idade1, idade2;

    printf("Digite a idade de PEDRO: ");
    scanf("%d", &idade1);
    printf("Digite a idade de JOANA: ");
    scanf("%d", &idade2);

    if(idade1 > idade2){
        printf("Pedro eh mais velho");
    } else if (idade2 > idade1){
        printf("Joana eh mais velha");
    }   

    if(idade1 == idade2){
        printf("Ambos possuem a mesma idade");
    }
}