#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){
    int a, b, c, menor, maior;

    printf("Digite dois valores:");
    scanf("%d%d%d", &a, &b, &c); //UTILIZE VIRGULA PARA DIGITAR DOIS VALORES

    menor = a;
    maior = a;

    if(menor > b)
        menor = b;
    if(menor > c)
        menor = c;
    
    if(maior < b)
        maior = b;   
    if(maior < c)
        maior = c;   

    printf("Primeira versao\nMenor: %d\nMaior: %d\n", menor, maior);

    printf("\nBY DEVELOPER ALOY!\n!");
}