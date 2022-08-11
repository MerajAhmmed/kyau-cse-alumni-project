<?php

 echo "<link rel='stylesheet' type='text/css' href='style.css'>";
?>


<section class="section">
    <div class="main-login-div">
        <div class="allinput">
            <div class="headerpart">
                <h1>Login</h1>
                <p>Join with us and enjoy yourself</p>
                <p>Create a new <a href="">account</a></p>
            </div>
            <div class="logo">
                <img src="./image/kyau.jpg" alt="kyau-login-img" id="logo1">
            </div>
            <div class="user-input">
                <form >
                    <div>
                        <div>
                            <input type="email"  id="email" >
                        </div>
                    </div>
                    <div>
                        <div>
                            <input type="password" id="password">
                        </div>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">Remember me
                    </div>
                    <div>
                        <button type="submit" class="submitbtn" >Login</button>
                    </div>
                    <div>
                        <p>Don't have an account <a href="./index.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


