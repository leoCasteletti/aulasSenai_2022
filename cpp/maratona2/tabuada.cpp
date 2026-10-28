#include <bits/stdc++.h>

using namespace std;

int main(){
    int n, i, resultado;

    cout << "Deseja a tabuada para qual valor? "; cin >> n;

    for(i = 1; i <= 10; i++){
        resultado = i * n;
        cout << n << " x " << i << " = " << resultado <<endl;
    }
}