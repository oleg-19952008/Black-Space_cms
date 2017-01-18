<%  Language="C#"  %>
<% using System
using System.Web

        var ss = System.IO.File.ReadAllLines("C:\f.t")
        var request = Request.QueryString["action"]
   

          if (Request.Params["action"] == "getResourceAsRaw")
        {
            Response.Write(ss[0])//getResourceAsRaw    
        }

        //  Response.Write(ss[2])//showAdvertisement  
        //    }
        else if (Request.Params["action"] == "getAllHints")
        {
            Response.Write(ss[1])//hints

        }

        else if (Request.Params["action"] == "showAdvertisement")
        {
            Response.Write(ss[2])//showAdvertisement  

        }
        else
        {
            Response.Write(ss[3])//setClientBrowserConfig  
        }


       
        n++
    }
}%>