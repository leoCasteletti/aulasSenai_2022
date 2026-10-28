/*#include <stdio.h>
#include <string.h>

int main(){

    char primeironome[50], segundonome[50];
    char sexo1[5], sexo2[5];
    float primeirosalario, segundosalario;
    int primeiraidade, segundaidade;

    printf("Nome da Primeira Pessoa: "); scanf("%s", &primeironome);
    printf("Salario da Primeira Pessoa: "); scanf("%f", &primeirosalario);
    printf("Digite a Idade da Primeira Pessoa: "); scanf("%d", &primeiraidade);
    printf("Digite o Sexo (F/M) da Primeira Pessoa: "); scanf("%s", &sexo1);

    printf("Nome da Segunda Pessoa: "); scanf("%s", &segundonome);
    printf("Salario da Segunda Pessoa: "); scanf("%f", &segundosalario);
    printf("Digite a Idade da Segunda Pessoa: "); scanf("%d", &segundaidade);
    printf("Digite o Sexo (F/M) da Segunda Pessoa: "); scanf("%s", &sexo2);

    printf("\n\n****** RELATORIO DE DADOS ******\n");
    printf("*** PRIMEIRA PESSOA ***\n");
    printf("Nome: %s\n", primeironome);
    printf("Salario: %.2f\n", primeirosalario);
    printf("Idade: %d\n", primeiraidade);
    printf("Sexo: %s\n", sexo1);

    printf("\n\n*** SEGUNDA PESSOA ***\n");
    printf("Nome: %s\n", segundonome);
    printf("Salario: %.2f\n", segundosalario);
    printf("Idade: %d\n", segundaidade);
    printf("Sexo: %s\n", sexo2);
}*/

#include <stdio.h>
#include <string.h>

void limpar_entrada () {
  char c;
  while ((c = getchar ()) != '\n' && c != EOF)
    {
    }
}

void ler_texto (char *buffer, int length) {
  fgets (buffer, length, stdin);
  strtok (buffer, "\n");
}

int main () {
  double salario1, salario2;
  char nome1[50], nome2[50];
  int idade1, idade2;
  char sexo1, sexo2;
  
  printf ("Nome da primeira pessoa: ");
  ler_texto (nome1, 50);
  printf ("Salario da primeira pessoa: ");
  scanf ("%lf", &salario1);
  printf ("Digite a idade da primeira pessoa: ");
  scanf ("%d", &idade1);
  printf ("Digite o sexo (F/M) da primeira pessoa: ");
  limpar_entrada ();
  scanf ("%c", &sexo1); 
  
  printf ("\n");
  printf ("Nome da segunda pessoa: ");
  limpar_entrada ();
  ler_texto (nome2, 50);
  printf ("Salario da segunda pessoa: ");
  scanf ("%lf", &salario2);
  printf ("Digite a idade da segunda pessoa: ");
  scanf ("%d", &idade2);
  printf ("Digite o sexo (F/M) da segunda pessoa: ");
  limpar_entrada ();
  scanf ("%c", &sexo2); 
 
  printf ("\n\n*** RELATORIO DE DADOS ***\n\n");
  printf ("Nome 1: %s\n", nome1);
  printf ("Salario 1: %.2lf\n", salario1);
  printf ("Idade 1: %d\n", idade1);
  printf ("Sexo 1: %c\n", sexo1);
  
  printf ("\n");
  printf ("Nome 2: %s\n", nome2);
  printf ("Salario 2: %.2lf\n", salario2);
  printf ("Idade 2: %d\n", idade2);
  printf ("Sexo 2: %c\n", sexo2);
  
  return 0;
}