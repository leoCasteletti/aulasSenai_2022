using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Projeto 11 - Investimento A Longo Prazo");

        double fatorDeRendimento = 1.005, investimento = 1000;

        for (int anos = 1; anos <= 5; anos++)
        {
            for (int mes = 1; mes <= 12; mes++)
            {
                investimento *= fatorDeRendimento;

                //Para mostrar a cada ano.
                Console.WriteLine("No Mês " + mes + " você terá " + investimento.ToString("C"));

            }
            fatorDeRendimento += 0.001;
            Console.WriteLine();
        }

        //Para mostrar o resultado somente do ultimo ano.
        Console.WriteLine("Depois de 5 anos você terá " + investimento.ToString("C"));

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}