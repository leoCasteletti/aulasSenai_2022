#include <bits/stdc++.h>

using namespace std;

int main(){
    int n, i;
    float a, b, c, media;

    cout << "Quantos casos voce vai digitar? "; cin >> n;

    for(i = 1; i <= n; i++){
        cout << "Digite tres numeros: " << endl; cin >> a; cin >> b; cin >> c;
        media = (a * 2 + b * 3 + c * 5) / 10;
        cout << "Media = " << media << endl;
    }
}