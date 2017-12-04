using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.IO;

public partial class _Default : Page
{
    sql s = new sql();
    Black.core.Js js = new Black.core.Js();
    public void save_db()
    {
        File.WriteAllText(adr_DB, DB);
    }
    public void read_db()
    {
        //    var db = System.IO.File.ReadAllText(adr_DB);
        // DB = db;
    }
    public string adr_DB = @"G:\do\DB_asp\db.t";
    public string DB = null;
    public int user_id = 12969;
    public void javascript_write(string value)
    {
        Response.Write(value);


    }
    public void Page_Load(object sender, EventArgs e)
    {
        try
        {
            //javascript_write(js.log_Js("test"));
            //read_db();
            // Response.Write(DB);
            sql s = new sql();

            // s.sql_exec("SELECT * FROM `tablephonebook`");
            //  javascript_write(js.log_Js(sql.get_fr_table));
            s.sql_exec_int("SELECT * FROM `users` ORDER BY `users`.`login` ASC");
            javascript_write(js.log_Js(sql.get_fr_table.ToString()));
            javascript_write(js.log_Js(sql.user_id.ToString()));
            javascript_write(js.log_Js(sql.id.ToString()));
            javascript_write(js.log_Js(sql.login.ToString()));
            javascript_write(js.log_Js(sql.password.ToString()));
        }
        catch
        {

        }
    }

 



    protected void RadMenu1_ItemClick(object sender, Telerik.Web.UI.RadMenuEventArgs e)
    {
        Response.Redirect("spacemap.aspx");
    }

    protected void RadMenu2_ItemClick(object sender, Telerik.Web.UI.RadMenuEventArgs e)
    {
        Response.Redirect("shop.aspx");
    }

    protected void RadMenu3_ItemClick(object sender, Telerik.Web.UI.RadMenuEventArgs e)
    {
        Response.Redirect("equipment.aspx");
    }
}