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


//delete data
if (isset($_GET['del'])){
    $id = $_GET['del'];
    mysqli_query($db,"DELETE FROM info WHERE id=$id");
    header('location: index.php');

}

//retrieve data from database
$result = mysqli_query($db,"SELECT * FROM info");

//UPDATE DATA
if (isset($_POST['update'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $id = $_POST['id'];
    $nationality = $_POST['nationality'];
    
    mysqli_query($db,"UPDATE info SET firstname='$firstname', lastname='$lastname', email='$email', dob='$dob', nationality='$nationality' WHERE id=$id ");
    header('location:index.php'); 
    
}



?>