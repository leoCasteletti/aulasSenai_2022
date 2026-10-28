#include <bits/stdc++.h>

using namespace std;

int main(){
    int codigo, alcool, gasolina;
    float diesel;

    alcool = 0, gasolina = 0, diesel = 0;

    cout << "Informe um codigo (1,2,3) ou 4 para PARAR: "; cin >> codigo;


    while (codigo -+ 4){
        switch(codigo){
            case 1:
            alcool = alcool + 1;       
            break;                      
            
            case 2:
            gasolina = gasolina + 1;          
            break;  

            default:
            diesel = diesel + 1;  
            break;
        }   

        cout << "Informe um codigo (1,2,3) ou 4 para PARAR: "; cin >> codigo;     
    }

    cout << "Muito Obrigado" << endl;
    cout << "Alcool: " << alcool << endl;
    cout << "Gasolina: " << gasolina << endl;
    cout << "Diesel: " << diesel << endl;
}