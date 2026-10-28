using System;
using System.Globalization;

class numerosPares
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Numeros Pares");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int N, Pares;

        Console.WriteLine("Quantos numeros você vai digitar seu cocudo?");
        N = int.Parse(Console.ReadLine());

        int[] vetor = new int[N];

        for (int i = 0; i < N; i++)
        {
            Console.WriteLine("Digite um número");
            vetor[i] = int.Parse(Console.ReadLine());
        }

        Pares = 0;

        Console.WriteLine("Números pares: ");

        for (int i = 0; i < N; i++)
        {
            if (vetor[i] % 2 == 0)
            {
                Console.WriteLine(vetor[i] + "");
                Pares += 1;
            }
        }

        Console.WriteLine("Quantidade de pares = " + Pares);

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}