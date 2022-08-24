<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <title>PHP REGISTRATION FORM</title>
</head>
<body>
    <?php
     include 'connect.php';

     if (isset($_POST['join'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $dob = mysqli_real_escape_string($con,$_POST['dob']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']);

        
      
    //     $emailquery = SELECT * FROM users where email='$email'";
    //     $query = mysqli_query($con,$emailquery);
    //     $emailcount = mysqli_num_row($query);

    //   if ($emailcount>0){
    //     echo "email already exist";
    //   }
    //   else{
        $insertquery ="INSERT INTO users VALUES('$username','$email','$dob','$phone')";
        $iquery = mysqli_query($con,$insertquery);
            if ($iquery){
                // echo $username.$email.$dob.$phone;
            ?>
            <script>
                alert("insert succesful");
            </script>
        
            <?php
            }
            else{
            ?>
            <script>
                alert("not inserted successfully");
            </script> 
            <?php
            }
            
        }

     

    ?> 


    <div class="main">
        <div class="container">
            <h1 class="dev">DEV COMMUNITY</h1>
            <div class="form-control">
            <h2>Join Our developer community</h2>
            <form action="#" method="POST">
            <input type="text" name="username" placeholder="FULL NAME"><br>
            <input type="email" name="email" id="" placeholder="Email"><br>
            <input type="tel" name="phone" id="" placeholder="Phone Number"><br>
            <input type="text" name="dob" id="" placeholder="Date of birth"><br>
            <button type="submit" name="join">Join</button>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>