using System;
using System.Globalization;

namespace AV_Retangulo;
    class Principal
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Avaliação Final - Retângulo");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        //PERGUNTA E ARMAZENA O TAMANHO DO VETOR EM VARIÁVEL;
        Console.Write("Digite a Quantidade de Retangulos: ");
        int quantidade_retangulos = int.Parse(Console.ReadLine());

        //DECLARAÇÃO DAS FUNÇÕES DA CLASSE;
        Retangulo[] retangulos = new Retangulo[quantidade_retangulos];

        //INICIANDO O FOR: USUÁRIO IRÁ INSERIR AS INFORMAÇÕES DO FUNCIONÁRIO, SE HOUVER 2 RETANGULOS AS PERGUNTAS IRÃO REPETIR DUAS VEZES;
        for (int i = 0; i < quantidade_retangulos; i++)
        {
            Console.WriteLine();
            Console.WriteLine("*** DADOS RETANGULO " + (i + 1) + " ***");
            Console.Write("Insira a Base do Retângulo: ");
            double Base = double.Parse(Console.ReadLine()); //DECLARA E ATRIBUI O VALOR DIGITADO PELO USUÁRIO;

            Console.Write("Insira a Altura do Retângulo: ");
            double Altura = double.Parse(Console.ReadLine()); //DECLARA E ATRIBUI O VALOR DIGITADO PELO USUÁRIO;

            //VINCULA O OBJETO [INDICE DO VETOR] A INSTÂNCIA DA CLASSE;
            retangulos[i] = new Retangulo(Base, Altura);
        }

        //PERGUNTA SE O USUÁRIO GOSTARIA DE IMPRIMIR O RELATÓRIO;
        //SIM = EXIBE;
        //NÃO = ENCERRA O PROGRAMA SEM EXIBIR O RELATÓRIO;
        Console.Write("Deseja Imprimir o Relatório? (S)im ou (N)ão: ");
        char imprimir = char.Parse(Console.ReadLine());

        if (imprimir == 'S')
        {
            for (int i = 0; i < quantidade_retangulos; i++)
            {
                Console.WriteLine();
                Console.WriteLine("= = = = = RELATÓRIO " + (i + 1) + " = = = = =");
                Console.WriteLine(retangulos[i]);
            }
        }
    }
}