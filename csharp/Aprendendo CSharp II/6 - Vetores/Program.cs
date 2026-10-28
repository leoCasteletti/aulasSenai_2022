using System;
using System.Globalization;

namespace Vetor;
class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atividade 06 - Vetores");
        Console.WriteLine();

        string[] AlunosMDS = new string[16]; //Declaração do Vetor e a Definição do Seu Tamanho;
        int ImprimeAluno;

        Console.WriteLine("Informe o Nome do Primeiro Aluno: ");
        AlunosMDS[0] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[1] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[2] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[3] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[4] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[5] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[6] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[7] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[8] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[9] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[10] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[11] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[12] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[13] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[14] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[15] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;
        Console.WriteLine("Informe o Nome do Proximo Aluno: ");
        AlunosMDS[16] = Console.ReadLine(); // Atribui o Valor Digitado ao Elemento da Primeira Linha do Vetor;

        do
        {
            Console.WriteLine();
            Console.WriteLine("Qual Aluno Você Deseja Imprimir? ");
            ImprimeAluno = int.Parse(Console.ReadLine());

            Console.WriteLine("Nome do " + ImprimeAluno + " Aluno: " + AlunosMDS[ImprimeAluno].ToUpper()); //(ToUpper) - Transforma Todo Texto em Maíusculo;

            Console.WriteLine("Pressione ENTER para encerrar o programa.");
            Console.ReadLine();
        } while (ImprimeAluno <= 16);
        
    }
}