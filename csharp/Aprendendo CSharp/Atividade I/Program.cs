using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Atividade 01 - Usando IF and ELSE - Aprovado/Reprovado");

        double nota1, nota2, nota3, nota4, resultado, media;

        Console.Write("Digite a nota 1: ");
        nota1 = double.Parse(Console.ReadLine());

        Console.Write("Digite a nota 2: ");
        nota2 = double.Parse(Console.ReadLine());

        Console.Write("Digite a nota 3: ");
        nota3 = double.Parse(Console.ReadLine());

        Console.Write("Digite a nota 4: ");
        nota4 = double.Parse(Console.ReadLine());

        resultado = nota1 + nota2 + nota3 + nota4;

        Console.WriteLine("A soma das notas é: " + resultado);

        media = resultado / 4;

        Console.WriteLine("A media das notas é: " + media);

        if (media > 6)
        {
            Console.WriteLine("Aprovado");
        }
        else if (media == 5)
        {
            Console.WriteLine("Recuperação");
        }
        else
        {
            if (media <= 4)
            {
                Console.WriteLine("Reprovado");
            }
        }

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}