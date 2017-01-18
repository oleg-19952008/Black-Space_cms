using System;
using System.Web;

public partial class loading___ : System.Web.UI.Page
{
    public static int n = 0;
    protected void Page_Load(object sender, EventArgs e)
    {
        loading___ sq = new loading___();

        var ss = System.IO.File.ReadAllLines(@"C:\f.t");
        var request = Request.QueryString["action"];
        //   ["es","resource_loadingScreen"]  
        //if (Request.Params["action"] == "setClientBrowserConfig")
        //{
           
        //    Response.Write(ss[3]);//setClientBrowserConfig  
        //}

          if (Request.Params["action"] == "getResourceAsRaw")
        {
            Response.Write(ss[0]);//getResourceAsRaw    
        }

        //  Response.Write(ss[2]);//showAdvertisement  
        //    }
        else if (Request.Params["action"] == "getAllHints")
        {
            Response.Write(ss[1]);//hints

        }

        else if (Request.Params["action"] == "showAdvertisement")
        {
            Response.Write(ss[2]);//showAdvertisement  

        }
        else
        {
            Response.Write(ss[3]);//setClientBrowserConfig  
        }


        //   Response.Write(ss[0]);//getResourceAsRaw   
        //if (n == 0)
        //{
        //    Response.Write(ss[0]);//getResourceAsRaw   

        //}
        //if (n == 1)
        //{
        //    Response.Write(ss[1]);//hints

        //}
        //if (n == 2)
        //{
        //   //Response.Write(ss[3]);    //setClientBrowserConfig
        //                          //    Response.Write(ss[3]); 

        //    Response.Write(ss[2]);//showAdvertisement   
        //    n = 0;
        //}
        //if (n == 3)
        //{
        //    //Response.Write(ss[3]);    //setClientBrowserConfig
        //    //    Response.Write(ss[3]); 

        ////    Response.Write(ss[3]);    //setClientBrowserConfig

        //}                         //if (Request.QueryString["action"]== "showAdvertisement")
        //                          //{
        //    Response.Write(ss[3]);

        //}
        //if (n == 3)
        //{

        //}
        n++;
    }
}