#include <bits/stdc++.h>

using namespace std;

int main(){
    int numero, soma = 0;

    cout << "Digite o Primeiro Numero: "; cin >> numero;

    while (numero != 0){
        soma = numero + soma;   
        cout << "Digite o Outro Numero: "; cin >> numero; 
    }
    cout << "Soma: " << soma;    
}