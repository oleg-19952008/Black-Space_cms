<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Login.aspx.cs" Inherits="Black.register" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <script src="scripts/lib.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login | Black SPACE</title>
    <style type="text/css">
        .register_login {
            height: 147px;
        }
    </style>
</head>
<body>
    <script type="text/javascript">logo();    </script>
    <form id="form1" runat="server">
    <div class="register_login">
        <br />
        Input You Nickname&nbsp;&nbsp;&nbsp;&nbsp;
  <asp:TextBox ID="Login_"  runat="server" Width="149px"></asp:TextBox>
        <br />
        <br />    Input You Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <asp:TextBox ID="Pass_" TextMode="Password" runat="server" Width="148px"></asp:TextBox>
        <br />
        <br />
        <script runat="server">
 
        void most(Object sender, EventArgs e)
        {
         var   Pass =  Convert.ToBase64String(Encoding.Default.GetBytes(Pass_.Text.ToString()));

         var   LOGin =  Login_.Text.ToString();
            
            check_on_DB();

        }
        </script>   
        <asp:Button Text="Log in account" OnClick="most" runat="server" class="button style2" OnClientClick="return true" />

    </div>
    </form><script type="text/javascript">
               st_p();
    </script>
</body>
</html>
