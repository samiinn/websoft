using System.Text.Json;

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