<?php
// define variables and set to empty values
$firstnameError = $lastnameError = $usernameError = $genderError = $emailError = $phoneError = $dobError = $nationalityError = "";
$firstname = $lastname = $username = $gender = $email = $phone = $dob = $nationality = "";
$successmsgfname = $successmsglname = $successmsgUname = $successmsgGender = $successmsgEmail = $successmsgPhone = $successmsgDob = $successmsgNat = "";
$successmsg ='';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //validate firstname
    if (empty($_POST["firstname"])) {
      $firstnameError = "first name is required";
    } else {
      $firstname = test_input($_POST["firstname"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
         $firstnameError = "Only letters and white space allowed";
       }else{
        
         $successmsgfname = "<img src='tick.png' style='height:25px;'>";
       }
    }
   //validate lastname
    if (empty($_POST["lastname"])) {
            $lastnameError = "last name is required";
        } else {
            $lastname = test_input($_POST["lastname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
               $lastnameError = "Only letters and white space allowed";
             }else{
               $successmsglname ="<img src='tick.png' style='height:25px;'>";
             }
        }
   //validate email
    if (empty($_POST["email"])) {
      $emailError = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format";
       }else{
         $successmsgEmail = "<img src='tick.png' style='height:25px;'>";
       }
    }
    //validate username
    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
      } else {
        $username = test_input($_POST["username"]);
        $successmsgUname = "<img src='tick.png' style='height:25px;'>";
      }
   //validate gender
    if (empty($_POST["gender"])) {
        $genderError = "Select gender";
     } else {
        $gender = test_input($_POST["gender"]);
        $successmsgGender ="<img src='tick.png' style='height:25px;'>";
     }
     //validate phone number
    if (empty($_POST["phone"])) {
        $phoneError = "Phone number is required";
     } else {
        $phone = test_input($_POST["phone"]);
        if(preg_match('/^[0-9]{10}+$/', $phone)) {
         
            $successmsgPhone ="<img src='tick.png' style='height:25px;'>";

         } else {
         $phoneError = "Invalid Phone Number";
         }
     }
     //validate Date Of Birth
     if (empty($_POST["dob"])) {
        $dobError = " Date of birth is required";
     } else {
        $dob = test_input($_POST["dob"]);
        $successmsgDob ="<img src='tick.png' style='height:25px;'>";
     }
     //validate Nationality
     if (empty($_POST["nationality"])) {
        $nationalityError = "nationality  is required";
     } else {
        $nationality = test_input($_POST["nationality"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nationality)) {
         $nationalityError = "Only letters and white space allowed";
       }else{$successmsgNat ="<img src='tick.png' style='height:25px;'>";}
     }
  
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }



?>