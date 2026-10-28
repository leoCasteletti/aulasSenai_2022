using System;
using System.Globalization;

namespace MatrizNotasPorAlunos
{
    class Program
    {
        static void Main(string[] args)
        {
            int QuantidadeDeAlunos, QuantidadeDeNotas;

            Console.WriteLine("Qual a Quantidade de Alunos Deseja Armazenar?");
            QuantidadeDeAlunos = int.Parse(Console.ReadLine());
            Console.WriteLine("Qual a Quantidade de Notas Você Deseja Armazenar Por Aluno?");
            QuantidadeDeNotas = int.Parse(Console.ReadLine());

            //Declaração da Matriz e a Definição do seu Tamanho;
            float[,] MatrizDuasNotas = new float[QuantidadeDeAlunos,QuantidadeDeNotas]; //A Virgula é o que Diferencia a Matriz do Vetor;
            string[] VetorNomeAluno = new string[QuantidadeDeAlunos];
            //QUANTIDADE DE LINHAS , QUANTIDADE DE COLUNAS;

            //Inicia a Manipulação das LINHAS(vertical, de cima para baixo) da Matriz;
            for (int IndiceLinhasMatriz = 0; IndiceLinhasMatriz < QuantidadeDeAlunos; IndiceLinhasMatriz++)
            {
                Console.WriteLine("Informe o Nome do Aluno");
                VetorNomeAluno[QuantidadeDeAlunos] = Console.ReadLine();

                //Inicia a Manipulação das COLUNAS(horizontal, da esquerda para direita) da Matriz;
                for (int IndiceColunasMatriz = 0; IndiceColunasMatriz < QuantidadeDeNotas; IndiceColunasMatriz++)
                {
                    //Console.WriteLine("Informe o Nome do Aluno");
                    //VetorNomeAluno[QuantidadeDeAlunos] = Console.ReadLine();

                    Console.WriteLine("Informe a Nota do Aluno");
                    MatrizDuasNotas[IndiceLinhasMatriz,IndiceColunasMatriz] = float.Parse(Console.ReadLine());
                }

            }

            for (int IndiceLinhasMatriz = 0; IndiceLinhasMatriz < QuantidadeDeAlunos; IndiceLinhasMatriz++)
            {
                //Inicia a Manipulação das COLUNAS(horizontal, da esquerda para direita) da Matriz;
                for (int IndiceColunasMatriz = 0; IndiceColunasMatriz < QuantidadeDeNotas; IndiceColunasMatriz++)
                {
                    Console.WriteLine("Nota do Aluno: " + MatrizDuasNotas[IndiceLinhasMatriz, IndiceColunasMatriz].ToString("F2"));
                }

            }

        }    
    }
}