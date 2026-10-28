using System;

class somaVetores
{
    static void Main(string[] args)

    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Soma Vetores");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int N, i;

        Console.WriteLine("Quantos valores vão ter cada vetor?");
        N = int.Parse(Console.ReadLine());

        int[] A = new int[N];
        int[] B = new int[N];
        int[] C = new int[N];

        Console.WriteLine("Digite os valores do vetor A: ");
        for (i = 0; i < N; i++)
        {
            A[i] = int.Parse(Console.ReadLine());
        }

        Console.WriteLine("Digite os valores do vetor B: ");
        for (i = 0; i < N; i++)
        {
            B[i] = int.Parse(Console.ReadLine());
        }

        for (i = 0; i < N; i++)
        {
            C[i] = A[i] + B[i];
        }

        Console.WriteLine("Vetor Resultante: ");
        for (i = 0; i < N; i++)
        {
            Console.WriteLine(C[i]);
        }

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}