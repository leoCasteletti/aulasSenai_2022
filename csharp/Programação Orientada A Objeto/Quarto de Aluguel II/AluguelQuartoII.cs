using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace quartoDeAluguel
{
    internal class AluguelQuarto
    {
        public string Nome, Email, Genero;
        public double Endereco, Telefone, CPF, DataNascimento;

        public string DadosHospede()
        {
            Console.WriteLine("==============================================");
            Console.WriteLine("           INSIRA OS DADOS DO HÓSPEDE         ");
            Console.WriteLine("==============================================");
            Console.Write("Nome do Hóspede: "); 
            Nome = Console.ReadLine();

            Console.Write("E-mail do Hóspede: "); 
            Email = Console.ReadLine();

            Console.Write("CPF do Hóspede: "); 
            CPF = double.Parse(Console.ReadLine());

            Console.Write("Data de Nascimento do Hóspede: "); 
            DataNascimento = double.Parse(Console.ReadLine());

            Console.Write("Número de Telefone do Hóspede: ");
            Telefone = double.Parse(Console.ReadLine());

            Console.Write("Gênero do Hóspede: ");
            Genero = Console.ReadLine();

            return Nome;
        }

        public double DiasAlugados, ValorAluguel;
        public int OpcaoDiaria;


        public double DadosQuarto()
        {
            Console.WriteLine("==============================================");
            Console.WriteLine("                   QUARTOS                    ");
            Console.WriteLine("==============================================");
            Console.WriteLine("Nós Do Hotel Cocudos, Temos 3 Opções. Segue As Opções");
            Console.WriteLine("Opção (1): A Diária Na Opção 1 Se Encontra No Valor De R$200,00");
            Console.WriteLine("Opção (2): A Diária Na Opção 2 Se Encontra No Valor De R$500,00");
            Console.WriteLine("Opção (3): A Diária Na Opção 3 Se Encontra No Valor De R$700,00");
            OpcaoDiaria = int.Parse(Console.ReadLine());

            if(OpcaoDiaria == 1)
            {
                Console.WriteLine("Quantos Dias Você Deseja Alugar?");
                DiasAlugados = double.Parse(Console.ReadLine());

                Console.WriteLine("Você Escolheu A Opção 1, Você Irá Pagar " + (DiasAlugados * 200).ToString("C2"));
            }
            if (OpcaoDiaria == 2)
            {
                Console.WriteLine("Quantos Dias Você Deseja Alugar?");
                DiasAlugados = double.Parse(Console.ReadLine());

                Console.WriteLine("Você Escolheu A Opção 2, Você Irá Pagar " + (DiasAlugados * 500).ToString("C2"));
            }
            if (OpcaoDiaria == 3)
            {
                Console.WriteLine("Quantos Dias Você Deseja Alugar?");
                DiasAlugados = double.Parse(Console.ReadLine());

                Console.WriteLine("Você Escolheu A Opção 3, Você Irá Pagar " + (DiasAlugados * 700).ToString("C2"));
            }       

            return DiasAlugados;
        }
    }
}