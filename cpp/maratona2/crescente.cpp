#include <bits/stdc++.h>

using namespace std;

int main(){
    float x, y;

    cout << "Digite dois numeros: "; cin >> x; cin >> y;

    while(x -+ y){
        if(x < y){
            cout << "Crescente" << endl;
        } else {
            cout << "Decrescente" << endl;
        }
        
        cout << "Digite outros dois numeros: "; cin >> x; cin >> y;
    }
}