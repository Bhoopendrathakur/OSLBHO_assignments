<?php
$server = "localhost";
$user= "root";
$password = "Admin@123";
$db = "Registration_form";

$con = mysqli_connect($server,$user,$password,$db);
if ($con){
    ?>
    <script>
        alert("connection succesful");
    </script>

    <?php
}else{
    ?>
    <script>
        alert("not connected");
    </script>
    <?php
}
?>