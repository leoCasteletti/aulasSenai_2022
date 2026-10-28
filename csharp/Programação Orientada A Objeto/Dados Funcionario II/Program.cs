using System;

namespace Dados_Funcionario2;
class Programa
{
    static void Main(string[] args)

    {
        Console.WriteLine("Projeto - Dados Funcionário 2");
        Console.WriteLine();

        Funcionario A = new Funcionario();

        Console.WriteLine("DIGITE OS DADOS DO FUNCIONÁRIO");
        Console.Write("Nome: ");
        A.Nome = Console.ReadLine();
        Console.Write("Salário Bruto ");
        A.SlrBruto = double.Parse(Console.ReadLine());
        Console.Write("Imposto: ");
        A.Imposto = double.Parse(Console.ReadLine());

        Console.WriteLine();
        Console.WriteLine(A);

        Console.WriteLine(); Console.WriteLine();
        Console.WriteLine("Percentual de Aumento: "); 
        double perct_aumento = double.Parse(Console.ReadLine());
        A.AumentarSlr(perct_aumento);

        Console.WriteLine();
        Console.WriteLine(A);

        Console.WriteLine();
        Console.WriteLine("Pressione ENTER para encerrar.");
        Console.ReadLine();
    }
}