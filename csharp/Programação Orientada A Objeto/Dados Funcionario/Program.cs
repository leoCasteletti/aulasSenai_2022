using System;

namespace dados_funcionario
{
    class Programa
    {
        static void Main(string[] args)

        {
            Console.WriteLine("Atividade 2  - Dados do Funcionário");
            Console.WriteLine();

            funcionario funcionario = new funcionario();

            Console.WriteLine("Digite os seus dados, funcionário(a): ");
            Console.Write("Nome: ");
            funcionario.nome = Console.ReadLine();
            Console.Write("Salário bruto: ");
            funcionario.salario = double.Parse(Console.ReadLine());
            Console.Write("Imposto: ");
            funcionario.imposto = double.Parse(Console.ReadLine());

            double totalconta = funcionario.totalconta();

            Console.WriteLine("------////////////////////////////////////////////////////////////////////-");

            Console.WriteLine("Funcionário " + funcionario.nome + " esses são seus dados: ");
            Console.WriteLine("O seu salário liquido é: " + totalconta);


            Console.WriteLine("-------//////////////////////////////////////////////////////////////////-");

            Console.WriteLine();
            Console.WriteLine("Digite um aumento (%): ");
            funcionario.aumento = double.Parse(Console.ReadLine());

            Console.WriteLine("-------//////////////////////////////////////////////////////////////////-");
            Console.WriteLine();

            double totalporcentagem = funcionario.Porcentagem();

            Console.WriteLine("O valor com aumento é: " + (totalporcentagem + totalconta));

            Console.WriteLine();
            Console.WriteLine("Pressione ENTER para encerrar.");
            Console.ReadLine();
        }
    }
}