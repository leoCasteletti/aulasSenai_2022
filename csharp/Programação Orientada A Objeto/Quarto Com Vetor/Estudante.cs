using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Quarto_Com_Vetor
{
    internal class Estudante
    {
        public string Nome { get; set; }
        public string Endereco { get; set; }
        public string Email { get; set; }

        public Estudante(string nome, string endereco, string email)
        {
            Nome = nome;
            Endereco = endereco;
            Email = email;
        }

        public override string ToString()
        {
            return Nome + ", " + Endereco + ", " + Email;
        }
    }
}
