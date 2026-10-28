#include <stdlib.h>
#include <stdio.h>

int main(){
    int idade = 20;
    float salario = 5800.50; 
    float altura = 1.63;
    char genero[20] = "F"; 
    char nome[20] = "Maria Silva";

    printf("Idade = %d Anos\n", idade);
    printf("Salario: R$%.2f\n", salario);
    printf("Altura = %.2f\n", altura);
    printf("Genero = %s\n", genero);
    printf("Nome = %s\n", nome);
}