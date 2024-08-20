<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .header {
            padding: 20px;
            background-color: #000;
            color: #fff;
        }

        .header h1 {
            margin: 0;
        }

        .header p {
            margin: 5px 0 0;
        }

        .signin-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .signin-container h2 {
            margin: 0 0 20px;
        }

        .signin-container p {
            margin: 0 0 20px;
        }

        .signin-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .signin-form label {
            text-align: left;
        }

        .signin-form input {
            padding: 10px;
            border: 1px solid #000;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
        }

        .form-footer label {
            font-size: 14px;
        }

        .form-footer a {
            font-size: 14px;
            color: #000;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #000;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #333;
        }

        .social-signin {
            margin: 20px 0;
        }

        .social-signin p {
            margin: 10px 0;
        }

        .social-btn {
            padding: 10px;
            border: 1px solid #000;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            background-color: #fff;
            color: #000;
            margin: 0 5px;
        }

        .social-btn:hover {
            background-color: #000;
            color: #fff;
        }

        .social-btn.google {
            border-color: #4285F4;
        }

        .social-btn.facebook {
            border-color: #3b5998;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Community Engagement Platform</h1>
        <p>Your voice, platform, and opportunity to connect</p>
    </div>

    <div class="signin-container">
        <h2>Hi, Welcome Back!</h2>
        <p>Fill the fields to get into your account</p>

        <form class="signin-form">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <div class="form-footer">
                <label>
                    <input type="checkbox" name="remember-me"> Remember Me
                </label>
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit">Sign In</button>
            <div class="social-signin">
                <p>or sign up with</p>
                <button class="social-btn google">Google</button>
                <button class="social-btn facebook">Facebook</button>
            </div>
            <p>Don’t have an account? <a href="#">Sign Up</a></p>
        </form>
    </div>
</body>
</html>
