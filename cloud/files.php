<!DOCTYPE html>
<html lang="en">

<title> Your Files  </title>
<head>
    
    
    
   
    
   
    
    
	<?php include('navbar.php');
	
	if(isset($_SESSION['username']))
{
	?>
</head>
<body>
   

   <div  class="col-md-12 text-center  " >
                        
   

							<h1 style="font-family:cursive; margin-top:6vh; ;"> Welcome "<?php 
                                
								echo $_SESSION['username'] ?>" </h1>
							</div>
						 
						 
   <div class="col-md-12"> <br></div>
     <div class="container my1 " >
        <div class="row" >
			<div class="col-md-6 mx-auto" >
			<div id="first" class="w-100 p-3" > 
				<div class="myform form my2 " >
					  <div class="logo mb-12 " >
						 
					</div>  
                   <div class="main" style="width:100%">
			<h2 class="text-center">File Manager:</h2>
			<br>
			
			<form name="uploader" enctype="multipart/form-data" id="uploader" method="post" action="add_file.php">
				
				<table width="100%" style=" align-content: center;">
				<tbody><tr style=" background-color: #ccc; font-size:90%;" class="text-center ">
					<th>S.No</th>
					<th>File Name:</th>
					<th>Date:</th>
					<th>Link:</th>
					<th >Delete:</th>
					
				</tr>
				<?php 
				include ('connect.php');
				
				$filess = scandir ("uploads");
				// print_r ($filess);

				$var1= $_SESSION['id'];
				$query= "select * from files inner join relation on files.id=relation.file_id and user_id=$var1";
				$run=mysqli_query($con,$query);
				if($run)
        {
			
			$count=1;
            while($aw = mysqli_fetch_assoc($run))
            {
               
                
                echo '<tr style="font-size: 90%;" class="text-center "> 
                    <td>'.$count++.'</td> 
                    <td>'.$aw['file_name'].'</td>
                    <td >'.$aw['reg_date'].'</td>
					<td><a  class="btn btn-outline-success btn-sm" target="blank" href="uploads/'.$aw['file'].'">Downloads</a></td>

				<td>
					<a href="delete.php?id='.$aw['idd'].'" class="btn btn-outline-danger btn-sm" >Delete </a>
				 </td>
					</tr>';
             }
    
            } ?>
													
										</tbody></table>
										
										<br><br>
			<a class="btn btn-outline-primary btn-sm" href="dashboard.php">
					&lt; back
					
				</a>
				<br><br>
			<a class=" btn btn-outline-primary btn-sm" href="logout.php"  style="align:left;">
					&lt; Logout
					
				</a>
				<br><br>
				
			</form>
		</div>
                 
				 </div>
			</div>
			 <div id="second">
			      <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 >Signup</h1>
                           </div>
                        </div>
                        <form action="#" name="registration">
                          
                            
                        </form>
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
			icon: 'success',
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