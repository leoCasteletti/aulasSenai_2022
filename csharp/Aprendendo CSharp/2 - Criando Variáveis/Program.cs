using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Projeto 02 - Criando Variáveis");
        int idade = 27;

        Console.WriteLine("Minha idade é: " + idade + " Anos");

        idade = 27 - 5;

        Console.WriteLine("Minha idade é: " + idade + " Anos");

        idade = 5 * 2 - 6;

        Console.WriteLine("Minha idade é: " + idade + " Anos");

        idade = (5 - 2) * 3;

        Console.WriteLine("Minha idade é: " + idade + " Anos");

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}