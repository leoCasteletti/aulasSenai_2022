#include <bits/stdc++.h>

using namespace std;

int main(){
    string primeironome, segundonome, sexo1, sexo2;
    float primeirosalario, segundosalario, primeiraidade, segundaidade;

    cout << "Nome da Primeira Pessoa: "; cin >> primeironome;
    cout << "Salario da Primeira Pessoa: "; cin >> primeirosalario;
    cout << "Digite a Idade da Primeira Pessoa: "; cin >> primeiraidade;
    cout << "Digite o Sexo (F/M) da Primeira Pessoa: "; cin >> sexo1;

    cout << "Nome da Segunda Pessoa: "; cin >> segundonome;
    cout << "Salario da Segunda Pessoa: "; cin >> segundosalario;
    cout << "Digite a Idade da Segunda Pessoa: "; cin >> segundaidade;
    cout << "Digite o Sexo (F/M) da Segunda Pessoa: "; cin >> sexo2;

    cout << "\n\n****** RELATORIO DE DADOS ******\n";
    cout << "*** DADOS DA PRIMEIRA PESSOA ***\n";
    cout << "Nome: " << primeironome << endl;
    cout << "Salario: R$" << primeirosalario << endl;
    cout << "Idade: " << primeiraidade << endl;
    cout << "Sexo: " << sexo1 << endl;

    cout << "*** DADOS DA SEGUNDA PESSOA ***\n";
    cout << "Nome: " << segundonome << endl;
    cout << "Salario: R$" << segundosalario << endl;
    cout << "Idade: " << segundaidade << endl;
    cout << "Sexo: " << sexo2 << endl;
}