using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Threading;
using System.Threading.Tasks;
using System.Text;
using System.Web.UI.WebControls;
using System.IO;

namespace Black
{

    public partial class shop : System.Web.UI.Page
    {
        Black.core.Js j = new core.Js();
    Black.core.Data_Base DB_ = new core.Data_Base();
        //public async void MEM___()
        //{
        //     = new Class1();
        //    while (true)
        //    {
        //        log_Js(s.RAM_);
        //        Thread.Sleep(1000);
        //        await Task.Delay(1);
        //    }

        //}


           
        protected void Page_Load(object sender, EventArgs e)
        {
         Response.Write(   new core.Js().alert("asd"));
            //DB_.LOGIN= login.Text.ToString();
            //DB_.PASS = pass.Text.ToString();

        }
 
        public bool check_DB = false;


    }
}
 