
    $insertquery = "insert into User_data('name','email','dob','phone')values('$name','$email','$dob','$phone')";
    $iquery= mysqli_query($con,$insertquery);

     if($iquery){
        ?>
        <script>
             alert("insert succcesful");
        </script>
    
         <?php
    
    }else{
         ?>
         <script>
             alert("insert unsucccesful");
        </script>
    
         <?php

    }
   

