using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp9
{
    class Program
    {
        static void Main(string[] args)
        {
            

            Console.WriteLine("Voer hier je tekst in:");
            string woord = Console.ReadLine();
            char[] vowels = { 'a', 'i', 'u', 'y', 'o', 'A', 'I', 'U', 'Y' };
            foreach (char vowel in vowels)
            woord = woord.Replace(vowel, '*');


            Console.WriteLine(woord);

            Console.ReadKey();


        }
    }
}
