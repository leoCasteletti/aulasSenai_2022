#include <bits/stdc++.h>

using namespace std;

int main(){
    float bandeira_1 = 1.80, bandeira_2 = 2.30;
    int escolhabandeira, kmrodados;
    cout << fixed << setprecision(2);

    cout <<"Digite o numero da bandeira (1 ou 2): "; cin >> escolhabandeira;

    switch(escolhabandeira){
        case 1:
            cout << "Digite a kilometragem rodada: "; cin >> kmrodados;
            cout << "O valor da corrida eh: " << bandeira_1 * kmrodados << fixed;
            break;    

        default:
            cout << "Digite a kilometragem rodada: "; cin >> kmrodados;
            cout << "O valor da corrida eh: " << bandeira_2 * kmrodados << fixed;
    }
}