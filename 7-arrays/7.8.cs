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

            //instantieren van een array met 10 indexplaatsen 

            int[] getallen = new int[10];

            //roep de methode VulArray aan 

            getallen = VulArray(getallen);

            string text = PrintArray(getallen);

            Console.ReadLine();

        }

        private static int[] VulArray(int[] getallen2)

        {

            Random numbers = new Random();

            for (int i = 0; i < getallen2.Length; i++)

            {

                getallen2[i] = numbers.Next(0, 100);

            }

            return getallen2;

        }



        private static string PrintArray(int[] getallen2)

        {

            string output = ""; //als je dit plaatst in de loop werkt de return niet. m.b.v. deze string 

            //kan je getallen achter elkaar plakken. 

            double som = 0;

            double finalsum = 0; //gevraagt werd 2 decimalen. dit kan niet als je een maximum heb van 999(bij elkaar opgeteld). Alles wat je namelijk 

            //<999 deelt door 10 om het gemiddelde te verkrijgen kom je uit op 1 decimaal. 

            //integer index=0; i op laten lopen totdat het de lengte heeft bereikt(10). 

            //som= som + getallen2[i] 

            for (int i = 0; i < getallen2.Length; i++)

            {
                output += getallen2[i] + ";";

                som += getallen2[i];

                finalsum = som / 10;

            }

            Console.WriteLine("********************************************************");

            Console.WriteLine("De 10 gekozen random getallen tussen de 0 en 100 zijn: ");

            Console.WriteLine("" + output);

            Console.WriteLine("********************************************************");

            Console.WriteLine("De som van deze getallen is: " + som);

            Console.WriteLine("Het gemiddelde van deze 10 getallen is: " + finalsum);

            Console.WriteLine("********************************************************");

            Console.WriteLine("De laagste waarde in deze 10 getallen is: " + (getallen2.Min()));

            Console.WriteLine("De hoogste waarde in deze 10 getallen is: " + (getallen2.Max()));

            Console.WriteLine("********************************************************");

            return output;
       

        }

    }

}