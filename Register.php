<?php
echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous' >";
 echo "<link rel='stylesheet' type='text/css' href='style.css'>";
?>




<section id="register">
        <div class="container-sm" >
            <div class="grid text-center" style="align-items: center;">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Register</h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>
                    <span class="font-ubuntu text-black-50">I already have <a href="login.php" style="text-decoration:none">Login</a></span>
                </div>
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <img class="camera-icon" src="./image/camera-solid.svg" alt="camera">
                        </div>
                        <img src="./image/beard.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                        <small class="form-text text-black-50">Choose Image</small>
                        <input type="file" form="reg-form" class="form-control form-control-sm" name="profileUpload" id="upload-profile">
                    </div>
                </div>
                <div class="container">
                    <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form" >
                        <div class="row">
                            <div class="col">
                                <input type="text" value="" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" value="" name="LastName" id="LastName" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row" >
                            <div >
                                <div >
                                    
                                    <input type="email" value="" required name="email" id="email" class="form-control" placeholder="Email/Student ID">
                                </div>
                            </div>
                            <div >
                                <div >
                                    <input type="text" required name="Phone number" id="Phone_number" class="form-control" placeholder="Phone number">
                                </div>
                            </div> 
                        </div> 


                        <div class="row" >
                            <div class="col">
                                <div >
                                 
                                    <input type="text" required name="Department" id="Department" class="form-control" placeholder="Department">
                                    
                                </div>
                            </div>
                            <div class="col">
                                <div >
                                    <input type="text" required name="Select degree" id="Select degree" class="form-control" placeholder="Select degree">
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col">
                                <div>
                                    <input type="text" required name="date of Birth" id="date_of_Birth" class="form-control" placeholder="DOB">
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <input type="text" required name="Select Blood Group" id="Select_Blood_Group" class="form-control" placeholder="Select Blood Group">
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <input type="text" required name="Year of Graduation" id="Year_of_Graduation" class="form-control" placeholder="Year of Graduation">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div >
                                    <input type="password" required name="password" id="password" class="form-control" placeholder="password">
                                </div>
                            </div>

                            <div class="col">
                                <div>
                                     <input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password">
                                    <small id="confirm_error" class="text-danger"></small>
                                </div>
                            </div >
                            
                        </div>  

                        <div class="form-check form-check-inline" style="margin: 5px; padding-right: 40%;" >
                            <input type="checkbox" name="agreement" class="form-check-input" required > 
                            <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>
                        </div>

                        <div class="submit-btn text-center my-5" style="margin: 20px;">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
