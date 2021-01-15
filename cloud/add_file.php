<?php
session_start();


if(isset($_POST['submit']))
{
    $file_name = $_POST["name"]; 
    $name = $_FILES['file'] ["name"];
    $type = $_FILES['file'] ["type"];
    $error = $_FILES['file'] ["error"];
    $size = $_FILES['file'] ["size"];
    $fileExt = explode ('.', $name);
    
     $fileActualExt = strtolower(end($fileExt));
     if($error === 0) {
            //if( $size < 1000000) {
                 $fileNewName = uniqid ('',true).".".$fileActualExt;
                 $des = 'uploads/'.$fileNewName;
                 $codee = hash_file('crc32b',$_FILES['file']['tmp_name']);
                 include('connect.php');
                 $query0="select code from files where code = '$codee'";
                 $run0=mysqli_query($con,$query0);
                 $data=mysqli_fetch_assoc($run0);

                 $user_id = $_SESSION['id'];

                
                if($data["code"] == $codee)
                {
                    $_SESSION['msg']=["File Successfully Added","Duplication Detected"];
                    header ("location: files.php");
                }
                else{
                    $_SESSION['msg']=["File Successfully Added","No Duplication Detected"];
                    // echo "File is moved";
                 move_uploaded_file($_FILES['file']['tmp_name'],$des); 
                 $query1="insert into files (type,file,code) values ('$type','$fileNewName','$codee')"; 
                 $run1=mysqli_query($con,$query1);                 
                }
            
            
            
            $query2="select id from files where code = '$codee'";
            $run2=mysqli_query($con,$query2);
            $data1=mysqli_fetch_assoc($run2);
            $file_id= $data1["id"];
            $query3="insert into relation (file_id,file_name,user_id) values ('$file_id','$file_name','$user_id')";
            $run3=mysqli_query($con,$query3);
            header ("location: files.php");
        
        //}
        //else{
          //  $_SESSION['msg']=["File Uploading Failed","Size Too Big.."];
           // header ("location: dashboard.php"); // file is too big 
        //}
    }
    else {
        $_SESSION['msg']=["File Uploading Error","System Problem"];
        header ("location: dashboard.php"); // uploading failed
    }
    // $data = file_get_contents($_FILES['file']['tmp_name']);
    
   
}


  

    

?>