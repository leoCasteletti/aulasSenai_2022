using System;

class Programa
{
    static void Main(string[] args)
    {
        Console.WriteLine("Projeto 05 - Caracteres e Textos");

        char letra = 'a';
        Console.WriteLine(letra);

        //Utilizando ASCII (https://www.ime.usp.br/~hitoshi/introducao/20-caracteres.pdf).
        letra = (char)(65 + 1);
        Console.WriteLine(letra);

        //Escrevendo nomes com ASCII
        letra = (char)76;
        Console.Write(letra);
        letra = (char)101;
        Console.Write(letra);
        letra = (char)111;
        Console.Write(letra);
        letra = (char)110;
        Console.Write(letra);
        letra = (char)97;
        Console.Write(letra);
        letra = (char)114;
        Console.Write(letra);
        letra = (char)100;
        Console.Write(letra);
        letra = (char)111;
        Console.WriteLine(letra);

        string primeiraFrase = "SENAI - Cursos de Tecnologia";
        Console.WriteLine(primeiraFrase + 2022);

        string vazia = "";
        Console.WriteLine(vazia);

        letra = ' ';

        //Colocando o @ ele reconhece os espaços;
        string cursos = @"Cursos disponíveis 
        -C 
        -C++  
        -HTML
        -CSharp";
        Console.WriteLine(cursos);

        Console.WriteLine("Pressione ENTER para encerrar");
        Console.ReadLine();
    }
}