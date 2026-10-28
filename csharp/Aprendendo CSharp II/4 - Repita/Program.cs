using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atividade 04 - Repita");
        Console.WriteLine();

        float C, F;
        string resp;

        do
        {
            Console.WriteLine("Digite a temperatura em Celsius: ");
            C = float.Parse(Console.ReadLine());

            F = 9 * C / 5 + 32;

            Console.WriteLine("Equivalente em Fahrenheit: " + F.ToString("F1"));

            Console.WriteLine("Deseja repetir (s/n)");
            resp = (Console.ReadLine());
        } while (resp != "n");

        Console.WriteLine("Pressione ENTER para encerrar o programa.");
        Console.ReadLine();
    }
}