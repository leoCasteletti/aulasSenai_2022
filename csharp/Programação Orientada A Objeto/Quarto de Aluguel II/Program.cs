using System;

namespace quartoDeAluguel;
class Programa
{
    static void Main(string[] args)

    {
        Console.WriteLine("Projeto - Quarto de Aluguel");
        Console.WriteLine();

        AluguelQuarto A = new AluguelQuarto();

        A.inserirDados();

        Console.WriteLine();
        Console.WriteLine(A);

        Console.WriteLine();
        Console.WriteLine("Pressione ENTER para encerrar.");
        Console.ReadLine();
    }
}