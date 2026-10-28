#include <stdio.h> //INCLUINDO UMA BIBLIOTECA (UM MONTE DE FUNÇÃO)

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int numero1, numero2;

    printf("Digite o primero numero: ");
    scanf("%d", &numero1 );

    printf("Digite o segundo numero: ");
    scanf("%d", &numero2 );

    printf("A multiplicacao desses dois numero gera um resultado de: %d" , numero1 * numero2 );
}