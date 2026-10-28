#include <bits/stdc++.h>

using namespace std;

int main(){
    int hora, contador = false;

    while (contador == false){
        cout << "Digite uma hora do dia: "; cin >> hora;
        
        if(hora < 12){
            cout << "Bom dia!" << endl;
        } 

        else if(hora >= 12 && hora < 18){
            cout << "Boa tarde!" << endl;
        }

        else if(hora > 18 && hora <= 24){
            cout << "Boa Noite!" << endl;
        }

        else{
            cout << "Hora Invalida ";
            contador = true;
        }
    }
}

/*#include <bits/stdc++.h>

using namespace std;

int main () {

  int hora;

  cout << "Digite uma hora do dia: "; cin >> hora;
  
  while (hora < 25) {

    if (hora < 12) {
        cout << "Bom dia!" << endl;
    }
	  
    else if (hora < 19) {
	    cout << "Boa Tarde!" << endl;
	}
      
    else {
	    cout << "Boa Noite!" << endl;
	}
	  
	    cout << "\nDigite outra hora do dia: "; cin >> hora;
    }
    
    cout << "\nHorário digitado é inválido!";

  return 0;
}*/