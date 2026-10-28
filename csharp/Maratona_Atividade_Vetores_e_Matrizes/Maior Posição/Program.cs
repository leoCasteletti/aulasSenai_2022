using System;
using System.Globalization;

class maiorPosição
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Maior Posição");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, posmaior;
        float maior;        

        Console.WriteLine("Quantos Números Você vai Digitar? ");
        n = int.Parse(Console.ReadLine());        

        float[] vetor = new float[n];

        Console.WriteLine();

        for (int i = 0; i < n; i++)
        {
            Console.Write("Digite um Número: ");
            vetor[i] = float.Parse(Console.ReadLine());           
        }

        posmaior = 0;
        maior = vetor[0];

        for (int i = 1; i < n; i++)
        {
            if (vetor[i] > maior)
            {
                maior = vetor[i];
                posmaior = i;
            }
        }

        Console.WriteLine();
        Console.WriteLine("===================================");
        Console.WriteLine("            RELATÓRIO");
        Console.WriteLine("===================================");
        Console.WriteLine("Maior Valor: " + maior);
        Console.WriteLine("Posição do Maior Valor: " + (posmaior + 1) + "°");

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}