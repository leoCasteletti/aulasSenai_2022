namespace AlunoTresNotas
{
    class Aluno
    {
        public float primeiraNota, segundaNota, terceiraNota;
        public string nome; 
        
        public float Soma()
        {
            return primeiraNota + segundaNota + terceiraNota;
        }

        public float Nota1()
        {
            do
            {
                Console.WriteLine("Primeira nota (NOTA MÁXIMA É 30): ");
                primeiraNota = float.Parse(Console.ReadLine());
            } while (primeiraNota > 30);
            return primeiraNota;
        }

        public float Nota2()
        {
            do
            {
                Console.WriteLine("Segunda nota (NOTA MÁXIMA 35): ");
                segundaNota = float.Parse(Console.ReadLine());
            } while (segundaNota > 35);
            return segundaNota;
        }

        public float Nota3()
        {
            do
            {
                Console.WriteLine("Terceira nota (NOTA MÁXIMA 35): ");
                terceiraNota = float.Parse(Console.ReadLine());
            } while (segundaNota > 35);
            return terceiraNota;
        }
    }
}