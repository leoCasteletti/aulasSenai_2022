/* EM FOR */

/*#include <bits/stdc++.h>

using namespace std;

int main(){
    int quantidade, n;
    double soma = 0.0;

    cout << "Digite quantos numeros voce deseja calcular a SOMA entre eles: "; cin >> quantidade;

    for(int i = 0; i < quantidade; i++){
        cout << "Digite um numero: "; cin >> n;
        soma = soma + n;
    }
    cout << "A media dos numeros fornecidos e: " << soma;
}*/

/* EM WHILE */

#include <bits/stdc++.h>

using namespace std;

int main(){
    int quantidade, n, i = 0;
    double soma = 0.0;

    cout << "Digite quantos numeros voce deseja calcular a SOMA entre eles: "; cin >> quantidade;

    while (i < quantidade){
        cout << "Digite um numero: "; cin >> n;
        soma = soma + n;
        i++;
    }
    cout << "A media dos numeros fornecidos e: " << soma;    
}