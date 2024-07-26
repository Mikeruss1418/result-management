<?php
error_reporting(0);//disables error reporting to avoid displaying erros on the page.
session_start();//starts a new session or resumes an exixting session

//variables containig Db connection details.
$host="localhost";
$user="root";
$password="";
$db="result";
// connects to the mysql database using the provided details
$data=mysqli_connect($host,$user,$password,$db);

//checks for connections
if($data===false)
{
    die("connection error");
}
//checks if the form was submitted via POST method.
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //retrieves the submitted username and password.
    $name=$_POST['username'];
    $pass=$_POST['password'];

    //creates sql query to fetch user detail based on the submtted user and password
    $sql="select * from admin where username='$name' and password='$pass'";

    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="admin")
    {
        
        $_SESSION['username']=$name;
        header("location:dashboard/Adashboard.php");
    }
   
    else    
    {
        
        $message= "username or password do not match";
        $_SESSION['loginMessage']=$message;
       header("location:login.php");
    }

}
?>