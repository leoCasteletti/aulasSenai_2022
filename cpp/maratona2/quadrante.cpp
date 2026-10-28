#include <bits/stdc++.h>

using namespace std;

int main(){
    float x, y;

    cout << "Digite os valores das coordenadas X e Y: "; cin >> x; cin >> y;

    while(x != 0 && y != 0){
        if(x > 0 && y > 0){
            cout << "Quadrante Q1" << endl;
        } else {
            if(x < 0 && y > 0){
                cout << "Quadrante Q2" << endl;
            } else {
                if(x < 0 && y < 0){
                    cout << "Quadrante Q3" << endl;
                } else {
                    cout << "Quadrante Q4" << endl;
                }
            }
        }

        cout << "Digite os valores das coordenadas X e Y: "; cin >> x; cin >> y;
    }
}