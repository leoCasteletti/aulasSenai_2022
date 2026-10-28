using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atividade 01 - Retângulo");
        Console.WriteLine();

        float Base, Altura, Area, Perimetro, Diagonal;

        Console.WriteLine("Base do Retangulo");
        Base = float.Parse(Console.ReadLine());

        Console.WriteLine("Altura do Retangulo");
        Altura = float.Parse(Console.ReadLine());

        Area = Base * Altura;
        Perimetro = 2 * (Base + Altura);
        Diagonal = (float)Math.Sqrt(Base * Base + Altura * Altura);

        Console.WriteLine("ÁREA = " + Area);
        Console.WriteLine("PERIMETRO = " + Perimetro);
        Console.WriteLine("DIAGONAL = " + Diagonal.ToString("F4"));

        Console.WriteLine("Pressione ENTER para encerrar o programa.");
        Console.ReadLine();
    }
}