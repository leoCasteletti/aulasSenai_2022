#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int quantidade, n;
    double soma = 0.0;

    printf("Digite quantos numeros voce deseja calcular a media: ");
    scanf("%d", &quantidade);

    for(int i = 0; i < quantidade; i++){
        printf("Digite um numero: ");
        scanf("%d", &n);
        soma = soma + n;
    }
    double resultado = soma / quantidade;
    printf("A media dos numeros fornecidos e: %.1f", resultado);
}