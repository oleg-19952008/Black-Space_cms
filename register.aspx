<%@ Page Language="C#" AutoEventWireup="true" CodeFile="register.aspx.cs" Inherits="Black.register" Async="true" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <script src="scripts/lib.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Register | Black SPACE
    </title>
</head>
<body>
    <script type="text/javascript">logo();    </script>
    <form id="form1" runat="server">
    <div class="register_login">
   
<div style="height: 177px; width: 407px">
<br /> &nbsp;&nbsp;&nbsp; Input you login&nbsp;&nbsp;
    <br />
&nbsp;&nbsp;
&nbsp;<asp:TextBox ID="login" runat="server" Width="134px" ></asp:TextBox>
    <br />
    &nbsp;&nbsp;&nbsp;
    Input your password<br />
&nbsp;&nbsp;
&nbsp;<asp:TextBox ID="pass" runat="server" TextMode="Password" Width="135px"></asp:TextBox>
    <script runat="server">
        public string LOGin = null;
        public string Pass = null;
        void most(Object sender, EventArgs e)
        {
            Pass = Convert.ToBase64String(Encoding.Default.GetBytes(pass.Text.ToString()));

            LOGin = login.Text.ToString();
            Black.core.Data_Base DB_ = new Black.core.Data_Base();
            DB_.LOGIN = LOGin;
            DB_.PASS = Pass;
            DB_.check_on_DB();


        }

    </script>

    <br />
    <br />

    &nbsp;&nbsp;&nbsp;

    <asp:Button Text="Register " OnClick="most" class="button style2 " runat="server" OnClientClick="return true" Width="134px" />

  
</div>
  
    </div>
    <script type="text/javascript">
               st_p();
    </script>
        <p>
            &nbsp;</p>
    </form>
</body>
    </html>