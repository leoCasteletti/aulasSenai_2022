using System;

namespace dados_retangulo
{
    class Programa
    {
        static void Main(string[] args)

        {
            Console.WriteLine("Atividade  -  Dados Retângulo");
            Console.WriteLine();

            Retangulo retangulo;
            retangulo = new Retangulo();

            Console.WriteLine("Digite os valores de um retângulo:");
            Console.WriteLine("Altura: ");
            retangulo.altura = double.Parse(Console.ReadLine());
            Console.WriteLine("Largura: ");
            retangulo.largura = double.Parse(Console.ReadLine());

            Console.WriteLine();
            Console.WriteLine("Agora iremos calcular os dados desse retângulo!");

            Console.WriteLine("Pressione ENTER para prosseguir.");
            Console.ReadLine();

            double Area = retangulo.Area();            
            Console.WriteLine("A área do retângulo é: " + Area);

            double Perimetro = retangulo.Perimetro();
            Console.WriteLine("O perímetro do retângulo é: " + Perimetro);

            double Diagonal = retangulo.Diagonal();
            Console.WriteLine("A diagonal do retângulo é: " + Diagonal);

            Console.WriteLine();
            Console.WriteLine("Pressione ENTER para encerrar.");
            Console.ReadLine();
        }
    }
}