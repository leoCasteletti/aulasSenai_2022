using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Projeto 11 - Encadeando FOR");

        /*//Usando O Break;
        for (int contadorLinha = 1; contadorLinha <= 10; contadorLinha++)
        {
            for (int contadorColuna = 1; contadorColuna <= 10; contadorColuna++)
            {
                Console.Write("*");
                if (contadorColuna >= contadorLinha)
                    break;
            }
            Console.WriteLine();
        }*/

        //Não Utilizando O Break;
        for (int contadorLinha = 1; contadorLinha <= 10; contadorLinha++)
        {
            for (int contadorColuna = 1; contadorColuna <= contadorLinha; contadorColuna++)
            {
                Console.Write("*");
            }

            Console.WriteLine();
        }

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}