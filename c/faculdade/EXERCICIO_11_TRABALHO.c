//11 - Em uma sala de aula, a professora pede aos alunos para realizar as 4 operações matemáticas (Soma, Elevar os dois números ao quadrado, Multiplicação e Divisão) com 2 números reais. Faça um programa com um menu destas 4 operações em que o aluno escolha qual operação quer fazer e para ajudar estes alunos, mostre o resultado final da operação escolhida.

#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    int numero1;
    int numero2;

    printf("Digite o PRIMEIRO NUMERO: ");
    scanf("%f", &numero1);
    printf("Digite o SEGUNDO NUMERO: ");
    scanf("%f", &numero2);

    int operacao;
    printf("Escolha qual operacao voce quer fazer com esses numeros\n");
    printf("(1)Soma (2)Fatoracao (3)Multiplicar (4)Dividir\n");
    printf("Escolha: ");
    scanf("%d", &operacao);

    int soma = numero1 + numero2;
    int fatoracao1 = numero1 * numero1;
    int fatoracao2 = numero2 * numero2;
    int multiplicar = numero1 * numero2;
    int dividir = numero1 / numero2;

    if(operacao == 1){
        printf("%d\n",soma);
    } 
    else if(operacao == 2){
        printf("%d\n",fatoracao1);
        printf("%d\n",fatoracao2);
    }
    else if(operacao == 3){
        printf("%d\n",multiplicar);
    }
    else{
        printf("%d\n",dividir);
    }

    printf("Opcao escolhida: %d", operacao);
}