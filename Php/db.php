<?php
function Createdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="bookstore";

// Create connection
    $con = new mysqli($servername, $username, $password);
// Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

// Create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if (mysqli_query($con,$sql)) {
        $con = new mysqli($servername, $username, $password, $dbname);

        $sql="
            CREATE TABLE IF NOT EXISTS books(
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                book_name VARCHAR (25) NOT NULL,
                book_publisher VARCHAR (20),
                book_price FLOAT                
            )
        ";
        if(mysqli_query($con,$sql)){
            return $con;
        }else{
            echo "Cannot Create table...!";
        }
    } else {
        echo "Error creating database: " . $con->error;
    }

    $con->close();
}
?>
