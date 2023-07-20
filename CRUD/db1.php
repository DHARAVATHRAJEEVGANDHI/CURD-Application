<?php
$con=mysqli_connect("localhost","root","","crud");
if(isset($_POST['submit']))
{ 

            $file=$_FILES['imgpath']['name'];
            
        
            $sql="INSERT INTO imgpath(imgpath) VALUES('$file')";
            $res=mysqli_query($con,$sql);
            require 'x.php';
}