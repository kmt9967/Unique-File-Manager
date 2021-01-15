

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jq/jquery.js"></script>
<script src="bootstrap/Jquery/jquery.validate.min.js"></script>
<link href="css/fonts.googleapis.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    
    <style>
    
        body{
        padding-top:4.2rem;
		padding-bottom:4.2rem;
/*		background:rgba(0, 0, 0, 0.76);*/
        }
        a{
         text-decoration:none !important;
         }
         h1,h2,h3{
         font-family: 'Kaushan Script', cursive;
         }
          .myform{
		position: relative;
		display: -ms-flexbox;
		display: flex;
		padding: 1rem;
		-ms-flex-direction: column;
		flex-direction: column;
		width: 100%;
		pointer-events: auto;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid rgba(0,0,0,.2);
		border-radius: 0.5rem;
		outline: 0;
		max-width: 500px;
		 }
         .tx-tfm{
         text-transform:uppercase;
         }
         .mybtn{
         border-radius:50px;
         }
        
         .login-or {
         position: relative;
         color: #aaa;
         margin-top: 10px;
         margin-bottom: 10px;
         padding-top: 10px;
         padding-bottom: 10px;
         }
         .span-or {
         display: block;
         position: absolute;
         left: 50%;
         top: -2px;
         margin-left: -25px;
         background-color: #fff;
         width: 50px;
         text-align: center;
         }
         .hr-or {
         height: 1px;
         margin-top: 0px !important;
         margin-bottom: 0px !important;
         }
         .google {
         color:#666;
         width:100%;
         height:40px;
         text-align:center;
         outline:none;
         border: 1px solid lightgrey;
         }
          form .error {
         color: #ff0000;
         }
         #second{display:none;}
        
        .my1{
            margin-top: 2vh;
        }
        .my2 {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 7px rgb(255, 94, 71,0.8);
}
    
    </style>

    
    
    
    <?php include('navbar.php'); 
     if(isset($_SESSION['username']))
{
    
echo '<script type="text/javascript">
				location.replace("dashboard.php");
			  </script>';

}
    else
        
    {
    
    ?>  
    
</head>
<body>
   
    
   <div class="col-md-12 text-center">
							<h1 style="font-family:cursive; margin-top:6vh;">SignUp</h1>
   <div class="col-md-12"> <br></div>
    <div class="container my1">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form my2">
					 <div class="logo mb-3">
						 
					</div>
                   <form action="sconnect.php" method="post">
                         
                          <div class="form-group">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" name="name"  class="form-control"   placeholder="Enter Name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control"  placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Username</label>
                              <input type="text" name="username"  class="form-control"  placeholder="Enter Username">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password"   class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
<!--
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
-->
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="submit" value="Submit" class=" btn btn-block mybtn btn-primary tx-tfm">SignUp</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or">or</span>
                              </div>
                           </div>
                           
                           <div class="form-group">
                              <p class="text-center">Already have account? <a href="login.php" id="signup">Login here</a></p>
                           </div>
                        </form>
                 
				</div>
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