<!DOCTYPE html>
<html lang="en">

<title> Upload </title>

    <?php include('navbar.php'); 
    
    if(isset($_SESSION['username']))
{
    

   
    
    ?>

<body>
   

   <div  class="col-md-12 text-center  " >
                        
   

							<h1 style="font-family:cursive; margin-top:6vh; ;"> Welcome "<?php 
                                
                               echo $_SESSION['username'] ?>" </h1>
							</div>
						 
						 
   <div class="col-md-12"> <br></div>
    <div class="container my1 ">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form my2">
					 <div class="logo mb-3 ">
						 
					</div>
                   <div class="main">
			<h2 class="text-center">File Manager:</h2>
			<br>
			
			<form name="uploader" enctype="multipart/form-data" id="uploader" method="post" action="add_file.php">
				<h5>File Name:</h5>
				<input type="text" placeholder="Type Here..." required="" name="name" class="form-control">
				<div class="col-md-2"><br></div>
				
				<h5>File:</h5>
				<input type="file" name="file" required=""><br><br>
				<input type="submit" name="submit" value="Upload File">
				<br><br>
				<a href="files.php">
					View/Download Files
					<br><br>
				</a>
				<a href="logout.php">
					Logout
					<br><br>
				</a>
			</form>
		</div>
                 
				</div>
			</div>
			  
                     
			</div>
		</div>
      </div>   
         
	  <script>
	  $(document).ready(function(){
		var msg1= <?php echo json_encode($_SESSION['msg'][0]); ?>;
		var msg2= <?php echo json_encode($_SESSION['msg'][1]); ?>;

		<?php
		if(isset($_SESSION ['msg'])){      ?>
		Swal.fire({
			icon: 'error',
			title: msg1,
			text: msg2
		});
		<?php  
		}
		 $_SESSION ['msg']=null;
		 ?>
	  });
	  </script>
         

</body>
</html>


<?php
                                   
    }
    else {
        echo '<script type="text/javascript">
				location.replace("login.php");
			  </script>';
	}
	?>