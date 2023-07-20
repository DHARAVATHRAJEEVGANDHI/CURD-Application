<?php
    $sql="SELECT * FROM userdetails WHERE uid='$uid'";
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($res);
?>
<html>
<head>
<title>Edit Profile</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
           <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto mt-15 border border-info ">
                        <form class="form-group" action="db.php?update" method="post">
                            <h5 class="text-success text-center">Edit Profile</h5>
                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <label for="email">Name:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your Name" name="Name" value="<?php echo $row['Name'];?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <label for="email">Mobile:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your Name" name="Mobile" value="<?php echo $row['Mobile'];?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <label for="email">Email:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your Email" name="Email" value="<?php echo $row['Email'];?>">
                                </div>
                                
                            </div>
                            <div class="text-center">
                            <input type="submit" value="Save" class="btn btn-danger mx-auto mt-5">
                            </div>
                        </form>
                    </div>
                        
                </div>
           </div>
</body>
</html>
