
 
<?php
 
 if(isset($_POST['submit']))
  {
    
    $email=$_POST['email'];
        $pass=$_POST['password'];
//echo $pass;
session_start();
include('connect.php');
$query="select * from register where email='$email'";
$run=mysqli_query($con,$query);
if($run)
{
    $data=mysqli_fetch_assoc($run); // take data from data base
   
   if(password_verify($pass, $data['user_pass'])) // Matching
    {
       
        
      $_SESSION['username'] = $data['name']; //session variable created
      $_SESSION['id'] = $data['id']; 
      
      header ("location:dashboard.php");
       
    }
    else
    {
      $_SESSION['data']=["Login Failed","error"];

      echo '<script type="text/javascript">
				location.replace("login.php");
			  </script>';
    }
//    else
//    {
//        echo "Failed To Connect";
//    }
    
    
}
//     else
//     {
//        echo $email;
//        echo "<br>";
//         echo $pass;
//         echo $con;
//     }
 }
    
     
     ?>