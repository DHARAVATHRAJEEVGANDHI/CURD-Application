<?php
$con=mysqli_connect("localhost","root","","crud");
session_start();
if(isset($_POST['singup']))
{
    if(!empty($_POST['Name']) && !empty($_POST['Mobile']) && !empty($_POST['Email']) && !empty($_POST['Password']))
    {

            $x=$_POST['Name'];
            $y=$_POST['Mobile'];
            $z=$_POST['Email'];
            $p=$_POST['Password'];

            $sql="SELECT * FROM userdetails WHERE Email='$z'";
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($res);
            if(!empty($row))
            {
              header("Location: http://localhost/CRUD/singup.php?msg=This Email Id is Already Exixst in Our Database Please Try With Others !!");
            }
            else
            {
                 $sql="INSERT INTO userdetails(Name,Mobile,Email,Password) VALUES('$x','$y','$z','$p')";
                $res=mysqli_query($con,$sql);
                header("Location: http://localhost/CRUD/login.php?msg=You have Signup Succesfully !! Now You can Login From Here !!");
            }               
    }
            else
            {
            header("Location: http://localhost/CRUD/singup.php?msg=All Filds are Mandatory Please Fill it !! ..");
            }

}

elseif (isset($_POST['login'])) 
{
        if(!empty($_POST['Email']) && !empty($_POST['Password']))
        {
                $z=$_POST['Email'];
                $p=$_POST['Password'];
                

                $sql="SELECT * FROM userdetails WHERE Email='$z'";
                $res=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($res);
                
                if($row>0)
            {
                $sql="SELECT * FROM userdetails WHERE Email='$z' && Password='$p'";
                $res=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($res);
                $pas=$row['Password'];
                $uid=$row['uid'];
                $_SESSION['x']=$uid;
                if(!empty($pas))
                {
                        require 'profile.php';
                }
                else {
                header("Location: http://localhost/CRUD/login.php?msg=Your password is incorrect !!..");
                }
            
            }
            else 
            {
            header("Location: http://localhost/CRUD/login.php?msg=Your email is incorrect !!..");
            }
        }
            else {
                header("Location: http://localhost/CRUD/login.php?msg= All Filds are Mandatory Please Fill it !! ..");
            }

}
elseif (isset($_GET['edit'])) {
     
     $uid=$_SESSION['x'];
    require 'edit.php';
}
elseif (isset($_GET['update'])) {
    $uid=$_SESSION['x'];

    $n=$_POST['Name'];
    $m=$_POST['Mobile'];
    $e=$_POST['Email'];

    $sql="UPDATE userdetails SET Name='$n', Mobile='$m', Email='$e' WHERE uid='$uid'";
    $res=mysqli_query($con,$sql);
    require 'profile.php';
}
elseif (isset($_GET['delete'])) {
    $uid=$_SESSION['x'];

    $sql="DELETE FROM userdetails WHERE uid='$uid'";
    $res=mysqli_query($con,$sql);
    require 'login.php';
}
elseif (isset($_GET['upload'])) 
{
    $uid=$_SESSION['x'];
    $file="img/". basename($_FILES['photo']['name']);
   //$file="img/table user.jpg";
    echo $file;
    
    $sql="UPDATE userdetails SET Img='$file' WHERE uid='$uid'";
    $res=mysqli_query($con,$sql);
    move_uploaded_file($_FILES["photo"]["tmp_name"],$file);
    require 'profile.php';
}
elseif (isset($_GET['cp']))
{
        $uid=$_SESSION['x'];
        $op=$_POST['oldpassword'];
        $np=$_POST['newpassword'];
        $cp=$_POST['confirmpassword'];

        $sql="SELECT * FROM userdetails WHERE uid='$uid' && Password='$op'";
        $res=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($res);
        if(!empty($row))
        {
            if($np==$cp)
            {
                $sql="UPDATE userdetails SET password='$np' WHERE uid='$uid'";
                $res=mysqli_query($con,$sql);
                require 'profile.php';
            }
        }
        else{
            $message = "!!!...old Password is not correct...!!!";
           require 'profile.php';
        }

}
?>