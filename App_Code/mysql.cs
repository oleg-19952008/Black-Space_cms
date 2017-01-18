using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using MySql.Data.MySqlClient;

/// <summary>
/// Сводное описание для Class1
/// </summary>
public class sql
{
    // ALTER TABLE tablename add newid INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;
    public static string get_fr_table = null;
    public string DB_sql = "Database=new_do;Data Source=127.0.0.1;User Id=root;Password=";
    public void sql_exec(string request)
    {

        var connect = new MySqlConnection(DB_sql);
        var exec_sql_ = new MySqlCommand(request, connect);
        connect.Open();
        var ss = exec_sql_.ExecuteNonQuery().ToString();
        get_fr_table = ss;

    }
    public static string res = null;
    public static int id = 1;
    public static int user_id = 1;
    public static string login = null;
    public static string password = null;
    public static int last_user_id = 0;
    public static string screen_x, screen_y;
    public void sql_exec_int(string value)
    {
        var connect = new MySqlConnection(DB_sql);
        var exec_sql_ = new MySqlCommand(value, connect);
        MySqlDataReader sql_reader;
        connect.Open();
        sql_reader = exec_sql_.ExecuteReader();
        while (sql_reader.Read())
        {
            last_user_id = sql_reader.GetInt32(2);
        }
        connect.Close();
    }
    public void sql_exec_string(string value)
    {
        try {
            var connect = new MySqlConnection(DB_sql);
            var exec_sql_ = new MySqlCommand(value, connect);
            MySqlDataReader sql_reader;
            connect.Open();
            sql_reader = exec_sql_.ExecuteReader();
            while (sql_reader.Read())
            {
        
                user_id = sql_reader.GetInt32(0);
                login = sql_reader.GetString(1);
                password = sql_reader.GetString(2);
                screen_y =  sql_reader.GetString(0);
                screen_x = sql_reader.GetString(1);
            }
            connect.Close();
        }
        catch { }         
        }
    public string sql_test (string v,string arg)
    {
        var connect = new MySqlConnection(DB_sql);
        var exec_sql_ = new MySqlCommand(v, connect);
        MySqlDataReader sql_reader;
        connect.Open();
        sql_reader = exec_sql_.ExecuteReader();
        string dsa = "";
        while (sql_reader.Read())
        {
            //user_id = sql_reader.GetInt32(0);
            //login = sql_reader.GetString(1);
            //password = sql_reader.GetString(2);
             dsa = sql_reader[arg]+"";
           
        }
        connect.Close();
        return dsa;

    }
    public int check_login()
    {
        var l = 0;
        string value = "SELECT * FROM `users` ORDER BY `users`.`login` ASC";
        var connect = new MySqlConnection(DB_sql);
        var exec_sql_ = new MySqlCommand(value, connect);
        MySqlDataReader sql_reader;
        connect.Open();
        sql_reader = exec_sql_.ExecuteReader();
        while (sql_reader.Read())
        {
           
            login = sql_reader.GetString(1);
            Black.core.Data_Base s = new Black.core.Data_Base();
         
                if (s.LOGIN == login)
                {
                l = 2;
                }

        }
        return l;
    }
}