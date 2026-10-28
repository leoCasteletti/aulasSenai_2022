using System;
using System.Globalization;

class acimaDiagonal
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Acima Diagonal");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, soma;

        Console.WriteLine("Qual a ordem da matriz? ");
        n = int.Parse(Console.ReadLine());

        string[] vetormat = new string[9];
        int[,] matriz = new int[n, n];

        for (int i = 0; i < n; i++)
        {
            for (int j = 0; j < n; j++)
            {
                Console.Write("Elemento [" + i + "," + j + "]: ");
                matriz[i, j] = int.Parse(Console.ReadLine());
                Console.WriteLine();
            }
        }

        soma = 0;

        for (int i = 0; i < n; i++)
        {
            for (int j = 0; j < n; j++)
            {
                if (i < j)
                {
                    soma = soma + matriz[i, j];
                }
            }

            Console.WriteLine();
            Console.WriteLine("===================================");
            Console.WriteLine("            RELATÓRIO");
            Console.WriteLine("===================================");
            Console.WriteLine("Soma dos Elementos Acima da Diagonal Principal: " + soma);

            Console.WriteLine();
            Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
            Console.ReadLine();
        }
    }
}