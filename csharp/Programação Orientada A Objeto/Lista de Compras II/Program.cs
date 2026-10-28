using System;

namespace Lista_de_Compras_II;

class listaDeComprasII
{
    static void Main(string[] args)

    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Lista de Compras - COM CLASSE");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        Produto Cod;
        Produto Descricao;
        Produto Qntd;
        Produto Preco;

        Cliente Nome;
        Cliente Endereço;
        Cliente Idade;

        Cod = new Produto();
        Descricao = new Produto();
        Qntd = new Produto();
        Preco = new Produto();

        Nome = new Cliente();
        Endereço = new Cliente();
        Idade = new Cliente();

        int cli, i;

        Console.WriteLine("QUANTOS CLIENTES SERÃO ATENDIDOS? ");
        cli = int.Parse(Console.ReadLine());



        for (i = 0; i < cli; i++)
        {
            Console.WriteLine("INFORMAÇÕES DO CLIENTE N°: " + (i + 1));
            Console.WriteLine("INFORME SEU NOME: ");
            Nome.A = Console.ReadLine();
            Console.WriteLine("INFORME SEU ENDEREÇO: ");
            Endereço.B = Console.ReadLine();
            Console.WriteLine("INFORME SUA IDADE: ");
            Idade.C = int.Parse(Console.ReadLine());

            Console.WriteLine();

            Console.WriteLine("AGORA DIGITE AS INFORMAÇÕES DOS PRODUTOS: ");

            Console.WriteLine();
            Console.WriteLine("PRODUTOS DO CLIENTE N°: " + (i + 1));
            Console.WriteLine("INFORME O CÓDIGO DO PRODUTO: ");
            Cod.A = long.Parse(Console.ReadLine());
            Console.WriteLine("DESCRIÇÃO DO PRODUTO: ");
            Descricao.B = Console.ReadLine();
            Console.WriteLine("QUANTIDADE DO PRODUTO: ");
            Qntd.C = int.Parse(Console.ReadLine());
            Console.WriteLine("VALOR DO PRODUTO: ");
            Preco.D = float.Parse(Console.ReadLine());

            Console.WriteLine();

            Console.WriteLine("========================================");
            Console.WriteLine("           RELATÓRIO GERAL: ");
            Console.WriteLine("========================================");

            Console.WriteLine();
            Console.WriteLine("CLIENTE N°: " + (i + 1));
            Console.WriteLine("NOME DO CLIENTE: " + Nome.A.ToUpper());
            Console.WriteLine("ENDEREÇO DO CLIENTE: " + Endereço.B.ToUpper());
            Console.WriteLine("IDADE DO CLIENTE: " + Idade.C);
            Console.WriteLine();
            Console.WriteLine("INFORMAÇÕES DO PRODUTO COMPRADO: ");
            Console.WriteLine("CÓDIGO DO PRODUTO: " + Cod.A);
            Console.WriteLine("DESCRIÇÃO DO PRODUTO: " + Descricao.B.ToUpper());
            Console.WriteLine("QUANTIDADE INFORMADA: " + Qntd.C);
            Console.WriteLine("VALOR TOTAL A SE PAGAR: " + (Preco.D * Qntd.C).ToString("C"));
            Console.WriteLine();
            Console.WriteLine();

        }

        Console.WriteLine();
        Console.WriteLine("Pressione ENTER para encerrar.");
        Console.ReadLine();
    }
}
