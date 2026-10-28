using System;
using System.Globalization;

class program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Projeto 13 - Situação Problema");
        Console.WriteLine();

        int n, i;
        float media;

        Console.WriteLine("Quantos Alunos Serão Digitados?");
        n = int.Parse(Console.ReadLine());

        //COLETA AS INFORMAÇÔES DIGITADAS PARA SEREM EXIBIDAS;
        string[] nomes = new string[n];
        float[] notas1 = new float[n];
        float[] notas2 = new float[n];

        //REPETIÇÃO DAS PERGUNTAS DE ACORDO COM O NUMERO DE ALUNOS DIGITADOS;
        for (i = 0; i < n; i++)
        {
            Console.WriteLine("Digite nome, primeira e segunda nota do" + (i + 1) + "aluno: ");
            nomes[i] = (Console.ReadLine());
            notas1[i] = float.Parse(Console.ReadLine());
            notas2[i] = float.Parse(Console.ReadLine());
        }        

        //INFORMA QUAIS ALUNOS FORAM REPROVADOS DE ACORDO COM A MEDIA DOS ALUNOS;
        Console.WriteLine("Alunos Aprovados: ");
        for(i = 0; i < n; i++)
        {
            media = (notas1[i] + notas2[i]) / 2;
            if (media >= 6)
            {
                Console.WriteLine(nomes[i]);
            }
        }
    }
}