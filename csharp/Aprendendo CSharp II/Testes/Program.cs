using System;
using System.Globalization;

namespace VetorComFor;
class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atividade 06 - Vetores");
        Console.WriteLine();

        int QuantidadeDeAlunos, QuantidadeDeNotas;
        char Imprimir;

        Console.WriteLine("Qual a Quantidade de Alunos Deseja Armazenar?");
        QuantidadeDeAlunos = int.Parse(Console.ReadLine()); //Atribui à Variável QuantidadeDeAlunos Qual Será o Tamanho do Nosso Vetor;
        Console.WriteLine("Qual a Quantidade de Notas Você Deseja Armazenar Por Aluno?");
        QuantidadeDeNotas = int.Parse(Console.ReadLine()); //Atribui à Variável QuantidadeDeAlunos Qual Será o Tamanho do Nosso Vetor;

        string[] VetorAlunos = new string[QuantidadeDeAlunos];
        float[] VetorNotas = new float[QuantidadeDeNotas];

        for (int IndiceVetorAlunos = 0; IndiceVetorAlunos < QuantidadeDeAlunos; IndiceVetorAlunos++)
        {
            Console.WriteLine("Informe o Nome do Aluno");
            VetorAlunos[IndiceVetorAlunos] = Console.ReadLine();

            for (int IndiceVetorNotas = 0; IndiceVetorNotas < QuantidadeDeNotas; IndiceVetorNotas++)
            {
                Console.WriteLine("Informe a Nota do Aluno");
                VetorNotas[IndiceVetorNotas] = float.Parse(Console.ReadLine());
            }
        }

        Console.WriteLine("Você Deseja Imprimir os Dados do Aluno?");
        Imprimir = char.Parse(Console.ReadLine());

        if (Imprimir == 's' || Imprimir == 'S')
        {
            for (int IndiceVetorAlunos = 0; IndiceVetorAlunos < QuantidadeDeAlunos; IndiceVetorAlunos++)
            {
                Console.WriteLine("Nome do Aluno: " + VetorAlunos[IndiceVetorAlunos]);

                for (int IndiceVetorNotas = 0; IndiceVetorNotas < QuantidadeDeNotas; IndiceVetorNotas++)
                {
                    Console.WriteLine("Nota do Aluno: " + VetorNotas[IndiceVetorNotas].ToString("F"));
                }
            }

        }

    }
}