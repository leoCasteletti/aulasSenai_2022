using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atiticade 03 - Multiplos de 3");

        int soma = 0;

        for (int i = 0; i <= 33; i++)
        {
            soma += 3;
            Console.WriteLine(soma);
        }

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}