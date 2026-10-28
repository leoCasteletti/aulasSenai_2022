using System;
using System.Globalization;

namespace AV_Alunos;
class Principal
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Avaliação Final - Alunos");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        Console.Write("Digite a Quantidade de Alunos: ");
        int quantidade_alunos = int.Parse(Console.ReadLine());

        Aluno[] alunos = new Aluno[quantidade_alunos];

        for (int i = 0; i < quantidade_alunos; i++)
        {
            Console.WriteLine();
            Console.WriteLine("*** DADOS ALUNO " + (i + 1) + " ***");
            Console.Write("Insira o Nome do Aluno: ");
            string Nome = Console.ReadLine();


            Console.WriteLine("Digite a nota do 1º trimestre : (limite maximo da nota é 30)");
            double nota1 = double.Parse(Console.ReadLine());

            while (nota1 > 30)
            {
                if (nota1 > 30)
                {
                    Console.WriteLine("Nota inválida, nota máxima é 30, digite novamente! ");
                    Console.WriteLine("Digite a nota do 1º trimestre : (limite maximo da nota é 30)");
                    nota1 = double.Parse(Console.ReadLine());
                }
            }

            Console.WriteLine("Digite a nota do 2º trimestre : (limite maximo da nota é 35)");
            double nota2 = double.Parse(Console.ReadLine());

            while (nota2 > 35)
            {
                if (nota2 > 35)
                {
                    Console.WriteLine("Nota inválida, nota máxima é 35, digite novamente! ");
                    Console.WriteLine("Digite a nota do 2º trimestre : (limite maximo da nota é 35)");
                    nota2 = double.Parse(Console.ReadLine());
                }
            }

            Console.WriteLine("Digite a nota do 3º trimestre : (limite maximo da nota é 35)");
            double nota3 = double.Parse(Console.ReadLine());

            while (nota3 > 35)
            {
                if (nota3 > 35)
                {
                    Console.WriteLine("Nota inválida, nota máxima é 35, digite novamente! ");
                    Console.WriteLine("Digite a nota do 3º trimestre : (limite maximo da nota é 35)");
                    nota3 = double.Parse(Console.ReadLine());
                }
            }

            Console.WriteLine();
            Console.WriteLine();


            alunos[i] = new Aluno(Nome, nota1, nota2, nota3);
        }

        for (int i = 0; i < quantidade_alunos; i++)
        {
            Console.WriteLine();
            Console.WriteLine(" ************NOTA FINAL DO " + (i + 1) + "° ALUNO ***********");
            Console.WriteLine();



            Console.WriteLine();
            Console.WriteLine(alunos[i]);
            Console.WriteLine();
        }
    }
}