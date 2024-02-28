<?php
$servername="localhost";
$username="root";
$password="";
$dbname="db";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql_query="INSERT INTO form(firstname,lastname,email,password)
    VALUES('$firstname','$lastname','$email','$password')";
    if(mysqli_query($conn,$sql_query)){
        echo "New details entry inserted successfully !";
    }
    else{
        echo "Error:".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>