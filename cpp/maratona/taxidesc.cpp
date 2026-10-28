#include <bits/stdc++.h>

using namespace std;

int main(){
    float bandeira_1 = 1.80, bandeira_2 = 2.30, kmrodados, taxaMinima;
    int escolhabandeira, desconto;
    cout << fixed << setprecision(2);

    cout << "Digite o numero da bandeira (1 ou 2): "; cin >> escolhabandeira;

    if(escolhabandeira == 1){        
        cout << "Digite a kilometragem rodada: "; cin >> kmrodados;        
            
        if(kmrodados < taxaMinima){
            cout << "O valor da corrida eh: " << taxaMinima << endl;
        }

        if(kmrodados > taxaMinima){
            float resultadobandeira1 = kmrodados * bandeira_1;
            cout << "O valor da corrida eh: " << resultadobandeira1 << fixed << endl; 
            cout << "Deseja aplicar desconto? (1-Sim ou 2-Nao) "; cin >> desconto;

            if(desconto == 1){
                cout << "Desconto de 30% aplicado, valor resultante de R$" << (resultadobandeira1 * 70) / 100;
            }
        }
    } 

    if(escolhabandeira == 2){        
        cout << "Digite a kilometragem rodada: "; cin >> kmrodados;        
            
        if(kmrodados < taxaMinima){
            cout << "O valor da corrida eh: " << taxaMinima << endl;
        }

        if(kmrodados > taxaMinima){
            float resultadobandeira2 = kmrodados * bandeira_2;
            cout << "O valor da corrida eh: " << resultadobandeira2 << fixed << endl; 
            cout << "Deseja aplicar desconto? (1-Sim ou 2-Nao) "; cin >> desconto;

            if(desconto == 1){
                cout << "Desconto de 30% aplicado, valor resultante de R$" << (resultadobandeira2 * 70) / 100;
            }
        }
    } 
}