<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <script src="signin.js" defer></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form id="loginForm">
            <span class="title">Delivery Login</span>
            <br><br>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
                <div class="error"></div>
            </div>

            <label class="textlabel" for="password">Password</label>
            <div class="password">
                <input type="password" name="password" id="password" required />
                <i class="uil uil-eye-slash showHidePw" id="showpassword"></i>
                <div id="error-message" class="error" style="display:none;"></div>
            </div>
            <button type="submit">Login</button>
            <div class="login-signup">
                <span class="text">Not a member?
                    <a href="signup1.php" class="text login-link">Signup</a>
                </span>
            </div>
            
        </form>
    </div>

    <script>
        const form = document.getElementById('loginForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault();  // Prevent form from refreshing the page
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const errorMessage = document.getElementById('error-message');

            // Example client-side validation
            if (email === "" || password === "") {
                errorMessage.style.display = 'block';
                errorMessage.textContent = "Please fill in both fields.";
                return;
            }
            
            // Simulate login request
            if (email === "batchno.4@gmail.com" && password === "bhuvi") {
                window.location.href = "myorders.php";  // Redirect to admin page if successful
            } else {
                errorMessage.style.display = 'block';
                errorMessage.textContent = "Incorrect email or password.";
            }
        });

        // Show/hide password logic
        const showPassword = document.getElementById('showpassword');
        const passwordInput = document.getElementById('password');
        
        showPassword.addEventListener('click', () => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPassword.classList.remove('uil-eye-slash');
                showPassword.classList.add('uil-eye');
            } else {
                passwordInput.type = 'password';
                showPassword.classList.remove('uil-eye');
                showPassword.classList.add('uil-eye-slash');
            }
        });
    </script>
</body>
</html>
