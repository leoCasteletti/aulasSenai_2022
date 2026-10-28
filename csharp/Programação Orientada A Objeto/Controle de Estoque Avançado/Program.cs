using System;
using System.Globalization;

namespace controleDeEstoqueAvancado
{
    class Principal
    {
        static void Main(string[] args)
        {
            Produto item = new Produto();
            char ajusta_estoque = 'S';

            Console.ForegroundColor = ConsoleColor.Red;
            Console.WriteLine("=======================================================================");
            Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
            Console.WriteLine("=======================================================================");
            Console.WriteLine("Lista de Compras - COM CLASSE");
            Console.WriteLine("=======================================================================");
            Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
            Console.WriteLine("=======================================================================");
            Console.WriteLine();
            Console.ResetColor();

            Console.BackgroundColor = ConsoleColor.DarkBlue;
            Console.WriteLine("Insira os Dados do Produto");
            Console.ResetColor();
            Console.Write("Nome do Produto: "); item.nome = Console.ReadLine();
            Console.Write("Preço do Produto: "); item.preco = double.Parse(Console.ReadLine());
            Console.Write("Quantidade de Estoque do(a) ");
            Console.ForegroundColor = ConsoleColor.DarkYellow;
            Console.Write(item.nome + ": "); Console.ResetColor(); Console.ForegroundColor = ConsoleColor.DarkGreen; item.quantidade = int.Parse(Console.ReadLine()); Console.ResetColor();

            Console.WriteLine();
            Console.BackgroundColor = ConsoleColor.DarkBlue;
            Console.WriteLine("===================================");
            Console.ResetColor();
            Console.ForegroundColor = ConsoleColor.DarkRed;
            Console.WriteLine("            RELATÓRIO");
            Console.ResetColor();
            Console.BackgroundColor = ConsoleColor.DarkBlue;
            Console.WriteLine("===================================");
            Console.ResetColor();
            Console.WriteLine(item);

            Console.WriteLine();
            Console.WriteLine("Deseja Ajustar o Estoque?");
            Console.ForegroundColor = ConsoleColor.DarkGreen;
            Console.Write("[S]");
            Console.ResetColor();
            Console.Write("im ou ");
            Console.ForegroundColor = ConsoleColor.DarkRed;
            Console.Write("[N]");
            Console.ResetColor();
            Console.Write("ão: "); ajusta_estoque = char.Parse(Console.ReadLine());

            while (ajusta_estoque == 'S' || ajusta_estoque == 's')
            {
                Console.WriteLine();
                Console.Write("Deseja ");
                Console.ForegroundColor = ConsoleColor.DarkGreen;
                Console.Write("[A]");
                Console.ResetColor();
                Console.Write("umentar ou ");
                Console.ForegroundColor = ConsoleColor.DarkRed;
                Console.Write("[R]");
                Console.ResetColor();
                Console.WriteLine("eduzir o Estoque?"); char tipo_ajuste = char.Parse(Console.ReadLine());
                Console.WriteLine();

                if (tipo_ajuste == 'A' || tipo_ajuste == 'a')
                {
                    Console.Write("Informe a Quantidade que Deseja Aumentar: "); int quantidade_ajuste = int.Parse(Console.ReadLine());
                    item.aumentarEstoque(quantidade_ajuste);
                } else if (tipo_ajuste == 'R' || tipo_ajuste == 'r')
                {
                    Console.Write("Informe a Quantidade que Deseja Reduzir: "); int quantidade_ajuste = int.Parse(Console.ReadLine());
                    item.reduzirEstoque(quantidade_ajuste);
                } else
                {
                    Console.WriteLine();
                    Console.WriteLine("Não foi Possível Realizar Ajuste de Estoque");
                }
                Console.WriteLine();
                Console.BackgroundColor = ConsoleColor.DarkBlue;
                Console.WriteLine("===================================");
                Console.ResetColor();
                Console.ForegroundColor = ConsoleColor.DarkRed;
                Console.WriteLine("            RELATÓRIO");
                Console.ResetColor();
                Console.BackgroundColor = ConsoleColor.DarkBlue;
                Console.WriteLine("===================================");
                Console.ResetColor();
                Console.WriteLine(item);

                Console.WriteLine();
                Console.WriteLine("Deseja Ajustar o Estoque?");
                Console.ForegroundColor = ConsoleColor.DarkGreen;
                Console.Write("[S]");
                Console.ResetColor();
                Console.Write("im ou ");
                Console.ForegroundColor = ConsoleColor.DarkRed;
                Console.Write("[N]");
                Console.ResetColor();
                Console.Write("ão: "); ajusta_estoque = char.Parse(Console.ReadLine());
            }
        }
    }
}
