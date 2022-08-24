<?php


$firstname = "";
$lastname = "";
$email = "";
$dob = "";
$nationality = "";
$id = 0;
$edit_state = false;

//connect to database 
$db = mysqli_connect('localhost','root','Admin@123','crud');

//if save is clicked
if( isset($_POST['save'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];

    $query = "INSERT INTO info(firstname,lastname,email,dob,nationality) VALUES('$firstname','$lastname','$email','$dob','$nationality')";
    mysqli_query($db,$query);
    header('location: index.php');//redirecting to index page on inserting data 
}


//retrieve data from database
$result = mysqli_query($db,"SELECT * FROM info");

//UPDATE DATA
if (isset($_POST['update'])){
    $firstname = mysql_real_escape_string($_POST['firstname']);
    $lastname = mysql_real_escape_string($_POST['lastname']);
    $email = mysql_real_escape_string($_POST['email']);
    $dob = mysql_real_escape_string($_POST['dob']);
    $nationality = mysql_real_escape_string($_POST['nationality']);
    $id = mysql_real_escape_string($_POST['id']);
    

}



?>