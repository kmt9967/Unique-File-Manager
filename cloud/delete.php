<?php

include('connect.php');
    $que= "select * from files inner join relation on files.id=relation.file_id and idd=".$_GET['id'];
    $run=mysqli_query($con,$que);
    $data=mysqli_fetch_assoc($run);
    $query5="Select COUNT(file_id) as count FROM relation where file_id=".$data['file_id'];
    $run5=mysqli_query($con,$query5);
    $d0=mysqli_fetch_assoc($run5);
     
    
    

    
    if($d0["count"] < 2 )
    {
        include('connect.php');
        unlink("uploads/".$data['file']);
        $query4="DELETE FROM relation WHERE idd=".$data['idd'];
        $run4=mysqli_query($con,$query4);
        $query6="DELETE FROM files WHERE id=".$data['id'];
        $run6=mysqli_query($con,$query6);
        echo $query4."<br>".$query6;
        header ("location: files.php");
    }
    else{
        include('connect.php');
        $query4="DELETE FROM relation WHERE idd=".$data['idd'];
        echo $query4;
        $run4=mysqli_query($con,$query4);
        header ("location: files.php");
    }
    ?>