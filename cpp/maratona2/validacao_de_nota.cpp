#include <bits/stdc++.h>

using namespace std;

int main(){
    float nota1, nota2, media;

    cout << "Digite a Primeira Nota: "; cin >> nota1;

    while((nota1 < 0) || (nota1 > 10)){
        cout << "Valor Invalido! Tente Novamente: "; cin >> nota1;
    }

    cout << "Digite a Segunda Nota: "; cin >> nota2;

    while((nota2 < 0) || (nota2 > 10)){
        cout << "Valor Invalido! Tente Novamente: "; cin >> nota2;
    }

    media = (nota1 + nota2) / 2;
    cout << "Media = " << media;
}