@vite('resources/css/register.css')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign up</title>
  <link rel="stylesheet" href="register_Style.css">
</head>
<body>
  <div class="container">
    <div class="form-box">
      <h1>Sign up Page</h1>
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>

        <div class="input-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="input-group">
          <label for="phone">Phone:</label>
          <input type="text" id="phone" name="phone" placeholder="Enter your phone" required>
        </div>

        <div class="input-group">
          <label for="address">Address:</label>
          <input type="text" id="address" name="address" placeholder="Enter your address" required>
        </div>

        <div class="input-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        
        <div class="button-group">
          <input type="submit" value="Register" class="btn">
          <button type="button" class="btn green" onclick="window.location.href='/login'">Return To Login Page</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>