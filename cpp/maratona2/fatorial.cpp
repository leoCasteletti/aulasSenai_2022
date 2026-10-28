#include <bits/stdc++.h>

using namespace std;

int main(){
    int n, i, fat;

    cout << "Digite o valor de N: "; cin >> n;

    fat = 1;
    for(i = 1; i <= n; i++){
        fat = fat * i;
    }

    cout << "Fatorial = " << fat;
}