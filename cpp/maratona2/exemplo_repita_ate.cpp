#include <bits/stdc++.h>

using namespace std;

int main(){
    float c, f;
    string resp;

    do{
        cout << "Digite a temperatura em CELSIUS: "; cin >> c;

        f = 9.0 * c / 5.0 + 32.0;

        cout << "Equivalente em FAHRENHEIT: " << f << endl;
        cout << "Deseja repetir (s/n)? "; cin >> resp;
    } while (resp != "n");
}
