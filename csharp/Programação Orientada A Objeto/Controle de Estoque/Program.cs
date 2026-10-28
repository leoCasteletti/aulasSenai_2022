using System;
using System.Globalization;

namespace Controle_de_Estoque
{
    class Program
    {
        static void Main(string[] args)
        {
            Controle a = new Controle();

            Console.WriteLine("=======================================================================");
            Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
            Console.WriteLine("=======================================================================");
            Console.WriteLine("Lista de Compras - COM CLASSE");
            Console.WriteLine("=======================================================================");
            Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
            Console.WriteLine("=======================================================================");
            Console.WriteLine();

            a.Nome(); a.Preco(); a.Quantidade(); a.valorTotalEstoque(); a.Relatorio(); a.Pergunta();



        }
    }
}