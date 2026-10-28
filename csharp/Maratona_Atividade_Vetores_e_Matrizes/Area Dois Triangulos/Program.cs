using System;

class areaDoisTriangulos
{
    static void Main(string[] args)

    {
        Console.WriteLine("=======================================================================");
        Console.WriteLine("SENAI SP - VOTUPORANGA - MDS TEC. EM DESENVOLVIMENTO DE SISTEMAS - 2022");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Maratona - Area Dois Triângulos");
        Console.WriteLine("=======================================================================");
        Console.WriteLine("Aluno Desenvolvedor - Leonardo da Silva Casteletti");
        Console.WriteLine("=======================================================================");
        Console.WriteLine();

        float xa, xb, xc, ya, yb, yc, areax, areay;

        Console.WriteLine("Digite o valor da medida A, LADO X");
        xa = float.Parse(Console.ReadLine());

        Console.WriteLine("Digite o valor da medida B, LADO X");
        xb = float.Parse(Console.ReadLine());

        Console.WriteLine("Digite o valor da medida C, LADO X");
        xc = float.Parse(Console.ReadLine());

        float p1 = (xa + xb + xc) / 2;

        areax = (float)Math.Sqrt(p1 * (p1 - xa) * (p1 - xb) * (p1 - xc));

        Console.WriteLine("Sua área é: " + areax);

        Console.WriteLine("Digite o valor da medida A, LADO Y");
        ya = float.Parse(Console.ReadLine());

        Console.WriteLine("Digite o valor da medida B, LADO Y");
        yb = float.Parse(Console.ReadLine());

        Console.WriteLine("Digite o valor da medida C, LADO Y");
        yc = float.Parse(Console.ReadLine());

        float p2 = (ya + yb + yc) / 2;

        areay = (float)Math.Sqrt(p2 * (p2 - ya) * (p2 - yb) * (p2 - yc));

        Console.WriteLine("Sua área é: " + areay);

        if (areay > areax)
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