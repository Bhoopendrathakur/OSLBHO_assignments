<?php
require_once('connect.php');


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
     if (isset($_POST['join'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $sql = "INSERT INTO users(username,email,dob,phone) VALUES(?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$username,$email,$dob,$phone]);
        if($result){
            echo 'Successfully saved.';
        }else{
            echo 'there was some error while saving the data.';
        }
     }

    ?> 
    <div class="main">
        <div class="container">
            <h1 class="dev">DEV COMMUNITY</h1>
            <div class="form-control">
            <h2>Join Our developer community</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
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