#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){
    float nota1;
    float nota2;
    
    printf("Digite a PRIMEIRA NOTA: ");
    scanf("%f", &nota1);

    printf("Digite a SEGUNDA NOTA: ");
    scanf("%f", &nota2);

    float media = (nota1 + nota2) / 2;

    printf("Media: %.2f\n", media);

    if(media < 5){
        printf("Reprovado");
    } else if(media > 5){
        printf("Recuperacao");
    } else{
        printf("Aprovado");
    }
}
