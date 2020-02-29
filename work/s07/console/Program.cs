using System;
using System.IO;
using System.Text.Json;
using System.Text.Json.Serialization;
using System.Collections.Generic;
using System.Linq;

namespace console
{
    class Program
    {
        static void Main(string[] args)
        {
            bool showMenu = true;

            while (showMenu)
            {
                showMenu = MainMenu();
            }
        }
        private static bool MainMenu()
        {
            var accounts = readData();

            Console.WriteLine("Choose an option:");
            Console.WriteLine("1) View accounts");
            Console.WriteLine("2) View account by number");
            Console.WriteLine("3) Exit");
            Console.Write("\r\nSelect an option: ");

            switch (Console.ReadLine())
            {
                case "1":
                    Console.WriteLine("------------ View Accounts ---------");
                    Console.WriteLine("| Number | Balance | Label | Owner |");
                    foreach (var account in accounts)
                    {
                        Console.WriteLine(account);
                    }
                    Console.WriteLine("------------------------------------");
                    return true;
                case "2":
                    Console.WriteLine("write an id");
                    var id = int.Parse(Console.ReadLine());


                    foreach (var account in accounts)
                    {
                        if (account.Owner == id)
                        {
                            Console.WriteLine(account);
                        }

                    }
                    return true;
                case "3":
                    return false;
                default:
                    return true;
            }
        }
        public static Account[] readData()
        {
            String file = "../data/account.json";
            using (StreamReader r = new StreamReader(file))
            {
                string data = r.ReadToEnd();
                var json = JsonSerializer.Deserialize<Account[]>(
                    data,
                    new JsonSerializerOptions
                    {
                        PropertyNameCaseInsensitive = true
                    }
                );
                return json;
            }
        }
    }
    public class Account
    {
        public int Number { get; set; }
        public int Balance { get; set; }
        public string Label { get; set; }
        public int Owner { get; set; }
        public override string ToString()
        {
            return JsonSerializer.Serialize<Account>(this);
        }
        public bool isTheSame(Account obj)
        {
            if (this.Number == obj.Number)
            {
                return true;
            }
            return false;
        }
    }
}
