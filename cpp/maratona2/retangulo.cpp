#include <bits/stdc++.h>
#include <math.h>

using namespace std;

int main(){
    float base, altura, area, perimetro, diagonal;

    cout << "Base do retangulo: "; cin >> base;
    cout << "Altura do retangulo: "; cin >> altura;

    area = base * altura;
    perimetro = 2 * (base + altura);
    diagonal = sqrt(base * base + altura * altura);

    cout << "Area = " << area << endl;
    cout << "Perimetro = " << perimetro << endl;
    cout << "Diagonal = " << diagonal << endl;
}