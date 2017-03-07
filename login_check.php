
 <?php
       session_start();
       include 'connection.php';
       $Admin_location='profile.php';

     

      $Admin_Email= mysqli_real_escape_string($conn,$_POST['username']);
      $Admin_Pass= mysqli_real_escape_string($conn,$_POST['password']);
 

      // echo $Admin_Email;
      // echo $Admin_Pass;

      $q = "SELECT * FROM `user1` WHERE `Name`=
      '$Admin_Email' AND `Password`= '$Admin_Pass' ";


// $Adminquery="SELECT * FROM admin WHERE email='$Admin_Email' AND password='$Admin_Pass'";


 if($conn->query($q)== TRUE)
     {
         $result=$conn->query($q);
         if($result->num_rows==1)
         {
                // echo "successful login"; 
              $_SESSION["user"] = $Admin_Email;         
              header('Location: '.$Admin_location);
         }
         else{
           echo "login failed";
         }
         
     }
    
    
 


?>
