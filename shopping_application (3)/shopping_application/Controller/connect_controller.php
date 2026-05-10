<?php 
    require_once('../Model/database.php');

    function get_conn_info()
    {
        if (get_db_conn())
        {
            return "Connection successful";
        }
        else
        {
            return "Connection failed";
        }
    }

    $products = get_all_products();
?>