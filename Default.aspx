<%@ Page Title="Home Page" Language="C#"  AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<%--<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
 <asp:Label ID="Label1" runat="server"></asp:Label>
</asp:Content>--%>
<!DOCTYPE html>

<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--<script src="js/toolbox.flashembed.js"></script>
    <script src="js/jquery.min.js"></script>-->
    <script src="scripts/lib.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="css/cont.css">
    <link rel="stylesheet" type="text/css" href="css/button.css">
    <link rel="stylesheet" type="text/css" href="main.css">-->
   
    <meta charset="utf-8" />
    <title>START PAGE | Black SPACE</title>
    <style type="text/css">
        .style2 {
            width: 200px;
        }
        #form1 {
            height: 433px;
        }
        .frame {
            height: 206px;
            width: 939px;
        }
    </style>
</head>
<body style="height: 359px">
    <form id="form1" runat="server">
        <telerik:RadMenu ID="RadMenu1" Runat="server" OnItemClick="RadMenu1_ItemClick" Skin="BlackMetroTouch">
            <Items>
                <telerik:RadMenuItem runat="server" Text="SPACE">
                </telerik:RadMenuItem>
            </Items>
        </telerik:RadMenu>
        <telerik:RadMenu ID="RadMenu2" Runat="server" OnItemClick="RadMenu2_ItemClick" Skin="BlackMetroTouch">
            <Items>
                <telerik:RadMenuItem runat="server" Text="SHOP">
                </telerik:RadMenuItem>
            </Items>
        </telerik:RadMenu>
        <telerik:RadMenu ID="RadMenu3" Runat="server" Skin="BlackMetroTouch" style="top: 0px; left: 0px" OnItemClick="RadMenu3_ItemClick">
            <Items>
                <telerik:RadMenuItem runat="server" Text="equipment">
                </telerik:RadMenuItem>
            </Items>
        </telerik:RadMenu>
        <telerik:RadMenu ID="RadMenu4" Runat="server" Skin="BlackMetroTouch">
            <Items>
                <telerik:RadMenuItem runat="server" Text="test">
                </telerik:RadMenuItem>
            </Items>
        </telerik:RadMenu>
        <telerik:RadScriptManager ID="RadScriptManager1" runat="server">
            <Scripts>
                <asp:ScriptReference Assembly="Telerik.Web.UI" Name="Telerik.Web.UI.Common.Core.js">
                </asp:ScriptReference>
                <asp:ScriptReference Assembly="Telerik.Web.UI" Name="Telerik.Web.UI.Common.jQuery.js">
                </asp:ScriptReference>
                <asp:ScriptReference Assembly="Telerik.Web.UI" Name="Telerik.Web.UI.Common.jQueryInclude.js">
                </asp:ScriptReference>
            </Scripts>
        </telerik:RadScriptManager>
    </form>
</body>
</html>