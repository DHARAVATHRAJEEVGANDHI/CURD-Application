<?php
if(isset($_GET['msg']))
{
    $msg=$_GET['msg'];
}
            $uid=$_SESSION['x'];
            $sql="SELECT * FROM userdetails WHERE uid='$uid'";
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($res);
?>
<html>
<head>
<title>Profile</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
        <div class="container">
            <div class="col-lg-12 mx-auto border border-info ">
              <h5 class="text-info text-center mt-10">Welcome To Profile </h5>
                <div class="row">
                    
                    <div class="col-lg-6 mx-auto mt-5 border border-info ">
                    <div class="row mt-4">
                        <div class="col-lg-3">
                            <label>Name:<?php echo $row['Name'];?></label>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-3">
                            <label >Mobile:<?php echo $row['Mobile'];?></label>
                        </div>
                    </div>

                    <div class="row mt-4">
                    <div class="col-lg-3">
                            <label >Email:<?php echo $row['Email'];?></label>
                        </div>
                    </div>
                                 <a href="db.php?edit=" class="btn btn-success mx-auto mt-5">Edit Profile</a>
                                <a href="login.php" class="btn btn-info mx-auto mt-5">Logout</a>
                                <a href="db.php?delete" class="btn btn-danger mx-auto mt-5">Delete Account</a>

                               
                            
                    </div>
                    
                    <div class="col-lg-6 mx-auto mt-5 border border-info  ">
                        <img src="$file" style="width:100px; border: 2px solid black; border-radius:50%" alt="photo">
                                <form action="db.php?upload" method="post" enctype="multipart/form-data">
                                    <div class="text-center hight:100px width:100px border:5px solid black">Upload Photo:
                                    <input type="file" name="photo">
                                    <input type="submit" value="Upload" name="submit">
                                </form>
                    </div> 
                
                
            </div>
        </div>

<p class="text-center bg-warning mt-10"><?php  if(isset($message)) { echo $message;}?></p>

                        <form class="form-group" action="db.php?cp=" method="post">
                            <h5 class="text-danger text-center">Change Password:</h5>
                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <label for="password">Old Password:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your old password" name="oldpassword">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <label for="password">New Password:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your password" name="newpassword">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <label for="password">Confirm Password:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your conform password" name="confirmpassword" >
                                </div>
                                
                            </div>
                            <div class="text-center">
                            <input type="submit" value="submit" class="btn btn-success mx-auto mt-5">
                            </div>
                        </form>
    
</body>
</html>
