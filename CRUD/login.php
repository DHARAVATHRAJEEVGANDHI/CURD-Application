<?php
include 'header.php';
if(isset($_GET['msg']))
{
    $msg=$_GET['msg'];
}
?>

                <div class="row">
                    <div class=" p col-lg-6 mx-auto border border-info mt-15">
                        
                        <style>
                        .p
                        {
                            background-image:url('welcome.jpg');
                            background-size:100% 100%;
                        }
                        </style>
                        <form class="form-group"  action="db.php" method="post">
                            <h5 class="text-warning text-center">Login Page</h5>
                            <p class="text-danger text-center"><?php if(!empty($msg)) echo $msg; ?></p>
                            <div class="row mt-3">
                                <div class="col-lg-3 text-white">
                                    <label for="email">Email:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" placeholder="Write Your Email" name="Email">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3 text-white">
                                    <label for="password">Password:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" placeholder="Write Your Password" name="Password">
                                </div>
                                <input type="Submit" value="Log In" class="btn btn-danger mx-auto mt-5" name="login">
                            </div>
                            
                        </form>
                    </div>

                </div>
                <h6 class="text-center">If You Dont Have An Account Click Here to<a href="singup.php"> Create</a> </h6>
           </div>
</body>
</html>
