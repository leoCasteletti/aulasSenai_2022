#include <bits/stdc++.h>

using namespace std;

int main(){
    float base1, altura1, base2, altura2;

    cout << "Digite a base do PRIMEIRO RETANGULO em CENTIMETROS: "; cin >> base1;
    cout << "Digite a altura do PRIMEIRO RETANGULO em CENTIMETROS: "; cin >> altura1;
    cout << "Digite a base do SEGUNDO RETANGULO em CENTIMETROS: "; cin >> base2;
    cout << "Digite a altura do SEGUNDO RETANGULO em CENTIMETROS: "; cin >> altura2;

    float area1 = base1 * altura1, area2 = base2 * altura2;

    cout << "A area do PRIMEIRO RETANGULO eh: " << area1 << " CM" << endl;
    cout << "A area do SEGUNDO RETANGULO eh: " << area1 << " CM" << endl;
    
    if(area1 > area2){
        cout << "A area do PRIMEIRO RETANGULO eh MAIOR";
    } else{
        cout << "A area do SEGUNDO RETANGULO eh MAIOR";
    }
}