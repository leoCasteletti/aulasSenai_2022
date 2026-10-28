using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atividade 02 - Coordenadas");
        Console.WriteLine();

        float x, y;

        Console.WriteLine("Valor de X");
        x = float.Parse(Console.ReadLine());

        Console.WriteLine("valor de Y");
        y = float.Parse(Console.ReadLine());

        if (x > 0 && y > 0)
        {
            Console.WriteLine("Q1");
        }
        else if (x < 0 && y > 0)
        {
            Console.WriteLine("Q2");
        }
        else if (x < 0 && y < 0)
        {
            Console.WriteLine("Q3");
        }
        else if (x > 0 && y < 0)
        {
            Console.WriteLine("Q4");
        }
        else if (x == 0 && y == 0)
        {
            Console.WriteLine("Origem");
        }
        else if (x == 0)
        {
            Console.WriteLine("Eixo Y");
        }
        else
        {
            Console.WriteLine("Eixo X");
        }

        Console.WriteLine("Pressione ENTER para encerrar o programa.");
        Console.ReadLine();
    }
}