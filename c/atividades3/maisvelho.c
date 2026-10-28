#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int idadePedro, idadeJoana, idadeIsmael;

    printf("Qual a idade de Pedro? ");
    scanf("%d", &idadePedro);

    printf("Qual a idade de Joana? ");
    scanf("%d", &idadeJoana);

    printf("Qual a idade de Ismael? ");
    scanf("%d", &idadeIsmael);

    printf("Idade de Pedro: %d\n", idadePedro);
    printf("Idade de Joana: %d\n", idadeJoana);
    printf("Idade de Ismael: %d\n", idadeIsmael);

    if(idadePedro > idadeJoana){
        printf("Pedro e mais velho.");
    } else if (idadeJoana > idadeIsmael){
        printf("Joana e mais velha.");
    } else {
        printf("Ismael e mais velho.");
    }
}