using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atividade 03 - Divisão");
        Console.WriteLine();

        int N, i;
        float x, y, divisao;

        Console.WriteLine("Quantos casos você vai digitar?: ");
        N = int.Parse(Console.ReadLine());

        for (i = 1; i <= N; i++)
        {
            Console.WriteLine("Entre com o numerador: "); 
            x = float.Parse(Console.ReadLine());
            Console.WriteLine("Entre com o denominador: ");
            y = float.Parse(Console.ReadLine());

            if (y == 0)
            {
                Console.WriteLine("Divisao impossivel!");
            }
            else
            {
                divisao = x / y;
                Console.WriteLine("Divisao = " + divisao);
            }
        }

        Console.WriteLine("Pressione ENTER para encerrar o programa.");
        Console.ReadLine();
    }
}