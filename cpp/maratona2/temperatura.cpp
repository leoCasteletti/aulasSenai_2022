#include <bits/stdc++.h>

using namespace std;

int main(){
    float c, f;
    string unidade;

    cout << "Voce vai digitar a temperatura em qual escala (c/f)? "; cin >> unidade;

    if(unidade == "F"){
        cout << "Digite a temperatura em Fahrenheit: "; cin >> f;
        c = 5 / 9 * (f - 32);
        cout << "Temperatura equivalente em Celsius: " << c << endl;
    } else {
        cout << "Digite a temperatura em Celsius: "; cin >> c;
        f = 9 * c / 5 + 32;
        cout << "Temperatura equivalente em Fahrenheit: " << f << endl;
    }
}