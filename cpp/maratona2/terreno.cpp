#include <bits/stdc++.h>

using namespace std;

int main(){
    float largura, comprimentro, metroQuadrado;
    int area, preco;

    cout << "Digite a lagura do terreno: "; cin >> largura;
    cout << "Digite a comprimento do terreno: "; cin >> comprimentro;
    cout << "Digite a metro do terreno: "; cin >> metroQuadrado;

    area = largura * comprimentro;
    preco = area * metroQuadrado;

    cout << "Area do Terreno: " << area << endl;
    cout << "Preco do Terreno: " << preco << endl;
}