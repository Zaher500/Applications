<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reset password</title>
</head>
<body>
    <form action="resetpassword" method="POST">
    @csrf
    <label for="email">User Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">New Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Reset Password</button>
    <button class="btn-login" onclick="window.location.href='/login'">Go to Login</button>
</form>

</body>
</html>