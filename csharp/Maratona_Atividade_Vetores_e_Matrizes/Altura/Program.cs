using System;
using System.Globalization;

class altura
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Altura");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, cont;
        double soma, media, porcentagem;

        Console.WriteLine("Quantas Pessoas Serão Digitadas?");
        n = int.Parse(Console.ReadLine());
        Console.WriteLine();

        string[] nomes = new string[n];
        int[] idades = new int[n];
        float[] alturas = new float[n];

        for (int i = 0; i < n; i++)
        {
            Console.WriteLine("Dados da " + (i + 1) + "ª Pessoa");            
            Console.Write("Nome: ");
            nomes[i] = Console.ReadLine();
            Console.Write("Idade: ");
            idades[i] = int.Parse(Console.ReadLine());
            Console.Write("Altura: ");
            alturas[i] = float.Parse(Console.ReadLine());
            Console.WriteLine();
        }

        soma = 0;

        for (int i = 0; i < n; i++)
        {
            soma += alturas[i];
        }

        media = 0;
        media = soma / n;

        Console.WriteLine();
        Console.WriteLine("===================================");
        Console.WriteLine("            RELATÓRIO");
        Console.WriteLine("===================================");
        Console.WriteLine("Altura Média: " + media.ToString("F"));

        cont = 0;

        for (int i = 0; i < n; i++)
        {
            if (idades[i] < 16)
            {
                cont += 1;
            }
        }

        porcentagem = (cont * 100) / n;
        Console.WriteLine("Porcentagem de Pessoas Menores que 16 Anos " + porcentagem + "%");

        for (int i = 0; i < n; i++)
        {
            if (idades[i] <= 16)
            {
                Console.WriteLine(nomes[i]);
            }
        }

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}