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

namespace Black.core
{
    public partial class Js : System.Web.UI.Page
    {
      
        //public string write(string s)
        //{            
             
         
        //}
 
        public string JS(string value)
        {
            var kov = '"';
            var main_ = "<script type=" + kov + "text/javascript" + kov + ">\n" + value + "\n</script>";
          var s = main_.Replace('\n', ' ');
            return s;
        }
        public string log_Js(string value)
        {
            var kov = '"';
            var main_wr = "console.log(" + kov + value + kov + ");";
            return JS(main_wr);
        }
        public string wr_onJs(string value)
        {
            var kov = '"';
            var main_wr = "document.write(" + kov + value + kov + ");";
            return JS(main_wr);
        }
        public string alert(string value)
        {

            return JS("alert('" + value + "');");
        }
    }
    public partial class Data_Base
    {
        Black.core.Js j = new core.Js();
        public string LOGIN = null;
        public string PASS = null;
        public int user_id = 0;
        public string DB = @"C:\data_base\";
        public void check_on_DB()
        {

            //SELECT * FROM `users` ORDER BY `users`.`login` ASC
            var s = new sql();

            if (s.check_login() == 2)
            {
                 
            }
            else
            {
                reg();
            }
            GC.Collect();
        }


        public bool per = false;
        public int user_id___()
        {
            var s = new sql();
            s.sql_exec_int("SELECT * FROM `users` ORDER BY `users`.`USER_ID` ASC");
       return     sql.last_user_id;
        }

        public void write_DB(string login, string password)
        {
            var s = new sql();
            var user_id_ = user_id___() + 1;
        
                s.sql_exec_string("INSERT INTO `new_do`.`users` (`USER_ID`, `login`, `password`, `124`, `1242`) VALUES ('" + user_id_ + "', '" + login + "', '" + password + "', '35345', '3453452');");
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
               j.     wr_onJs(e.Message.ToString());
                }
            }
        }
        public void reg()
        //   void check_length_L_P(Object sender, EventArgs e)
        {
            
            if (LOGIN.Length < 4 && PASS.Length < 4 /*& pass.ToString().Length < 4*/)
            {
               j. JS("alert('Minimal 4 length login/pass');");
            }
            else
            {
                var encoded_pass = Convert.ToBase64String(Encoding.Default.GetBytes(PASS));
                var for_DB = LOGIN + "|" + encoded_pass;
              j.  alert("Register complete");

                per = true;
                write_DB(LOGIN, encoded_pass);


            }


        }
    }
}
