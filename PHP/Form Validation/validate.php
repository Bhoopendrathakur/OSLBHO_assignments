<?php
// define variables and set to empty values
$firstnameError = $lastnameError = $usernameError = $genderError = $emailError = $phoneError = $dobError = $nationalityError = "";
$firstname = $lastname = $username = $gender = $email = $phone = $dob = $nationality = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
      $firstnameError = "first name is required";
    } else {
      $firstname = test_input($_POST["firstname"]);
    }
  
    if (empty($_POST["lastname"])) {
            $lastnameError = "last name is required";
        } else {
            $lastname = test_input($_POST["lastname"]);
        }
      
    if (empty($_POST["email"])) {
      $emailError = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
    
    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
      } else {
        $username = test_input($_POST["username"]);
      }

    if (empty($_POST["gender"])) {
        $genderError = "Select gender";
     } else {
        $gender = test_input($_POST["gender"]);
     }
    if (empty($_POST["phone"])) {
        $phoneError = "Phone number is required";
     } else {
        $phone = test_input($_POST["phone"]);
     }
     if (empty($_POST["dob"])) {
        $dobError = " Date of birth is required";
     } else {
        $dob = test_input($_POST["dob"]);
     }
     if (empty($_POST["nationality"])) {
        $nationalityError = "nationality  is required";
     } else {
        $nationality = test_input($_POST["nationality"]);
     }
  
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }


?>