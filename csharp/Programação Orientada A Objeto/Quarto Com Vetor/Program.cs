using System;

namespace Quarto_Com_Vetor;
class Programa
{
    static void Main(string[] args)

    {
        Console.WriteLine("Digite A Quantidade de Quartos Disponíveis: ");
        int quantidade_quartos = int.Parse(Console.ReadLine()); //Armazena o Tamanho do Vetor Em Variável;

        Estudante[] quarto = new Estudante[quantidade_quartos]; //Declara e Instancia o Vetor do Objeto "Quarto" Relacionado A Classe 

        //Inicia A "Manipulação" ou Navegação Entre Os Indices Do 
        for (int i = 1; i < quantidade_quartos; i++)
        {
            Console.WriteLine();
            Console.WriteLine("*** DADOS DO HÓSPEDE " + i + "***");
            Console.WriteLine("Nome: ");
            string nome = Console.ReadLine();
            Console.WriteLine("Endereço: ");
            string endereço = Console.ReadLine();
            Console.WriteLine("Email: ");
            string email = Console.ReadLine();

            quarto[i] = new Estudante(nome, endereço, email);
        }

        Console.WriteLine(quarto);

        Console.WriteLine();
        Console.WriteLine("Pressione ENTER para encerrar.");
        Console.ReadLine();
    }
}
