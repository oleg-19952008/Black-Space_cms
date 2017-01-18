using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class screen : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        var x = Request.QueryString["x"];

        var y = Request.QueryString["y"];

        //if (Request.Params["width"] == "getResourceAsRaw")
        //{
        //  Response.Write(request);//getResourceAsRaw    
        //  Response.Write(request_);     //}
        var sql = new sql();
        //  sql.sql_exec_string("SELECT `screen_x`,`screen_y` FROM `users` WHERE  user_id = " + sql.user_id);  //"SELECT `screen_x`,`screen_y` FROM `users` WHERE  user_id = 1  ") //"SELECT * FROM `users` ORDER BY `login` ASC");
        sql.sql_test("UPDATE `users` SET `screen_x` = '" + x + "' WHERE `users`.`USER_ID` = " + sql.user_id, "screen_x");
        sql.sql_test("UPDATE `users` SET `screen_y` = '" + y + "' WHERE `users`.`USER_ID` = " + sql.user_id, "screen_y");

    }
}