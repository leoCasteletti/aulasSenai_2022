using System;
using System.Globalization;

namespace Dados_Pessoais;
class dadosPessoaisSemClasse
{
    static void Main(string[] args)

    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Dados Pessoais - SEM CLASSE");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        string nome1, nome2;
        float idade1, idade2;

        Console.WriteLine("- - - - - Insira os Dados da 1° Pessoa - - - - - ");
        Console.Write("Nome: ");
        nome1 = Console.ReadLine();
        Console.Write("Idade: ");
        idade1 = float.Parse(Console.ReadLine());
        Console.WriteLine();

        Console.WriteLine("- - - - - Insira os Dados da 2° Pessoa - - - - - ");
        Console.Write("Nome: ");
        nome2 = Console.ReadLine();
        Console.Write("Idade: ");
        idade2 = float.Parse(Console.ReadLine());
        Console.WriteLine();

        if(idade1 > idade2)
        {
            Console.WriteLine("- - - - - Dados da Pessoa mais Velha - - - - -");
            Console.WriteLine("Nome: " + nome1);
            Console.WriteLine("Idade: " + idade1);
        } else
        {
            if(idade2 > idade1)
            {
                Console.WriteLine("- - - - - Dados da Pessoa mais Velha - - - - -");
                Console.WriteLine("Nome: " + nome2);
                Console.WriteLine("Idade: " + idade2);
            }
        }

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}