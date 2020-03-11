using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.Extensions.Logging;
using webapp.Services;
using webapp.Models;
namespace webapp.Pages
{
    public class IndexModel : PageModel
    {
        private readonly ILogger<IndexModel> _logger;
        public JsonReader AccountService;
        public IEnumerable<Account> Accounts { get; private set; }
        public IndexModel(ILogger<IndexModel> logger, JsonReader accountService)
        {
            _logger = logger;
            AccountService = accountService;
        }
        public void OnGet()
        {
            Accounts = AccountService.GetAccounts();
        }
    }
}