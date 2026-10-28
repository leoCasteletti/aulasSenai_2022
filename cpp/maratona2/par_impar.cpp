#include <bits/stdc++.h>

using namespace std;

int main(){
    int n, i, x;

    cout << "Quantos numeros voce vai digitar? "; cin >> n;

    for(i = 1; i <= n; i++){
        cout << "Digite um numero: "; cin >> x;

    if(x == 0){
        cout << "Nulo";
    } else {
        if(x % 2 == 0){
            if(x < 0){
                cout << "PAR NEGATIVO" << endl;
            } else {
                cout << "PAR POSITIVO" << endl;
            }
        } else {
            if(x < 0){
                cout << "IMPAR NEGATIVO" << endl;
                } else {
                    cout << "IMPAR POSITIVO" << endl;
                }
            }
        } 
    }
}