using System;
using System.Globalization;

class dadosPessoais
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Dados Pessoais");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, contMulheres, contHomens;
        float menorAltura, maiorAltura, soma, media;        

        Console.WriteLine("Quantas Pessoas Serão Digitadas?");
        n = int.Parse(Console.ReadLine());
        Console.WriteLine();

        string[] generos = new string[n];
        float[] alturas = new float[n];

        for (int i = 0; i < n; i++)
        {
            Console.Write("Altura da " + (i + 1) + "ª Pessoa: ");
            alturas[i] = float.Parse(Console.ReadLine());
            Console.Write("(F = Feminino e M = Masculino) Genero da " + (i + 1) + "ª Pessoa: ");
            generos[i] = Console.ReadLine();
            Console.WriteLine();
        }

        menorAltura = alturas[0];
        maiorAltura = alturas[0];

        for (int i = 0; i < n; i++)
        {
            if (alturas[i] > maiorAltura)
            {
                maiorAltura = alturas[i];
            }
            if (alturas[i] < menorAltura)
            {
                menorAltura = alturas[i];
            }
        }

        Console.WriteLine();
        Console.WriteLine("===================================");
        Console.WriteLine("            RELATÓRIO");
        Console.WriteLine("===================================");
        Console.WriteLine("Menor Altura = " + menorAltura);
        Console.WriteLine("Maior Altura = " + maiorAltura);

        media = 0;
        soma = 0;
        contMulheres = 0;
        contHomens = 0;

        // --------------------------------------------------------------------------------------- //

        for (int i = 0; i < n; i++)
        {
            if (generos[i] == "F")
            {
                soma = soma + alturas[i];
                contMulheres = contMulheres + 1;
            }
        }

        if (contMulheres == 0)
        {
            Console.WriteLine("Impossivel Calcular a Altura Media das Mulheres!");
        }
        else
        {
            media = soma / contMulheres;
            Console.WriteLine("Media das Alturas das Mulheres = " + media);
        }

        media = 0;
        soma = 0;

        // --------------------------------------------------------------------------------------- //

        for (int i = 0; i < n; i++)
        {
            if (generos[i] == "M" || generos[i] == "Masculino" || generos[i] == "masculino")
            {
                soma = soma + alturas[i];
                contHomens = contHomens + 1;
            }
        }  

        if (contHomens == 0)
        {
            Console.WriteLine("Impossivel Calcular a Altura Media dos Homens!");
        }
        else
        {
            media = soma / contHomens;
            Console.WriteLine("Media das Alturas dos Homens = " + media);
        }

        contHomens = n - contMulheres;
        Console.WriteLine("Número de Homens: " + contHomens);
        contMulheres = n - contHomens;
        Console.WriteLine("Número de Mulheres: " + contMulheres);

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}