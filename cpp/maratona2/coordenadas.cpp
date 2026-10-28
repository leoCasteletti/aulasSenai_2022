#include <bits/stdc++.h>

using namespace std;

int main(){
    float x, y;

    cout << "Valor de X: "; cin >> x;
    cout << "Valor de Y: "; cin >> y;

    if(x > 0 && y > 0){
        cout << "Q1";
    } else if (x < 0 && y > 0){
        cout << "Q2";
    } else if (x < 0 && y < 0){
        cout << "Q3";
    } else if (x > 0 && y < 0){
        cout << "Q4";
    } else if (x == 0 && y == 0){
        cout << "Origiem";
    } else if (x == 0){
        cout << "Eixo Y";
    } else {
        cout << "Eixo X";
    }
}