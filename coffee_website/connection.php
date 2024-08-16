<?php

$con = mysqli_connect('localhost','root','','cofee_web');

if(isset($_POST['book'])){
    $fname=$_POST['rfname'];
    $femail=$_POST['remail'];
    $fmobile=$_POST['rmobile'];
    $ftbl_num=$_POST['rtab_number'];
    $fdate=$_POST['rdate'];
    $ftime=$_POST['rtime'];
    
    $query="INSERT INTO deno(uname,email,mobile,tbl_name,udate,utime) VALUES('$fname','$femail','$fmobile','$ftbl_num','$fdate','$ftime')";

    $result=mysqli_query($con,$query);
    
    if ($result) {
        echo '<script>
                alert("Table Reserved Successfully.....!");
                window.location="index.php";
              </script>';
    } else {
        echo '<script>
                alert("Reservation Failed. Please try again......");
                window.location="index.php";
              </script>';
    }
}
?>