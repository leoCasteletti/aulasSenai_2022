using System;
using System.Globalization;



class program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Projeto 12 - Abaixo da Média");
        Console.WriteLine();

        int n, i;
        float soma, media;

        Console.WriteLine("Quantos Elementos Vai Ter o Vetor?");
        n = int.Parse(Console.ReadLine());

        float[] vetor = new float[n];

        //PERGUNTA QUANTOS NUMEROS DE ACORDO COM OS ELEMENTOS DIGITADOS;
        for(i = 0; i < n; i++)
        {
            Console.WriteLine("Digite um Número");
            vetor[i] = float.Parse(Console.ReadLine());
        }

        soma = 0;

        //FAZ PRIMEIRO A SOMA DOS NUMEROS E DEPOIS A MEDIA;
        for(i = 0; i < n; i++)
        {
            soma = soma + vetor[i];
        }

        media = soma / n;

        //IRÁ INFORMAR O RESULTADO DAS MEDIAS E EXIBIR OS ELEMENTOS QUE ESTÃO ABAIXO DA MEDIA;
        Console.WriteLine("MEDIA DO VETOR = " + media);
        Console.WriteLine("ELEMENTOS ABAIXO DA MEDIA: ");

        for(i = 0; i < n; i++)
        {
            if (vetor[i] < media)
            {
                Console.WriteLine(vetor[i]);
            }
        }
    }
}