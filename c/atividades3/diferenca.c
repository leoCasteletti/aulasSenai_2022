#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int numero1, numero2;

    printf("Voce deve digita dois numeros inteiros diferentes\n");
    printf("Digite o PRIMEIRO NUMERO: ");
    scanf("%d", &numero1);
    printf("Digite o SEGUNDO NUMERO: ");
    scanf("%d", &numero2);

    if(numero1 > numero2){
        printf("A diferenca do maior numero pelo menor numero eh : %d", numero1 - numero2);
    } else if (numero2 > numero1){
       printf("A diferenca do maior numero pelo menor numero eh: %d", numero2 - numero1); 
    } else if (numero1 == numero2){
        printf("Pode Naum, Caraiu"); 
    }
}