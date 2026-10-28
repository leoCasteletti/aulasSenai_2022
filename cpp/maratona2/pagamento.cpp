#include <bits/stdc++.h>

using namespace std;

int main(){
    string nome;
    float valorHora, pagamento;
    int horasTrabalhadas;

    cout << "Nome: "; cin >> nome;
    cout << "Valor Por Hora: "; cin >> valorHora;
    cout << "Horas Trabalhadas: "; cin >> horasTrabalhadas;

    pagamento = valorHora * horasTrabalhadas;

    cout << "O pagamento para " << nome << " deve ser de R$" <<pagamento; 
}