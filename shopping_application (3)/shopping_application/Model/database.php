<?php
    function get_db_conn() 
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "makngo3321sdc";
        return mysqli_connect($hostname, $username, $password, $dbname);
    }

    function get_all_products()
    {
        $conn = get_db_conn();
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);
        return $result;
    }
?>