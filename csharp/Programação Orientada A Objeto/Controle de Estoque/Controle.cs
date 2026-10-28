using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Controle_de_Estoque
{
    internal class Controle
    {
        public string nome, relatorioCliente, perguntaCliente, quantidadeAumentar, quantidadeDiminuir, perguntaReajuste; //NOME DO USUÁRIO;
        public double preco, valorTotal; //PREÇO e VALOR TOTAL;
        public int quantidade, aumentar, diminuir; //QUANTIDADE;

        public string Nome()
        {
            Console.Write("Nome do Cliente: ");
            return nome = Console.ReadLine();
        }

        public double Preco()
        {
            Console.Write("Preço do Produto: ");
            return preco = double.Parse(Console.ReadLine());
        }

        public int Quantidade()
        {
            Console.Write("Quantidade do Produto: ");
            return quantidade = int.Parse(Console.ReadLine());
        }

        public double valorTotalEstoque()
        {            
            Console.WriteLine("Valor do Estoque " + (preco * quantidade).ToString("C2"));
            return valorTotal;
        }

        public string Relatorio()
        {
            Console.WriteLine();
            Console.WriteLine("===================================");
            Console.WriteLine("            RELATÓRIO");
            Console.WriteLine("===================================");
            Console.WriteLine("Nome do Cliente: " + nome);
            Console.WriteLine("Preço do Produto: " + preco);
            Console.WriteLine("Quantidade do Produto: " + quantidade);
            return relatorioCliente;
        }

        public string Pergunta()
        {
            Console.WriteLine("Deseja Ajustar o Estoque? (S / N)");
            perguntaCliente = (Console.ReadLine());

            if(perguntaCliente == "S")
            {
                Console.WriteLine("Você Deseja Aumentar ou Reduzir o Estoque? (Aumentar e Diminuir)");
                perguntaReajuste = (Console.ReadLine());
            } if (perguntaReajuste == "Aumentar")
            {
                Console.WriteLine("Quanto Você Deseja Aumentar no Estoque?");
                aumentar = int.Parse(Console.ReadLine());

                Console.WriteLine();
                Console.WriteLine("===================================");
                Console.WriteLine("         NOVO RELATÓRIO");
                Console.WriteLine("===================================");
                Console.WriteLine("Nome do Cliente: " + nome);
                Console.WriteLine("Preço do Produto: " + preco);
                int quantidadeAumentar = quantidade + aumentar;
                Console.WriteLine("Quantidade do Produto: " + (quantidadeAumentar));
                Console.WriteLine("Valor do Estoque " + (quantidadeAumentar * preco).ToString("C2"));
            } 
            if(perguntaReajuste == "Diminuir")
            {
                Console.WriteLine("Quanto Você Deseja Aumentar no Estoque?");
                aumentar = int.Parse(Console.ReadLine());

                Console.WriteLine();
                Console.WriteLine("===================================");
                Console.WriteLine("         NOVO RELATÓRIO");
                Console.WriteLine("===================================");
                Console.WriteLine("Nome do Cliente: " + nome);
                Console.WriteLine("Preço do Produto: " + preco);
                int quantidadeDiminuir = quantidade + diminuir;
                Console.WriteLine("Quantidade do Produto: " + (quantidadeDiminuir));
                Console.WriteLine("Valor do Estoque " + (quantidadeDiminuir * preco).ToString("C2"));
            }

            return perguntaCliente;
        }
    }
}
