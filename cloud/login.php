

<!DOCTYPE html>
<html lang="en">
<title> Login </title>

<body>
   <?php include('navbar.php'); 
    
    
    
   //  echo $_SESSION['username'];
    if(isset($_SESSION['username']))
{
   echo '<script type="text/javascript"> location.replace("dashboard.php"); </script>';
}
    else
        
    {
    ?>

   <div  class="col-md-12 text-center  " >
                        
   

							<h1 style="font-family:cursive; margin-top:6vh; ;"> Login</h1>
							</div>
						 
						 
   <div class="col-md-12"> <br></div>
    <div class="container my1 ">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form my2">
					 <div class="logo mb-3 ">
						 
					</div>
                   <form action="lconnect.php" method="post" name="login">
                           <div class="form-group text-center">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control"  placeholder="Enter email">
                           </div>
                           <div class="form-group text-center">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password"   class="form-control"  placeholder="Enter Password">
                           </div>
<!--
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
-->
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="submit" value="Submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="signup.php" id="signup">Sign up here</a></p>
                           </div>
                        </form>
                
				</div>
			</div>
            </div>
        </div>
      </div>   
      <script>
	  $(document).ready(function(){
		var msg1= <?php echo json_encode($_SESSION['data'][0]); ?>;
		var msg2= <?php echo json_encode($_SESSION['data'][1]); ?>;
<?php
		if(isset($_SESSION ['data'])){      ?>
		Swal.fire({
			icon: msg2,
			text: msg1
		});
	
	
		<?php  
		}
		 $_SESSION ['data']=null;
		 ?>
	  });
	  </script>
          
</body>
</html>
<?php
    }
    ?>
