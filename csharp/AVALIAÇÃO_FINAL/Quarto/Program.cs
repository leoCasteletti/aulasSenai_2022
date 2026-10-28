using System;

namespace AV_Quarto
{
    class Quarto
    {

        static void Main(string[] args)
        {

            Console.Write("Digite a quantidade de quartos disponíveis : ");
            int qtd_quartos = int.Parse(Console.ReadLine());
            //Armazena o tamanho do vetor em variavel

            Estudante[] quarto = new Estudante[qtd_quartos];
            //declara e instancia o vetor do objeto"quarto" relacionado a classe "estudante"

            //inicia a "manipulação" ou navegação entre os indices do vetor
            //primeiro parametro:
            //inicializa e atribiu o valor ZERO (para acessar o indice ZERO - primeira linha) do vetor
            //segundo parametro:
            //condição de execução do laço do for => enquanto for menor que a qtde definida (pois começa com ZERO)
            //terceiro parametro:
            //incrementa 1 no contador do laço
            for (int i = 0; i < qtd_quartos; i++)
            {
                Console.WriteLine();
                Console.WriteLine("* Dados do Hóspede " + (i + 1));
                Console.Write("Nome.......: ");
                string nome = Console.ReadLine(); //declara e atribiu o valor digitado pelo usuario
                //a variavel local receberá o conteudo digitado e será passado como parametro
                //para o método contrutor realizar a carga efetiva dos dados ao atributo
                Console.Write("Endereço...: ");
                string endereco = Console.ReadLine();//declara e atribiu o valor digitado pelo usuario
                Console.Write("Email......: ");
                string email = Console.ReadLine();//declara e atribiu o valor digitado pelo usuario

                //vincula o objeto[indice do vetor] a instância da classe
                quarto[i] = new Estudante(nome, endereco, email);

            }
            for (int i = 0; i < qtd_quartos; i++)
            {
                Console.WriteLine(quarto[i]);
            }
        }
    }

}