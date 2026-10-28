#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

void potencia(int numero1, int numero2){
    int resultado = 1;
    for(int i = 0; i < numero2; i++){
        resultado = resultado * numero1;        
    }    
    printf("Potencia: %d", resultado);
}

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int numero1, numero2;

    printf("Digite o PRIMEIRO NUMERO: "); scanf("%d", &numero1);
    printf("Digite o SEGUNDO NUMERO: "); scanf("%d", &numero2);
    
    potencia(numero1, numero2);
}