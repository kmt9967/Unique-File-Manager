
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/tlogo.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="sheets/style.css">
<script src="sheets/style.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="sheets/jquery.js"> </script>
<script src="sheets/sweetalert.js"> </script>

<style>
.my3 img{
    width: 20%;
    margin-left: ;
    margin-bottom: -34vh;
}
    
     body{
        padding-top:4.2rem;
		padding-bottom:4.2rem;
/*		background:rgba(0, 0, 0, 0.76);*/
        background: url("images/jelly.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;

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
    

    
                @media screen and (max-width: 780px) {
  .navbar-collapse  {
    padding-left:20%;
    padding-top: 18px !important;
  }
}
    
    
    
    
    
        
</style>
</head>
<body class="hero-anime">	
    <div class="navigation-wrap bg-dark start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
						
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
							<ul class="navbar-nav mx-auto " style="width:40%">
                            <li class="navbar navbar-light text-center " style="margin-right:20%; margin-left:-90%";>
                            <a class="navbar-brand" href="dashboard.php">
    <img  src="images/logof.png" width="360" height="106" style="margin-bottom:-22%; margin-top:-11%;" class=" align-top">
    
  </a>

                            </li>
                            
							<?php
                                if(isset($_SESSION['username']))
                                {
 
                                ?>
								<li class="nav-item     col-md-4 offset-md-5 text-center" >
									<a  class="nav-link " href="dashboard.php">Upload</a>
								</li>
								<li class="nav-item  col-md-4 offset-md-2 text-center">
									<a class="nav-link" href="files.php">Files</a>
								</li>
								<?php
                                }
                                    
								
								
                                else{
                                    ?>
                                    
								<li class="nav-item  col-md-4 offset-md-5 text-center">
									<a class="nav-link" href="login.php">Login</a>
								</li>
								<li class="nav-item  col-md-4 offset-md-2 text-center">
									<a class="nav-link" href="signup.php">SignUp</a>
								</li>
								<?php
                                }
                                ?>
                                
                                <!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 col-md-3 offset-md-2 text-center">
									<a class="nav-link" href="files.php">Files</a>
								</li> -->
								
								
								<li class="nav-item  col-md-4 offset-md-2 text-center">
									<a class="nav-link" href="contact.php">Contact </a>
								</li>
							</ul>
						</div>
						
					</nav>		
				</div>
			</div>
		</div>
	</div>
    </body>
</html>
