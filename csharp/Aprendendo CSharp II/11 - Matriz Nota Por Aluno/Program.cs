using System;
using System.Globalization;

namespace MatrizNotasPorAlunos
{
    class Program
    {
        static void Main(string[] args)
        {
            int QtdeAlunos, QtdeNotas; //Declaração das variáveis que armazenarão as quantidades de Linhas e Colunas da Matriz;

            Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
            Console.WriteLine("=======================================================================");
            Console.WriteLine("Projeto Matrizes - Armazenamento das Notas dos Alunos da Turma MDS 2022");
            Console.WriteLine("=======================================================================");
            Console.WriteLine(); Console.WriteLine(); Console.WriteLine(); //Pular linha(s)
            Console.WriteLine("Infome a Quantidade de Alunos da Turma:"); //Mostra mensagem ao usuário acrescido de "quebra de linha";
            QtdeAlunos = int.Parse(Console.ReadLine()); //Aguarda o usuário diAtribiu o valor digitado pelo usuário à variavel declarada anteriormente;
            Console.WriteLine("Infome a Quantidade de Notas por Aluno:");
            QtdeNotas = int.Parse(Console.ReadLine());
            Console.WriteLine();

            //Declaração da Matriz e definição do seu "tamanho" => (criação da matriz e alocação de espaço em memória);
            double[,] MatrizNotasPorAlunos = new double[QtdeAlunos, QtdeNotas];

            //Inicia a manipulação dos índices das LINHAS (vertical, de cima para baixo);
            for (int NumAluno = 0; NumAluno < QtdeAlunos; NumAluno++)
            // PRIMEIRO ARGUMENTO DO FOR: inicializa com ZERO - pq uma matriz começa com índice ZERO sempre - a var que navegará no índice da matriz    
            // SEGUNDO ARGUMENTO DO FOR: controla o 'loop' enquanto índice for menor que a qtde de LINHAS digitadas - pq não pode ser menor ou igual para manipulação de matrizes?
            // TERCEIRO ARGUMENTO DO FOR: incrementa com +1 o índice da linha da matriz, para que possa seguir para a próxima linha
            {
                //Inicia a manipulação dos índices das COLUNAS (horizontal, da esquerda para a direita);
                for (int NumNota = 0; NumNota < QtdeNotas; NumNota++)
                // PRIMEIRO ARGUMENTO DO FOR: inicializa com ZERO - pq uma matriz começa com índice ZERO sempre - a var que navegará no índice da matriz    
                // SEGUNDO ARGUMENTO DO FOR: controla o 'loop' enquanto índice for menor que a qtde de COLUNAS digitadas - pq não pode ser menor ou igual para manipulação de matrizes?
                // TERCEIRO ARGUMENTO DO FOR: incrementa com +1 o índice da coluna da matriz, para que possa seguir para a próxima coluna
                {
                    Console.Write("Infome a Nota N. {0} do Aluno N. {1}: ", NumNota + 1, NumAluno + 1); //Consele.Write com uso de PLACEHOLDER
                    MatrizNotasPorAlunos[NumAluno, NumNota] = double.Parse(Console.ReadLine()); //Atribui o valor digitado dentro do elemento LINHAxCOLUNA da matriz 
                }
                Console.WriteLine();
            }
            Console.WriteLine();
            Console.WriteLine("                  *  NOTAS DOS ALUNOS  *                           ");
            Console.WriteLine("=======================================================================");

            //Declaração das variáveis que armazenação a Média das Notas por Aluno.

            for (int NumAluno = 0; NumAluno < QtdeAlunos; NumAluno++)
            {
                double SomaNotas = 0.00;
                double MediaNotas = 0.00;

                for (int NumNota = 0; NumNota < QtdeNotas; NumNota++)
                {
                    Console.WriteLine($"Aluno N. {NumAluno + 1} | Nota N. {NumNota + 1} : {MatrizNotasPorAlunos[NumAluno, NumNota]:F1}"); //Consele.Write com uso de INTERPOLAÇÃO
                    SomaNotas += MatrizNotasPorAlunos[NumAluno, NumNota];
                }
                MediaNotas = (double)SomaNotas / (double)QtdeNotas;
                Console.WriteLine("A SOMA das Notas do Aluno N. " + NumAluno + 1 + " é :" + SomaNotas.ToString("F1") + " e a MÉDIA dele é " + MediaNotas.ToString("F1"));
                Console.WriteLine();
            }
        }
    }
}