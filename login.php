<?php
 echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous' >";
 echo "<link rel='stylesheet' type='text/css' href='style.css'>";
?>


<section  id="login-form">
    <div class="container">
        <div class="input-section">
            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Login</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Join Our Alumni Association Enjoy Our feature</p>
                <span class="font-ubuntu text-black-50">Create a new <a href="./Register.php" style="text-decoration:none">account</a></span>

            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <img src="./image/logo-login.png" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="" method="post" enctype="multipart/form-data" id="log-form">

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" required name="email" id="email" class="form-control" placeholder="Email/StudentId">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" required name="password" id="password" class="form-control" placeholder="password">
                        </div>
                    </div>
                    <div class="input-group mb-3" id ="checkbox_login">
                        <input class="form-check-input mt-0" type="checkbox" value="checkbox" aria-label="Checkbox for following text input" >
                        <label for="checkbox" style="margin-top: -14px; padding:5%; color:aliceblue;">Remember Me</label><br>
                    </div>

                    <div class="submit-btn text-center my-5" >
                        <button type="submit" class="btn btn-warning rounded-pill text-dark px-5" style="margin-top: -25px; ">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


