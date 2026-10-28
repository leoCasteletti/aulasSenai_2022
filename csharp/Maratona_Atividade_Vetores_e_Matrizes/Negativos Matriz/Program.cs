using System;
using System.Globalization;

class negativosMatriz
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Negativos Matriz");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int m, n, i, j;

        Console.WriteLine("Qual a quantidade de linhas da matriz? ");
        m = int.Parse(Console.ReadLine());
        Console.WriteLine("Qual a quantidade de colunas da matriz? ");
        n = int.Parse(Console.ReadLine());

        int[,] matriz = new int[m, n];

        for (i = 0; i < m; i++)
        {
            for (j = 0; j < n; j++)
            {
                Console.WriteLine("Elemento [ " + i + "," + j + "]:");
                matriz[i, j] = int.Parse(Console.ReadLine());
            }
        }

        Console.WriteLine("Valores negativos: ");

        for (i = 0; i < m; i++)
        {
            for (j = 0; j < n; j++)
            {
                if (matriz[i, j] < 0)
                {
                    Console.WriteLine(matriz[i, j]);
                }
            }
        }


        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}