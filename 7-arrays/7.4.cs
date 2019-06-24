using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ArrayVoorbeeld
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Uit hoeveel karakters wil je dat jou random wachtwoord bestaat?..");
            int lengte = Convert.ToInt32(Console.ReadLine());
            string[] randomarray = {"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p",
                "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10",
                "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "?", "/", "["};
            Random wachtwoord = new Random();
            int symbolen = wachtwoord.Next(randomarray.Length);

            Console.WriteLine("-------------------------------------------------------------------");
            string ww = "";
            Console.WriteLine("Jouw random wachtwoord bestaande uit " + lengte + " karakters is: " );
            for (int i = 0; i < lengte; i++)
            {
                ww += randomarray[wachtwoord.Next(randomarray.Length)];
                Console.Write("" +ww[i]);

            }

              
            Console.ReadKey();
        }
    } }