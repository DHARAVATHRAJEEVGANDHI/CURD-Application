<?php
$con=mysqli_connect("localhost","root","","crud");
if (isset($_POST['user']))
{
    
$n=$_POST['Name'];
$fn=$_POST['FatherName'];
$mn=$_POST['MotherName'];
$g=$_POST['Gender'];
$nl=$_POST['Nationality'];
$r=$_POST['Religion'];
$m=$_POST['MobileNo'];
$ei=$_POST['EmailId'];
$l=$_POST['Language'];
$h=$_POST['Hobby'];
$st=$_POST['State'];
$dg=$_POST['Degree'];
$sc=$_POST['SchoolCollege'];
$yp=$_POST['YearOfPass'];
$tm=$_POST['TotalMarks'];
$om=$_POST['ObtainedMarks'];
$cn=$_POST['CompanyName'];
$d=$_POST['Designition'];
$dr=$_POST['Duration'];
$ct=$_POST['CTC'];
$bg=$_POST['BloodGroup'];


$sql="INSERT INTO applicate(Name,FatherName,MotherName,Gender,Nationality,Religion,	MobileNo,EmailId,Language,Hobby,State,Degree,SchoolCollege,YearOfPass,TotalMarks,ObtainedMarks,CompanyName,Designition,Duration,CTC,BloodGroup) 
VALUES('$n','$fn','$mn','$g','$nl','$r','$m','$ei','$l','$h','$st','$dg','$sc','$yp','$tm','$om','$cn','$d','$dr','$ct','$bg')";
$res=mysqli_query($con,$sql);
require 'empid.php';
}
if(isset($_POST['save']))
{
    if(!empty($_POST['Empid']))
    {
        $id=$_POST['Empid'];
            require 'empid.php';
    }
    else{
        echo "it iis not empty..";
    }
}

?>