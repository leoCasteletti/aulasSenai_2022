using System;
using System.Globalization;

namespace VetorNomeAlunos
{
    class Program
    {
        static void Main(string[] args)
        {
            int QtdeAlunos;

            Console.WriteLine("  SENAI SP - VOTUPORANGA - MDS TEC.  EM DESENVOLVIMENTO DE SISTEMAS - 2022");
            Console.WriteLine("==========================================================================");
            Console.WriteLine("Projeto Vetor/Array - Armazenamento dos Nomes dos Alunos da Turma MDS 2022");
            Console.WriteLine("==========================================================================");
            Console.WriteLine(); Console.WriteLine(); Console.WriteLine(); //Pular linha(s)
            Console.WriteLine("Infome a Quantidade de Alunos da Turma:"); //Mostra mensagem ao usuário acrescido de "quebra de linha";
            QtdeAlunos = int.Parse(Console.ReadLine()); //Aguarda o usuário atribir o valor digitado pelo usuário à variavel declarada anteriormente;
            Console.WriteLine();

            //Declaração da Matriz e definição do seu "tamanho" => (criação da matriz e alocação de espaço em memória);
            string[] VetorNomeAlunos = new string[QtdeAlunos];

            //Inicia a manipulação dos índices das linhas (vertical, de cima para baixo) do Vetor;
            for (int IndiceAluno = 0; IndiceAluno < QtdeAlunos; IndiceAluno++)
            // PRIMEIRO ARGUMENTO DO FOR: inicializa com ZERO - pq um vetor/array começa com índice ZERO sempre - a var que navegará no índice do vetor    
            // SEGUNDO ARGUMENTO DO FOR: controla o 'loop' enquanto índice for menor que a qtde de LINHAS digitadas - pq não pode ser menor ou igual para manipulação de vetores/arrays?
            // TERCEIRO ARGUMENTO DO FOR: incrementa com +1 o índice da linha do vetor/array, para que possa seguir para a próxima linha
            {
                Console.Write("Infome o NOME do(a) Aluno(a) N. {0}: ", IndiceAluno + 1); //Consele.Write com uso de PLACEHOLDER
                VetorNomeAlunos[IndiceAluno] = Console.ReadLine(); //Atribui o valor digitado dentro do elemento 'X' do vetor/array 
            }

            char Imprime;

            Console.WriteLine();
            Console.Write("Digite 'S' para imprimir os nomes dos Alunos: ");
            Imprime = char.Parse(Console.ReadLine()); Console.WriteLine();

            if (Imprime == 'S' || Imprime == 's')
            {
                for (int IndiceAluno = 0; IndiceAluno < QtdeAlunos; IndiceAluno++)
                {
                    Console.WriteLine($"Aluno N. {IndiceAluno + 1} chama-se : {VetorNomeAlunos[IndiceAluno].ToUpper()}"); //Console.Write com uso de INTERPOLAÇÃO

                }
            }
        }
    }
}