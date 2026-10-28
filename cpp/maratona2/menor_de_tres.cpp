#include <bits/stdc++.h>

using namespace std;

int main(){
    int a, b, c, menor;

    cout << "Primeiro Valor: "; cin >> a;
    cout << "Segundo Valor: "; cin >> b;
    cout << "Terceiro Valor: "; cin >> c;

    if(a < b && a < c){
        menor = a;
    } else {
        if(b < c){
            menor = b;
        } else {
            menor = c;
        }
    }

    cout << "Menor = " << menor;
}