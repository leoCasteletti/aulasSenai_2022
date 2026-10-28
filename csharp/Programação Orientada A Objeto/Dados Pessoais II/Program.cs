using System;
using System.Globalization;

namespace Dados_Pessoais_II;
class dadosPessoaisComClasse
{
    static void Main(string[] args)

    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Dados Pessoais - COM CLASSE");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        dadosPessoais nome1;
        dadosPessoais nome2;
        dadosPessoais idade1;
        dadosPessoais idade2;

        nome1 = new dadosPessoais();
        nome2 = new dadosPessoais();
        idade1 = new dadosPessoais();
        idade2 = new dadosPessoais();

        Console.WriteLine("- - - - - Insira os Dados da 1° Pessoa - - - - - ");
        Console.Write("Nome: ");
        nome1.nome = Console.ReadLine();
        Console.Write("Idade: ");
        idade1.idade = float.Parse(Console.ReadLine());
        Console.WriteLine();

        Console.WriteLine("- - - - - Insira os Dados da 2° Pessoa - - - - - ");
        Console.Write("Nome: ");
        nome2.nome = Console.ReadLine();
        Console.Write("Idade: ");
        idade2.idade = float.Parse(Console.ReadLine());
        Console.WriteLine();

        if (idade1.idade > idade2.idade)
        {
            Console.WriteLine("- - - - - Dados da Pessoa mais Velha - - - - -");
            Console.WriteLine("Nome: " + nome1.nome);
            Console.WriteLine("Idade: " + idade1.idade);
        }
        else
        {
            if (idade2.idade > idade1.idade)
            {
                Console.WriteLine("- - - - - Dados da Pessoa mais Velha - - - - -");
                Console.WriteLine("Nome: " + nome2.nome);
                Console.WriteLine("Idade: " + idade2.idade);
            }
        }

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}