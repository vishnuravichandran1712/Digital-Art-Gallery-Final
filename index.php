
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Art - Login & Register</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/5cb1f4d929.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="login-container">
        <img src="image\bg.jpg" alt="" class="bg">
        <div class="login-box" id="signup" style="display: none;">
            <center><img src="image\Group 1.png" width="200px" class="logo"></center>
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <div class="textbox">
                    <input type="text" name="fName" id="fName" placeholder=" " required>
                    <label for="fName">Name</label>
                    <span class="error-message" id="register-name-error"></span>
                </div>
                <div class="textbox">
                    <input type="email" name="email" id="email" placeholder=" " required>
                    <label for="email">E-mail</label>
                    <span class="error-message" id="register-password-error"></span>
                </div>
                <div class="textbox">
                    <input type="password" name="password" id="password" placeholder=" " required>
                    <label for="password">Password</label>
                    <span class="error-message" id="register-confirm-password-error"></span>
                </div>
                <div class="textbox">
                    <input type="password" name="conform-password" id="conform-password" placeholder=" " required>
                    <label for="conform-password">Confirm Password</label>
                    <span class="error-message" id="register-confirm-password-error"></span>
                </div>
                <div class="button-container">
                    <input type="submit" class="btn" onclick="checkpassword()" value="Register" name="signUp">
                </div>

                <div class="register">
                    <p>Already have an account? <a href="#" onclick="showLogin()">Login</a></p>
                </div>
            </form>
        </div>
        <!-- Login Form -->
        <div class="login-box" id="signIn">
            <center><img src="image\Group 1.png" width="200px" class="logo"></center>
            <h2>Login</h2>
            <form action="register.php" method="POST">
                <div class="textbox">
                    <input type="email" name="email" id="email" placeholder=" " required>
                    <label for="email">E-mail</label>
                    <span class="error-message" id="login-email-error"></span>
                </div>
                <div class="textbox">
                    <input type="password" name="password" id="password" placeholder=" " required>
                    <label for="password">Password</label>
                    <span class="error-message" id="login-password-error"></span>
                </div>
                <div class="button-container">
                    <input type="submit" class="btn" value="Sign In" name="signIn">
                </div>
                <div class="register">
                    <p>I don't have an account <a href="#" onclick="showRegister()">Register?</a></p>
                </div>
            </form>
        </div>

        <!-- Register Form -->
        
    </div>

    <script>
        function showRegister() {
            document.getElementById('signIn').style.display = 'none';
            document.getElementById('signup').style.display = 'block';
        }

        function showLogin() {
            document.getElementById('signup').style.display = 'none';
            document.getElementById('signIn').style.display = 'block';
        }
        function checkpassword() {
            let password = document.getElementById("password").value;
            let cnfrmpassword = document.getElementById("conform-password").value;
            if(password==""){
                alert("field cannot be empty");
            }
            else if(password != cnfrmpassword ){
                alert("password did't match");
                return false
            }
            else if(password == cnfrmpassword){
                alert("password matches")
            }
            return true

        }

    </script>
</body>

</html>

