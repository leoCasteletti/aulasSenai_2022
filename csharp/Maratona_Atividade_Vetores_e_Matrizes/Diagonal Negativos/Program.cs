using System;
using System.Globalization;

class diagonalNegativos
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Diagonal Negativos");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, cont;

        Console.WriteLine("Qual a ordem da matriz?");
        n = int.Parse(Console.ReadLine());

        int[,] mat = new int[n, n];

        for (int i = 0; i < n; i++)
        {
            for (int j = 0; j < n; j++)
            {
                Console.Write("Elemento [" + i + "," + j + "]: ");
                mat[i, j] = int.Parse(Console.ReadLine());
                Console.WriteLine();
            }
        }

        Console.Write("Diagonal Principal: ");
        Console.WriteLine();

        for (int i = 0; i < n; i++)
        {
            Console.WriteLine(mat[i, i] + " ");
        }

        cont = 0;

        for (int i = 0; i < n; i++)
        {
            for (int j = 0; j < n; j++)
            {
                if (mat[i, j] < 0)
                {
                    cont = cont + 1;
                }
            }
        }

        Console.WriteLine();
        Console.WriteLine("===================================");
        Console.WriteLine("            RELATÓRIO");
        Console.WriteLine("===================================");
        Console.WriteLine("Quantidade de Negativos: " + cont);

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}