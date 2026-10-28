using System;

class Programa
{
    static void Main(string[] args)
    {

        int qtdeAlunos;


        Console.WriteLine("Quer digitar a nota de quantos alunos?");
        qtdeAlunos = int.Parse(Console.ReadLine());

        string[] VetorNomeAlunos = new string[qtdeAlunos];
        float[,] MatrizNota = new float[qtdeAlunos, 2];


        //esse primeiro For simboliza a manipulação das linhas
        for (int indiceLinhaMatriz = 0; indiceLinhaMatriz < qtdeAlunos; indiceLinhaMatriz++)
        {
            Console.WriteLine("Digite nome " + (indiceLinhaMatriz + 1) + " aluno");
            VetorNomeAlunos[indiceLinhaMatriz] = Console.ReadLine();
            //esse segundo For simboliza a manipulação das colunas
            for (int indiceColunaMatriz = 0; indiceColunaMatriz < 2; indiceColunaMatriz++)
            {
                Console.WriteLine("Informe a nota " + (indiceColunaMatriz + 1) + " do aluno " + (VetorNomeAlunos[indiceLinhaMatriz]));
                MatrizNota[indiceLinhaMatriz, indiceColunaMatriz] = float.Parse(Console.ReadLine());

            }


        }



        for (int indiceLinhaMatriz = 0; indiceLinhaMatriz < qtdeAlunos; indiceLinhaMatriz++)
        {
            float media, soma = 0;

            //for que faz a soma das notas digitadas
            for (int indiceColunaMatriz = 0; indiceColunaMatriz < 2; indiceColunaMatriz++)
            {
                soma += MatrizNota[indiceLinhaMatriz, indiceColunaMatriz];
            }

            media = soma / 2;

            //if que coloca condição para mostrar os que foram aprovados com base na media 7.5
            if (media >= 7.5)
            {
                Console.WriteLine("Alunos aprovados: ");
                Console.WriteLine(VetorNomeAlunos[indiceLinhaMatriz]);
                Console.WriteLine(media);
            }


        }


        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();

    }
}