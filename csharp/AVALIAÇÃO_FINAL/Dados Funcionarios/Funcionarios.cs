using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AV_Funcionario
{
    class Funcionario
    {
        public string Nome { get; set; }
        public double SalarioBruto { get; set; }
        public double Imposto { get; set; }

        public Funcionario(string nome, double salariobruto, double imposto)
        {
            Nome = nome;
            SalarioBruto = salariobruto;
            Imposto = imposto;
        }

        public double CalcularSalarioLiquido()
        {
            return SalarioBruto - Imposto;
        }

        public void AumentarSalario(double percentual_aumento)
        {
            SalarioBruto = SalarioBruto + (SalarioBruto * percentual_aumento / 100);
        }

        public override string ToString()
        {
            return "FUNCIONÁRIO: "
                   + Nome
                   + "\nSALÁRIO BRUTO: "
                   + SalarioBruto.ToString("F")
                   + "\nIMPOSTO: "
                   + Imposto.ToString("F")
                   + " / "
                   + "\nSALÁRIO LIQUIDO: "
                   + CalcularSalarioLiquido().ToString("F");                   
        }
    }
}
