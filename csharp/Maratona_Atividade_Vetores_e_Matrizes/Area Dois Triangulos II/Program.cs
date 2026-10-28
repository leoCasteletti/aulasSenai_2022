using System;
using System.Globalization;

namespace Area_Dois_Triangulos_II;
class Area_Dois_Triangulos_II
{
    static void Main(string[] args)

    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Area Dois Triângulos - COM CLASSE");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        Triangulo X;
        Triangulo Y;
        
        X = new Triangulo();
        Y = new Triangulo();

        Console.WriteLine("Digite o valor da medida A, LADO X");
        X.A = double.Parse(Console.ReadLine(),CultureInfo.InvariantCulture);

        Console.WriteLine("Digite o valor da medida B, LADO X");
        X.B = double.Parse(Console.ReadLine(),CultureInfo.InvariantCulture);

        Console.WriteLine("Digite o valor da medida C, LADO X");
        X.C = double.Parse(Console.ReadLine(),CultureInfo.InvariantCulture);

        double areaX = X.Area();

        Console.WriteLine("Sua área é: " + areaX.ToString("F2"));

        // ==================================================================================== //

        Console.WriteLine("Digite o valor da medida A, LADO Y");
        Y.A = double.Parse(Console.ReadLine(),CultureInfo.InvariantCulture);

        Console.WriteLine("Digite o valor da medida B, LADO Y");
        Y.B = double.Parse(Console.ReadLine(),CultureInfo.InvariantCulture);

        Console.WriteLine("Digite o valor da medida C, LADO Y");
        Y.C = double.Parse(Console.ReadLine(),CultureInfo.InvariantCulture);

        double areaY = Y.Area();

        Console.WriteLine("Sua área é: " + areaY.ToString("F2"));

        // ==================================================================================== //

        if (areaY > areaX)
        {
            Console.WriteLine("A area Y é maior");
        }
        else
        {
            Console.WriteLine("A area X é maior");
        }

        Console.WriteLine();
        Console.WriteLine("Aperte ENTER Para Encerrar o Programa");
        Console.ReadLine();
    }
}