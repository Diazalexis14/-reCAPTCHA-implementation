<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login reCAPTCHA V2</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style>
    body{
        background-color:blue;

    }
    form{
        background-color:white;
        width:30%;
        margin:120px auto;
        padding:50px;
        box-shadow:10px 10px 5px rgb(105,15,190);
        border-radius:50px;
    }
</style>
<body>
    <form id="login_form">
        <h1>LogIn form</h1>
        <input id="username" type="text"name="user"  placeholder="Username"><br></br>
        <input id="password" type="password" name="pass" placeholder="Password"><br></br>
        <button type="submit">Login</button>
        <div class="g-recaptcha" data-sitekey="6Ldsv0oqAAAAALiaJUmeI3JML_G-vFLXAWbqrXLG"></div>
    </form>

    <script>
        document.getelementById('loginform').addEventListener('submit', function(event) {
            event.preventDefault();
             // Get the value of the username and password input fields
            var user = document.getelementById('username').value;
            var pass = document.getelementById('password').value;
             // Get the reCAPTCHA response
            var recaptchaResponse = grecaptcha.getResponse();
             // Check if the reCAPTCHA was completed
            if (!recaptchaResponse) {
                alert('Please complete reCAPTCHA!');
                return;
            }
             // Check if the username and password are correct
            if (user === "diaz" && pass === "diaz4705") {
                alert('Login successful');
                window.location.href = "admin.php";
            } else {
                alert("Invalid username or password");
            }

            console.log('Form submitted', { user, pass, recaptchaResponse });
        });
    </script>
</body>
</html>
