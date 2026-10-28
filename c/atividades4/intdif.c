#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int n1, n2, n3;

    printf("Digite o primeiro numero: ");
    scanf("%d", &n1);

    printf("Digite o segundo numero: ");
    scanf("%d", &n2);

    printf("Digite o terceiro numero: ");
    scanf("%d", &n3);

     if (n1 > n3) {
        int cre = n3;
        n3 = n1;
        n1 = cre;
    }
    if (n1 > n2) {
        int cre = n2;
        n2 = n1;
        n1 = cre;
    }
    if (n2 > n3) {
        int cre = n3;
        n3 = n2;
        n2 = cre;
    }
     printf("Na ordem crescente os numero sao: %d, %d, %d", n1,n2,n3);
}