<?php include('connect.php'); 

//fetching the data to update 
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $rec = mysqli_query($db,"SELECT * FROM info WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $firstname = $record

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD operation</title>
</head>
<body>
    <div class="main">
        <h1>DEV COMMUNITY</h1>
        <div class="outputbox">
            <table>
                <h2><b>CUSTOMER DATA LIST</b></h2>
                <thead>
                    <tr>
                        <th>First <br> name</th>
                        <th>Last <br> name</th>
                         <th>Email</th>
                        <th>Date of birth</th>
                        <th>Nationality</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>   
                        <tr>
                            <td><?php echo $row['firstname'];?></td>
                            <td> <?php echo $row['lastname'];?></td>
                            <td> <?php echo $row['email'];?></td>
                            <td><?php echo $row['dob'];?></td>
                            <td><?php echo $row['nationality'];?></td>
                         <td><a href="index.php?edit=<?php echo $row['id']; ?>">Edit</a><a href="#">Delete</a></td>
                        </tr>
                     <?php } ?>
                  
                     
                </tbody>

            </table>
        </div>

        <div class="inputbox" >
            <H2><B>CUSTOMER DATA ENTRY FORM</B></H2>
            <form action="connect.php" method="POST" >
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                <input name="firstname" type="text" value="<?php echo $firstname; ?>" placeholder="FIRST NAME">
                <input name="lastname" type="text" value="<?php echo $lastname; ?>" placeholder="LAST NAME"></div>
              <div>  <input name="email" type="text" value="<?php echo $email; ?>" placeholder="EMAIL">
                <input name="dob" type="text" value="<?php echo $dob; ?>" placeholder="DATE OF BIRTH"></div>
               <div> <input name="nationality" type="text" value="<?php echo $nationality; ?>" placeholder="NATIONALITY"></div>
               <div>
                <?php if ($edit_state == false): ?>
                     <button name="save" type="submit" id="submitbtn">ADD TO LIST</button>
                <?php else: ?>
                    <button name="UPDATE" type="submit" id="submitbtn">UPDATE</button>
                <?php ?>     
               </div>
            </form>

        </div>
    </div>
    
</body>
</html>