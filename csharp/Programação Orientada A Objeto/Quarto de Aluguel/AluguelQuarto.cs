using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace quartoDeAluguel
{
    internal class AluguelQuarto
    {
        public string nome, email;
        public double cpf, dataNascimento, numeroTelefone, pessoaContato, periodoProposto, valorQuarto;

        public string inserirDados()
        {
            Console.Write("Nome do Hóspede: "); nome = Console.ReadLine();
            Console.Write("E-mail do Hóspede: "); email = Console.ReadLine();
            Console.Write("CPF do Hóspede: "); cpf = double.Parse(Console.ReadLine());
            Console.Write("Data de Nascimento do Hóspede: "); dataNascimento = double.Parse(Console.ReadLine());
            Console.Write("Número de Telefone do Hóspede: "); numeroTelefone = double.Parse(Console.ReadLine());
            Console.Write("Pessoa para Contato do Hóspede: ");pessoaContato = double.Parse(Console.ReadLine());
            Console.Write("Período Proposto Para Aluguel(DIAS): "); periodoProposto = double.Parse(Console.ReadLine());
            Console.Write("Insira o Valor do Quarto(DIÁRIA): "); valorQuarto = double.Parse(Console.ReadLine());
            return nome;
        } 

        public double calcularValor()
        {
           return valorQuarto * periodoProposto;
        }

        public override string ToString()
        {
            return "- - - - - RELATÓRIO - - - - -" + "\n"
                + "Hóspede: " + nome + "\n"
                + "E-mail do " + nome + ": " + email + "\n"
                + "CPF do " + nome + ": " + cpf + "\n"
                + "Data de Nascimento do " + nome + ": " + dataNascimento + "\n"
                + "Número de Telefone do " + nome + ": " + numeroTelefone + "\n"
                + "Pessoa para Contato do " + nome + ": " + pessoaContato + "\n"
                + "Período Proposto para Aluguel pelo " + nome + ": " + periodoProposto + "dias" + "\n"
                + "Valor da Diária: " + valorQuarto.ToString("C2") + "\n"
                + "Valor Total à Pagar: " + calcularValor().ToString("C2");
        }



    }
}
