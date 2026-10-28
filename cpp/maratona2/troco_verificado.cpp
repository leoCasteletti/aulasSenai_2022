#include <bits/stdc++.h>

using namespace std;

int main(){
    float preco, dinheiro, troco, resto;
    int quantidade;

    cout << "Preco Unitario do Produto: "; cin >> preco;
    cout << "Quantidade Comprada: "; cin >> quantidade;
    cout << "Dinheiro Recebido: "; cin >> dinheiro;

    if(dinheiro >= (preco * quantidade)){
        troco = dinheiro - preco * quantidade;
        cout << "Troco = " << troco;
    } else {
        resto = preco * quantidade - dinheiro;
        cout << "DINHEIRO INSUFICIENTE. FALTAM " << resto << " REAIS";
    }
}