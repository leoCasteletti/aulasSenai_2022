#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai ""Euclides Facchini"" Votuporanga\n");
    printf("Developer -> Leonardo da Silva Casteletti\n\n");

    /*int x;
    x = 10;
    printf("%d\n", &x);*/

   /* int x;
    x = 10;

    int ponteiro;
    ponteiro = &x;

    printf("%d\n", *ponteiro);*/

    int x = 10;
    int *ponteiro = &x;

    int y = 20;
    *ponteiro = y;

    printf("%d %d\n", &x, &y)
   
}