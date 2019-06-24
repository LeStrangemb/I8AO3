using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp33
{
    class Program
    {
        static void Main(string[] args)
        {

            int a = 0;
            int b = 0;
            int c = 1;


            Console.WriteLine("Voer een getal in: ");
            int getal = Convert.ToInt16(Console.ReadLine());

            for (int i = 0; i < getal; i++)
            {
                a = b + c;
                b = c;
                c = a;

                Console.Write( +a+ " ");
            }








            Console.ReadKey();

        }
    }
}
