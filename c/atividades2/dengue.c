#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    int casossuspeitos, casosconfirmados, mortes;

    printf("Numero de CASOS SUSPEITOS: ");
    scanf("%d", &casossuspeitos);
    printf("Numero de CASOS CONFIRMADOS: ");
    scanf("%d", &casosconfirmados);
    printf("Quantidade de MORTES: ");
    scanf("%d", &mortes);

    printf("Informacoes sobre a dengue em Votuporanga\n");
    printf("Casos SUSPEITOS: %d\n", casossuspeitos);
    printf("Casos CONFIRMADOS: %d\n", casosconfirmados);
    printf("Quantidade de MORTES: %d\n", mortes);
    printf("Total de dados: %d", casossuspeitos + casosconfirmados + mortes);
}
