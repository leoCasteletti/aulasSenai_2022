/* EM FOR 

#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    int quantidade, n;
    double soma = 0.0;

    printf("Digite quantos numeros voce deseja calcular a SOMA entre eles: "); scanf("%d", &quantidade);

    for(int i = 0; i < quantidade; i++){
        printf("Digite um numero: "); scanf("%d", &n);
        soma = soma + n;
    }
    printf("A media dos numeros fornecidos e: ", soma);
}*/

//EM WHILE

#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    int quantidade, n, i = 0;
    double soma = 0.0;

     printf("Digite quantos numeros voce deseja calcular a SOMA entre eles: "); scanf("%d", &quantidade);

    while (i < quantidade){
        printf("Digite um numero: "); scanf("%d", &n);
        soma = soma + n;
        i++;
    }
    printf("A media dos numeros fornecidos e: %.2f", soma);  
}