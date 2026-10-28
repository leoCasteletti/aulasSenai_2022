#include <bits/stdc++.h>

using namespace std;

int main(){
    int cont;
    float nota, soma = 0, maior = 0, menor = 10;

    for(cont = 1; cont <= 10; cont++){
        cout << "Digite a " << cont << ".A NOTA: "; cin >> nota;

        //Validar Nota.
        if(nota < 0 && nota > 10){
            cout << "Dados Incorretos. A nota deve estar entre 0 e 10: "; cin >> nota;
        }
        soma = soma + nota;

        if(nota > maior){
            maior = nota;
        } 
        if (nota < menor){
            menor = nota;
        }        
    }
    //Apresentar os resultados das notas.
        cout << endl << "A soma das notas eh: " << soma;        
        cout << endl << "A media das notas fornecidas eh: " << soma / 10;
        cout << endl << "A maior nota eh: " << maior;
        cout << endl << "A menor nota eh: " << menor;
}