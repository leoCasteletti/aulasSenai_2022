#include<stdio.h>
#include<stdlib.h>

int main(){
    int a,b,c,i;

    printf("Digite um numero\n");
    scanf("%d",&a);

    b=a%2;

    if(b==0){
        printf("O numero %d eh par\n",a);
    } else if(b>=0){
        printf("O numero %d eh impar\n",a);
    }
}