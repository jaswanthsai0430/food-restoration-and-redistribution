<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>

    <div class="container">
        <div class="regform">
            <form action="myorders.php" method="post">
                <p class="logo">Donate <b style="color: #06C167;">Food</b></p>
                
                <p id="heading">Create your account</p>
                
                <!-- Username Field -->
                <div class="input">
                    <label class="textlabel" for="name">User name</label><br>
                    <input type="text" id="name" name="name" required/>
                </div>

                <!-- Email Field -->
                <div class="input">
                    <label class="textlabel" for="email">Email</label>
                    <input type="email" id="email" name="email" required/>
                </div>

                <!-- Password Field -->
                <label class="textlabel" for="password">Password</label>
                <div class="password">
                    <input type="password" name="password" id="password" required/>
                    <i class="uil uil-eye-slash showHidePw" id="showpassword"></i> 
                </div>

                <!-- Gender Field -->
                <div class="radio">
                    <input type="radio" name="gender" id="male" value="male" required/>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                </div>

                <!-- Submit Button -->
                <div class="btn">
                    <button type="submit" name="sign">Continue</button>
                </div>
                
                <!-- Sign in link -->
                <div class="signin-up">
                    <p style="font-size: 20px; text-align: center;">Already have an account? <a href="signin1.php"> Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
    
    <script src="admin/login.js"></script>
</body>
</html>
