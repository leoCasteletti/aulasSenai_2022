#include <bits/stdc++.h>

using namespace std;

int main(){
    float glicose;

    cout << "Digite a medida da glicose: "; cin >> glicose;

    if(glicose == 100.0){
        cout << "Normal";
    } else if(glicose == 140.0){
        cout << "Elevado";
    } else {
        cout << "Diabetes";
    }
}