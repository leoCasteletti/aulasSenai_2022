#include <bits/stdc++.h>

using namespace std;

int main(){
    int codigo, quantidade;
    float valorPago;

    cout << "Codigo do produto comprado: "; cin >> codigo;
    cout << "Quantidade comprada: "; cin >> quantidade;

    switch(codigo){
        case 1:
        valorPago = 5.0 * quantidade;

        case 2:
        valorPago = 3.5 * quantidade;

        case 3:
        valorPago = 4.8 * quantidade;

        case 4:
        valorPago = 8.9 * quantidade;
        break;

        default:
        valorPago = 7.32 * quantidade;
    }

    cout << "Valor a pagar: R$" << valorPago;
}