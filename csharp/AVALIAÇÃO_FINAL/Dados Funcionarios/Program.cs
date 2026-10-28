using System;
using System.Globalization;

namespace AV_Funcionario;
class Principal
{
    static void Main(string[] args)
    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Avaliação Final - Funcionários");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        //PERGUNTA E ARMAZENA O TAMANHO DO VETOR EM VARIÁVEL;
        Console.Write("Digite a Quantidade de Funcionários: ");
        int quantidade_funcionarios = int.Parse(Console.ReadLine());

        //DECLARAÇÃO DAS FUNÇÕES DA CLASSE;
        Funcionario[] funcionarios = new Funcionario[quantidade_funcionarios];

        //INICIANDO O FOR: USUÁRIO IRÁ INSERIR AS INFORMAÇÕES DO FUNCIONÁRIO, SE HOUVER 2 FUNCIONÁRIOS AS PERGUNTAS IRÃO REPETIR DUAS VEZES;
        for (int i = 0; i < quantidade_funcionarios; i++)
        {
            Console.WriteLine();
            Console.WriteLine("*** DADOS RETANGULO " + (i + 1) + " ***");
            Console.Write("Insira o Nome do Funcionario: ");
            string Nome = Console.ReadLine(); //DECLARA E ATRIBUI O VALOR DIGITADO PELO USUÁRIO;

            Console.Write("Insira o Salário Bruto: ");
            double SalarioBruto = double.Parse(Console.ReadLine()); //DECLARA E ATRIBUI O VALOR DIGITADO PELO USUÁRIO;

            Console.Write("Insira o Imposto a Ser Descontado: "); 
            double Imposto = double.Parse(Console.ReadLine()); //DECLARA E ATRIBUI O VALOR DIGITADO PELO USUÁRIO;

            //VINCULA O OBJETO [INDICE DO VETOR] A INSTÂNCIA DA CLASSE;
            funcionarios[i] = new Funcionario(Nome, SalarioBruto, Imposto);
        }

        //PERGUNTA SE O USUÁRIO GOSTARIA DE AUMENTAR O SALÁRIO DO USUÁRIO;
        //SIM = PERGUNTA O PERCENTUAL;
        //NÃO = ENCERRA O PROGRAMA E EXIBE O RELATÓRIO SEM O "RECALCULO" DAS INFORMAÇÕES;
        Console.WriteLine();
        Console.Write("Deseja Aumentar o Salário? (S)im ou (N)ão: ");
        char aumentarSalario = char.Parse(Console.ReadLine());

        if (aumentarSalario == 'S')
        {
            for (int i = 0; i < quantidade_funcionarios; i++)
            {
                Console.WriteLine();
                string Nome = " ";
                Console.Write("Percentual de Aumento: ");
                double percentual_aumento = double.Parse(Console.ReadLine());
                funcionarios[i].AumentarSalario(percentual_aumento);

                Console.WriteLine(funcionarios[i]);
            }
        }
        else{
            for (int i = 0; i < quantidade_funcionarios; i++) //FOR PARA EXIBIR OS RELATÓRIOS DE ACORDO COM A QUANTIDADE DE FUNCIONÁRIOS;
            {
                Console.WriteLine(funcionarios[i]);
            }
        }
    }
}
