#include <bits/stdc++.h>

using namespace std;

int main(){
    int salario, porcentagem, aumento, novoSalario;
    float teste;

    cout << fixed << setprecision(2);

    cout << "Digite o salario da pessoa: "; cin >> salario;

    if(salario <= 1000){
        porcentagem = 20;
    } else if (salario <= 3000){
        porcentagem = 15;
    } else {
        porcentagem = 5;
    }

    aumento = salario * porcentagem / 100;
    novoSalario = salario + aumento;

    cout << "Novo salario = R$" << novoSalario << fixed << endl; 
    cout << "Aumento = R$" << aumento << fixed << endl;
    cout << "Porcentagem = " << porcentagem << "%" << endl;
}