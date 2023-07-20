<html>
<head>
<title>Employee Application Form</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
           <div class="container-fluid bg-info">
                <div class="row">
                    <div class="col-lg-12  border border-danger">
                        <form class="form-group" action="applicationdata.php" method="post">
                            <h3 class="text-danger text-center">Employee Application Form</h3>
                            <h5 class="text-warning mt-5">Employee Details:</h5>
                            <div class="row mt-3">
                                <div class="col-lg-2">
                                    <label for="email">Name:</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" placeholder="write your Name" name="Name">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-2">
                                    <label for="email">FatherName :</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" placeholder="write your Name" name="FatherName">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-2">
                                    <label for="email">MotherName :</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" placeholder="write your Name" name="MotherName">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-2">
                                    <label for="email">Gender :</label>
                                </div>
                                <div class="col-lg-2">
                                    <input class="check-input" type="radio" value="male" name="Gender">
                                    <label class="check-label" for="exampleRadios1">male</label>
                                    <input class="check-input" type="radio" value="female" name="Gender">
                                    <label class="check-label" for="exampleRadios1">Female</label>
                                </div>
                                <div class="col-lg-1.5">
                                    <label for="email">BloodGroup :</label>
                                </div>
                                <div class="col-lg-2">
                                <select id="input" class="form-control mb-5" name="BloodGroup">
                                    <option selected>select...</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>AB</option>
                                    <option>O</option>
                                </select>
                                </div>
                
                                <div class="col-lg-1.5">
                                    <label for="email">photo Upload :</label>
                                </div>
                                <div class="col-lg-3">
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-2">
                                    <label for="email">Nationality :</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" placeholder="write your CountryName" name="Nationality">
                                </div>

                                <div class="col-lg-1">
                                    <label for="email">Religion :</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" placeholder="write your Religion" name="Religion">
                                </div>
                            </div>
                            
                                
                            
                            <div class="row mt-3">
                                <div class="col-lg-2">
                                    <label for="email">MobileNo :</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" placeholder="write your Number" name="MobileNo">
                                </div>
                            
                                    <div class="col-lg-1">
                                        <label for="email">EmailId :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" placeholder="write your email" name="EmailId">
                                    </div>
                                
                            </div>
                            
                            
                            <div class="row mt-4">
                                <div class="col-lg-2">
                                    <label for="password">Language :</label>
                                </div>
                            
                                    <div class="col-lg-2">
                                        <select id="input" class="form-control mb-5" name="Language">
                                            <option selected>select...</option>
                                            <option>Telugu</option>
                                            <option>Hindi</option>
                                            <option>English</option>
                                            <option>Gujarati</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="email">Hobby :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" placeholder="write your hobby" name="Hobby">
                                    </div>
                                    <div class="col-lg-1">
                                        <label for="email">State :</label>
                                    </div>
                                    <div class="col-lg-2">
                                        <select id="input" class="form-control mb-5" name="State">
                                            <option selected>select...</option>
                                            <option>TS</option>
                                            <option>AP</option>
                                            <option>GJ</option>
                                            <option>MP</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <h3 class="text-danger mt-5">Education Details:</h3>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label>Degree</label>
                                        <input type="text" name="Degree">
                                        
                                    </div>
                                    <div class="col-lg-2">
                                        <label>SchoolCollege</label>
                                        <input type="text" name="SchoolCollege">
                                    </div>
                                    <div class="col-lg-2">
                                        <label>YearOfPass</label>
                                        <input type="text" name="YearOfPass">
                                    </div>
                                    <div class="col-lg-2">
                                        <label>TotalMarks</label>
                                        <input type="text" name="TotalMarks">
                                    </div>
                                    <div class="col-lg-2">
                                        <label>ObtainedMarks</label>
                                        <input type="text" name="ObtainedMarks">
                                    </div>
                                    
                                </div>
                                <h3 class="text-warning mt-5">Experince:</h3>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label>CompanyName:</label>
                                        <input type="text" name="CompanyName">
                                
                                    </div>
                                    <div class="col-lg-2">
                                        <label>Designition:</label>
                                        <input type="text" name="Designition">
                                    </div>
                                    <div class="col-lg-2">
                                        <label>Duration:</label>
                                        <input type="text" name="Duration">
                                    </div>
                                    <div class="col-lg-2">
                                        <label>CTC:</label>
                                        <input type="text" name="CTC">
                                    </div>
                                    
                                
                                </div>

                               
                                <h3 class="text-danger mt-5">Declaration:</h3>
                                <div class="row form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">.I solemnly declare the information mentioned herein is true and correct to the best of my beliefs. All the details
                                    provided above are genuine to the best of my belief and knowledge. I hereby declare that the above particulars of facts
                                    and information stated are correct to the best of my belief and knowledge.
                                    
                                </div>
                                <div class="text-center">
                                                                
                                <input type="submit" value="Submit" name="user" class="btn btn-danger">
                                </div>
                            </div>
    
                        </form>
                    </div>

                </div>
           </div>
</body>
</html>
</body>
</html>