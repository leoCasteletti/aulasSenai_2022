using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Dados_Funcionario2
{
    class Funcionario
    {
        public string Nome;
        public double SlrBruto;
        public double Imposto;
        public double CalcularSlrLiq()
        {
            return SlrBruto - Imposto;
        }
        public void AumentarSlr(double perct_aumento)
        {
            SlrBruto = SlrBruto + (SlrBruto * perct_aumento / 100);
        }
        public override string ToString()
        {
            return "O Funcionário " + Nome.ToUpper() + "\n" + ", Recebe " + CalcularSlrLiq().ToString("C2") + " de Pagamento Mensal. É descontado " + Imposto.ToString("C2") + " de Imposto e Recebe " + SlrBruto.ToString("C2")+ " de Salário Bruto.";
        }
    }
}