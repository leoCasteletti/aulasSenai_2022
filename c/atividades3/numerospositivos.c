#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n");

    int n;

    printf("Digite um numero inteiro positivo: ");
    scanf("%d", &n);

    for (int i = 1; i <n; i++){
        if (i%2 !=0){
            printf("%d, ", i);
        }
    }
}