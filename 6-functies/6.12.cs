﻿namespace ConsoleApp13
{
    class program
    {
        //dit is methode 1. die aangeeft of het huidige jaar een schikkeljaar is
        private static Boolean isSchikkeljaar()

        {
            int huidigjaar = DateTime.Now.Year;
            //dit is de formule om een schikkeljaar te berekenen. als huidigjaar voldoet aan deze formule, is de boolean waar.
            if (huidigjaar % 4 == 0 && huidigjaar % 100 != 0 || huidigjaar % 4 == 0 && huidigjaar % 100 == 0 && huidigjaar % 400 == 0)
            {
                return true;

            }

            else
            {

                return false;
            }



        }

        //dit is methode 2. deze geeft aan of het opgegeven getal een schikkeljaar is.
        private static Boolean isSchikkeljaar(int jaartal)

        {
            if (jaartal % 4 == 0 && jaartal % 100 != 0 || jaartal % 4 == 0 && jaartal % 100 == 0 && jaartal % 400 == 0)
            {

                return true;
            }
            else
            {

                return false;
            }


        }
        //dit is methode 3. een boolean die aangeeft of de opgegeven DATUM een schikkeljaar is.
        private static Boolean isSchikkeljaar(int year, string datum)

        {

            if (year % 4 == 0 && year % 100 != 0 || year % 4 == 0 && year % 100 == 0 && year % 400 == 0)
            {
                return true;

            }
            else 
            {
                return false;
            }



        }



        private static void Main(string[] args)

        {
            Console.WriteLine("Dit programma berekent de schikkeljaren.");
            Console.WriteLine("***************************************************");
            if (isSchikkeljaar())
            {
                int huidigjaar = DateTime.Now.Year;
                Console.WriteLine("Het jaar is: " + huidigjaar + "." + " Dit is een schrikkeljaar");
            }
            else
            {
                int huidigjaar = DateTime.Now.Year;
                Console.WriteLine("Het jaar is: " + huidigjaar + "." + " Dit is geen schikkeljaar");
            }
            Console.WriteLine("---------------------------------------------------");

            Console.WriteLine("Voer een jaartal in van 1, 2 of 4 cijfers: ");
            Console.Write("");
            int jaartal = Convert.ToInt32(Console.ReadLine());
            if (jaartal <= 999 && jaartal >= 100 || jaartal == 0)
            {
                Console.WriteLine("VOER EEN JAARTAL IN DIE BESTAAT UIT 1,2 OF 4 CIJFERS. ");

            }

            else if (jaartal >= 999 && (isSchikkeljaar(jaartal) == true))
            {

                Console.WriteLine("Het jaar is: " + jaartal + ". Dit is een schrikkeljaar.");
                Console.WriteLine("***************************************************");
            }
            else if (jaartal >= 999 && (isSchikkeljaar(jaartal) == false))
            {
                Console.WriteLine("Het jaar is: " + jaartal + ". Dit is geen schrikkeljaar. ");
                Console.WriteLine("***************************************************");
            }

            else if (jaartal <= 50)
            {
                jaartal = jaartal + 2000;
                if (jaartal % 4 == 0 && jaartal % 100 != 0 || jaartal % 4 == 0 && jaartal % 100 == 0 && jaartal % 400 == 0)
                {
                    Console.WriteLine("Het jaar is: " + jaartal + ". Dit is een schrikkeljaar.");
                    Console.WriteLine("***************************************************");
                }
                else if (jaartal % 4 != 0 || jaartal % 100 == 0 && jaartal % 400 != 0)
                {
                    Console.WriteLine("Het jaar is: " + jaartal + ". Dit is geen schrikkeljaar.");
                    Console.WriteLine("***************************************************");
                }
            }
            else if (jaartal >= 50 && jaartal <= 100)
            {
                jaartal = jaartal + 1900;
                if (jaartal % 4 == 0 && jaartal % 100 != 0 || jaartal % 4 == 0 && jaartal % 100 == 0 && jaartal % 400 == 0)
                {
                    Console.WriteLine("Het jaar is: " + jaartal + ". Dit is een schrikkeljaar.");
                    Console.WriteLine("***************************************************");
                }
                else if (jaartal % 4 != 0 || jaartal % 100 == 0 && jaartal % 400 != 00)
                {
                    Console.WriteLine("Het jaar is: " + jaartal + ". Dit is geen schrikkeljaar.");
                    Console.WriteLine("***************************************************");
                }
            }

            Console.WriteLine("Voer een datum in, in deze volgorde: (dd.mm.yyyy)..");
            Console.WriteLine("---------------------------------------------------");
            string datum = Convert.ToString(Console.ReadLine());
            DateTime date = Convert.ToDateTime(datum);
            int year = date.Year;
            if (isSchikkeljaar(year, datum) == true)
            {
                Console.WriteLine("De opgegeven datum is: " + datum + ". Dit is een schrikkeljaar.");
            }
            else
            {
                Console.WriteLine("De opgegeven datum is: " + datum + ". Dit is geen schrikkeljaar.");
            }


            Console.ReadKey();
        }
    }

}


