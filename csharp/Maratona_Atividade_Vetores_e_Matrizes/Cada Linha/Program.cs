using System;
using System.Globalization;

class cadaLinha
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Cada Linha");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, maior;

        Console.WriteLine("Qual a Ordem da Matriz? ");
        n = int.Parse(Console.ReadLine());

        int[,] mat = new int[n, 9];

        for(int i = 0; i < n; i++)
        {
            for(int j = 0; j < n; j++)
            {
                Console.Write("Elemento[" + i + "," + j + "]: ");
                mat[i,j] = int.Parse(Console.ReadLine());                
            }
        }

        Console.WriteLine();
        Console.WriteLine("===================================");
        Console.WriteLine("            RELATÓRIO");
        Console.WriteLine("===================================");
        Console.WriteLine("Maior Elemento de Cada Linha: ");
        for(int i = 0; i < n; i++)
        {
            maior = mat[i, 0];
                for(int j = 0; j < n; j++)
            {
                if(mat[i, j] == maior)
                {
                    maior = mat[i, j];
                }
            }
            Console.WriteLine(maior);
        }
        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}