using System;
using System.Globalization;

namespace VetorComFor;
class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atividade 06 - Vetores");
        Console.WriteLine();

        int QuantidadeDeAlunos;
        char Imprimir;

        Console.WriteLine("Qual a Quantidade de Alunos Deseja Armazenar?");
        QuantidadeDeAlunos = int.Parse(Console.ReadLine()); //Atribui à Variável QuantidadeDeAlunos Qual Será o Tamanho do Nosso Vetor;

        string[] VetorAlunos = new string[QuantidadeDeAlunos]; //Declaração do Vetor e a Definição do Seu Tamanho;

        for(int IndiceVetorAlunos = 0; IndiceVetorAlunos < QuantidadeDeAlunos; IndiceVetorAlunos++) // É Colocado Menor Para Que Ele Não Acrescente 1;
            //PRIMEIRO ARGUMENTO DO FOR: Declara e Inicia com Zero a Variável que "Navegrá" no Vetor (Pois o Vetor / Array Começa Com Zero);
            //SEGUNDO ARGUMENTO DO FOR: Controle o Loop Enquanto o Indice for Menor Que o Tamanho do Vetor;
            //TERCEIRO ARGUMENTO DO FOR: Incrementa com "+1" o Indice para Mover o Ponteiro Para a Próxima Linha do Vetor;
        {
            Console.WriteLine("Informe o Nome do Aluno");
            VetorAlunos[IndiceVetorAlunos] = Console.ReadLine();            
        }

        Console.WriteLine("Você Deseja Imprimir o Nome do Aluno?");
        Imprimir = char.Parse(Console.ReadLine());

        if (Imprimir == 's' || Imprimir == 'S')
        {
            //Criação do FOR para LER/IMPRIMIR os Dados Digitados no ARRAY/VETOR;
            for (int IndiceVetorAlunos = 0; IndiceVetorAlunos < QuantidadeDeAlunos; IndiceVetorAlunos++) // É Colocado Menor Para Que Ele Não Acrescente 1;                                                                                          
                //PRIMEIRO ARGUMENTO DO FOR: Declara e Inicia com Zero a Variável que "Navegrá" no Vetor (Pois o Vetor / Array Começa Com Zero);                                                                                
                //SEGUNDO ARGUMENTO DO FOR: Controle o Loop Enquanto o Indice for Menor Que o Tamanho do Vetor;
                //TERCEIRO ARGUMENTO DO FOR: Incrementa com "+1" o Indice para Mover o Ponteiro Para a Próxima Linha do Vetor;
            {
                Console.WriteLine("Nome do Aluno: " + VetorAlunos[IndiceVetorAlunos]);
            }

        }

    }
}