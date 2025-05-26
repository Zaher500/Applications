<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }
        .message-box {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .button-group {
            margin-top: 20px;
        }
        .button-group button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
        }
        .btn-reset {
            background-color: #4CAF50;
            color: white;
        }
        .btn-login {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Password Reset Successful!</h1>
        <p>The user's password has been reset successfully.</p>
        <div class="button-group">
            <button class="btn-reset" onclick="window.location.href='resetpassword'">Back to Reset Password</button>
            <button class="btn-login" onclick="window.location.href='/login'">Go to Login</button>
        </div>
    </div>
</body>
</html>
