using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace dados_funcionario
{
    internal class funcionario
    {
        public string nome;
        public double salario;
        public double imposto;
        public double aumento;

        public double totalconta()
        {
            return (salario - imposto);
        }

        public double Porcentagem()
        {
            return (aumento / 100) * totalconta();
        }
    }
}