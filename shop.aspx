<%@ Page Title="Home Page" Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <script src="scripts/lib.js"></script>
    <title>Equipment | Black SPACE</title>
    <style type="text/css">
        #form1 {
            height: 481px;
        }
    </style>
</head>
<body>
    <script type="text/javascript">/*cont_logo();*/ equip(); </script>
    <form id="form1" runat="server">
        <telerik:RadAjaxManager ID="RadAjaxManager1" runat="server">
        </telerik:RadAjaxManager>
        <telerik:RadMenu ID="RadMenu1" runat="server" OnItemClick="RadMenu1_ItemClick" Skin="BlackMetroTouch">
            <Items>
                <telerik:RadMenuItem runat="server" Text="SPACE">
                </telerik:RadMenuItem>
            </Items>
        </telerik:RadMenu>
        <telerik:RadMenu ID="RadMenu2" runat="server" OnItemClick="RadMenu2_ItemClick" Skin="BlackMetroTouch">
            <Items>
                <telerik:RadMenuItem runat="server" Text="SHOP">
                </telerik:RadMenuItem>
            </Items>
        </telerik:RadMenu>
        <telerik:RadMenu ID="RadMenu3" runat="server" Skin="BlackMetroTouch" Style="top: 0px; left: 0px" OnItemClick="RadMenu3_ItemClick">
            <Items>
                <telerik:RadMenuItem runat="server" Text="equipment">
                </telerik:RadMenuItem>
            </Items>
        </telerik:RadMenu>
        <telerik:RadMenu ID="RadMenu4" runat="server" Skin="BlackMetroTouch">
            <Items>
                <telerik:RadMenuItem runat="server" Text="test">
                </telerik:RadMenuItem>
            </Items>
        </telerik:RadMenu>
        <telerik:RadMenu ID="RadMenu5" runat="server" ClickToOpen="True" Flow="Vertical" Skin="BlackMetroTouch" Style="top: 98px; left: -321px; width: 111px; right: 366px;">
            <Items>
                <telerik:RadMenuItem runat="server" Text="Menu">
                    <Items>
                        <telerik:RadMenuItem runat="server" Text="Корабли" NavigateUrl="~/shop/ships/ships.aspx">
                        </telerik:RadMenuItem>
                        <telerik:RadMenuItem runat="server" Text="Дройды" NavigateUrl="~/shop/drones/drones.aspx">
                        </telerik:RadMenuItem>
                        <telerik:RadMenuItem runat="server" Text="Пушки" NavigateUrl="~/shop/weapons/weapons.aspx">
                        </telerik:RadMenuItem>
                        <telerik:RadMenuItem runat="server" Text="Боеприпасы" NavigateUrl="~/shop/ammo/ammo.aspx">
                        </telerik:RadMenuItem>
                    </Items>
                </telerik:RadMenuItem>
            </Items>
        </telerik:RadMenu>
        <telerik:RadScriptManager ID="RadScriptManager1" runat="server">
            <Scripts>
                <asp:ScriptReference Assembly="Telerik.Web.UI" Name="Telerik.Web.UI.Common.Core.js"></asp:ScriptReference>
                <asp:ScriptReference Assembly="Telerik.Web.UI" Name="Telerik.Web.UI.Common.jQuery.js"></asp:ScriptReference>
                <asp:ScriptReference Assembly="Telerik.Web.UI" Name="Telerik.Web.UI.Common.jQueryInclude.js"></asp:ScriptReference>
            </Scripts>
        </telerik:RadScriptManager>
    </form>
</body>
</html>
// возможно щас не будет работать, swf_global в архвие Black-Space_cms