using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace controleDeEstoqueAvancado
{
    class Produto
    {
        public string nome; public double preco; public int quantidade;

        public double valorTotalEstoque()
        {
            double valorTotal = preco * quantidade;
            return valorTotal;
        }

        public void aumentarEstoque(int quantidadeAjustada)
        {
            quantidade += quantidadeAjustada;
        }

        public void reduzirEstoque(int quantidadeAjustada)
        {
            quantidade -= quantidadeAjustada;
        }

        public override string ToString()
        {
            return "O produto "
               + nome.ToUpper()
               + ", cujo valor unitário é R$"
               + preco.ToString("F2")
               + ", com "
               + quantidade
               + " unidades em estoque, soma Valor Total de R$"
               + valorTotalEstoque().ToString("F2")
               + " em estoque.";
        }
    }
}
