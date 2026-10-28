using System;
using System.Globalization;

class comerciante
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Comerciante");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int n, abaixo, entre, acima;
        float totalCompra, totalVenda, totalLucro, lucro, percentualLucro;        

        Console.WriteLine("Serão Digitados Dados de Quantos Produtos?");
        n = int.Parse(Console.ReadLine());
        Console.WriteLine();

        string[] nomes = new string[n];
        float[] precosCompras = new float[n];
        float[] precosVenda = new float[n];

        for (int i = 0; i < n; i++)
        {
            Console.WriteLine("Produto " + (i + 1));
            Console.Write("Nome: ");
            nomes[i] = (Console.ReadLine());
            Console.WriteLine();

            Console.Write("Preço de Compra: ");
            precosCompras[i] = float.Parse(Console.ReadLine());
            
            Console.Write("Preço de Venda: ");
            precosVenda[i] = float.Parse(Console.ReadLine());
            Console.WriteLine();
        }

        abaixo = 0;
        entre = 0;
        acima = 0;

        for(int i = 0; i < n; i++)
        {
            lucro = precosVenda[i] - precosCompras[i];
            percentualLucro = lucro * 100 / precosCompras[i];

            if (percentualLucro < 10)
            {
                abaixo = abaixo + 1;
            }
            else if (percentualLucro <= 20)
            {
                entre = entre + 1;
            }
            else
                acima = acima + 1;
        }

        totalCompra = 0;
        totalVenda = 0;

        for(int i = 0; i < n; i++)
        {
            totalCompra = totalCompra + precosCompras[i];
            totalVenda = totalVenda + precosVenda[i]; ;
        }

        totalLucro = totalVenda - totalCompra;

        Console.WriteLine();
        Console.WriteLine("===================================");
        Console.WriteLine("            RELATÓRIO");
        Console.WriteLine("===================================");
        Console.WriteLine("Lucro Abaixo de 10%: " + abaixo.ToString("C")); ;
        Console.WriteLine("Lucro Entre 10% e 20%: " + entre.ToString("C"));
        Console.WriteLine("Lucro Acima de 20%: " + acima.ToString("C"));
        Console.WriteLine("Valor Total de Compra: " + totalCompra.ToString("C"));
        Console.WriteLine("Valor Total de Venda: " + totalVenda.ToString("C"));
        Console.WriteLine("Lucro Total: " + totalLucro.ToString("C"));

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}