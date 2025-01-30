<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5; /* Added line-height for consistent spacing */
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to top, #6a00f4, #10002b);
        }

        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            width: 350px;
            border: 2px solid white;
        }

        /* Logo Container */
        .logo-container {
            text-align: center;
            margin-bottom: 30px; /* Increased margin for better spacing */
        }

        .logo-container img {
            width: 80px;
        }

        .login-container h2 {
            color: white;
            margin-bottom: 25px; /* Increased margin for better spacing */
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 15px 0; /* Increased margin for better spacing */
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-primary {
            background: white;
            font-weight: bold;
        }

        .btn-google {
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-google img {
            width: 18px;
            margin-right: 10px;
        }

        .input-group {
            position: relative;
            margin: 20px 0; /* Increased margin for better spacing */
        }

        .input-group input {
            width: 100%;
            padding: 12px 40px 12px 15px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
        }

        .input-group img {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
        }

        .forgot-password {
            color: white;
            font-size: 14px;
            display: block;
            margin: 20px 0; /* Increased margin for better spacing */
        }

        .register-link {
            color: white;
            font-size: 14px;
            margin: 20px 0; /* Increased margin for better spacing */
        }

        .register-link a {
            color: #ffcc00;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <!-- Logo Container (At the Top) -->
        <div class="logo-container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" alt="Company Logo">
        </div>

        <h2>Login</h2>

        <!-- Email Input -->
        <div class="input-group">
            <input type="email" placeholder="Email" id="userEmail">
            <i class="bi bi-envelope"></i>
        </div>

        <!-- Password Input -->
        <div class="input-group">
            <input type="password" placeholder="Password" id="userPassword">
            <img src="https://cdn-icons-png.flaticon.com/512/3064/3064155.png" alt="Lock Icon">
        </div>

        <!-- Forgot Password Link -->
        <a href="#" class="forgot-password">Forgot password?</a>

        <!-- Login Button -->
        <button class="btn btn-primary">Login</button>

        <!-- Displaying user details -->
        <div style="color: white; margin-top: 25px;">
            
        </div>
        <p class="register-link"> <a href="/customer/createrequests/">Home</a></p>
        <!-- Register Link -->
        <p class="register-link">Don't have an account? <a href="/profession/create/">Register as a Pro</a></p>
    </div>

</body>
</html>