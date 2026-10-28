using System;
using System.Globalization;

namespace VetorNomeAlunos
{
    class Program
    {
        static void Main(string[] args)
        {
            string NomeAluno01, NomeAluno02, NomeAluno03, NomeAluno04, NomeAluno05, NomeAluno06, NomeAluno07, NomeAluno08;
            string NomeAluno09, NomeAluno10, NomeAluno11, NomeAluno12, NomeAluno13, NomeAluno14, NomeAluno15, NomeAluno16;

            Console.WriteLine("  SENAI SP - VOTUPORANGA - MDS TEC.  EM DESENVOLVIMENTO DE SISTEMAS - 2022");
            Console.WriteLine("==========================================================================");
            Console.WriteLine("Projeto Vetor/Array - Armazenamento dos Nomes dos Alunos da Turma MDS 2022");
            Console.WriteLine("==========================================================================");
            Console.WriteLine(); Console.WriteLine(); Console.WriteLine(); //Pular linha(s)

            Console.Write("Digite o nome do Aluno 01: ");
            NomeAluno01 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 02: ");
            NomeAluno02 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 03: ");
            NomeAluno03 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 04: ");
            NomeAluno04 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 05: ");
            NomeAluno05 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 06: ");
            NomeAluno06 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 07: ");
            NomeAluno07 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 08: ");
            NomeAluno08 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 09: ");
            NomeAluno09 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 10: ");
            NomeAluno10 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 11: ");
            NomeAluno11 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 12: ");
            NomeAluno12 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 13: ");
            NomeAluno13 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 14: ");
            NomeAluno14 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 15: ");
            NomeAluno15 = Console.ReadLine();
            Console.Write("Digite o nome do Aluno 16: ");
            NomeAluno16 = Console.ReadLine();

            char Imprime;

            Console.WriteLine();
            Console.Write("Digite 'S' para imprimir os nomes dos Alunos: ");
            Imprime = char.Parse(Console.ReadLine()); Console.WriteLine();

            if (Imprime == 'S' || Imprime == 's')
            {
                Console.WriteLine("O nome do Aluno 01 é :" + NomeAluno01.ToUpper());
                Console.WriteLine("O nome do Aluno 02 é :" + NomeAluno02.ToUpper());
                Console.WriteLine("O nome do Aluno 03 é :" + NomeAluno03.ToUpper());
                Console.WriteLine("O nome do Aluno 04 é :" + NomeAluno04.ToUpper());
                Console.WriteLine("O nome do Aluno 05 é :" + NomeAluno05.ToUpper());
                Console.WriteLine("O nome do Aluno 06 é :" + NomeAluno06.ToUpper());
                Console.WriteLine("O nome do Aluno 07 é :" + NomeAluno07.ToUpper());
                Console.WriteLine("O nome do Aluno 08 é :" + NomeAluno08.ToUpper());
                Console.WriteLine("O nome do Aluno 09 é :" + NomeAluno09.ToUpper());
                Console.WriteLine("O nome do Aluno 10 é :" + NomeAluno10.ToUpper());
                Console.WriteLine("O nome do Aluno 11 é :" + NomeAluno11.ToUpper());
                Console.WriteLine("O nome do Aluno 12 é :" + NomeAluno12.ToUpper());
                Console.WriteLine("O nome do Aluno 13 é :" + NomeAluno13.ToUpper());
                Console.WriteLine("O nome do Aluno 14 é :" + NomeAluno14.ToUpper());
                Console.WriteLine("O nome do Aluno 15 é :" + NomeAluno15.ToUpper());
                Console.WriteLine("O nome do Aluno 16 é :" + NomeAluno16.ToUpper());

            }
        }
    }
}