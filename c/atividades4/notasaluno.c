#include <stdio.h>
#include <stdlib.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int cont;
    float nota, soma = 0, maior = 0, menor = 10;

    for(cont = 1; cont <= 10; cont++){
        printf("Digite a %d.A NOTA: ", cont);
        scanf("%f", &nota);

        //Validar Nota.
        if(nota < 0 && nota > 10){
            printf("\nDados Incorretos. A nota deve estar entre 0 e 10: ");
            scanf("%f", &nota);
        }
        soma = soma + nota;

        if(nota > maior){
            maior = nota;
        } 
        if (nota < menor){
            menor = nota;
        }        
    }
    //Apresentar os resultados das notas.
        printf("\n A soma das notas eh: %.1f\n", soma);
        printf("\n A media das notas fornecidas eh: %.1f\n", soma / 10);
        printf("\n A maior nota eh: %.1f\n", maior);
        printf("\n A menor nota eh: %.1f\n", menor);
}