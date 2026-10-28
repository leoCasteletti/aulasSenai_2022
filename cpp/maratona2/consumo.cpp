#include <bits/stdc++.h>

using namespace std;

int main(){
    int distancia, consumo, combustivel;

    cout<< "Distancia percorrida: " << endl; cin >> distancia;
    cout<< "Combustivel gasto: " << endl; cin >> combustivel;

    consumo = distancia / combustivel;

    cout << "Consumo medio: " << consumo << endl;
}