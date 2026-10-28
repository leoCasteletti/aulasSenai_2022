#include <bits/stdc++.h>

using namespace std;

int main(){

    int n1, n2, n3;

    cout << "Digite o primeiro numero: "; cin >> n1;

    cout << "Digite o segundo numero: "; cin >> n2;

    cout << "Digite o terceiro numero: "; cin >> n3;

    if (n1 > n3) {
        int cre = n3;
        n3 = n1;
        n1 = cre;
    }
    if (n1 > n2) {
        int cre = n2;
        n2 = n1;
        n1 = cre;
    }
    if (n2 > n3) {
        int cre = n3;
        n3 = n2;
        n2 = cre;
    }
    cout << "Na ordem crescente os numero sao: " << n1 << ", " << n2 << ", " << n3;
}