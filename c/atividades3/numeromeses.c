#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int numero;

    printf("Digite um numero inteiro de 1 a 12 que corresponde ao mes desejado: ");
    scanf("%d", &numero);

    if(numero == 1){
        printf("O numero digitado corresponde ao mes de Janeiro");
    } else if(numero == 2){
        printf("O numero digitado corresponde ao mes de Fevereiro");
    } else if(numero == 3){
        printf("O numero digitado corresponde ao mes de Marco");
    } else if(numero == 4){
        printf("O numero digitado corresponde ao mes de Abril");
    } else if(numero == 5){
        printf("O numero digitado corresponde ao mes de Maio");
    } else if(numero == 6){
        printf("O numero digitado corresponde ao mes de Junho");
    } else if(numero == 7){
        printf("O numero digitado corresponde ao mes de Julho");
    } else if(numero == 8){
        printf("O numero digitado corresponde ao mes de Agosto");
    } else if(numero == 9){
        printf("O numero digitado corresponde ao mes de Setembro");
    } else if(numero == 10){
        printf("O numero digitado corresponde ao mes de Outubro");
    } else if(numero == 11){
        printf("O numero digitado corresponde ao mes de Novembro");
    } else if(numero == 12){
        printf("O numero digitado corresponde ao mes de Dezembro");
    } else if(numero > 12){
        printf("E PARA DIGITAR UM NUMERO DE 1 A 12, SUA ANTA");
    }
}