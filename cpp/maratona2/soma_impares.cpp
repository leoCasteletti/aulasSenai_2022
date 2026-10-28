#include <bits/stdc++.h>

using namespace std;

int main(){
    int x, y, troca, i, soma;

    cout << "Digite dois numeros: "; cin >> x; cin >> y;

    if(x > y){
        troca = x;
        x = y;
        y = troca;
    }

    soma = 0;

    for(i = x + 1; i <= y - 1; i++){
        if(i % 2 != 0){
            soma = soma + i;
        }
    }

    cout << "Soma dos Impares = " << soma;
}    