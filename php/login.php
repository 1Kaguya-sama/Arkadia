<?php
//Login.php
//This script performs a SELECT query to check if a record exists in the users table
//A record has 4 fields: id(automatically added),username, password, and email
//If the record exists, username and passowrd match, the user is logged in

//Connect to the MySQL database
require 'connect.php';

//Get the POST variables
$email = $_POST['email'];
$password = $_POST['password'];

//Select the record
$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

//Check if the query was successful
if(mysqli_num_rows($result) > 0)
{
    //Redirect to the home page
    //homepage is at path:C:\xampp\htdocs\IKT.ADENIRAN\Arkadia\base.html
    //php is at path:C:\xampp\htdocs\IKT.ADENIRAN\Arkadia\php\login.php
    //So we need to go back to the homepage
    header('Location: ../base.html');    
    

}
else
{
    echo 'Login failed';
}











?>