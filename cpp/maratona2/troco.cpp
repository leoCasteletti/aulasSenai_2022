#include <bits/stdc++.h>

using namespace std;

int main(){
    float preco, dinheiro, troco;
    int quantidade;

    cout << "Preco Unitario do Produto: "; cin >> preco;
    cout << "Quantidade Comprada: "; cin >> quantidade;
    cout << "Dinheiro Recebido: "; cin >> dinheiro;

    troco = dinheiro - (preco * quantidade);

    cout << "Troco = " << troco;
}