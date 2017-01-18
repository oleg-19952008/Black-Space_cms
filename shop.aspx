<%@ Page Language="C#" AutoEventWireup="true" CodeFile="shop.aspx.cs" Inherits="Black.shop" Async="true" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <script src="scripts/lib.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Shop | Black SPACE
    </title>
</head>
<body>       
    <script type="text/javascript">logo(); shop(); st_p();</script>
        <div class="logo"> Click on ship for buy  </div>
<%--{ 
  background: url(./do_img/global/hangar/ships/2.jpg) scroll no-repeat;
  border-style: solid;
  border-width: 2px;
  font-weight: 400;
  line-height: normal;
  position: relative;
  text-decoration: none;
  text-align: center;
  -webkit-appearance: none;
  -webkit-border-radius: 0;
  outline: white;
  display: inline-block;
  padding-top: .85rem;
  padding-right: 2rem;
  padding-bottom: .7625rem;
  padding-left: 2rem;
  font-size: 1.125rem; 
  color: #009cc6;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
             top: 0px;
             left: 0px;
             height: 347px;
             width: 459px;
         }

          </style>--%> 
    <form id="form1" runat="server">
         
     
  
                <br />         
             
    <br />
<script runat="server">
    public string LOGin = null;
    public string Pass = null;
    void most(Object sender, EventArgs e)
    {
        //Pass = Convert.ToBase64String(Encoding.Default.GetBytes(pass.Text.ToString()));

        //LOGin = login.Text.ToString();
        //Black.core.Data_Base DB_ = new Black.core.Data_Base();
        //DB_.LOGIN = LOGin;
        //DB_.PASS = Pass;
        //DB_.check_on_DB();


    }

    </script>  <%   string base_imgs = @"./do_img/global/header/ships/";
                   int for_buy_ship = 0; %>
 <%--       <table style="width:100%;">
                <tr>
              <td><img alt="" src="<%Response.Write(base_imgs+for_buy_ship); %>" style="height: 87px; width: 147px" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <br />--%>

    <asp:Button Text="Current ship "    class="button" runat="server" />

  
    <br />

    

      
 
  
        <p>
            &nbsp;</p>
    </form>
</body 
    </html>