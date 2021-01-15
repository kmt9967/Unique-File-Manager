
<?php


function contact()
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
          session_start();
          $_SESSION['data']=["Data is successFully Added","success"];
          header ("location: login.php");
      }
        else{
            $_SESSION['data']=["Data is Addition Falied","error"];
          header ("location: signup.php");

        }
     
  }
}

?>