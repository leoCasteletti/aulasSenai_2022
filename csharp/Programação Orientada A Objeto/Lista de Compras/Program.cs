using System;
using System.Globalization;
using System.Collections.Generic;

namespace Lista_de_Compras;
class listaDeCompras
{
    static void Main(string[] args)

    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Lista de Compras - SEM CLASSE");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        int quantidadeClientes = 0, idade = 0, quantidadeProduto = 1;
        string nome = "", endereco = "", descricao = "", nomeDoProduto = "";
        float codigoProduto = 0, preco = 0;

        Console.WriteLine("Quantos Clientes você Deseja Informar Os Dados?");
        quantidadeClientes = int.Parse(Console.ReadLine());

        string[] vetorNomeClientes = new string[quantidadeClientes];
        string[] vetorEnderecoClientes = new string[quantidadeClientes];
        int[] vetorIdadeClientes = new int[quantidadeClientes];        

        string[] vetorNomeDosProdutos = new string[quantidadeProduto];
        float[] vetorCodigoDosProdutos = new float[quantidadeProduto];
        string[] vetorDescricaoDosProdutos = new string[quantidadeProduto];
        int[] vetorQuantidadeDosProdutos = new int[quantidadeProduto];
        float[] vetorPrecoDosProdutos = new float[quantidadeProduto];        

        for (int i = 0; i < quantidadeClientes; i++)
        {
            Console.WriteLine("- - - - - Insira os Dados do " + (i + 1) + "° Cliente - - - - - ");
            Console.Write("Nome: ");
            vetorNomeClientes[i] = Console.ReadLine();
            Console.Write("Endereço: ");
            vetorEnderecoClientes[i] = Console.ReadLine();
            Console.Write("Idade: ");
            vetorIdadeClientes[i] = int.Parse(Console.ReadLine());
            Console.WriteLine();

            Console.WriteLine("Quantos Produtos você Deseja Registrar Por Cliente?");
            quantidadeProduto = int.Parse(Console.ReadLine());           

            for (int x = 0; x < quantidadeProduto; x++)
            {
                Console.WriteLine("= = = = = Produtos do " + (i + 1) + "° Cliente = = = = = ");
                Console.Write("Nome do Produto: ");
                vetorNomeDosProdutos[x] = Console.ReadLine();
                Console.Write("Código do Produto: ");
                vetorCodigoDosProdutos[x] = float.Parse(Console.ReadLine());
                Console.Write("Descrição do Produto: ");
                vetorDescricaoDosProdutos[x] = Console.ReadLine();
                Console.Write("Quantidade: ");
                vetorQuantidadeDosProdutos[x] = int.Parse(Console.ReadLine());
                Console.Write("Preço: ");
                vetorPrecoDosProdutos[x] = float.Parse(Console.ReadLine());
                Console.WriteLine();
            }
        }

        for (int i = 0; i < quantidadeClientes; i++)
        {
            Console.WriteLine();
            Console.WriteLine("===================================");
            Console.WriteLine("         RELATÓRIO " + (i + 1) + "° CLIENTE");
            Console.WriteLine("===================================");
            Console.WriteLine();
            Console.WriteLine("Nome: " + vetorNomeClientes[i]);
            Console.WriteLine("Endereço: " + vetorEnderecoClientes[i]);
            Console.WriteLine("Idade: " + vetorIdadeClientes[i]);

            for (int x = 0; x < quantidadeProduto; x++)
            {
                Console.WriteLine("Nome do Produto: " + vetorNomeDosProdutos[x]);
                Console.WriteLine("Código do(a) " + vetorNomeDosProdutos[x] + ": " + vetorCodigoDosProdutos[x]);
                Console.WriteLine("Descrição do(a) " + vetorNomeDosProdutos[x] + ": " + vetorDescricaoDosProdutos[x]);
                Console.WriteLine("Quantidade do(a) " + vetorNomeDosProdutos[x] + ": " + vetorQuantidadeDosProdutos[x]);
                Console.WriteLine("Preço do(a) " + vetorNomeDosProdutos[x] + ": " + vetorPrecoDosProdutos[x].ToString("C"));
            }
        }   

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}