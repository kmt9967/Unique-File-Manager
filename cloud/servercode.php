<?php
session_start();
function sign_up()
{
    if(isset($_POST['submit']))
  {
      
      $name=$_POST['name'];
      $email=$_POST['email'];
        $uname=$_POST['username'];
      $pass=password_hash($_POST['password'], PASSWORD_DEFAULT);
//      $pass=$_POST['password'];
        
      include('connect.php');
          $query="insert into register(name,email,username,user_pass) values ('$name','$email','$uname','$pass')";
      $run=mysqli_query($con,$query);
      if($run)
      {
          
          $_SESSION['data']=["Sign Up Successfull","success"];
          header ("location: login.php");
      }
        else{
          $_SESSION['data']=["Registeration Failed Same, Username or Email","error"];
           header ("location: signup.php");
        }
     
  }
}
 
//function log_in()
//{
//    if(isset($_POST['submit']))
//  {
//    
//    $email=$_POST['email'];
//        $pass=$_POST['password'];
////echo $pass;
//include('connect.php');
//$query="select * from signup where email='$email'";
//$run=mysqli_query($con,$query);
//if($run)
//{
//    $data=mysqli_fetch_assoc($run); // take data from data base
//   
//   if(password_verify($pass, $data['user_pass'])) // Matching
//    {
//       
//       
//      $_SESSION['username'] = $data['name']; //session variable created
//       
//        header ("location:dashboard.php");
//    }
//    
//    
//}
//    }
//}
//    
    
    





?>