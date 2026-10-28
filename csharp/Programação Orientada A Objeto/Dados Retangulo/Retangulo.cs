using System;

namespace dados_retangulo
{
    class Retangulo
    {
        public double largura;
        public double altura;

        public double Area()
        {
            return altura * largura;
        }

        public double Perimetro()
        {
            return 2 * (largura + altura);
            
        }

        public double Diagonal()
        {
            return Math.Sqrt((largura * largura) + (altura * altura));           
        }
    }
}