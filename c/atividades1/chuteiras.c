#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int chuteira1, chuteira2, chuteira3;

    printf("Digite a quantidade de chuteiras da Niker: ");
    scanf("%d", &chuteira1);

    printf("Digite a quantidade de chuteiras da Ardidas: ");
    scanf("%d", &chuteira2);

    printf("Digite a quantidade de chuteiras da Puma: ");
    scanf("%d", &chuteira3);

    printf("Existe %d chuteiras da marca da Niker.\n", chuteira1);
    printf("Existe %d chuteiras da marca da Ardidas.\n", chuteira2);
    printf("Existe %d chuteiras da marca da Puma.\n", chuteira3);
}