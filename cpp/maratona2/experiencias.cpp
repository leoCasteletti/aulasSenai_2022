#include <bits/stdc++.h>

using namespace std;

int main(){
    int n, i, qte, totalCobaias, totalSapos, totalCoelhos, totalRatos;
    float pratos, psapos, pcoelhos;
    string tipoCobaia;

    totalRatos = 0;
    totalCoelhos = 0;
    totalSapos = 0;

    cout << "Quantos casos de teste serao digitados? "; cin >> n;

    for(i = 1; i <= n; i++){
        cout << "Quantidade de cobaias: "; cin >> qte;
        cout << "Tipo de cobaia: "; cin >> tipoCobaia;

        if(tipoCobaia == "R"){
            totalRatos = totalRatos + qte;
        } else if(tipoCobaia == "S"){
            totalSapos = totalSapos + qte;
        } else {
            totalCoelhos = totalCoelhos + qte;
        }
    }

    totalCobaias = totalRatos + totalSapos + totalCoelhos;

    pcoelhos = (float) totalCoelhos / (float) totalCobaias * (float) 100;
    pratos = (float) totalRatos / (float) totalCobaias * (float) 100;
    psapos = (float) totalSapos / (float) totalCobaias * (float) 100;

    cout << endl;
    cout << "RELATORIO FINAL" << endl;
    cout << "Total " << totalCobaias << " cobaias" << endl;
    cout << "Total de Coelhos: " << totalCoelhos << endl;
    cout << "Total de Ratos: " << totalRatos << endl;
    cout << "Total de Sapos: " << totalSapos << endl;
    cout << "Percentual de Coelhos: " << pcoelhos << endl;
    cout << "Percentual de Ratos: " << pratos << endl;
    cout << "Percentual de Sapos: " << psapos << endl;

}
