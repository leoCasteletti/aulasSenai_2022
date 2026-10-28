using System;
using System.Globalization;

class maisVelho
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Mais Velho");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, posMaior, maior;

        Console.WriteLine("Quantas Pessoas Você vai Digitar?");
        n = int.Parse(Console.ReadLine());
        Console.WriteLine();

        string[] nomes = new string[n];
        int[] idades = new int[n];

        for (int i = 0; i < n; i++)
        {
            Console.WriteLine("Dados da " + (i + 1) + "ª Pessoa");
            Console.Write("Nome: ");
            nomes[i] = Console.ReadLine();
            Console.Write("Idade: ");
            idades[i] = int.Parse(Console.ReadLine());
            Console.WriteLine();
        }

        maior = idades[0];
        posMaior = 0;

        for (int i = 1; i < n; i++)
        {
            if (idades[i] > maior)
            {
                posMaior = i;
            }
        }

        Console.WriteLine();
        Console.WriteLine("===================================");
        Console.WriteLine("            RELATÓRIO");
        Console.WriteLine("===================================");
        Console.WriteLine("Pessoa mais Velha: " + nomes[posMaior]);

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}