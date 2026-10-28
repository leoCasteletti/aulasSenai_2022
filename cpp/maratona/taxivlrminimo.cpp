#include <bits/stdc++.h>

using namespace std;

int main(){
    float bandeira_1 = 1.80, bandeira_2 = 2.30, kmrodados, taxaMinima = 3.50;
    int escolhabandeira;
    cout << fixed << setprecision(2);

    cout << "Digite o numero da bandeira (1 ou 2): "; cin >> escolhabandeira;

    if(escolhabandeira == 1){        
        cout << "Digite a kilometragem rodada: "; cin >> kmrodados;
            
        if(kmrodados < taxaMinima){
            cout << "O valor da corrida eh: " << taxaMinima << fixed;
        }

        if(kmrodados > taxaMinima){
            cout << "O valor da corrida eh: " << kmrodados * bandeira_1 << fixed;
        }
    } 

    if(escolhabandeira == 2){        
        cout << "Digite a kilometragem rodada: "; cin >> kmrodados;
            
        if(kmrodados < taxaMinima){
            cout << "O valor da corrida eh: " << taxaMinima << fixed;
        }

        if(kmrodados > taxaMinima){
            cout << "O valor da corrida eh: " << kmrodados * bandeira_2 << fixed;
        }
    }    
}