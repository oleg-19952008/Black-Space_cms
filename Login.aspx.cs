using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using Black;
using System.IO;
namespace Black
{
    public partial class register : System.Web.UI.Page
    {
        public string LOGIN = null;
        public string PASS = null;
        public int user_id = 0;
        public string DB = @"C:\data_base\";
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
        public void write(string value)
        {
            Response.Write(value);
          //  WebSite2.Startup s = new WebSite2.Startup();
           
        }
        public void JS(string value)
        {
            var kov = '"';
            var main_ = "      <script type=" + kov + "text/javascript" + kov + ">\n" + value + "\n</script>";
            write(main_.Replace('\n', ' '));
        }
        public void log_Js(string value)
        {
            var kov = '"';
            var main_wr = "console.log(" + kov + value + kov + ");";
            JS(main_wr);
        }
        public void wr_onJs(string value)
        {
            var kov = '"';
            var main_wr = "document.write(" + kov + value + kov + ");";
            JS(main_wr);
        }
        protected void Page_Load(object sender, EventArgs e)
        {



    

        }
        public void write_DB(string path, string value)
        {
            try
            {
                File.AppendAllText(DB + path, value + "\n");

            }
            catch (Exception e)
            {
                if (e.ToString().Length != 1)
                {
                    wr_onJs(e.Message.ToString());
                }
            }
        }
        public void update_DB(string path, string value)
        {
            try
            {
                File.AppendAllText(DB + path, value);
            }
            catch (Exception e)
            {
                if (e.ToString().Length != 1)
                {
                    wr_onJs(e.Message.ToString());
                }
            }
        }
        public bool check_DB = false;

        public void check_on_DB()
        {


            var db = File.ReadAllLines(DB + "login_pass.DB");
            var ids = File.ReadAllLines(DB + "login_pass.DB");

            bool da = false;
            foreach (var db___ in db)
            {
                var db_ = db___.Split('|');

                foreach (var d in db_)
                {

                    if (d == LOGIN)
                    {

                        alert("User name is use");
                        da = true;
                    }
                }
            }
            if (da == true)
            {
                da = false;
            }
            else
            {
                reg();
            }
            GC.Collect();
        }

        public void alert(string value)
        {
            JS("alert('" + value + "');");

        }
        public bool per = false;
        public void reg()
        //   void check_length_L_P(Object sender, EventArgs e)
        {

            if (LOGIN.Length < 4 || PASS.Length < 4 /*& pass.ToString().Length < 4*/)
            {
                JS("alert('Minimal 4 length login/pass');");
            }
            else
            {
                //var encoded_pass = Convert.ToBase64String(Encoding.Default.GetBytes(PASS));
                //var for_DB = LOGIN + "|" + encoded_pass;
                //alert("Register complete");

                //per = true;
                //write_DB("login_pass.DB", for_DB);


            }


        }
    }

}
