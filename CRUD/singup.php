<?php
if(isset($_GET['msg']))
{
    $msg=$_GET['msg'];
}
?>
<html>
<head>
<title>Singup</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
           <div class="container">
            <div class="row " >
                <div class=" p col-lg-6 mx-auto mt-10 border border-info  bg-info">
                    <style>
                        .p
                        {
                            background-image:url('sunset.jpg');
                            background-size:100% 100%;
                        }
                        </style>
                    <form class="form-group" action="db.php" method="post">
                        <h5 class="text-danger text-center my-auto">Sing Up</h5>
                              <p class="text-danger text-center"><?php if(!empty($msg)) echo $msg; ?></p>
                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <label for="email">Name:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your Name" name="Name">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <label for="email">Mobile:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your Name" name="Mobile">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <label for="email">Email:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your Email" name="Email">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for="password">Password:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" placeholder="Write Your Password" name="Password">
                                </div>
                                <input type="Submit" value="Sing Up" class="btn btn-danger mx-auto mt-5" name="singup">
                            </div>
                            
                        </form>
                    </div>
                        
                </div>
                <h6 class="text-center">If You Have An Account  Click Here To<a href="login.php">  Login</a></h6>
           </div>
</body>
</html>
</body>
</html>