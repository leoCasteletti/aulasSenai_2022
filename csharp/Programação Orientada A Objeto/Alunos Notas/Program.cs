using System;

namespace AlunoTresNotas
{
    class Program
    {
        static void Main(string[] args)
        {
            Aluno a = new Aluno();

            Console.Write("Nome do aluno: ");
            a.nome = Console.ReadLine();

            a.Nota1(); a.Nota2(); a.Nota3();

            Console.WriteLine("NOTA FINAL DE " + a.nome.ToUpper() + ": " + a.Soma());

            if (a.Soma() < 60)
            {
                Console.WriteLine("REPROVADO(A)! " + "FALTARAM " + (60 - a.Soma()) + " PONTOS.");
            }
            else
            {
                Console.WriteLine("APROVADO(A)!");
            }
        }
    }
}