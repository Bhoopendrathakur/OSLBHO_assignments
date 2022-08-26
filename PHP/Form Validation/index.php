<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'style.php' ?>
    <title>Document</title>
</head>
<body>
    <?php include 'validate.php'?>
    <div class="main">
        <div class="dev">
        <h1>DEV COMMUNITY</h1></div>

        <div class="inputbox" >
            <H2><B>REGISTRATION PAGE</B></H2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                <input name="firstname" type="text"  placeholder="FIRST NAME">
                <span class="error"><?php if(empty($successmsgfname)){echo "* ".$firstnameError ;}?></span>
                <span class="success"><?php echo $successmsgfname;?></span>
                <input name="lastname" type="text"  placeholder="LAST NAME">
                <span class="error"><?php if(empty($successmsglname)){echo "* ".$lastnameError ;}?></span>
                <span class="success"><?php echo $successmsglname ;?></span>
            </div>
             <div>
                    <input type="text" name="username" placeholder='USERNAME'>
                    <span class="error"> <?php if(empty($successmsgUname)){echo "* ". $usernameError;}?></span>
                    <span class="success"><?php echo $successmsgUname ;?></span>
                    <select id="genderbox" name="gender" >
                    <option value="" disabled selected>SELECT GENDER</option>
                        <option name="gender" value="MALE">MALE</option>
                        <option name="gender" value="FEMALE">FEMALE</option>
                        <option name="gender" value="OTHER">OTHER</option>
                    </select>
                    <span class="error"><?php if(empty($successmsgGender)){echo "* ". $genderError ;}?></span>
                    <span class="success"><?php echo $successmsgGender ;?></span>
            </div>
            <div>  
                <input name="email" type="email"  placeholder="EMAIL">
                     <span class="error"><?php if(empty($successmsgEmail)){echo "* ". $emailError ;}?></span>
                     <span class="success"><?php echo $successmsgEmail;?></span>
                      <input type="tel" name="phone" id="" placeholder="PHONE NUMBER">
                      <span class="error"> <?php if(empty($successmsgPhone)){echo "* ". $phoneError ;}?></span>
                      <span class="success"><?php echo $successmsgPhone ;?></span>
            </div>
            <div>  <input name="dob" onfocus="this.type='date'"  placeholder="DATE OF BIRTH">
              <span class="error"> <?php if(empty($successmsgDob)){echo "* ". $dobError ;}?></span>
              <span class="success"><?php echo $successmsgDob ;?></span>
               <input name="nationality" type="text"  placeholder="NATIONALITY">
               <span class="error"> <?php if(empty($successmsgNat)){echo "* ". $nationalityError;}?></span>
               <span class="success"><?php echo $successmsgNat ;?></span>
            </div>
            <div>
                <label  for="">PROFILE IMAGE  </label><input id="uploadbox" type="file" id="img" name="img" accept="image/*"  placeholder="">
            </div>
            <div>
                     <button name="save" type="submit" id="submitbtn">SUBMIT</button>    
            </div>
            </form>

        </div>
        <hr>
        <div class="output">
        <?php
        echo "<h2>Your Input:</h2>";
        echo $firstname;
        echo "<br>";
        echo $lastname;
        echo "<br>";
        echo $username ;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $phone;
        echo "<br>";
        echo $dob;;
        echo "<br>";
        echo $nationality ;

         ?>
        </div>
    </div>
    
</body>
</html>