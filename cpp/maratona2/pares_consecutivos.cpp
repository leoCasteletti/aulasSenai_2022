#include <bits/stdc++.h>

using namespace std;

int main(){
    int x, soma;

    cout << "Digite um numero inteiro: "; cin >> x;

    while(x != 0){
        if(x % 2 != 0 ){
            x = x + 1;
        } 

        soma = 5 * x + 20;
        cout << "Soma = " << soma << endl;
        cout << "Digite um numero inteiro: "; cin >> x;
    }
}