using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("09 - Escopo");

        int idadeRafael = 17;
        int quantidadeDePessoas = 2;

        bool acompanhado = quantidadeDePessoas > 1;

        string textoAdicional;

        if (acompanhado == true)
        {
            textoAdicional = "Rafael está acompanhado";
        }
        else
        {
            textoAdicional = "Rafael não está acompanhado";
        }
        if (idadeRafael >= 18 || acompanhado)
        {
            Console.WriteLine(textoAdicional);
            Console.WriteLine("Pode Entrar");
        }
        else
        {
            Console.WriteLine(textoAdicional);
            Console.WriteLine("Não Pode Entrar!");
        }

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}