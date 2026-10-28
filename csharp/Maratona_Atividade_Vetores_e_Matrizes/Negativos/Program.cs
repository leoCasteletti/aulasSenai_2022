using System;
using System.Globalization;

class negativos
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Negativos");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, i;
        int[] vetor = new int[9];

        Console.WriteLine("Quantos numeros o usuário VAI DIGITAR? ");
        n = int.Parse(Console.ReadLine());

        for (i = 0; i < n; i++)
        {
            Console.WriteLine("Digite um NUMERO: ");
            vetor[i] = int.Parse(Console.ReadLine());
        }
        Console.WriteLine();
        Console.WriteLine("NUMEROS NEGATIVOS: ");
        Console.WriteLine();

        for (i = 0; i < n; i++)
        {
            if (vetor[i] < 0)
            {
                Console.WriteLine(vetor[i]);
            }
        }

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}