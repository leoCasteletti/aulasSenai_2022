using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atividade 02 - Calcula Poupança");

        //Rendimento de 0,5% (0,005) ao mês.
        double investimento = 1000;

        /*//Mes 1.
        investimento = investimento + investimento * 0.005;
        Console.WriteLine(investimento);

        //Mes 2.
        investimento = investimento + investimento * 0.005;
        Console.WriteLine(investimento);

        //Mes 3.
        investimento = investimento + investimento * 0.005;
        Console.WriteLine(investimento);*/

        for (int mes = 1; mes <= 12; mes++)
        {
            //investimento = investimento + investimento * 0.005;
            investimento *= 1.005;
            Console.WriteLine("No mês " + mes + " você tem " + investimento.ToString("C"));
            //mes += 1; //Incremento com valor maior de 1 se usa +=.
            //mes = mes + 1;
        }

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}