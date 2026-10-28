using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Projeto 07 - Condicionais");

        int idadeRafael = 17;
        int quantidadeDePessoas = 2;

        if (idadeRafael >= 18)
        {
            Console.WriteLine("Liberado, pode entrar!");
        }
        else
        {
            if (quantidadeDePessoas > 1)
            {
                Console.WriteLine("Ele está acompanhado. Pode Entrar...");
            }
            else
            {
                Console.WriteLine("Não pode entrar");
            }
        }

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}