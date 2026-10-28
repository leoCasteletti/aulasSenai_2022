using System;

class Programa
{
    static void Main(string[] args)
    {
        float nota1, nota2, media;

        Console.WriteLine("Digite a Primeira Nota: ");
        nota1 = float.Parse(Console.ReadLine());

        while ((nota1 < 0) || (nota1 > 10))
        {
            Console.WriteLine("Valor Invalido! Tente Novamente: ");
            nota1 = float.Parse(Console.ReadLine());
        }

        Console.WriteLine("Digite a Segunda Nota: ");
        nota2 = float.Parse(Console.ReadLine());

        while ((nota2 < 0) || (nota2 > 10))
        {
            Console.WriteLine("Valor Invalido! Tente Novamente: ");
            nota2 = float.Parse(Console.ReadLine());
        }

        media = (nota1 + nota2) / 2;
        Console.WriteLine("Media = " + media);

        Console.WriteLine("Pressione ENTER para encerrar o programa.");
        Console.ReadLine();
    }
}