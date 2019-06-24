using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Net.NetworkInformation;

namespace ConsoleApp22
{
    class Program
    {
        static void Main(string[] args)
        {

            //initialiseer methode ping
            Ping pinger = new Ping();
            //convert string lees als ip adres
            Console.WriteLine("Voer hier je IP-adres in: ");
            string lees = Convert.ToString(Console.ReadLine());
            PingReply antwoord = pinger.Send(lees);

            bool pingable = antwoord.Status == IPStatus.Success;
            bool error = antwoord.Status == IPStatus.BadRoute;
            bool computer = antwoord.Status == IPStatus.DestinationHostUnreachable;
            bool netwerk = antwoord.Status == IPStatus.DestinationNetworkUnreachable;


            if (computer)
            {
                Console.WriteLine("Er is geen geldige computer beschikbaar tussen de bron en de computer");
            }
            if (netwerk)
            {
                Console.WriteLine("Er is geen geldig netwerk beschikbaar tussen de bron en de computer");
            }
            if (error)
            {
                Console.WriteLine("Er is geen geldige route beschikbaar tussen de bron en de computer");
            }
            if (pingable)
            {
                Console.WriteLine("Het ingevoerde ip adres: " + lees + " is een bestaand adres");
            }
            else if (!pingable)
            {
                Console.WriteLine("Het ingevoerde ip adres: " + lees + " is geen bestaand adres");
            }



            Console.ReadKey();

        }
    }
}
