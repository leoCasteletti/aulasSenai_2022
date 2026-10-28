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
        float[] VetorNotas = new float[QuantidadeDeAlunos]; //Declaração do Vetor e a Definição do Seu Tamanho;

        for (int IndiceVetorAlunos = 0; IndiceVetorAlunos < QuantidadeDeAlunos; IndiceVetorAlunos++) 
        {
            Console.WriteLine("Informe o Nome do Aluno");
            VetorAlunos[IndiceVetorAlunos] = Console.ReadLine();
            Console.WriteLine("Informe a Nota do Aluno");
            VetorNotas[IndiceVetorAlunos] = float.Parse(Console.ReadLine());
        }

        Console.WriteLine("Você Deseja Imprimir os Dados do Aluno?");
        Imprimir = char.Parse(Console.ReadLine());

        if (Imprimir == 's' || Imprimir == 'S')
        {
            for (int IndiceVetorAlunos = 0; IndiceVetorAlunos < QuantidadeDeAlunos; IndiceVetorAlunos++)
            {
                Console.WriteLine("Nome do Aluno: " + VetorAlunos[IndiceVetorAlunos]);
                Console.WriteLine("Nota do Aluno: " + VetorNotas[IndiceVetorAlunos].ToString("F"));
            }

        }

    }
}