#include <bits/stdc++.h>

using namespace std;

int main(){
    string nome1, nome2;
    int idade1, idade2;
    float media;

    cout << "DADOS DA PRIMEIRA PESSOA: " << endl;
    cout << "Nome: "; cin >> nome1;
    cout << "Idade: "; cin >> idade1;

    cout << "DADOS DA SEGUNDA PESSOA: " << endl;
    cout << "Nome: "; cin >> nome2;
    cout << "Idade: "; cin >> idade2;

    media = (idade1 + idade2) / 2;

    cout << "A idade media de " << nome1 << " e " << nome2 << " eh de " << media << " anos.";
}