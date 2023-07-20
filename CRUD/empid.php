<?php
            if(!empty($_POST['Empid']))
            {
            $sql="SELECT * FROM applicate WHERE id='$id'";
            $res=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($res);
            }
           
?>
<html>
<head>
<title>Employee Application Form</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
           <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-6  mx-auto bg-info border border-danger">
                        <form class="form-group" action="applicationdata.php" method="post">
                            <h3 class="text-danger text-center">Employee Id</h3>
                            <h5 class="text-warning mt-5">Employee Details:</h5>
                            <div class="row mt-3">
                                <div class="col-lg-2">
                                    <label for="email">EmpId:</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" placeholder="write your Id" name="Empid">
                                </div>
                            
                                                                
                                <input type="submit" value="Submit" name="save" class="btn btn-danger ">
                                
                            </div>
    
                        </form>

                    </div>
                    
                </div>
                <div>
                    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">FatherName</th>
      <th scope="col">MotherName</th>
      <th scope="col">Gender</th>
      <th scope="col">Nationality</th>
      <th scope="col">Religion</th>
      <th scope="col">MobileNo</th>
      <th scope="col">EmailId</th>
      <th scope="col">Language</th>
      <th scope="col">Hobby</th>
      <th scope="col">State</th>
      <th scope="col">Degree</th>
      <th scope="col">SchoolCollege</th>
      <th scope="col">YearOfPass</th>
      <th scope="col">TotalMarks</th>
      <th scope="col">ObtainedMarks</th>
      <th scope="col">CompanyName</th>
      <th scope="col">Designition</th>
      <th scope="col">Duration</th>
      <th scope="col">CTC</th>
      <th scope="col">BloodGroup</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['Name']; ?></td>
      <td><?php echo $row['FatherName']; ?></td>
      <td><?php echo $row['MotherName']; ?></td>
      <td><?php echo $row['Gender']; ?></td>
      <td><?php echo $row['Nationality']; ?></td>
      <td><?php echo $row['Religion']; ?></td>
      <td><?php echo $row['MobileNo']; ?></td>
      <td><?php echo $row['EmailId']; ?></td>
      <td><?php echo $row['Language']; ?></td>
      <td><?php echo $row['Hobby']; ?></td>
      <td><?php echo $row['State']; ?></td>
      <td><?php echo $row['Degree']; ?></td>
      <td><?php echo $row['SchoolCollege']; ?></td>
      <td><?php echo $row['YearOfPass']; ?></td>
      <td><?php echo $row['ObtainedMarks']; ?></td>
      <td><?php echo $row['CompanyName']; ?></td>
      <td><?php echo $row['Designition']; ?></td>
      <td><?php echo $row['Duration']; ?></td>
      <td><?php echo $row['CTC']; ?></td>
      <td><?php echo $row['BloodGroup']; ?></td>
    </tr>
  </tbody>
</table>


           </div>
</body>
</html>
</body>
</html>