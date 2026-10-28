using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Projeto 04 - Conversões e Outros Tipos");

        double salario = 3000.15;
        Console.WriteLine(salario);

        int salarioInteiro;
        salarioInteiro = (int)salario;
        Console.WriteLine(salarioInteiro);

        //O LONG É UM TIPO DE VARIÁVEL DE 64 BITS;
        long x = 2000000000000;
        Console.WriteLine(x);

        short y = 150;
        Console.WriteLine(y);

        float altura = 1.72f;
        Console.WriteLine(altura);

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}