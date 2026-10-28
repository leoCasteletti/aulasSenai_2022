using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AV_Retangulo
{
    class Retangulo
    {
        public double RetBase { get; set; }
        public double RetAltura { get; set; }

        public Retangulo(double retbase, double retaltura)
        {
            RetBase = retbase;
            RetAltura = retaltura;
        }
        public double CalcularArea()
        {
            return RetBase * RetAltura;
        }

        public double CalcularPerimetro()
        {
            return 2 * (RetBase * RetAltura);
        }

        public double CalcularDiagonal()
        {
            return Math.Sqrt((RetBase * RetBase) + (RetAltura * RetAltura));
        }
        public override string ToString()
        {
            return "LARGURA: "
                   + RetBase
                   + "\nALTURA: "
                   + RetAltura
                   + "\nAREA: "
                   + CalcularArea().ToString("F")
                   + " / "
                   + "PERIMETRO: "
                   + CalcularPerimetro().ToString("F")
                   + " / "
                   + "DIAGONAL: "
                   + CalcularDiagonal().ToString("F");
        }
    }
}
