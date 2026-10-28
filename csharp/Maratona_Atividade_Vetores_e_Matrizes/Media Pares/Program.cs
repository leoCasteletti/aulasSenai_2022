using System;
using System.Globalization;

class mediaPares
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Media Pares");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, soma, contPares;
        double media;

        Console.WriteLine("Quantos elementos vai ter o vetor? ");
        n = int.Parse(Console.ReadLine());

        int[] vetor = new int[n];

        for (int i = 0; i < n; i++)
        {
            Console.WriteLine("Digite um número : ");
            vetor[i] = int.Parse(Console.ReadLine());
        }

        soma = 0;
        contPares = 0;

        for (int i = 0; i < n; i++)
        {
            if (vetor[i] % 2 == 0)
            {
                soma += vetor[i];
                contPares += 1;
            }
        }

        if (contPares == 0)
        {
            Console.WriteLine("NENHUM NUMERO PAR");
        }
        else
        {
            media = soma / contPares;
            Console.WriteLine("MEDIA DOS PARES = " + media);
        }

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}