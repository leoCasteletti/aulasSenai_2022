#include <bits/stdc++.h>

using namespace std;

int main(){
    int horaInicial, horaFinal, duracao;

    cout << "Hora Inicial: "; cin >> horaInicial;
    cout << "Hora Final: "; cin >> horaFinal;

    if(horaInicial < horaFinal){
        duracao = horaFinal - horaInicial;
    } else {
        duracao = 24 - horaInicial + horaFinal;
    }

    cout << "O jogo durou " << duracao << "hora(s)";
}