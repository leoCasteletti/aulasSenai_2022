using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AV_Alunos
{
    class Aluno
    {
        public string Nome { get; set; }
        public double Nota1 { get; set; }
        public double Nota2 { get; set; }
        public double Nota3 { get; set; }

        public Aluno(string nome, double nota1, double nota2, double nota3)
        {
            Nome = nome;
            Nota1 = nota1;
            Nota2 = nota2;
            Nota3 = nota3;
        }

        public double SomaNotas()
        {
            return Nota1 + Nota2 + Nota3;
        }
        public string ReprovadoAprovado()
        {
            if (SomaNotas() >= 60)
            {
                return "Parabéns voce foi APROVADO, sua nota final foi " + SomaNotas();
            }
            else
            {
                return "Aluno REPROVADO, sua nota final foi " + SomaNotas() + " faltaram " + (60 - SomaNotas()) + " pontos para ser aprovado!";
            }
        }

        public override string ToString()
        {
            return "***************DADOS DO ALUNO*****************\n"
            + "Aluno(a) "
            + Nome.ToUpper() + "\n"
            + "\n Nota 1 "
            + Nota1.ToString("F2")
            + "\n Nota 2 "
            + Nota2.ToString("F2")
            + "\n Nota 3 "
            + Nota3.ToString("F2") + "\n\n"
            + "***************APROVADO OU REPROVADO*****************\n"
            + ReprovadoAprovado()
            + "\n\n";
        }
    }
}
