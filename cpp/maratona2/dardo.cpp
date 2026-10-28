#include <bits/stdc++.h>

using namespace std;

int main(){
    float d1, d2, d3, maior;

    cout << "Digite as tres distancias: "; cin >> d1; cin >> d2; cin >> d3;

    if(d1 > d2 && d1 > d3){
        maior = d2;
    } else {
        maior = d3;
    }

    cout << "Maior Distancia = " << maior;
}